<?php include "header.php";?>
<?php require_once("function.php");
    $d = new Management();
    $kq = $d->listUser();
?>
            
            <div class="main-content container-fluid">
                <div class="page-title">
                    <h3>Liss User</h3>
                    
                </div>
                <div class="section">
                    <div class="row">
                        <div class="col-12">
                            <table class='table table-striped' id="table1" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID User</th>
                                            <th>Họ và Tên</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Số điện thoại</th>
                                            <th>Email</th>
                                            <th>Ngày đăng ký TK</th>
                                            <th>Ngày sinh</th>
                                            <th>Giới tính</th>
                                            <th>Quyền được cấp</th>
                                            
                                            
                                            <th>Hành động</th>
                                            
                                        </tr>
                                    </thead>

                                <?php while($row = mysqli_fetch_assoc($kq)){?>
                                        <tr>
                                            <td><?php echo $row['idUser'];?></td>
                                            <td><?php echo $row['HoTen'];?></td>
                                            <td><?php echo $row['Username'];?></td>
                                            <td><?php echo $row['Password'];?></td>
                                            <td><?php echo $row['Dienthoai'];?></td>
                                            <td><?php echo $row['Email'];?></td>
                                            <td><?php echo $row['NgayDangKy'];?></td>
                                            <td><?php echo $row['NgaySinh'];?></td>
                                            <td><?php echo $row['GioiTinh'];?></td>
                                            
                                            <td><?php echo $row['Admin'];?></td>
                                            <td>
                                            <a href="edit_user.php?idUser=<?php echo $row['idUser']; ?>">Edit </a>|
                                            <a href="delete_user.php?idUser=<?php echo $row['idUser']; ?>">Delete</a>
                                            </td>
                                            
                                        </tr>
                                    
                            

                                <?php }
                                ?>
                            </table>
                       
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            <?php include 'footer.php';?>
                        
