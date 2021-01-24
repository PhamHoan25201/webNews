<?php
session_start();
require_once('function.php');
$d = new Management;
$trending = $d->trending();
$trending1 = $d->trending();
$tinmoinhat = $d->tinmoinhat();
$tinmoinhattieptheo = $d->tinmoinhattieptheo();
$tinnoibat = $d->tinnoibat();
$tinxemnhieu = $d->tinxemnhieu();
$tinyeuthich = $d->tinyeuthich();
$listtin = $d->listtin();
$recoment = $d->recoment();
$recomenttieptheo = $d->recomenttieptheo();
$showcomment = $d->showcomment();
$bestofweek = $d->bestofweek();
$showAdv = $d->showAdv();
$row_showAdv = mysqli_fetch_assoc($showAdv);


?>
<?php include 'header.php';?>
		<section class="home">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-12 col-xs-12">
						<div class="headline">
							<div class="nav" id="headline-nav">
								<a class="left carousel-control" role="button" data-slide="prev">
									<span class="ion-ios-arrow-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" role="button" data-slide="next">
									<span class="ion-ios-arrow-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
							<div class="owl-carousel owl-theme" id="headline">
								<?php while($row_trending=mysqli_fetch_assoc($trending)){?>							
								<div class="item">
									<a href="#"><div class="badge">Trending!</div> <?php echo $row_trending['TieuDe']?></a>
								</div>
								<?php }?>
								
							</div>
						</div>
						<div class="owl-carousel owl-theme slide" id="featured">
							<?php while($row_trending=mysqli_fetch_assoc($trending1)){
								$idLT = $row_trending['idLT'];
							?>
							<div class="item">
								<article class="featured">
									<div class="overlay"></div>
									<figure>
										<img src="<?php echo $row_trending['urlImg']?>" alt="Sample Article">
									</figure>
									<div class="details">
										<div class="category">
											<a href="loaitin.php?idLT=<?php echo $row_trending['idLT']?>">
												<?php $d->get_tenloaitin($idLT);?>
											</a>
										</div>
										<h1><a href="tinchitiet.php?idTin=<?php echo $row_trending['idTin']?>"><?php echo $row_trending['TieuDe']?></a></h1>
										<div class="time"><?php echo $row_trending['Ngay']?></div>
									</div>
								</article>
							</div>
							<?php }?>
						</div>
						<div class="line">
							<div>Tin Mới nhất</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="row">
									<?php while($row_tinmoinhat=mysqli_fetch_assoc($tinmoinhat)){ $idLT = $row_tinmoinhat['idLT']?>
									<article class="article col-md-12">
										<div class="inner">
											<figure>
												<a href="tinchitiet.php?idTin=<?php echo $row_tinmoinhat['idTin']?>">
													<img src="<?php echo $row_tinmoinhat['urlImg']?>" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<div class="detail">
													<div class="time"><?php echo $row_tinmoinhat['Ngay']?></div>
													<div class="category"><a href="loaitin.php?idLT=<?php echo $row_tinmoinhat['idLT']?>"><?php $d->get_tenloaitin($idLT);?></a></div>
												</div>
												<h2><a href="tinchitiet.php?idTin=<?php echo $row_tinmoinhat['idTin']?>"><?php echo $row_tinmoinhat['TieuDe']?></a></h2>
												<p><?php echo $row_tinmoinhat['TomTat']?></p>
												<footer>
													<a href="" class="love"><i class="ion-android-favorite-outline"></i> <div ><?php echo $row_tinmoinhat['SoLuotLike']?></div></a>
													<a class="btn btn-primary more" href="tinchitiet.php?idTin=<?php echo $row_tinmoinhat['idTin']?>">
														<div>More</div>
														<div><i class="ion-ios-arrow-thin-right"></i></div>
													</a>
												</footer>
											</div>
										</div>
									</article>
									<?php } ?>
									
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="row">
									<?php while($row_tinmoinhattieptheo=mysqli_fetch_assoc($tinmoinhattieptheo)){ $idLT = $row_tinmoinhattieptheo['idLT'];?>
									<article class="article col-md-12">
										<div class="inner">
											<figure>                                
												<a href="tinchitiet.php?idTin=<?php echo $row_tinmoinhattieptheo['idTin']?>">
													<img src="<?php echo $row_tinmoinhattieptheo['urlImg']?>" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<div class="detail">
													<div class="time"><?php echo $row_tinmoinhattieptheo['Ngay']?></div>
													<div class="category"><a href="loaitin.php?idLT=<?php echo $row_tinmoinhattieptheo['idLT']?>"><?php $d->get_tenloaitin($idLT);?></a></div>
												</div>
												<h2><a href="tinchitiet.php?idTin=<?php echo $row_tinmoinhattieptheo['idTin']?>"><?php echo $row_tinmoinhattieptheo['TieuDe']?></a></h2>
												<p><?php echo $row_tinmoinhattieptheo['TomTat']?></p>
												<footer>
													<a href="" class="love"><i class="ion-android-favorite-outline"></i> <div><?php echo $row_tinmoinhattieptheo['SoLuotLike']?></div></a>
													<a class="btn btn-primary more" href="tinchitiet.php?idTin=<?php echo $row_tinmoinhattieptheo['idTin']?>">
														<div>More</div>
														<div><i class="ion-ios-arrow-thin-right"></i></div>
													</a>
												</footer>
											</div>
										</div>
									</article>
									<?php }?>
									
								</div>
							</div>
						</div>
						<div class="banner">
						
							<a href="https://vuabia.com/">
								<img src="<?php echo $row_showAdv['urlImg2']?>" alt="Sample Article">
							</a>
						</div>
						<div class="line transparent little"></div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<h1 class="title-col">
									Tin Xem nhiều
									<div class="carousel-nav" id="hot-news-nav">
										<div class="prev">
											<i class="ion-ios-arrow-left"></i>
										</div>
										<div class="next">
											<i class="ion-ios-arrow-right"></i>
										</div>
									</div>
								</h1>
								<div class="body-col vertical-slider" data-max="4" data-nav="#hot-news-nav" data-item="article">
								<?php while($row_tinxemnhieu= mysqli_fetch_assoc($tinxemnhieu)){$idLT = $row_tinxemnhieu['idLT'];?>
									<article class="article-mini">
										<div class="inner">
											<figure>
												<a href="tinchitiet.php?idTin=<?php echo $row_tinxemnhieu['idTin']?>">
													<img src="<?php echo $row_tinxemnhieu['urlImg']?>" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<h1><a href="tinchitiet.php?idTin=<?php echo $row_tinxemnhieu['idTin']?>"><?php echo $row_tinxemnhieu['TieuDe']?></a></h1>
												<div class="detail">
													<div class="category"><a href="loaitin.php?idLT=<?php echo $row_tinxemnhieu['idLT']?>"><?php $d->get_tenloaitin($idLT);?></a></div>
													<div class="time"><?php echo $row_tinxemnhieu['Ngay']?></div>
												</div>
											</div>
										</div>
									</article>
								<?php }?>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<h1 class="title-col">
									Tin Nổi bật
									<div class="carousel-nav" id="hot-news-nav">
										<div class="prev">
											<i class="ion-ios-arrow-left"></i>
										</div>
										<div class="next">
											<i class="ion-ios-arrow-right"></i>
										</div>
									</div>
								</h1>
								<div class="body-col vertical-slider" data-max="4" data-nav="#hot-news-nav" data-item="article">
								<?php while($row_tinnoibat= mysqli_fetch_assoc($tinnoibat)){$idLT = $row_tinnoibat['idLT'];?>
									<article class="article-mini">
										<div class="inner">
											<figure>
												<a href="tinchitiet.php?idTin=<?php echo $row_tinnoibat['idTin']?>">
													<img src="<?php echo $row_tinnoibat['urlImg']?>" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<h1><a href="tinchitiet.php?idTin=<?php echo $row_tinnoibat['idTin']?>"><?php echo $row_tinnoibat['TieuDe']?></a></h1>
												<div class="detail">
													<div class="category"><a href="loaitin.php?idLT=<?php echo $row_tinnoibat['idLT']?>"><?php $d->get_tenloaitin($idLT);?></a></div>
													<div class="time"><?php echo $row_tinnoibat['Ngay']?></div>
												</div>
											</div>
										</div>
									</article>
								<?php }?>
								</div>
							</div>
						</div>
						<div class="line top">
							<div>Just Another News</div>
						</div>
						<div class="row">
						<?php while($row_listtin=mysqli_fetch_assoc($listtin)){$idLT = $row_listtin['idLT'];?>
							<article class="col-md-12 article-list">
								<div class="inner">
									<figure>
										<a href="tinchitiet.php?idTin=<?php echo $row_listtin['idTin']?>">
											<img src="<?php echo $row_listtin['urlImg']?>" alt="Sample Article" width="100%" height="400px">
										</a>
									</figure>
									<div class="details">
										<div class="detail">
											<div class="category">
												<a href="loaitin.php?idLT=<?php echo $row_listtin['idLT']?>"><?php $d->get_tenloaitin($idLT);?></a>
											</div>
											<div class="time"><?php echo $row_listtin['Ngay']?></div>
										</div>
										<h1><a href="tinchitiet.php?idTin=<?php echo $row_listtin['idTin']?>"><?php echo $row_listtin['TieuDe']?></a></h1>
										<p>
										<?php echo $row_listtin['TomTat']?>
										</p>
										<footer>
											<a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div><?php echo $row_listtin['SoLuotLike']?></div></a>
											<a class="btn btn-primary more" href="tinchitiet.php?idTin=<?php echo $row_listtin['idTin']?>">
												<div>More</div>
												<div><i class="ion-ios-arrow-thin-right"></i></div>
											</a>
										</footer>
									</div>
								</div>
							</article>
							<?php }?>
						</div>
					</div>
					<div class="col-xs-6 col-md-4 sidebar" id="sidebar">
						<div class="sidebar-title for-tablet">Sidebar</div>
						<aside>
							<div class="aside-body">
								<div class="banner">
								<a href="https://vuabia.com/">
									<img src="<?php echo $row_showAdv['urlImg1']?>" alt="Sample Article">
								</a>
									
								</div>
							</div>
						</aside>
						<aside>
							<h1 class="aside-title">Top Bài viết yêu thích <a href="#" class="all">See All <i class="ion-ios-arrow-right"></i></a></h1>
							<div class="aside-body">
							<?php while($row_tinyeuthich = mysqli_fetch_assoc($tinyeuthich)){?>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="tinchitiet.php?idTin=<?php echo $row_tinyeuthich['idTin']?>">
												<img src="<?php echo $row_tinyeuthich['urlImg']?>" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="tinchitiet.php?idTin=<?php echo $row_tinyeuthich['idTin']?>"><?php echo $row_tinyeuthich['TieuDe']?></a></h1>
										</div>
									</div>
								</article>
							<?php }?>
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
							<ul class="nav nav-tabs nav-justified" role="tablist">
								<li class="active">
									<a href="#recomended" aria-controls="recomended" role="tab" data-toggle="tab">
										<i class="ion-android-star-outline"></i> Recomended
									</a>
								</li>
								<li>
									<a href="#comments" aria-controls="comments" role="tab" data-toggle="tab">
										<i class="ion-ios-chatboxes-outline"></i> Comments
									</a>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="recomended">
								<?php 
									$row_recoment = mysqli_fetch_assoc($recoment);
									$idLT = $row_recoment['idLT'];
								?>
									<article class="article-fw">
										<div class="inner">
											<figure>
												<a href="tinchitiet.php?idTin=<?php echo $row_recoment['idTin']?>">
													<img src="<?php echo $row_recoment['urlImg']?>" alt="Sample Article">
												</a>
											</figure>
											<div class="details">
												<div class="detail">
													<div class="time"><?php echo $row_recoment['Ngay']?></div>
													<div class="category"><a href="loaitin.php?idLT=<?php echo $row_recoment['idLT']?>"><?php $d->get_tenloaitin($idLT);?></a></div>
												</div>
												<h1><a href="tinchitiet.php?idTin=<?php echo $row_recoment['idTin']?>"><?php echo $row_recoment['TieuDe'];?></a></h1>
												<p>
													<?php echo $row_recoment['TomTat']?> 
												</p>
											</div>
										</div>
									</article>
									<div class="line"></div>
									<?php 
									while($row_recomenttieptheo = mysqli_fetch_assoc($recomenttieptheo)){
										$idLT = $row_recomenttieptheo['idLT'];
									?>
									<article class="article-mini">
										<div class="inner">
											<figure>
												<a href="tinchitiet.php?idTin=<?php echo $row_recomenttieptheo['idTin']?>">
													<img src="<?php echo $row_recomenttieptheo['urlImg']?>" alt="Sample Article">
												</a>
											</figure>
											<div class="padding">
												<h1><a href="tinchitiet.php?idTin=<?php echo $row_tinmoinhattrongtheloai['idTin']?>"><?php echo $row_recomenttieptheo['TieuDe'] ?></a></h1>
												<div class="detail">
													<div class="category"><a href="loaitin.php?idLT=<?php echo $row_recomenttieptheo['idLT']?>"><?php $d->get_tenloaitin($idLT);?></a></div>
													<div class="time"><?php echo $row_recomenttieptheo['Ngay']?></div>
												</div>
											</div>
										</div>
									</article>
									<?php }?>
								</div>
								<div class="tab-pane comments" id="comments">
									<div class="comment-list sm">
										<?php while($row_showcomment = mysqli_fetch_assoc($showcomment)){ $idUser = $row_showcomment['idUser'];?>
										<div class="item">
											<div class="user">                                
												<figure>
													<img src="images/img01.jpg" alt="User Picture">
												</figure>
												<div class="details">
													<h5 class="name"><?php $d->get_tenuser($idUser);?></h5>
													<div class="time"><?php echo $row_showcomment['Ngay']?></div>
													<div class="description">
														<?php echo $row_showcomment['Content']?>
													</div>
												</div>
											</div>
										</div>
										<?php }?>
									</div>
								</div>
							</div>
						</aside>
						<aside>
							<h1 class="aside-title">Videos
								<div class="carousel-nav" id="video-list-nav">
									<div class="prev"><i class="ion-ios-arrow-left"></i></div>
									<div class="next"><i class="ion-ios-arrow-right"></i></div>
								</div>
							</h1>
							<div class="aside-body">
								<ul class="video-list" data-youtube='"carousel":true, "nav": "#video-list-nav"'>
									<li><a data-youtube-id="SBjQ9tuuTJQ" data-action="magnific"></a></li>
									<li><a data-youtube-id="9cVJr3eQfXc" data-action="magnific"></a></li>
									<li><a data-youtube-id="DnGdoEa1tPg" data-action="magnific"></a></li>
								</ul>
							</div>
						</aside>
						
					</div>
				</div>
			</div>
		</section>

		<section class="best-of-the-week">
			<div class="container">
				<h1><div class="text">Best Of The Week</div>
					<div class="carousel-nav" id="best-of-the-week-nav">
						<div class="prev">
							<i class="ion-ios-arrow-left"></i>
						</div>
						<div class="next">
							<i class="ion-ios-arrow-right"></i>
						</div>
					</div>
				</h1>
				<div class="owl-carousel owl-theme carousel-1">
					<?php while($row_bestofweek = mysqli_fetch_assoc($bestofweek)){ $idLT = $row_bestofweek['idLT'];?>
						<article class="article">
							<div class="inner">
								<figure>
									<a href="tinchitiet.php?idTin=<?php echo $row_bestofweek['idTin']?>">
										<img src="<?php echo $row_bestofweek['urlImg']?>" alt="Sample Article">
									</a>
								</figure>
								<div class="padding">
									<div class="detail">
											<div class="time"><?php echo $row_bestofweek['Ngay']?></div>
											<div class="category"><a href="loaitin.php?idLT=<?php echo $row_bestofweek['idLT']?>"><?php $d->get_tenloaitin($idLT)?></a></div>
									</div>
									<h2><a href="tinchitiet.php?idTin=<?php echo $row_bestofweek['idTin']?>"><?php echo $row_bestofweek['TieuDe']?></a></h2>
									<p><?php echo $row_bestofweek['TomTat']?></p>
								</div>
							</div>
						</article>
					<?php }?>
				</div>
			</div>
		</section>

<?php include 'footer.php';?>