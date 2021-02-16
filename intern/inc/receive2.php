
			<div>
				<div class="reg-container">
					<form method="POST">
						<br><br><br><br><br><br>
						<div>
						Verification Code Sent !! 
							<h3>Your Trnx ID:</h3>
						</div>
						<div>
							<input type="text" name="vcode" placeholder="Verification Code" required>
						</div>
						
						<input type="submit" name="submit" value="Withdraw Now" class="btn-login" >
					</form>
				</div>
			</div>
			<?php
			$vcode = rand(1000,9999);
			if($_SERVER["REQUEST_METHOD"]=="POST"){

				if($_POST[vcode]==$vcode){
				}
				else {
			    	 echo "<div class='error'>Check Verification Code!</div>";
			   	}  
		   }
		?>