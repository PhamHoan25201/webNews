<?php include "header.php";?>
<?php 
    require_once("function.php");
    $d = new Management;
    $kq = $d->listUser();
    $row = mysqli_fetch_assoc($kq);
?>

            
            <div class="main-content container">
                <div class="page-title">
                    <h3>Edit Tin</h3>
                    
                </div>
                <div class="section">
                    <div class="row">
                        <div class="col-12">
                            <form action ="xuly_adduser.php" method = "get">
                                <div class="form-group">
                                    <label for="email">Họ và Tên :</label>
                                    <input type="text" class="form-control" value="" name="hoten">

                                </div>

                                <div class="form-group">
                                    <label for="pwd">Username:</label>
                                    <input type="text" class="form-control" value="" name="username">

                                </div>
                                <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input type="text" class="form-control" value="" name="password">

                                </div>
                                <div class="form-group">
                                    <label for="email">Số điện thoại:</label>
                                    <input type="text" class="form-control" value="" name="dienthoai">

                                </div>

                                <div class="form-group">
                                    <label for="pwd">Email:</label>
                                    <input type="text" class="form-control" value="" name="email">

                                </div>
                                <div class="form-group">
                                    <label for="pwd">Ngày sinh:</label>
                                    <input type="text" class="form-control" value="" name="ngaysinh">

                                </div>
                                <div class="form-group">
                                    <label for="pwd">Giới tính:</label><br>
                                    <select name="gioitinh" id="" class="form-control">
                                        <option value="1" >Nam</option>
                                        <option value="0">Nữ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Quyền được cấp:</label><br>
                                    <select name="admin" id="" class="form-control">
                                        <option value="1" >Admin</option>
                                        <option value="0">User</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary btn-default">Submit</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
            <?php include 'footer.php';?>
                        
