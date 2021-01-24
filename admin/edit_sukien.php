<?php include "header.php";?>
<?php require_once("function.php");
    $d = new Management();
    $kq = $d->editsukien();
    $row = mysqli_fetch_assoc($kq);
?>
            
            <div class="main-content container">
                <div class="page-title">
                    <h3>Edit Sự kiện</h3>
                    
                </div>
                <div class="section">
                    <div class="row">
                        <div class="col-12">
                        
                        <form action="xuly_editsukien.php" method="get">
                            <div class="form-group">
                            <label for="email">Ngôn ngữ: </label>
                                <input type="text" class="form-control" value="<?php echo $row['lang'];?>" name="lang" >
                            </div>
                            <div class="form-group">
                            <label for="pwd">Mô tả:</label>
                                <input type="text" class="form-control"  value="<?php echo $row['MoTa'];?>" name="mota">
                            </div>
                            <div class="form-group">
                            <input type="hidden" value="<?php echo $row['idSK'];?>" name="idSK">
                            </div>
                            
                            
                            <button type="submit" class="btn btn-primary btn-default">Submit</button>
                        </form>
                            
                       
                            
                        </div>
                    </div>
                    
                </div>
            </div>
<?php include 'footer.php';?>
                        
