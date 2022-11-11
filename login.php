<?php
	include "assets/css.php";
	include "assets/js.php";
	session_start();
?>

<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
  <style>
    .background-radial-gradient {
      background-color: hsl(218, 41%, 15%);
      height: 741px;
    }

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }

    .tengah{
    	margin-left: 320px;
    	margin-top: 40px;
    }
  </style>
<?php 
    if(isset($_SESSION['gagal_login'])){
?>
    	<script>
			Swal.fire(
			  '<?= $_SESSION['gagal_login'] ?>',
			  '',
			  'warning'
			)
		</script>
<?php 
    session_destroy();
    }
?>
<?php 
    if(isset($_SESSION['gagal'])){
?>
    	<script>
			Swal.fire(
			  '<?= $_SESSION['gagal'] ?>',
			  '',
			  'warning'
			)
		</script>
<?php 
    session_destroy();
    }
?>

<div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0 position-relative tengah">

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form action="controller/proses_login.php" method="POST">
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
              <!-- Email input -->
              <div class="form-outline mb-4">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" />
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" />
              </div>

              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                <label class="form-check-label" for="form2Example33">
                  Remember Me
                </label>
              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">
                Log In
              </button>

              <!-- Register buttons -->
              <div class="text-center">
                <p>Tidak memiliki akun ?. <a href="#">Register</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->