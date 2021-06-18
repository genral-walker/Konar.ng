<?php


	  $emails = "hello@konar.ng, ben.kc@konar.ng";


            $to      = $emails;
		    $subject = "URGENT New Pickup Request";
		    $message = '
    		    <div>
    		        <h2>Request Delivery</h2>
    		        <br/>
    		        <div><h3>Customer Details</h3></div>
    		        <ul style="font-size: 1.17em;">
        		        <li><span>Name: </span><span>'.$_POST['name'].'</span></li>
        		        <li><span>Email: </span><span>'.$_POST['email'].'</span></li>
        		        <li><span>Phone No.: </span><span>'.$_POST['phone'].'</span></li>
    		        </ul>
    		        <div><h3>Order Details</h3></div>
    		        <ul style="font-size: 1.17em;">
        		        <li><span>Pick-up Date: </span><span>'.$_POST['date'].'</span></li>
        		        <li><span>Pick-up Address: </span><span>'.$_POST['pick-address'].'</span></li>
        		        <li><span>Delivery Address: </span><span>'.$_POST['deliver-address'].'</span></li>
        		        <li><span>Item Description: </span><span>'.$_POST['description'].'</span></li>
    		        </ul>
		        </div>
		    ';

		    $headers =  'MIME-Version: 1.0' . "\r\n"; 
		    $headers .= 'From: Konar Mailing System <no-reply@konar.ng>' . "\r\n";
		    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

		        if (mail($to, $subject, $message, $headers)) {
		        	echo "successful";
		        } else {
		        	echo "error";
		        }



		        

	
?>