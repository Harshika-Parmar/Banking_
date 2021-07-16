<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Successful</title>
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
    <h1 id="h1">User does not exist...</h1>

    </body>
        
    <div class="footer">
        <marquee behaviour="scroll" direction="left">
         <p class="p1">Transfer your money safely !!!  @thesparksfoundation</p>
        </marquee>
        </div>
    
</html>