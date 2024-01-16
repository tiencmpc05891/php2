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

              <h4 class="text-dark mb-6 text-center">Đăng Ký</h4>
              <form action="index.php?act=signup" method="post">
                <div class="row">
                  <div class="form-group col-md-12 mb-4">

                    <input class="form-control input-lg" type="text" id="username" required maxlength="255"
                      value="<?= isset($_SESSION['input_values']['user']) ? htmlspecialchars($_SESSION['input_values']['user']) : '' ?>"
                      name="user" placeholder="Nhập tài khoản">

                  </div>
                  <div class="form-group col-md-12 mb-4">

                    <input class="form-control input-lg" type="password" id="password" name="pass" maxlength="255"
                      placeholder="Nhập mật khẩu..." />

                  </div>
                  <div class="form-group col-md-12 mb-4">

                    <input class="form-control input-lg" type="text" id="email" maxlength="255"
                      value="<?= isset($_SESSION['input_values']['email']) ? htmlspecialchars($_SESSION['input_values']['email']) : '' ?>"
                      name="email" placeholder="Nhập email..">

                  </div>
                  <div class="col-md-12">
                    <div class="d-flex justify-content-between mb-3">

                      <div class="custom-control custom-checkbox mr-3 mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                        <label class="custom-control-label" for="customCheck2">Tôi đồng ý các điều khoản và điều
                          kiện.</label>
                      </div>

                    </div>

                    <h4 style="color:red">
                      <?php
                      if (isset($_SESSION['tb_dangky']) && ($_SESSION['tb_dangky'] != "")) {
                        echo $_SESSION['tb_dangky'];
                        unset($_SESSION['tb_dangky']);

                      }

                      ?>
                    </h4>
                    <input class="btn btn-primary btn-pill mb-4" type="submit" name="dangky" class="form-submit"
                      value="Đăng ký" />

                    <p>Bạn đã có tài khoản xin mời?
                      <a class="text-blue" href="index.php?act=dangnhap">Đăng nhập</a>
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