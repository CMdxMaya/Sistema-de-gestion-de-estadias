<!DOCTYPE html>
<html lang="en">
<head>
  <title>Empezar</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href= "<?php echo e(asset('style_login/images/icons/favicon.ico')); ?>"/>

<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('style_login/vendor/bootstrap/css/bootstrap.min.css')); ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('style_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')); ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('style_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')); ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('style_login/vendor/animate/animate.css')); ?>">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('style_login/vendor/css-hamburgers/hamburgers.min.css')); ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('style_login/vendor/animsition/css/animsition.min.css')); ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('style_login/vendor/select2/select2.min.css')); ?>">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('style_login/vendor/daterangepicker/daterangepicker.css')); ?>">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('style_login/css/util.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('style_login/css/main.css')); ?>">
<!--===============================================================================================-->
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100" style="background-image: url('style_login/images/comida.jpg');">
      <div class="wrap-login100 p-t-30 p-b-50">
        <span class="login100-form-title p-b-41">
          Inicio de Sesion
        </span>
        <form  action ="<?php echo e(route('valida')); ?>" method = 'POST' class="login100-form validate-form p-b-33 p-t-5">

          <?php echo e(csrf_field()); ?>




          <div class="wrap-input100 validate-input" data-validate = "Enter username">

<?php if($errors->first('login')): ?> 
<i> <?php echo e($errors->first('login')); ?> </i> 
<?php endif; ?>  <br>
            <input class="input100" type="text" name="login" placeholder="Usuario">
            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
          </div>



          <div class="wrap-input100 validate-input" data-validate="Enter password">

          <?php if($errors->first('password')): ?> 
<i> <?php echo e($errors->first('password')); ?> </i> 
<?php endif; ?>  <br>
            <input class="input100" type="password" name="password" placeholder="Contraseña">
            <span class="focus-input100" data-placeholder="&#xe80f;"></span>
          </div>

          <div class="container-login100-form-btn m-t-32">
<input  type = 'submit' class="btn float-right login_btn" value = 'Iniciar '>             

            <?php if(Session::has('error')): ?>
    <div><?php echo e(Session::get('error')); ?></div>
<script>
    alert("<?php echo e(Session::get('error')); ?>");
</script>
<?php endif; ?>
          </div>

        </form>
      </div>
    </div>
  </div>
  

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="<?php echo e(asset('style_login/vendor/jquery/jquery-3.2.1.min.js')); ?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo e(asset('style_login/vendor/animsition/js/animsition.min.js')); ?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo e(asset('style_login/vendor/bootstrap/js/popper.js')); ?>"></script>
  <script src="<?php echo e(asset('style_login/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo e(asset('style_login/vendor/select2/select2.min.js')); ?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo e(asset('style_login/vendor/daterangepicker/moment.min.js')); ?>"></script>
  <script src="<?php echo e(asset('style_login/vendor/daterangepicker/daterangepicker.js')); ?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo e(asset('style_login/vendor/countdowntime/countdowntime.js')); ?>"></script>
<!--===============================================================================================-->
  <script src="<?php echo e(asset('style_login/js/main.js')); ?>"></script>

</body>
</html>