<?php
    session_start();
    $connect = mysqli_connect("localhost", "root", "", "MONEY");
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Transfer Money</title>
		<style>
		 .containers{
                text-align: center;
                text-decoration: none;
                margin:auto;
            }
		#Sender_name{
			font-size: 25px;
			border: 2px solid black;
			border-radius: 5px;
		}
		#Receiver_name{
			font-size: 25px;
			border: 2px solid black;
			border-radius: 5px;
		}
		#amount{
			font-size: 25px;
			border: 2px solid black;
			border-radius: 5px;
		}
		label{
			font-size: 20px;
		}
		.click{
                border: 2px solid black;
                border-radius: 5px;
                color: grey;
                padding: 12px 24px;
                text-align: center;
                font-size: 15px;
                margin: 4px 2px;
                cursor: pointer;
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
			.main{
				text-align: center;
				text-decoration: none;
				margin: auto;
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
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

<div class="containers">
		<form action="transfer.php" method="post">
			<label><b>SENDER:</b></label>
			<input list="names" id="Sender_name" type="text" name="sender_name", placeholder="Enter your name" required>
			<datalist id="names">
				<option value="Harshika Parmar"></option>
				<option value="Hitali Yadav"></option>
				<option value="Bhavna Makwana"></option>
				<option value="Kiran Bohra"></option>
				<option value="Maira Parmar"></option>
				<option value="Niyati Malik"></option>
				<option value="Preeti Naik"></option>
				<option value="Kaushik Sawant"></option>
				<option value="Lakshmi Poojara"></option>
				<option value="Kanubhai Mishra"></option>				
			</datalist>
		<br>
		<br>
		<br>
			<label><b>RECIEVER:</b></label>
			<input list="namess" type="text" id="Receiver_name" name="receiver_name" placeholder="Enter your name"  required>
			<datalist id="namess">
			<option value="Harshika Parmar"></option>
				<option value="Hitali Yadav"></option>
				<option value="Bhavna Makwana"></option>
				<option value="Kiran Bohra"></option>
				<option value="Maira Parmar"></option>
				<option value="Niyati Malik"></option>
				<option value="Preeti Naik"></option>
				<option value="Kaushik Sawant"></option>
				<option value="Lakshmi Poojara"></option>
				<option value="Kanubhai Mishra"></option>

			</datalist>
		<br>
		<br>
		<br>
			<label><b>AMOUNT: </b></label>
			<input type="number" id="amount" name="amount" placeholder="Enter amount here" required>
		</div>
		<br>
		<br>
		<div class="main">
			<input class="click" type="submit" name="" value="Send Money">
		</div>
		</form>
	
<!-- 	</div>
	<script type="text/javascript" src="alert.js"></script>
	<div class="press">
		<button >Send Amount</button>
	</div> -->
	
</body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="footer">
        <marquee behaviour="scroll" direction="left">
         <p class="p1">Transfer your money safely !!!  @thesparksfoundation</p>
        </marquee>
        </div>
    
</html>