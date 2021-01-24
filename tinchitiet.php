<?php 
if(!isset($_SESSION)){
    session_start();
}?>
<?php 
require_once('function.php');
$d = new Management;
$showtin = $d->showtin();
$row_showtin = mysqli_fetch_assoc($showtin);
$idLT = $row_showtin['idLT'];
$idUser = $row_showtin['idUser'];
$recoment = $d->recoment();
$recomenttieptheo = $d->recomenttieptheo();
$showAdv = $d->showAdv();
$row_showAdv = mysqli_fetch_assoc($showAdv);
$tinmoinhat = $d->tinmoinhat();
?>
<?php include 'header.php'?>
		<section class="single">
			<div class="container">
				<div class="row">
					<div class="col-md-4 sidebar" id="sidebar">
						<aside>
							<div class="aside-body">
								<figure class="ads">
									<img src="<?php echo $row_showAdv['urlImg1']?>">
									<figcaption>Advertisement</figcaption>
								</figure>
							</div>
						</aside>
						<aside>
							<div class="aside-body">
								<form class="newsletter">
									<div class="icon">
										<i class="ion-ios-email-outline"></i>
										<h1>Newsletter</h1>
									</div>
									<div class="input-group">
										<input type="email" class="form-control email" placeholder="Your mail">
										<div class="input-group-btn">
											<button class="btn btn-primary"><i class="ion-paper-airplane"></i></button>
										</div>
									</div>
									<p>By subscribing you will receive new articles in your email.</p>
								</form>
							</div>
						</aside>
						<aside>
							<h1 class="aside-title">Recomented</h1>
							<div class="aside-body">
							<?php while($row_recoment= mysqli_fetch_assoc($recoment)){$idLT = $row_recoment['idLT'];?>
								<article class="article-fw">
									<div class="inner">
										<figure>
											<a href="tinchitiet.php?idTin=<?php echo $row_recoment['idTin']?>">												
												<img src="<?php echo $row_recoment['urlImg']?>">
											</a>
										</figure>
										<div class="details">
											<h1><a href="tinchitiet.php?idTin=<?php echo $row_recoment['idTin']?>"><?php echo $row_recoment['TieuDe']?></a></h1>
											<p>
											<?php echo $row_recoment['TomTat']?>
											</p>
											<div class="detail">
												<div class="time"><?php echo $row_recoment['Ngay']?></div>
												<div class="category"><a href="loaitin.php?idLT=<?php echo $row_recoment['idLT']?>"><?php $d->get_tenloaitin($idLT);?></a></div>
											</div>
										</div>
									</div>
								</article>
							<?php } ?>
								<div class="line"></div>
							<?php while($row_recomenttieptheo = mysqli_fetch_assoc($recomenttieptheo)){$idLT = $row_recomenttieptheo['idLT'];?>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="tinchitiet.php?idTin=<?php echo $row_recomenttieptheo['idTin']?>">
												<img src="<?php echo $row_recomenttieptheo['urlImg']?>">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="tinchitiet.php?idTin=<?php echo $row_recomenttieptheo['idTin']?>"><?php echo $row_recomenttieptheo['TieuDe'] ?></a></h1>
											<div class="detail">
												<div class="loaitin.php?idLT=<?php echo $row_recomenttieptheo['idLT']?>"><a href="category.html"><?php $d->get_tenloaitin($idLT);?></a></div>
												<div class="time"><?php echo $row_recomenttieptheo['Ngay']?></div>
											</div>
										</div>
									</div>
								</article>
							<?php }?>
							</div>
						</aside>
					</div>
					<div class="col-md-8">
						<ol class="breadcrumb">
						  <li><a href="index.php">Home</a></li>
						  <li class="active"><?php $d->get_tenloaitin($idLT); ?></li>
						</ol>
						<article class="article main-article">
							<header>
								<h1><?php echo $row_showtin['TieuDe']?></h1>
								<ul class="details">
									<li>Posted on <?php echo $row_showtin['Ngay']?></li>
									<li><a><?php $d->get_tenloaitin($idLT);?></a></li>
									<li>By <a href="#"><?php $d->get_tenuser($idUser);?></a></li>
								</ul>
							</header>
							<div class="main">
								<p><?php echo $row_showtin['TomTat']?></p>
								<div class="featured">
									<figure>
										<img src="<?php echo $row_showtin['urlImg']?>">
										<!-- <figcaption>Image by pexels.com</figcaption> -->
									</figure>
								</div>
								<!-- <blockquote>
									Free Responsive HTML5 &amp; CSS3 Magazine Template
								</blockquote> -->
								<?php echo $row_showtin['Content']?>
							</div>
							<footer>
								<div class="col">
									<ul class="tags">
										<li><a href="#">Free Themes</a></li>
										<li><a href="#">Bootstrap 3</a></li>
										<li><a href="#">Responsive Web Design</a></li>
										<li><a href="#">HTML5</a></li>
										<li><a href="#">CSS3</a></li>
										<li><a href="#">Web Design</a></li>
									</ul>
								</div>
								<div class="col">
									<a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div><?php echo $row_showtin['SoLuotLike']?></div></a>
								</div>
							</footer>
						</article>
						<div class="sharing">
						<div class="title"><i class="ion-android-share-alt"></i> Sharing is caring</div>
							<ul class="social">
								<li>
									<a href="#" class="facebook">
										<i class="ion-social-facebook"></i> Facebook
									</a>
								</li>
								<li>
									<a href="#" class="twitter">
										<i class="ion-social-twitter"></i> Twitter
									</a>
								</li>
								<li>
									<a href="#" class="googleplus">
										<i class="ion-social-googleplus"></i> Google+
									</a>
								</li>
								<li>
									<a href="#" class="linkedin">
										<i class="ion-social-linkedin"></i> Linkedin
									</a>
								</li>
								<li>
									<a href="#" class="skype">
										<i class="ion-ios-email-outline"></i> Email
									</a>
								</li>
								<li class="count">
									20
									<div>Shares</div>
								</li>
							</ul>
						</div>
						<div class="line">
							<div>Tác giả</div>
						</div>
						<div class="author">
							<figure>
								<img src="images/img01.jpg">
							</figure>
							<div class="details">
								<div class="job">Tác giả:</div>
								<h3 class="name"><?php $d->get_tenuser($idUser);?></h3>
								<ul class="social trp sm">
									<li>
										<a href="#" class="facebook">
											<svg><rect/></svg>
											<i class="ion-social-facebook"></i>
										</a>
									</li>
									<li>
										<a href="#" class="twitter">
											<svg><rect/></svg>
											<i class="ion-social-twitter"></i>
										</a>
									</li>
									<li>
										<a href="#" class="youtube">
											<svg><rect/></svg>
											<i class="ion-social-youtube"></i>
										</a>
									</li>
									<li>
										<a href="#" class="googleplus">
											<svg><rect/></svg>
											<i class="ion-social-googleplus"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="line"><div>Tin Mới nhất</div></div>
						<div class="row">
							<?php while($row_tinmoinhat = mysqli_fetch_assoc($tinmoinhat)){$idLT = $row_tinmoinhat['idLT'];?>
							<article class="article related col-md-6 col-sm-6 col-xs-12">
								<div class="inner">
									<figure>
										<a href="tinchitiet.php?idTin=<?php echo $row_tinmoinhat['idTin'];?>">
											<img src="<?php echo $row_tinmoinhat['urlImg']?>">
										</a>
									</figure>
									<div class="padding">
										<h2><a href="tinchitiet.php?idTin=<?php echo $row_tinmoinhat['idTin'];?>"><?php echo $row_tinmoinhat['TieuDe'];?></a></h2>
										<div class="detail">
											<div class="category"><a href="loaitin.php?idLT=<?php echo $row_tinmoinhat['idLT']?>"><?php $d->get_tenloaitin($idLT);?></a></div>
											<div class="time"><?php  echo $row_tinmoinhat['Ngay'];?></div>
										</div>
									</div>
								</div>
							</article>
							<?php } ?>
							
						</div>
						<div class="line thin"></div>
						<div class="comments">
							<h2 class="title">3 Responses <a href="#">Write a Response</a></h2>
							<div class="comment-list">
							<?php $idTin = $row_showtin['idTin'];
								$showComment = $d->showCommentInNews($idTin);
								while($row_showcomment= mysqli_fetch_assoc($showComment)){
									$idUser = $row_showcomment['idUser'];
							?>
								<div class="item">
									<div class="user">                                
										<figure>
											<img src="images/img01.jpg">
										</figure>
										<div class="details">
											<h5 class="name"><?php $d->get_tenuser($idUser);?></h5>
											<div class="time"><?php echo $row_showcomment['Ngay']?></div>
											<div class="description">
												<?php echo $row_showcomment['Content']?>
											</div>
											<footer>
												<a href="#">Reply</a>
											</footer>
										</div>
									</div>
								</div>
							<?php } ?>
								
							</div>
							<form class="row" action= "xuly_addcomment.php" method="post">
								<div class="col-md-12">
									<h3 class="title">BÌNH LUẬN TẠI ĐÂY</h3>
								</div>
								<div class="form-group col-md-12">
									<label for="name">Họ và tên: <span class="required"></span></label>
									<input type="hidden" id="name" name="idUser" value="<?php echo $_SESSION['idUser']?>" class="form-control">
									<p id="name" class="form-control">
									<?php
									 
									 if (isset($_SESSION['user'])){ 
										echo $_SESSION['user'];
									}
									else{
										echo 'Vui lòng đăng nhập để viết bình luận!!!';
									}
									 ?>
									 <p>
								</div>
								
								<div class="form-group col-md-12">
									
									<input type="hidden" name="idTin" value="<?php echo $row_showtin['idTin']?>" class="form-control">
									<label for="message">Bình luận: <span class="required"></span></label>
									<textarea class="form-control" name="message" placeholder="Viết bình luận ..."></textarea>
								</div>
								<div class="form-group col-md-12">
									
									<?php
									 
									 if (isset($_SESSION['user'])){ ?>
										<button class="btn btn-primary">Gửi bình luận</button>
									<?php }
									else{?>
										<button class="btn btn-primary" disabled>Đăng nhập để viết bình luận!!!</button>
									<?php }
									 ?>
								</div>
							</form>
						</div>
						
					</div>
				</div>
			</div>
		</section>
<?php include 'footer.php'?>