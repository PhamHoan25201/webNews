<?php include "header.php";?>       
     
            <div class="main-content container">
                <div class="page-title">
                    <h3>Add Thể loại</h3>
                    
                </div>
                <div class="section">
                    <div class="row">
                        <div class="col-12">
                        
                        <form action="xuly_addtheloai.php" method="get">
                            <div class="form-group">
                            <label for="email">Tên thể loại</label>
                                <input type="text" class="form-control" value="" name="tentheloai" >
                            </div>
                            <div class="form-group">
                            <label for="pwd">Ẩn Hiện:</label>
                                <!--<input type="text" class="form-control" name="anhien">-->
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
                        
