<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "MONEY");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Money Transfer</title>
        <style>
        table, th,tr,td{
            border: 2px solid black;
        }
        .center{
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
            
            
        }
        table{
            width: 900px;
            height: 500px;
            color: black;
            font-size: 30px;
            border-color: black;
        }
		
        th, td{
            text-align: center;
            
        }
        th{
            background-color: darkslateblue ;
            color: white;
            border: 2px solid black;

        }
        a{
            font-size:20px;
        }
        tr{
            font-size:25px;
            border: 2px solid black;    
            background-color: #f2f2f2;
            
        }
        tr:hover{
            background-color: skyblue;
        }
        
        *{
                margin: 0;
                padding: 0;
            }
            body{
                background-size: 1380px 700px;
                width: auto;
                background-color: skyblue;
                background-repeat: no-repeat;
            }
            #h1{
                font-size: 50px;
                font-weight: bold;
                text-align: center;
                color: darkslateblue;
            }
            .container{
               height: 43px;
                width: auto;
                background-color: #5c5858;
                padding-top: 18px;
                padding-right: 30px;
                padding-bottom: 3px;
                padding-left: 80px;
                display: flex;
                position: relative;
                top: 0px;
            }
            .image{
                height: 60px;
                width: 60px;
                padding: 20px 40px;
                position: relative;
                top: -35px;
                border-radius: 50% ;
            }

            .container ul{
                display: flex;
                list-style: none;
            }
            .n1{
                font-size: 20px;
                list-style: none;
                text-decoration: none;
                color: white;
                padding: 22px 22px;
                border-radius: 20px;    
            }
            .container ul li a:hover{
                background-color: grey;
                color: white;
                size: 43px;
            }
            .p1{
                font-size: large;
            }
            .btn{
                border: 2px solid black;
                border-radius: 5px;
                color: grey;
                padding: 12px 24px;
                text-align: center;
                font-size: 20px;
                margin: 4px 2px;
                cursor: pointer;
            }
            .main{
                text-align: center;
                text-decoration: none;
                margin:auto;
            }
            .center{
                text-align: center;
            }
            .footer{
                background-color: #5c5858;
                color: white;
                padding: 8px 16px;
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
            }
        
    </style>
    </head>

    <body>
        <div class="container">
        
            <img class="image" src="logo1.jpg" ALT="align-box">
        <nav>
        <ul>
        <li><a class="n1" href="index.php">HOME</a></li>
        <li><a class="n1" href="table.php">USER_LIST</a></li>
        <li><a class="n1" href="transaction.php">TRANSACTION_HISTORY</a></li>
        </ul>
        </nav>
        </div>

<h1 id="h1"><u>User List</u></h1>
<br>
<br>
    <table class="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Balance</th>
        </tr>
    </thead>
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
        <?php $sql = "SELECT id, name, email, balance FROM users";
        $result = mysqli_query($conn, $sql);?>
        <?php while( $row = mysqli_fetch_array($result)) : ?>
        
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['balance']; ?></td>
        </tr>
        <?php endwhile ?>
    </tbody>
</table>

</body>
<br>
<br>
<br>
<div class="footer">
        <marquee behaviour="scroll" direction="left">
         <p class="p1">Transfer your money safely !!!  @thesparksfoundation</p>
        </marquee>
        </div>
    
</html>