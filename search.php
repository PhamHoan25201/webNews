<?php include 'header.php';?>
<?php 
require_once('function.php');
$d = new Management;
$search = $d->search();
$recoment = $d->recoment();
$recomenttieptheo = $d->recomenttieptheo();
$showAdv = $d->showAdv();
$row_showAdv = mysqli_fetch_assoc($showAdv);

?>
		<section class="category">
		  <div class="container">
		    <div class="row">
		      <div class="col-md-8 text-left">
		        <div class="row">
		          <div class="col-md-12">        
		            
		            <h1 class="page-title">Key search: <?php echo $_POST['keysearch'] ?></h1>
		            <p class="page-subtitle">Showing all posts with key search: <i><?php echo $_POST['keysearch'] ?></i></p>
		          </div>
		        </div>
		        <div class="line"></div>
		        <div class="row">
					<?php while($row_search = mysqli_fetch_assoc($search)){ $idLT = $row_search['idLT']  ?>
					<article class="col-md-12 article-list">
						<div class="inner">
						<figure>
							<a href="tinchitiet.php?idTin=<?php echo $row_search['idTin']?>">
								<img src="<?php echo $row_search['urlImg'];?>">
							</a>
						</figure>
						<div class="details">
							<div class="detail">
							<div class="category">
							<a href="loaitin.php?idLT=<?php echo $row_search['idLT']?>"><?php $d->get_tenloaitin($idLT);?></a>
							</div>
							<div class="time"><?php echo $row_search['Ngay']?></div>
							</div>
							<h1><a href="tinchitiet.php?idTin=<?php echo $row_search['idTin']?>"><?php echo $row_search['TieuDe']?></a></h1>
							<p>
							<?php echo $row_search['TomTat']?>
							</p>
							<footer>
							<a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div><?php echo $row_search['SoLuotLike'];?></div></a>
							<a class="btn btn-primary more" href="tinchitiet.php?idTin=<?php echo $row_search['idTin']?>">
								<div>More</div>
								<div><i class="ion-ios-arrow-thin-right"></i></div>
							</a>
							</footer>
						</div>
						</div>
					</article>
				  <?php }?>
		          
		          <div class="col-md-12 text-center">
		            <ul class="pagination">
		              <li class="prev"><a href="#"><i class="ion-ios-arrow-left"></i></a></li>
		              <li class="active"><a href="#">1</a></li>
		              <li><a href="#">2</a></li>
		              <li><a href="#">3</a></li>
		              <li><a href="#">...</a></li>
		              <li><a href="#">97</a></li>
		              <li class="next"><a href="#"><i class="ion-ios-arrow-right"></i></a></li>
		            </ul>
		            <div class="pagination-help-text">
		            	Showing 8 results of 776 &mdash; Page 1
		            </div>
		          </div>
		        </div>
		      </div>
		      <div class="col-md-4 sidebar">
		        <aside>
		          <div class="aside-body">
		            <figure class="ads">
			            <a href="https://vuabia.com/">
			              <img src="<?php echo $row_showAdv['urlImg2']?>">
			            </a>
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
		          <h1 class="aside-title">Recomended</h1>
		          <div class="aside-body">
					<?php while($row_recoment = mysqli_fetch_assoc($recoment)){
						$idLT = $row_recoment['idLT'];
					?>
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
								<div class="category"><a href="loaitin.php?idLT=<?php echo $row_recoment['idLT']?>"><?php $d->get_tenloaitin($idLT); ?></a></div>
							</div>
							</div>
						</div>
						</article>
						<?php }?>
		            <div class="line"></div>
					<?php while($row_recomenttieptheo = mysqli_fetch_assoc($recomenttieptheo)){
						$idLT = $row_recomenttieptheo['idLT'];
					?>
		            <article class="article-mini">
		              <div class="inner">
		              <figure>
			              <a href="tinchitiet.php?idTin=<?php echo $row_recomenttieptheo['idTin']?>">
			                <img src="<?php echo $row_recomenttieptheo['urlImg']?>">
		                </a>
		              </figure>
		              <div class="padding">
		                <h1><a href="tinchitiet.php?idTin=<?php echo $row_recomenttieptheo['idTin']?>"><?php echo $row_recomenttieptheo['TieuDe'];?></a></h1>
		                <div class="detail">
		                  <div class="category"><a href="loaitin.php?idLT=<?php echo $row_recomenttieptheo['idLT']?>"><?php $d->get_tenloaitin($idLT);?></a></div>
		                  <div class="time"><?php echo $row_recomenttieptheo['Ngay']?></div>
		                </div>
		              </div>
		              </div>
		            </article>
					<?php }?>
		            

		          </div>
		        </aside>
		        
		      </div>
		    </div>
		  </div>
		</section>
<?php include 'footer.php';?>