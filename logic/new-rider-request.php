<?php


	  $emails = "hello@konar.ng, ben.kc@konar.ng";

            $to      = $emails;
		    $subject = "New Become A Rider Request";
		    $message = '
    		    <div>
    		        <h2>Rider Details</h2>
    		        <br/>
    		        <div><h3>Customer Details</h3></div>
    		        <ul style="font-size: 1.17em;">
        		        <li><span>Name: </span><span>'.$_POST['name'].'</span></li>
        		        <li><span>Email: </span><span>'.$_POST['email'].'</span></li>
        		        <li><span>Phone No.: </span><span>'.$_POST['phone'].'</span></li>
        		        <li><span>Location: </span><span>'.$_POST['location'].'</span></li>
        		        <li><span>i am: </span><span>'.$_POST['i_am'].'</span></li>
        		        <li><span>How many bikes do you have?: </span><span>'.$_POST['bike_count'].'</span></li>
        		        <li><span>Bike Details: </span><span>'.$_POST['bike_details'].'</span></li>
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