
<!-- Bảng Sản phẩm -->
<div class="row">
  <div class="col-12">
    <div class="card card-default">
      <div class="card-header">
        <h2>Danh sách Tài Khoản</h2>
        <div class="dropdown">
          <button class="btn btn-primary" id="addProductBtn">Thêm Tài Khoản</button>
        </div>
      </div>
      <div class="card-body">
        <table id="productsTable" class="table table-hover table-product" style="width:100%">
          <thead>
            <tr>
         
              <th>Mã Khách Hàng</th>
              <th>Tên</th>
              <th>Địa Chỉ</th>
              <th>Email</th>
              <th>Số Điện Thoại</th>
              <th>Role</th>
              <th>Username</th>
              <th>Password</th>
              <th>Thao Tác</th>
             
            </tr>
          </thead>
          <tbody>

            <tr>
              <td>12345</td>
              <td>Nguyễn Văn A</td>
              <td>Hà Nội</td>
              <td>nguyenvana@gmail.com</td>
              <td>0123456789</td>
              <td>User</td>
              <td>nguyenvana</td>
              <td>********</td>
              <!-- Thao tác -->
              <td>
                <div class="action-icons">
                  <a href="#" class="edit-icon" title="Chỉnh sửa"><i class="mdi mdi-package"></i></i></a>
                  <a href="#" class="delete-icon" title="Xóa"><i class="fas fa-trash"></i></a>
                </div>
              </td>
            </tr>

            <tr>
              <td>12345</td>
              <td>Nguyễn Văn A</td>
              <td>Hà Nội</td>
              <td>nguyenvana@gmail.com</td>
              <td>0123456789</td>
              <td>User</td>
              <td>nguyenvana</td>
              <td>********</td>
              <!-- Thao tác -->
              <td>
                <div class="action-icons">
                  <a href="#" class="edit-icon" title="Chỉnh sửa"><i class="mdi mdi-package"></i></i></a>
                  <a href="#" class="delete-icon" title="Xóa"><i class="fas fa-trash"></i></a>
                </div>
              </td>
            </tr>
            <tr>
              <td>12345</td>
              <td>Nguyễn Văn A</td>
              <td>Hà Nội</td>
              <td>nguyenvana@gmail.com</td>
              <td>0123456789</td>
              <td>User</td>
              <td>nguyenvana</td>
              <td>********</td>
              <!-- Thao tác -->
              <td>
                <div class="action-icons">
                  <a href="#" class="edit-icon" title="Chỉnh sửa"><i class="mdi mdi-package"></i></i></a>
                  <a href="#" class="delete-icon" title="Xóa"><i class="fas fa-trash"></i></a>
                </div>
              </td>
            </tr>
            <tr>
              <td>12345</td>
              <td>Nguyễn Văn A</td>
              <td>Hà Nội</td>
              <td>nguyenvana@gmail.com</td>
              <td>0123456789</td>
              <td>User</td>
              <td>nguyenvana</td>
              <td>********</td>
              <!-- Thao tác -->
              <td>
                <div class="action-icons">
                  <a href="#" class="edit-icon" title="Chỉnh sửa"><i class="mdi mdi-package"></i></i></a>
                  <a href="#" class="delete-icon" title="Xóa"><i class="fas fa-trash"></i></a>
                </div>
              </td>
            </tr>
            <tr>
              <td>12345</td>
              <td>Nguyễn Văn A</td>
              <td>Hà Nội</td>
              <td>nguyenvana@gmail.com</td>
              <td>0123456789</td>
              <td>User</td>
              <td>nguyenvana</td>
              <td>********</td>
              <!-- Thao tác -->
              <td>
                <div class="action-icons">
                  <a href="#" class="edit-icon" title="Chỉnh sửa"><i class="mdi mdi-package"></i></i></a>
                  <a href="#" class="delete-icon" title="Xóa"><i class="fas fa-trash"></i></a>
                </div>
              </td>
            </tr>
            <tr>
              <td>12345</td>
              <td>Nguyễn Văn A</td>
              <td>Hà Nội</td>
              <td>nguyenvana@gmail.com</td>
              <td>0123456789</td>
              <td>User</td>
              <td>nguyenvana</td>
              <td>********</td>
              <!-- Thao tác -->
              <td>
                <div class="action-icons">
                  <a href="#" class="edit-icon" title="Chỉnh sửa"><i class="mdi mdi-package"></i></i></a>
                  <a href="#" class="delete-icon" title="Xóa"><i class="fas fa-trash"></i></a>
                </div>
              </td>
            </tr>
            <tr>
              <td>12345</td>
              <td>Nguyễn Văn A</td>
              <td>Hà Nội</td>
              <td>nguyenvana@gmail.com</td>
              <td>0123456789</td>
              <td>User</td>
              <td>nguyenvana</td>
              <td>********</td>
              <!-- Thao tác -->
              <td>
                <div class="action-icons">
                  <a href="#" class="edit-icon" title="Chỉnh sửa"><i class="mdi mdi-package"></i></i></a>
                  <a href="#" class="delete-icon" title="Xóa"><i class="fas fa-trash"></i></a>
                </div>
              </td>
            </tr>

            <!-- Thêm các dòng tài khoản khác tương tự -->

          </tbody>
          
        </table>

      </div>
    </div>
  </div>
</div>

<style>
  #accountsTable tbody tr {
    height: 50px;
  }

  #accountsTable th,
  #accountsTable td {
    text-align: center;
    vertical-align: middle;
  }

  .action-icons {
    display: flex;
    justify-content: space-around;
  }

  .action-icons a {
    margin: 0 5px;
    color: #007bff;
  }
</style>
