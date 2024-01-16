<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header">
                <h2>Danh sách Danh Mục</h2>
                <div class="dropdown">
          <button class="btn btn-primary" id="addProductBtn">Thêm Danh Mục</button>
        </div>
            </div>
            <div class="card-body">
                <table id="productsTable" class="table table-hover table-product" style="width:100%">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>Mã Khách Hàng</th>
                            <th>Tên</th>
                            <th>Thao Tác</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td></td>
                            <td></td>
                            <td>1</td>
                            <td>Nguyễn Văn S</td>
                            <td>
                                <div class="action-icons">
                                    <a href="#" class="edit-icon" title="Chỉnh sửa"><i
                                            class="mdi mdi-package"></i></i></a>
                                    <a href="#" class="delete-icon" title="Xóa"><i class="fas fa-trash"></i></a>
                                </div>
                            </td>
                            <td></td>
                            <td></td>

                            <!-- Thao tác -->

                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>2</td>
                            <td>Nguyễn Văn M</td>
                            <td>
                                <div class="action-icons">
                                    <a href="#" class="edit-icon" title="Chỉnh sửa"><i
                                            class="mdi mdi-package"></i></i></a>
                                    <a href="#" class="delete-icon" title="Xóa"><i class="fas fa-trash"></i></a>
                                </div>
                            </td>
                            <td></td>
                            <td></td>

                            <!-- Thao tác -->

                        </tr>  <tr>
                            <td></td>
                            <td></td>
                            <td>3</td>
                            <td>Nguyễn Văn N</td>
                            <td>
                                <div class="action-icons">
                                    <a href="#" class="edit-icon" title="Chỉnh sửa"><i
                                            class="mdi mdi-package"></i></i></a>
                                    <a href="#" class="delete-icon" title="Xóa"><i class="fas fa-trash"></i></a>
                                </div>
                            </td>
                            <td></td>
                            <td></td>

                            <!-- Thao tác -->

                        </tr>  <tr>
                            <td></td>
                            <td></td>
                            <td>4</td>
                            <td>Nguyễn Văn B</td>
                            <td>
                                <div class="action-icons">
                                    <a href="#" class="edit-icon" title="Chỉnh sửa"><i
                                            class="mdi mdi-package"></i></i></a>
                                    <a href="#" class="delete-icon" title="Xóa"><i class="fas fa-trash"></i></a>
                                </div>
                            </td>
                            <td></td>
                            <td></td>

                            <!-- Thao tác -->

                        </tr>  <tr>
                            <td></td>
                            <td></td>
                            <td>5</td>
                            <td>Nguyễn Văn V</td>
                            <td>
                                <div class="action-icons">
                                    <a href="#" class="edit-icon" title="Chỉnh sửa"><i
                                            class="mdi mdi-package"></i></i></a>
                                    <a href="#" class="delete-icon" title="Xóa"><i class="fas fa-trash"></i></a>
                                </div>
                            </td>
                            <td></td>
                            <td></td>

                            <!-- Thao tác -->

                        </tr>  <tr>
                            <td></td>
                            <td></td>
                            <td>6</td>
                            <td>Nguyễn Văn C</td>
                            <td>
                                <div class="action-icons">
                                    <a href="#" class="edit-icon" title="Chỉnh sửa"><i
                                            class="mdi mdi-package"></i></i></a>
                                    <a href="#" class="delete-icon" title="Xóa"><i class="fas fa-trash"></i></a>
                                </div>
                            </td>
                            <td></td>
                            <td></td>

                            <!-- Thao tác -->

                        </tr>  <tr>
                            <td></td>
                            <td></td>
                            <td>7</td>
                            <td>Nguyễn Văn X</td>
                            <td>
                                <div class="action-icons">
                                    <a href="#" class="edit-icon" title="Chỉnh sửa"><i
                                            class="mdi mdi-package"></i></i></a>
                                    <a href="#" class="delete-icon" title="Xóa"><i class="fas fa-trash"></i></a>
                                </div>
                            </td>
                            <td></td>
                            <td></td>

                            <!-- Thao tác -->

                        </tr>  <tr>
                            <td></td>
                            <td></td>
                            <td>8</td>
                            <td>Nguyễn Văn Z</td>
                            <td>
                                <div class="action-icons">
                                    <a href="#" class="edit-icon" title="Chỉnh sửa"><i
                                            class="mdi mdi-package"></i></i></a>
                                    <a href="#" class="delete-icon" title="Xóa"><i class="fas fa-trash"></i></a>
                                </div>
                            </td>
                            <td></td>
                            <td></td>

                            <!-- Thao tác -->

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