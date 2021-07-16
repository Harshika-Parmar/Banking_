<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Basic Banking System</title>
        <style>
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
                font-size: 90px;
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

<?php include 'connection.php' ?>
	
	<?php 
	$sender_name = $_POST["Sender_name"];
	$receiver_name = $_POST["Receiver_name"];
	$amount = $_POST["amount"];
	

	 $sql5="SELECT name, balance FROM users WHERE name='$sender_name'";
	$result5=mysqli_query($conn, $sql5); 
	$row=mysqli_fetch_array($result5) ;
	$money= $row['balance'];

	
	
	?>



	<?php $sql3 = "SELECT name,id  FROM users WHERE name='$receiver_name' ";
	$result3 = mysqli_query($conn, $sql3); 
	
	if (mysqli_fetch_assoc($result3)<1){ 
	 	include 'user.php';
	 } 
	elseif ($money<$amount) {
	 	include 'user2.php';
	 	
	 }

	else{
	 	$sql4 = "UPDATE users SET balance=balance-$amount WHERE Name='$sender_name'";
		$sql2= "UPDATE users SET balance=balance+$amount WHERE Name='$receiver_name' ";
 		$result2 = mysqli_query($conn, $sql2); 
 		$result3 = mysqli_query($conn, $sql4);
 		$sql = "INSERT INTO trans VALUES ('$sender_name', '$receiver_name',  '$amount')";
		$result = mysqli_query($conn, $sql); 
		$sql7 = "INSERT INTO trans( `sender`, `receiver`, `amount`) VALUES ('$sender_name','$receiver_name','$amount')";
        $query = mysqli_query($conn, $sql7);
 		include 'user1.php';
 		

 	}



	?>
	


</body>
<div class="footer">
        <marquee behaviour="scroll" direction="left">
         <p class="p1">Transfer your money safely !!!  @thesparksfoundation</p>
        </marquee>
        </div>
    


</html>