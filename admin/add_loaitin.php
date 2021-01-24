<?php include "header.php";?>
<?php 
    require_once("function.php");
    $d = new Management;
    $kq1 = $d->listtheloai();
   
?>

            
            <div class="main-content container">
                <div class="page-title">
                    <h3>Add Loại tin</h3>
                    
                </div>
                <div class="section">
                    <div class="row">
                        <div class="col-12">
                            <form action ="xuly_addloaitin.php" method = "get">
                                <div class="form-group">
                                    <label for="email">Tên Loại tin:</label>
                                    <input type="text" class="form-control" value="" name="tenloaitin">

                                </div>

                                <div class="form-group">
                                    <label for="pwd">Thứ tự:</label>
                                    <input type="text" class="form-control" value="" name="thutu">

                                </div>

                                <div class="form-group">
                                    <label for="pwd">Thể loại:</label>
                                    <select id="" name="idTL" class="form-control">
                                        
                                        <?php while($row1 = mysqli_fetch_assoc($kq1)) {?>
                                            <option value="<?php echo  $row1['idTL']?>" >
                                                    <?php 
                                                       $idTL=$row1['idTL'];
                                                        $d->get_theloai($idTL);
                                                    ?>
                                            </option>
                                        <?php }?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="pwd">Ẩn hiện:</label>
                                    <select name="anhien" id="" class="form-control">
                                        <option value="1" >Hiện</option>
                                        <option value="0">Ẩn</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary btn-default">Submit</button>
                            </form>
                            
                       
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            <?php include 'footer.php';?>
                        
