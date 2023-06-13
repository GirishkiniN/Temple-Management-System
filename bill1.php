<html>

	<head>
	<title>Simple invoice in PHP</title>
		<style type="text/css">
		body {		
			font-family: Verdana;
		}
		
		div.invoice {
		border:1px solid #ccc;
		padding:10px;
		height:500pt;
		width:570pt;
        margin: 0 auto;
		}

		/* div.company-address {
			border:1px solid #ccc;
			float:left;
			width:200pt; 
		} */

        div.customer-address {
			border:1px solid #ccc;
			float:left;
			width:200pt; 
            margin-top:50px;
            margin-bottom:50px;
		}
		
		div.invoice-details {
			border:1px solid #ccc;
			float:right;
			width:200pt;
            margin-top:50px;
		}

        .temple-photo {
			width:300px;
            height:160px;
            margin-left:230px;
            margin-bottom:30px;
			/* margin-top:50px; */
		}
		
		/* div.customer-address {
			border:1px solid #ccc;
			float:right;
			margin-bottom:50px;
			margin-top:100px;
			width:200pt;
		} */
		
		div.clear-fix {
			clear:both;
			float:none;
		}
		
		table {
			width:100%;
		}
		
		th {
			text-align: left;
		}
		
		td {
		}
		
		.text-left {
			text-align:left;
		}
		
		.text-center {
			text-align:center;
		}
		
		.text-right {
			text-align:right;
		}
		
		</style>
        <script language="javascript" type="text/javascript">
            window.history.forward();
        </script>
	</head>

	<body>
    
        
	<div class="invoice">

        <div>
        <?php
            // session_start();
            // session_destroy();
            // $_SESSION = array();
            // header("location: sevabill.php");
            $templeName=$_POST['tname'];

            if ($templeName == "kalikamba temple") {
                echo '<img class="temple-photo" src="images/Kalikamba.jpg"/>';
              } 
              else if ($templeName == "venkatramana temple") {
                echo '<img class="temple-photo" src="images/SVTMangalore.jpg"/>';
              }
              else if ($templeName == "laxmi janardhana temple") {
                echo '<img class="temple-photo" src="images/LaxmiJanardhanaTemple.jpg';
                
              }
              else if ($templeName == "halemariyammatemple") {
                echo '<img class="temple-photo" src="images/KapuMariammaTemple.jpg"/>';
              }

        ?>
        </div>

		<div class="company-address">
        <?php
            $templeName=$_POST['tname'];
            //echo("<h3><center>$templeName</h3></center>"); 

            if ($templeName == "kalikamba temple") {
                echo("<b><center>Kalikamba Temple</b></center>"); 
                echo "<center>Car Street, Bhavathi, Bunder,";
                echo"<br>";
                echo "Mangaluru, Karnataka 575001</center>";
              } 
              else if ($templeName == "venkatramana temple") {
                echo("<b><center>Venkatramana Temple</b></center>"); 
                echo "<center>Car Street, Hampankatta,";
                echo"<br>";
                echo "Mangaluru, Karnataka 575001</center>";
              }
              else if ($templeName == "laxmi janardhana temple") {
                echo("<b><center>Laxmi Janardhana Temple</b></center>"); 
                echo "<center>6PHX+JRJ, Kaup Main Rd, Uliyargoli,";
                echo"<br>";
                echo "Kaup, Karnataka 574106</center>";
              }
              else if ($templeName == "halemariyammatemple") {
                echo("<b><center>Sri Hale Mariamma Temple</b></center>"); 
                echo "<center>Kaup, Edapally - Panvel Hwy,";
                echo"<br>";
                echo "Koppalangadi, Karnataka 574106</center>";
              }
        ?>  
			<!-- <br />
			489 Road Street
			<br />
			London, AF3Z 7BP
			<br /> -->
        
		</div>
	
		<div class="invoice-details">
			<!-- Invoice N°: 564 -->
            <?php
                $conn=mysqli_connect("localhost","root","","templedb");
                // $query = "SELECT * FROM 'billcount' WHERE 1";
                $query = "SELECT bcount FROM billcount";
                $result = mysqli_query($conn,$query);
                if ($result === FALSE) {
                    die(mysqli_error($conn));
                }
                $data = mysqli_fetch_assoc($result);
                if($data)
                    echo("<b>Invoice No : " . $data['bcount'] . "</b>"); 
                else
                    echo 'Not Found!';
            ?>
			<br />
			Date: <?php echo date("d/m/Y"); ?>
		</div>
		
		<div class="customer-address">
			<b>Name : </b>
			<?php
                $devoteeName=$_POST['dname'];
                echo("&nbsp;$devoteeName"); 
            ?>
            </br>
            <b>Address : </b>
            <br/>
            <b>Phone No. : </b>
		</div>
    
		
		<div class="clear-fix"></div>
			<table border='1' cellspacing='0'>
				<tr>
					<th width=250>Seva Name</th>
					<th width=80>Quantity</th>
					<th width=100>Unit price</th>
					<th width=100>Total price</th>
				</tr>

			<?php
                require('db.php');
                $seva=$_POST['prd'];
                $res="select rate from sevasavailable where templename = '$_POST[tname]' and sevaname='$seva'";
                $res=mysqli_query($con,$res);
                while(($row = mysqli_fetch_assoc($res)))
                {
                    $rate = $row['rate'];
                }   
                $total = 0;
                $vat = 21;
                $quantity=$_POST['qty'];
                


                // $articles = array(
                // 			array($seva),
                // 			array($quantity),
                // 			array(65)
                // );

                $articles = array(
                    array($seva),
                    array($quantity),
                    array($rate)
                );

                // for($a=0;$a<5;$a++) {
                // 		$description = $articles[0][$a];
                // 		$amount = $articles[1][$a];
                // 		$unit_price = number_format( $articles[2][$a], 2);
                // 		$total_price = number_format( $amount * $unit_price, 2);
                // 		$total += $total_price;
                // 		echo("<tr>");
                // 		echo("<td>$description</td>");
                // 		echo("<td class='text-center'>$amount</td>");
                // 		echo("<td class='text-right'>€$unit_price</td>");
                // 		echo("<td class='text-right'>€$total_price</td>");
                // 		echo("</tr>");
                // }

            
                $description = $articles[0][0];
                $amount = $articles[1][0];
                $unit_price = number_format( $articles[2][0]);
                $total_price = number_format( $amount * $unit_price,2);
                $total += floatval(preg_replace('/[^\d.]/', '', $total_price));
                echo("<tr>");
                echo("<td>$description</td>");
                echo("<td class='text-center'>$amount</td>");
                echo("<td class='text-right'>₹$unit_price</td>");
                echo("<td class='text-right'>₹$total_price</td>");
                echo("</tr>");
			
			echo("<tr>");
			echo("<td colspan='3' class='text-right'>Sub total</td>");
			echo("<td class='text-right'>₹" . number_format($total,2) . "</td>");
			echo("</tr>");
			echo("<tr>");
			echo("<td colspan='3' class='text-right'>VAT</td>");
			echo("<td class='text-right'>₹" . number_format(($total*$vat)/100,2) . "</td>");
			echo("</tr>");
			echo("<tr>");
			echo("<td colspan='3' class='text-right'><b>TOTAL</b></td>");
			echo("<td class='text-right'><b>₹" . number_format(((($total*$vat)/100)+$total),2) . "</b></td>");
			echo("</tr>");
			?>
			</table>
		</div>
	</body>

</html>