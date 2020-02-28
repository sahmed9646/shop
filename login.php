<?php include 'inc/header.php';?>

<?php 
	$login = Session::get("cmrlogin");
	if ($login == true) {
		header("Location: order.php");
	}
?>
<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
		$customerLog = $cmr->coustomerLogin($_POST);
	}
?>
 <div class="main">
    <div class="content">
    	 <div class="login_panel">
    	 	<?php 
    			if (isset($customerLog)) {
    				echo $customerLog;
    			}
    		?>

        	<h3>Existing Customers</h3>
        	<p>Sign in with the form below.</p>
        	<form action="" method="post">
                	<input  type="text" name="email" placeholser="Email" />
                    <input type="password" name="pass" placeholder="Password" />
              
                 
                    <div class="buttons"><div><button class="grey" name="login">Sign In</button></div></div>
                    </div>
    	   </form>
<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
		$customerReg = $cmr->coustomerRegistration($_POST);
	}
?>
    	<div class="register_account">
    		<?php 
    			if (isset($customerReg)) {
    				echo $customerReg;
    			}
    		?>
    		<h3>Register New Account</h3>
    		<form action="" method="post">
		   			 <table>
		   				<tbody>
						<tr>
						<td>
							<div>
							<input type="text" name="name" placeholder="Name" />
							</div>
							
							<div>
							   <input type="text" name="city" placeholder="City" />
							</div>
							
							<div>
								<input type="text" name="zip" placeholder="Zip code" />
							</div>
							<div>
								<input type="text" name="email" placeholder="Email" />
							</div>
		    			 </td>
		    			<td>
						<div>
							<input type="text" name="address" placeholder="Adress" />
						</div>
		    		<div>
						<input type="text" name="country" placeholder="Country" />
				 </div>		        
	
		           <div>
		          <input type="text" name="phone" placeholder="Phone" />
		          </div>
				  
				  <div>
					<input type="text" name="pass" placeholder="Password" />
				</div>
		    	</td>
		    </tr> 
		    </tbody></table> 
		   <div class="search"><div><button class="grey" name="register">Create Account</button></div></div>
		    
		    <div class="clear"></div>
		    </form>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
<?php include 'inc/footer.php';?>