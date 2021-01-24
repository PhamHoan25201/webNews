<?php include "header.php";?>
<?php 
    require_once("function.php");
    $d = new Management;
    // $kq = $d->edittin();
    // $kq1 = $d->listtheloai();
    // $kq2 = $d->listloaitin();
    $kq = $d->edituser();
    $row = mysqli_fetch_assoc($kq);
?>

            
            <div class="main-content container">
                <div class="page-title">
                    <h3>Edit Tin</h3>
                    
                </div>
                <div class="section">
                    <div class="row">
                        <div class="col-12">
                            <form action ="xuly_edituser.php" method = "get">
                                <div class="form-group">
                                    <label for="email">Họ và Tên :</label>
                                    <input type="text" class="form-control" value="<?php echo $row['HoTen']?>" name="hoten">

                                </div>

                                <div class="form-group">
                                    <label for="pwd">Username:</label>
                                    <input type="text" class="form-control" value="<?php echo $row['Username']?>" name="username">

                                </div>
                                <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input type="text" class="form-control" value="<?php echo $row['Password']?>" name="password">

                                </div>
                                <div class="form-group">
                                    <label for="email">Số điện thoại:</label>
                                    <input type="text" class="form-control" value="<?php echo $row['Dienthoai']?>" name="dienthoai">

                                </div>

                                <div class="form-group">
                                    <label for="pwd">Email:</label>
                                    <input type="text" class="form-control" value="<?php echo $row['Email']?>" name="email">

                                </div>
                                <div class="form-group">
                                    <label for="pwd">Ngày sinh:</label>
                                    <input type="text" class="form-control" value="<?php echo $row['NgaySinh']?>" name="ngaysinh">

                                </div>
                                <div class="form-group">
                                    <label for="pwd">Giới tính:</label><br>
                                    <select name="gioitinh" id="" class="form-control">
                                        <option value="1" <?php if($row['GioiTinh']==1) echo "selected"?>>Nam</option>
                                        <option value="0" <?php if($row['GioiTinh']==0) echo "selected"?>>Nữ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Quyền được cấp:</label><br>
                                    <select name="admin" id="" class="form-control">
                                        <option value="1" <?php if($row['Admin']==1) echo "selected"?>>Admin</option>
                                        <option value="0" <?php if($row['Admin']==0) echo "selected"?>>User</option>
                                    </select>
                                    
                                    <input type="hidden" value="<?php echo $row['idUser'];?>" name="idUser">
                                </div>
                                <button type="submit" class="btn btn-primary btn-default">Submit</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
            <?php include 'footer.php';?>
                        
