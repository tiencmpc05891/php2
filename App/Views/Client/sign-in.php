<!DOCTYPE html>
<html lang="en">

<head>

  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Mono - Responsive Admin & Dashboard Template</title>

  </head>

</head>

<body class="bg-light-gray" id="body">
  <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
    <div class="d-flex flex-column justify-content-between">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10">
          <div class="card card-default mb-0">
            <div class="card-header pb-0">
              <div class="app-brand w-100 d-flex justify-content-center border-bottom-0">
                <a class="w-auto pl-0" href="index.php">
                  <img style="height: 50px; width: 50px;" src="./images/logoasm1-removebg-preview.png" alt="">

                </a>
              </div>
            </div>
            <div class="card-body px-5 pb-5 pt-0">

              <h4 class="text-dark mb-6 text-center">Đăng Nhập</h4>

              <form action="index.php?act=signin" method="post">
                <div class="row">
                  <div class="form-group col-md-12 mb-4">

                    <input type="text" class="form-control input-lg" id="username" name="user"
                      placeholder="Nhập tài khoản" />

                  </div>
                  <div class="form-group col-md-12 mb-4 ">

                    <input type="password" class="form-control input-lg" id="password" name="pass"
                      placeholder="Nhập mật khẩu..." />

                  </div>
                  <div class="col-md-12">

                    <div class="d-flex justify-content-between mb-3">

                      <div class="custom-control custom-checkbox mr-3 mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                        <label class="custom-control-label" for="customCheck2">Lưu thông tin</label>
                      </div>

                      <a class="text-color" href="#">Quên mật khẩu? </a>

                    </div>
                    <h4 style="color:red ;font-size:12px;">
                      <?php
                      if (isset($_SESSION['tb_dangnhap']) && ($_SESSION['tb_dangnhap'] != "")) {
                        echo $_SESSION['tb_dangnhap'];
                        unset($_SESSION['tb_dangnhap']);
                      }

                      ?>
                    </h4>
                    <input type="submit" name="dangnhap" class="btn btn-primary btn-pill mb-4" value="Đăng nhập" />

                    <p>Chưa có tài khoản ?
                      <a class="text-blue" href="index.php?act=dangky">Đăng ký</a>
                    </p>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>