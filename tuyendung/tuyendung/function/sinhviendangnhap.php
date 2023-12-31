
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng nhập Admin</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body >
<section class="vh-100" style="background-color:sandybrown;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
		  <form action="../function/xulydangnhap.php" method="POST">
            <h3 class="mb-5">Sinh Viên Đăng Nhập</h3>

            <div class="form-outline mb-4">
              <input type="text" name="email" id="typeEmailX-2" class="form-control form-control-lg" placeholder="Email" />
            </div>

            <div class="form-outline mb-4">
              <input type="password" name="password" id="typePasswordX-2" class="form-control form-control-lg" placeholder="Password" />
            </div>

            
            <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"> Remember password </label>
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit" name="btn-login">Login</button>
            </form>
                  
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
	
</body>
</html> 





