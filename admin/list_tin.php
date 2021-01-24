<?php include "header.php";?>
<?php require_once("function.php");
    $d = new Management();
    $kq = $d->listtin();
?>
            
            <div class="main-content container-fluid">
                <div class="page-title">
                    <h3>Liss tin</h3>
                    
                </div>
                <div class="section">
                    <div class="row">
                        <div class="col-12">
                            <table class='table table-striped' id="table1" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID Tin</th>
                                            <th>Tiêu đề</th>
                                            <th>Tác giả</th>
                                            <th>Tóm tắt</th>
                                            
                                            <th>Nội dung</th>
                                            <th>Loại tin</th>
                                            <th>Thể loại</th>
                                            <th>Ẩn hiện</th>
                                            <th>Hành động</th>
                                            
                                        </tr>
                                    </thead>

                                <?php while($row = mysqli_fetch_assoc($kq)){?>
                                        <tr>
                                            <td><?php echo $row['idTin'];?></td>
                                            <td><?php echo $row['TieuDe'];?></td>
                                            <td>
                                                <?php 
                                                    $idTG = $row['idUser'];
                                                    $d->get_tacgia($idTG);
                                                ?>
                                            </td>
                                            <td><?php echo $row['TomTat'];?></td>
                                            
                                            <td><?php echo $row['Content'];?></td>
                                            <td>
                                                <?php 
                                                    $idLT = $row['idLT'];
                                                    $d->get_loaitin($idLT);
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                    $idTL = $row['idTL'];
                                                    $d->get_theloai($idTL);
                                                ?>
                                            </td>
                                            <td><?php echo $row['AnHien'];?></td>
                                            <td>
                                            <a href="edit_tin.php?idTin=<?php echo $row['idTin']; ?>">Edit </a>|
                                            <a href="delete_tin.php?idTin=<?php echo $row['idTin']; ?>">Delete</a>
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
                        
