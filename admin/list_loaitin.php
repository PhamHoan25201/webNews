<?php include "header.php";?>
<?php require_once("function.php");
    $d = new Management();
    $kq = $d->listloaitin();
?>
            
            <div class="main-content container-fluid">
                <div class="page-title">
                    <h3>Liss Loại tin</h3>
                    
                </div>
                <div class="section">
                    <div class="row">
                        <div class="col-12">
                            <table class='table table-striped' id="table1" id="table1" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID LT</th>
                                            <th>Tên Loại tin</th>
                                            <th>Thể Loại</th>                                          
                                            <th>Ẩn hiện</th>
                                            <th>Hành động</th>
                                            
                                        </tr>
                                    </thead>

                                <?php while($row = mysqli_fetch_assoc($kq)){?>
                                        <tr>
                                            <td><?php echo $row['idLT'];?></td>
                                            <td><?php echo $row['TenLT'];?></td>
                                            <td>
                                                <?php 
                                                    $idTL = $row['idTL'];
                                                    $d->get_theloai($idTL);
                                                ?>
                                            </td>
                                            
                                            <td><?php echo $row['AnHien'];?></td>
                                            <td>
                                            <a href="edit_loaitin.php?idLT=<?php echo $row['idLT']; ?>">Edit </a>|
                                            <a href="delete_loaitin.php?idLT=<?php echo $row['idLT']; ?>">Delete</a>
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
                        
