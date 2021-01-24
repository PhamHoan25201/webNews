<?php include "header.php";?>
<?php 
    require_once("function.php");
    $d = new Management;
    $kq1 = $d->listtheloai();
    $kq2 = $d->listloaitin();
    $kq3 = $d->listUser();
    
    
?>

            
            <div class="main-content container">
                <div class="page-title">
                    <h3>Add Tin</h3>
                    
                </div>
                <div class="section">
                    <div class="row">
                        <div class="col-12">
                            <form action ="xuly_addtin.php" method = "get">
                                <div class="form-group">
                                    <label for="email">Tiêu đề :</label>
                                    <input type="text" class="form-control" value="" name="tieude">

                                </div>

                                <div class="form-group">
                                    <label for="pwd">Tóm tắt:</label>
                                    <input type="text" class="form-control" value="" name="tomtat">

                                </div>
                                <div class="form-group">
                                    <label for="pwd">Địa chỉ hình ảnh:</label>
                                    <input type="text" class="form-control" value="" name="urlImg">

                                </div>
                                <div class="form-group">
                                    <label for="pwd">Nội dung:</label>
                                    <textarea class="form-control" value="" name="noidung" rows="9"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="pwd">Tác giả:</label><br>
                                    <select id="" name="idUser" class="form-control">
                                        
                                        <?php while($row3 = mysqli_fetch_assoc($kq3)) {?>
                                            <option value="<?php echo  $row3['idUser']?>"   >
                                                    <?php 
                                                       $idTG=$row3['idUser'];
                                                        $d->get_tacgia($idTG);
                                                    ?>
                                            </option>
                                        <?php }?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="pwd">Loại Tin:</label><br>
                                    <select id="" name="idLT" class="form-control">
                                        
                                        <?php while($row2 = mysqli_fetch_assoc($kq2)) {
                                           
                                        ?>
                                           
                                            <option value="<?php echo  $row2['idLT']?>"   >
                                                    <?php 
                                                       $idLT=$row2['idLT'];
                                                        $d->get_loaitin($idLT);
                                                    ?>
                                            </option>

                                        <?php }?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Thể loại:</label>
                                    <select id="" name="idTL" class="form-control">
                                        
                                        <?php while($row1 = mysqli_fetch_assoc($kq1)) {?>
                                            <option value="<?php echo  $row1['idTL']?>"   >
                                                    <?php 
                                                       $idTL=$row1['idTL'];
                                                        $d->get_theloai($idTL);
                                                    ?>
                                            </option>
                                        <?php }?>
                                    </select>
                                </div>
                                

                            

                                <div class="form-group">
                                    <label for="pwd">Ẩn hiện:</label><br>
                                    <select name="anhien" id="" class="form-control" >
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
                        
