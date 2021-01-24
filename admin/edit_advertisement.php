<?php include "header.php";?>
<?php 
    require_once("function.php");
    $d = new Management;
    $kq = $d->listeditAdvertisement();
    $row = mysqli_fetch_assoc($kq);
?>

            
            <div class="main-content container">
                <div class="page-title">
                    <h3>Add Advertisement</h3>
                    
                </div>
                <div class="section">
                    <div class="row">
                        <div class="col-12">
                            <form action ="xuly_editadvertisement.php" method = "get">
                                <div class="form-group">
                                    <label for="email">Ảnh Quảng cáo 1 :</label>
                                    <input type="text" class="form-control" value="<?php echo $row['urlImg1']?>" name="urlImg1">

                                </div>

                                <div class="form-group">
                                    <label for="email">Ảnh Quảng cáo 2:</label>
                                    <input type="text" class="form-control" value="<?php echo $row['urlImg2']?>" name="urlImg2">

                                </div>
                                <div class="form-group">
                                    <label for="pwd">Ngày chạy Adv:</label>
                                    <input type="text" class="form-control" value="<?php echo $row['ngaychayQC']?>" name="ngaychayadv">

                                </div>
                                <div class="form-group">
                                    <label for="email">Ngày kết thúc Adv:</label>
                                    <input type="text" class="form-control" value="<?php echo $row['ngaykethucQC']?>" name="ngayketthucadv">

                                </div>

                                <div class="form-group">
                                    <label for="pwd">Mô tả:</label>
                                    <input type="text" class="form-control" value="<?php echo $row['MoTa']?>" name="mota">

                                    <input type="hidden" value="<?php echo $row['idAdv'];?>" name="idAdv">

                                </div>
                                <button type="submit" class="btn btn-primary btn-default">Submit</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
            <?php include 'footer.php';?>
                        
