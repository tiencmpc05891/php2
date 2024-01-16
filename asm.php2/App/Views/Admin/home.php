<!-- ====================================
  ——— CONTENT WRAPPER
  ===================================== -->
  <div class="content-wrapper">
  <div class="content">
    <!-- Thống kê hàng đầu -->
    <div class="row">
      <div class="col-xl-3 col-sm-6">
        <div class="card card-default card-mini">
          <div class="card-header">
            <h2>$18,699</h2>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Hành động</a>
                <a class="dropdown-item" href="#">Hành động khác</a>
                <a class="dropdown-item" href="#">Một cái gì đó khác ở đây</a>
              </div>
            </div>
            <div class="sub-title">
              <span class="mr-1">Doanh số bán hàng trong năm nay</span> |
              <span class="mx-1">45%</span>
              <i class="mdi mdi-arrow-up-bold text-success"></i>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-wrapper">
              <div>
                <div id="spline-area-1"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Các card thống kê khác -->
      <!-- Card 2 -->
      <div class="col-xl-3 col-sm-6">
        <div class="card card-default card-mini">
          <div class="card-header">
            <h2>$14,500</h2>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Hành động</a>
                <a class="dropdown-item" href="#">Hành động khác</a>
                <a class="dropdown-item" href="#">Một cái gì đó khác ở đây</a>
              </div>
            </div>
            <div class="sub-title">
              <span class="mr-1">Chi phí trong năm nay</span> |
              <span class="mx-1">50%</span>
              <i class="mdi mdi-arrow-down-bold text-danger"></i>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-wrapper">
              <div>
                <div id="spline-area-2"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col-xl-3 col-sm-6">
        <div class="card card-default card-mini">
          <div class="card-header">
            <h2>$4199</h2>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Hành động</a>
                <a class="dropdown-item" href="#">Hành động khác</a>
                <a class="dropdown-item" href="#">Một cái gì đó khác ở đây</a>
              </div>
            </div>
            <div class="sub-title">
              <span class="mr-1">Lợi nhuận trong năm nay</span> |
              <span class="mx-1">20%</span>
              <i class="mdi mdi-arrow-down-bold text-danger"></i>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-wrapper">
              <div>
                <div id="spline-area-3"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="col-xl-3 col-sm-6">
        <div class="card card-default card-mini">
          <div class="card-header">
            <h2>$20,199</h2>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Hành động</a>
                <a class="dropdown-item" href="#">Hành động khác</a>
                <a class="dropdown-item" href="#">Một cái gì đó khác ở đây</a>
              </div>
            </div>
            <div class="sub-title">
              <span class="mr-1">Doanh thu trong năm nay</span> |
              <span class="mx-1">35%</span>
              <i class="mdi mdi-arrow-up-bold text-success"></i>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-wrapper">
              <div>
                <div id="spline-area-4"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Phần tiếp theo của trang -->
    <div class="row">
      <div class="col-xl-8">
        <!-- Biểu đồ thu nhập và chi phí -->
        <div class="card card-default">
          <div class="card-header">
            <h2>Thu nhập và Chi phí</h2>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Hành động</a>
                <a class="dropdown-item" href="#">Hành động khác</a>
                <a class="dropdown-item" href="#">Một cái gì đó khác ở đây</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="chart-wrapper">
              <div id="mixed-chart-1"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4">
        <!-- Người dùng hiện tại -->
        <div class="card card-default">
          <div class="card-header">
            <h2>Người dùng Hiện tại</h2>
            <span>Thời gian thực</span>
          </div>
          <div class="card-body">
            <div id="barchartlg2"></div>
          </div>
          <div class="card-footer bg-white py-4">
            <a href="#" class="text-uppercase">Tổng quan Người dùng Hiện tại</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Phần tiếp theo của trang -->
    <div class="row">
      <div class="col-xl-4">
        <!-- Top Khách hàng -->
        <div class="card card-default">
          <div class="card-header">
            <h2>Top Khách hàng</h2>
          </div>
          <div class="card-body">
            <table class="table table-borderless table-thead-border">
              <thead>
                <tr>
                  <th>Tên</th>
                  <th class="text-right">Thu nhập</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-dark font-weight-bold">Gunter Reich</td>
                  <td class="text-right">$2,560</td>
                </tr>
                <tr>
                  <td class="text-dark font-weight-bold">Anke Kirsch</td>
                  <td class="text-right">$1,720</td>
                </tr>
                <tr>
                  <td class="text-dark font-weight-bold">Karolina Beer</td>
                  <td class="text-right">$1,230</td>
                </tr>
                <tr>
                  <td class="text-dark font-weight-bold">Lucia Christ</td>
                  <td class="text-right">$875</td>
                </tr>
              </tbody>
              <tfoot class="border-top">
                <tr>
                  <td><a href="#" class="text-uppercase">Xem tất cả</a></td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
      <!-- Các phần nội dung khác -->
    </div>
  </div>
</div>
