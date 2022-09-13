<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include './includes/head.php';?>
  </head>
  <!-- main body starts -->
  <body>
    <!-- navbar -->
  <?php include './includes/header.php';?>
  <?php include './includes/login.php';?>
  <!-- navbar end -->
<!-- content -->
<div class="container my-lg-5">
    <div class="row">
        <div class="col-lg-6 text-center p-lg-5">
            <img src="./assets/img/user.jpg" alt="user" class="img-fluid rounded-4 shadow">
        </div>
        <div class="col-lg-6 text-center">
<main class="form-signin w-100 m-auto"><img class="mb-4" src="./assets/svg/icons8_typewriter_with_paper.svg" alt="" width="auto" height="100px">
	<ul class="nav nav-tabs" id="myTab" role="tablist">
		<li class="nav-item" role="presentation">
		  <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login-tab-pane" type="button" role="tab" aria-controls="login-tab-pane" aria-selected="true">Login</button>
		</li>
		<li class="nav-item" role="presentation">
		  <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register-tab-pane" type="button" role="tab" aria-controls="register-tab-pane" aria-selected="false">Register</button>
		</li>
	  </ul>
	  <div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="login-tab-pane" role="tabpanel" aria-labelledby="login-tab" tabindex="0">

		<h1 class="h4 mb-3 fw-normal">Login</h1>
		<p class="lead" >Please fill in your credentials to login.</p>
		<?php
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
        </form>

		</div>
		<!-- Signup -->
		<div class="tab-pane fade" id="register-tab-pane" role="tabpanel" aria-labelledby="register-tab" tabindex="0">
		<h1 class="h4 mb-3 fw-normal">Signup</h1>
		<p class="lead" >Please fill this form to create an account.</p>
		</div>
		<p class="mt-5 mb-3 text-muted">&copy; 2022</p>
	  </div>
</main>
</div>
</div>
</div>

	<!-- content end -->
  <!-- footer -->
  <?php include './includes/footer.php';?>
  <!-- footer end -->
  </body>
</html>
