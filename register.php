<?php 
session_start();
if(isset($_POST['Register'])==true){
require_once("function.php");
$d = new Management;
$kq = $d->register();
}
?>
<?php include 'header.php';?>
		<section class="login first grey">
			<div class="container">
				<div class="box-wrapper">				
					<div class="box box-border">
						<div class="box-body">
							<h4>Register</h4>
							<form action="#" method="post">
								<div class="form-group">
									<label>Name</label>
									<input type="text" name="name" class="form-control" placeholder="Nhập họ và tên">
								</div>
								<div class="form-group">
									<label>Ngày sinh</label>
									<input type="text" name="ngaysinh" class="form-control" placeholder="yyyy-mm-dd">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" name="email" class="form-control" placeholder="Nhập Email">
								</div>
								<div class="form-group">
									<label>Phone Number</label>
									<input type="number" name="phonenumber" class="form-control" placeholder="Nhập số điện thoại">
								</div>
								<div class="form-group">
									<label>Username</label>
									<input type="text" name="username" class="form-control" placeholder="Nhập username">
								</div>
								<div class="form-group">
									<label >Sex</label><br>
									<select name="gioitinh" style="width: 100%;" class="form-control" >
										<option value="1" >Nam</option>
										<option value="0">Nữ</option>
									</select>
								</div>
								<div class="form-group">
									<label class="fw">Password</label>
									<input type="password" name="password" class="form-control" placeholder="Nhập password">
								</div>
								<div class="form-group text-right">
									<button class="btn btn-primary btn-block" name="Register">Register</button>
								</div>
								<div class="form-group text-center">
									<span class="text-muted">Already have an account?</span> <a href="login.php">Login</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

<?php include 'footer.php';?>