

           
			<div class="clearfix" align="center">
			<?php
			require_once('garbageDAO.php');
			$garbageDAO = new garbageDAO();
			$garbageZ = $garbageDAO->getCustomer();
			//$custemail = $customer->getEmailAddress();
			//$emailhash = password_hash($custemail);
            if($garbageZ){
                //We only want to output the table if we have employees.
                //If there are none, this code will not run.
                echo '<table border=\'1\'>';
                echo '<tr><th>Full Name</th><th>Email Address</th><th>Username</th><th>Phone Number</th></tr>';
               foreach($garbageZ as $garbage){
                    echo '<tr>';
                    echo '<td>' . $garbage->getWeekNumber() . ' ' . $garbage->getFromDate() . '</td>';
               
                    echo '</tr>';
                }
            }
            else echo "failed";
			?>
        
			</div>

			





















