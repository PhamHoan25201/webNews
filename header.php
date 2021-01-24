<?php 
if(!isset($_SESSION)){
    session_start();
}?>
<?php 
require_once('function.php');
$d = new Management;
$popular = $d->popular();
$listtheloai = $d->listtheloai();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="Magz is a HTML5 & CSS3 magazine template is based on Bootstrap 3.">
		<meta name="author" content="Kodinger">
		<meta name="keyword" content="magz, html5, css3, template, magazine template">
		<!-- Shareable -->
		<meta property="og:title" content="HTML5 & CSS3 magazine template is based on Bootstrap 3" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="http://github.com/nauvalazhar/Magz" />
		<meta property="og:image" content="https://raw.githubusercontent.com/nauvalazhar/Magz/master/images/preview.png" />
		<title>News by Hoàn không G </title>
		<!-- Bootstrap -->
		<link rel="stylesheet" href="scripts/bootstrap/bootstrap.min.css">
		<!-- IonIcons -->
		<link rel="stylesheet" href="scripts/ionicons/css/ionicons.min.css">
		<!-- Toast -->
		<link rel="stylesheet" href="scripts/toast/jquery.toast.min.css">
		<!-- OwlCarousel -->
		<link rel="stylesheet" href="scripts/owlcarousel/dist/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="scripts/owlcarousel/dist/assets/owl.theme.default.min.css">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="scripts/magnific-popup/dist/magnific-popup.css">
		<link rel="stylesheet" href="scripts/sweetalert/dist/sweetalert.css">
		<!-- Custom style -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/skins/all.css">
		<link rel="stylesheet" href="css/demo.css">
		
	</head>

	<body  class="skin-orange">
		<header class="primary">
			<div class="firstbar">
				<div class="container">
					<div class="row ">
						<div class="col-md-3 col-sm-12">
							<div class="brand">
								<a href="index.php">
									<img src="images/logo.png" alt="Magz Logo">
								</a>
							</div>						
						</div>
						<div class="col-md-6 col-sm-12">
							<form class="search" autocomplete="off" method = "post" action = "search.php">
								<div class="form-group">
									<div class="input-group">
										<input type="text" name="keysearch" class="form-control" placeholder="Tìm kiếm">									
										<div class="input-group-btn">
											<button class="btn btn-primary"><i class="ion-search"></i></button>
										</div>
									</div>
								</div>
								<div class="help-block">
									<div>Phổ biến:</div>
									<ul>
										<?php while($row_popular = mysqli_fetch_assoc($popular)){?>
										<li><a href="#"><?php echo $row_popular['TenLT']?></a></li>
										<?php }?>
									</ul>
								</div>
							</form>								
						</div>
						<div class="col-md-3 col-sm-12 text-right " style="padding: 15px";>
                            <div id="menu-list" class="menu">
                                <ul class="nav-list">
									<li class="dropdown magz-dropdown"><a href="#"  style="color: red;">
										<?php
										if (isset($_SESSION['user'])){ ?>
											<i class="icon ion-person" data-feather="user"></i><?php echo " ".$_SESSION['user'];
										}
										else{
											echo 'Đăng nhập';
										}
										?></a>
                                        <ul class="dropdown-menu">
											<li class="divider"></li>
											
											<li><a href="logout.php">
											<?php 
												if(isset($_SESSION['user'])){?>
													<i class="icon ion-log-out" data-feather="logout"></i><?php echo 'Logout';
												}else{?>
													<i class="icon ion-log-in" data-feather="login"></i><?php echo 'Login';
													
												}
											?>
											</a></li>
											
											<li><a href="register.php"><i class="icon ion-person-add"data-feather="register"></i> Register</a></li>
                                            <li class="divider"></li>
                                            <li><a href="admin/login.php"><i class="icon ion-log-in"data-feather="login"></i> Login Admin</a></li>
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </div>
						</div>
					</div>
				</div>
			</div>

			<!-- Start nav -->
			<nav class="menu">
				<div class="container">
					<div class="brand">
						<a href="#">
							<img src="images/logo.png" alt="Magz Logo">
						</a>
					</div>
					<div class="mobile-toggle">
						<a href="#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
					</div>
					<div class="mobile-toggle">
						<a href="#" data-toggle="sidebar" data-target="#sidebar"><i class="ion-ios-arrow-left"></i></a>
					</div>
					<div id="menu-list">
						<ul class="nav-list">
							<!-- <li class="for-tablet nav-title"><a>Menu</a></li>
							<li class="for-tablet"><a href="login.html">Login</a></li>
							<li class="for-tablet"><a href="register.html">Register</a></li> -->
							<?php while($row_theloai=mysqli_fetch_assoc($listtheloai)){
								$idTL = $row_theloai['idTL'];
							?>
							<li class="dropdown magz-dropdown-megamenu"><a href="theloai.php?idTL=<?php echo $row_theloai['idTL'];?>"><?php echo $row_theloai['TenTL'] ?><i class="ion-ios-arrow-right"></i> </a>
								<div class="dropdown-menu megamenu">
									<div class="megamenu-inner">
										<div class="row">
											<div class="col-md-3">
												<div class="row">
													<div class="col-md-12">
														<h2 class="megamenu-title">Loại tin</h2>
													</div>
												</div>
												<ul class="vertical-menu">
													<?php $loaitintrongtheloai = $d->loaitintrongtheloai($idTL);
													while($row_loaitintrongtheloai = mysqli_fetch_assoc($loaitintrongtheloai)){

													?>
													<li><a href="loaitin.php?idLT=<?php echo $row_loaitintrongtheloai['idLT']?>"><i class="ion-ios-circle-outline"></i> <?php echo $row_loaitintrongtheloai['TenLT']?></a></li>
													<?php }?>
												</ul>
											</div>
											<div class="col-md-9">
												<div class="row">
													<div class="col-md-12">
														<h2 class="megamenu-title">Tin Mới nhất</h2>
													</div>
												</div>
												<div class="row">
													<?php $tinmoinhattrongtheloai = $d->tinmoinhattrongtheloai($idTL);
													while($row_tinmoinhattrongtheloai = mysqli_fetch_assoc($tinmoinhattrongtheloai)){
														$idLT = $row_tinmoinhattrongtheloai['idLT'];
													?>
													<article class="article col-md-4 mini">
														<div class="inner">
															<figure>
																<a href="tinchitiet.php?idTin=<?php echo $row_tinmoinhattrongtheloai['idTin']?>">
																	<img src="<?php echo $row_tinmoinhattrongtheloai['urlImg']?>" alt="Sample Article">
																</a>
															</figure>
															<div class="padding">
																<div class="detail">
																	<div class="time"><?php echo $row_tinmoinhattrongtheloai['Ngay']?></div>
																	<div class="category">
																		<a href="loaitin.php?idLT=<?php echo $row_tinmoinhattrongtheloai['idLT']?>">
																			<?php 
																				$d->get_tenloaitin($idLT);
																			?>
																		</a>
																	</div>
																</div>
																<h2><a href="tinchitiet.php?idTin=<?php echo $row_tinmoinhattrongtheloai['idTin']?>"><?php echo $row_tinmoinhattrongtheloai['TieuDe']?></a></h2>
															</div>
														</div>
													</article>
													<?php }?>
													
												</div>
											</div>
										</div>								
									</div>
								</div>
							</li>
							<?php }?>

						</ul>
					</div>
				</div>
			</nav>
			<!-- End nav -->
		</header>