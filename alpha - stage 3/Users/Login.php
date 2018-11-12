<?php 
	$Header="E-Valley Login";
	require ("../Base/header2.php"); 
	
	if($Sess_Status !== NULL && $Sess_Status == 1){
		echo "<script>window.open('../', '_self')</script>";
	}
?>
<script src="../Js/UserLogin_Reqs.js"></script>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/login-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content" style="margin-top: 50px;">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">E-Valley Login</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="username" id="username" placeholder="Username"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password"/>
                        </div>
						 <div class="form-group">
                            <input type="button" name="login" id="login" class="form-submit" onclick="List_SendRequest();" value="login"/>
                        </div>
                    </form>
					<p class="registerhere">
                        Dont have account ? <a href="Register.php" class="registerhere-link">Register here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

<?php require ("../Base/footer2-Login.php"); ?>