<?php
include './YouTube.class.php';
$YouTube=new YouTube;
$q=str_ireplace('-',' ',$_GET['q']);
if(!empty($_GET['token'])){
$res=$YouTube->search($q,base64_decode($_GET['token']));
}else{
$res=$YouTube->search($q);
}
$json=json_decode($res);
$nextToken = $YouTube->nextToken;
$prevToken = $YouTube->prevToken;
$title='Video dan mp3 '.ucwords(str_replace('-',' ',$_GET['q'])).'';
include './header.php';
echo '        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="show-top-grids">
				<div class="col-sm-10 show-grid-left main-grids">
					<div class="recommended">
						<div class="recommended-grids english-grid">
							<div class="recommended-info">
								<div class="heading">
									<h3>'.$title.'</h3>
								</div>
								<div class="clearfix"> </div>
							</div>
';
foreach($json as $item){
$type=$item->type;
if($type=='video'){
$id=$item->id;
$title=ucwords($item->title);
$duration=$item->duration;
$channel=ucwords(substr($item->channel,0,10)).'...';
$view=$item->view;
echo ' 							<div class="col-md-2 resent-grid recommended-grid show-video-grid">
								<div class="resent-grid-img recommended-grid-img">
									<a href="/watch?v='.$id.'"><img src="//img.youtube.com/vi/'.$id.'/hqdefault.jpg" alt="'.$title.'" /></a>
									<div class="time small-time show-time">
										<p>'.$duration.'</p>
									</div>
									<div class="clck show-clock">
										<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
									</div>
								</div>
								<div class="resent-grid-info recommended-grid-info">
									<h5><a href="/watch?v='.$id.'" class="title">'.$title.'</a></h5>
									<p class="author"><a href="#" class="author">'.$channel.'</a></p>
									<p class="views">'.$view.'</p>
								</div>
							</div>
';
}
}
if(!empty($prevToken)){
echo '
 <a  href="/download/'.$_GET['q'].'/page/'.base64_encode($prevToken).'/" class="play-icon popup-with-zoom-anim">Sebelumnya</a>
';
}
if(!empty($nextToken)){
echo '
 <a  href="/download/'.$_GET['q'].'/page/'.base64_encode($nextToken).'/" class="play-icon popup-with-zoom-anim">Selanjutnya</a>
';
}
echo ' 							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
';
echo ' 				<div class="col-md-2 show-grid-right">
					<h3>Download Terakhir</h3>
';
for($i=0;$i<10;$i++){
$qu='Pencarian '.$i.'';
$url=strtolower(str_replace(' ','-',$qu));
echo '
					<div class="show-right-grids">
						<ul>
							<li class="tv-img"><a href="/download/'.$url.'/"><img src="/images/tv.png" alt="'.$qu.'" /></a></li>
							<li><a href="/download/'.$url.'/">'.$qu.'</a></li>
						</ul>
					</div>
';
}
echo '
				</div>
				<div class="clearfix"> </div>
			</div>
';
include './footer.php';
?>