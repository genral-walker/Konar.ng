<?php


	  $emails = "hello@konar.ng, ben.kc@konar.ng, cyntia.A@konar.ng";

            $to      = $emails;
		    $subject = "New Become A Merchant Request";
		    $message = '
    		    <div>
    		        <h2>New Merchant</h2>
    		        <br/>
    		        <div><h3>Merchant Details</h3></div>
    		        <ul style="font-size: 1.17em;">
        		        <li><span>Name: </span><span>'.$_POST['name'].'</span></li>
        		        <li><span>Email: </span><span>'.$_POST['email'].'</span></li>
        		        <li><span>Phone No.: </span><span>'.$_POST['phone'].'</span></li>
        		        <li><span>Business Name: </span><span>'.$_POST['b_name'].'</span></li>
        		        <li><span>Business Address: </span><span>'.$_POST['b_address'].'</span></li>
        		        <li><span>What they are into: </span><span>'.$_POST['into'].'</span></li>
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