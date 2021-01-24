<?php include "header.php";?>
<?php require_once("function.php");
    $d = new Management();
    $kq = $d->listAdvertisement();
?>
            
            <div class="main-content container-fluid">
                <div class="page-title">
                    <h3>Liss Advertisement</h3>
                    
                </div>
                <div class="section">
                    <div class="row">
                        <div class="col-12">
                            <table class='table table-striped' id="table1" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID Advertisement</th>
                                            <th>Ảnh Quảng cáo 1</th>
                                            <th>Ảnh Quảng cáo 2</th>
                                            <th>Ngày chạy Adv</th>
                                            <th>Ngày kết thúc Adv</th>
                                            <th>Mô tả</th>
                                            <th>Hành động</th>
                                            
                                        </tr>
                                    </thead>

                                <?php while($row = mysqli_fetch_assoc($kq)){?>
                                        <tr>
                                            <td><?php echo $row['idAdv'];?></td>
                                            <td><?php echo $row['urlImg1'];?></td>
                                            <td><?php echo $row['urlImg2'];?></td>
                                            <td><?php echo $row['ngaychayQC'];?></td>
                                            <td><?php echo $row['ngaykethucQC'];?></td>
                                            <td><?php echo $row['MoTa'];?></td>
                                            
                                            <td>
                                            <a href="edit_advertisement.php?idAdv=<?php echo $row['idAdv']; ?>">Edit </a>|
                                            <a href="delete_advertisement.php?idAdv=<?php echo $row['idAdv']; ?>">Delete</a>
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
                        
