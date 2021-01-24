<?php include "header.php";?>
<?php require_once("function.php");
    $d = new Management();
    $kq = $d->edittheloai();
    $row = mysqli_fetch_assoc($kq);
?>
            
            <div class="main-content container">
                <div class="page-title">
                    <h3>Edit Thể loại</h3>
                    
                </div>
                <div class="section">
                    <div class="row">
                        <div class="col-12">
                        
                        <form action="xuly_edittheloai.php" method="get">
                            <div class="form-group">
                            <label for="email">Tên thể loại</label>
                                <input type="text" class="form-control" value="<?php echo $row['TenTL'];?>" name="tentheloai" >
                            </div>
                            <div class="form-group">
                            <label for="pwd">Ẩn Hiện:</label>
                                <!--<input type="text" class="form-control" name="anhien">-->
                            <select name="anhien" id="" class="form-control" >
                                <option value="1" <?php if($row['AnHien']==1) echo "selected"?>>Hiện</option>
                                <option value="0"<?php if($row['AnHien']==0) echo "selected"?>>Ẩn</option>
                            </select>
                            <input type="hidden" value="<?php echo $row['idTL'];?>" name="idTL">
                            </div>
                            
                            
                            <button type="submit" class="btn btn-primary btn-default">Submit</button>
                        </form>
                            
                       
                            
                        </div>
                    </div>
                    
                </div>
            </div>
<?php include 'footer.php';?>
                        
