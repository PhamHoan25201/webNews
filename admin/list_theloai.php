<?php include "header.php";?>
<?php require_once("function.php");
    $d = new Management();
    $kq = $d->listtheloai();
?>
            
            <div class="main-content container-fluid">
                <div class="page-title">
                    <h3>Liss Thể loại</h3>
                    
                </div>
                <div class="section">
                    <div class="row">
                        <div class="col-12">
                            <table class='table table-striped' id="table1" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID TL</th>
                                            <th>Ten TL</th>
                                            
                                            <th>An Hien</th>
                                            <th>Hành động</th>
                                            
                                        </tr>
                                    </thead>

                                <?php while($row = mysqli_fetch_assoc($kq)){?>
                                        <tr>
                                            <td><?php echo $row['idTL'];?></td>
                                            <td><?php echo $row['TenTL'];?></td>
                                            
                                            <td><?php echo $row['AnHien'];?></td>
                                            <td>
                                            <a href="edit_theloai.php?idTL=<?php echo $row['idTL']; ?>">Edit </a>|
                                            <a href="delete_theloai.php?idTL=<?php echo $row['idTL']; ?>">Delete</a>
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
                        
