<?php include "header.php";?>
<?php require_once("function.php");
    $d = new Management();
    $kq = $d->listsukien();
    
?>
            
            <div class="main-content container">
                <div class="page-title">
                    <h3>Add Sự kiện</h3>
                    
                </div>
                <div class="section">
                    <div class="row">
                        <div class="col-12">
                        
                        <form action="xuly_addsukien.php" method="get">
                            <div class="form-group">
                            <label for="email">Ngôn ngữ: </label>
                                <input type="text" class="form-control" value="" name="lang" >
                            </div>
                            <div class="form-group">
                            <label for="pwd">Mô tả:</label>
                                <input type="text" class="form-control"  value="" name="mota">
                            </div>
                            <div class="form-group">
                            </div>
                            
                            
                            <button type="submit" class="btn btn-primary btn-default">Submit</button>
                        </form>
                            
                       
                            
                        </div>
                    </div>
                    
                </div>
            </div>
<?php include 'footer.php';?>
                        
