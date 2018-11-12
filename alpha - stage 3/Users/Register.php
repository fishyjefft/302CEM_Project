<?php 
	$Header="E-Valley Register";
	require ("../Base/header2.php"); 
?>


<!-- <img src="Login3/images/login-bg.jpg" alt=""> -->
        <section class="signup">
            
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="../Engine/evalleysignup.php">
                        <h2 class="form-title">Create E-valley account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="username" id="username" placeholder="Username"/>
                        </div>
						 <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password"/>
                        </div>			                    
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
						<div class="form-group">
                            <input type="text" class="form-input" name="address" id="address" placeholder="Address"/>
                        </div>
						<div class="form-group">
                            <input type="number" class="form-input" name="identificationno" id="identificationno" placeholder="Identification no"/>
                        </div>
						<div class="form-group">
                            <input type="number" class="form-input" name="phoneno" id="phoneno" placeholder="Phone no"/>
                        </div>
                        
                        
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="Login.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

<?php require ("../Base/footer2-Register.php"); ?>