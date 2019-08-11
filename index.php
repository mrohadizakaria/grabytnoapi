<?php
include './YouTube.class.php';
$title='Download Video Gratis';
include './header.php';
$YouTube=new YouTube;
if(file_exists('./cache/trending.json')){
$time=filemtime('./cache/trending.json')+60*60;
if($time<time()){
$trending=$YouTube->trending();
file_put_contents('./cache/trending.json',$trending);
}else{
$trending=file_get_contents('./cache/trending.json');
}
}else{
$trending=$YouTube->trending();
file_put_contents('./cache/trending.json',$trending);
}
$json=json_decode($trending);
echo '        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="main-grids">
				<div class="top-grids">
					<div class="recommended-info">
						<h3>Trending Videos</h3>
					</div>
';
foreach($json as $item){
$id=$item->id;
$title=$item->title;
$duration=$item->duration;
$channel=$item->channel;
$view=$item->view;
echo ' 					<div class="col-md-4 resent-grid recommended-grid slider-top-grids">
						<div class="resent-grid-img recommended-grid-img">
							<a href="/watch?v='.$id.'"><img src="//img.youtube.com/vi/'.$id.'/hqdefault.jpg" alt="'.$title.'" /></a>
							<div class="time">
								<p>'.$duration.'</p>
							</div>
							<div class="clck">
								<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
							</div>
						</div>
						<div class="resent-grid-info recommended-grid-info">
							<h3><a href="/watch?v='.$id.'" class="title title-info">'.$title.'</a></h3>
							<ul>
								<li><p class="author author-info"><a href="#" class="author">'.$channel.'</a></p></li>
								<li class="right-list"><p class="views views-info">'.$view.'</p></li>
							</ul>
						</div>
					</div>
';
}
echo ' 					<div class="clearfix"> </div>
				</div>
				<div class="recommended">
					<div class="recommended-grids">
						<div class="recommended-info">
							<h3>TOP Charts</h3>
						</div>
						<script src="/js/responsiveslides.min.js"></script>
						 <script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 4
							  $("#slider3").responsiveSlides({
								auto: true,
								pager: false,
								nav: true,
								speed: 500,
								namespace: "callbacks",
								before: function () {
								  $(\'.events\').append("<li>before event fired.</li>");
								},
								after: function () {
								  $(\'.events\').append("<li>after event fired.</li>");
								}
							  });
						
							});
						  </script>
						<div  id="top" class="callbacks_container">
							<ul class="rslides" id="slider3">
								<li>
									<div class="animated-grids">
';
$array=array('3','5','7','9');
$i=0;
if(file_exists('./cache/itunes.json')){
$time=filemtime('./cache/itunes.json')+60*60;
if($time<time()){
$it=$YouTube->grab('https://rss.itunes.apple.com/api/v1/id/apple-music/top-songs/10/explicit.json');
file_put_contents('./cache/itunes.json',$it);
}else{
$it=file_get_contents('./cache/itunes.json');
}
}else{
$it=$YouTube->grab('https://rss.itunes.apple.com/api/v1/id/apple-music/top-songs/10/explicit.json');
file_put_contents('./cache/itunes.json',$it);
}
$it=json_decode($it);
foreach($it->feed->results as $item){
$i++;
if(in_array($i,$array)){
echo ' 										<div class="clearfix"> </div>
									</div>
								</li>
								<li>
									<div class="animated-grids">
';
}
$name=$item->artistName;
$title=$item->name;
$img=$item->artworkUrl100;
$perm=str_replace(' ','-',strtolower($name.' '.$title));
echo ' 									<div class="animated-grids">
										<div class="col-md-3 resent-grid recommended-grid slider-first">
											<div class="resent-grid-img recommended-grid-img">
												<a href="/download/'.$perm.'/"><img src="'.$img.'" alt="'.$name.'" /></a>
											</div>
											<div class="resent-grid-info recommended-grid-info">
												<h5><a href="/download/'.$perm.'/" class="title">'.$name.' - '.$title.'</a></h5>
												<div class="slid-bottom-grids">
													<div class="slid-bottom-grid">
														<p class="author author-info"><a href="//wwww.apple.com/id/itunes/" class="author">ITUNES</a></p>
													</div>
													<div class="slid-bottom-grid slid-bottom-right">
														<p class="views views-info"></p>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
';
}
echo '
										<div class="clearfix"> </div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
';
if(file_exists('./cache/kartun.json')){
$time=filemtime('./cache/kartun.json')+60*60;
if($time<time()){
$kartun=$YouTube->search('kartun');
file_put_contents('./cache/kartun.json',$kartun);
}else{
$kartun=file_get_contents('./cache/kartun.json');
}
}else{
$kartun=$YouTube->search('kartun');
file_put_contents('./cache/kartun.json',$kartun);
}
$json=json_decode($kartun);

echo '
				<div class="recommended">
					<div class="recommended-grids">
						<div class="recommended-info">
							<h3>Video Kartun</h3>
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
echo '
						<div class="col-md-3 resent-grid recommended-grid">
							<div class="resent-grid-img recommended-grid-img">
								<a href="/watch?v='.$id.'"><img src="//img.youtube.com/vi/'.$id.'/hqdefault.jpg" alt="'.$title.'" /></a>
								<div class="time small-time">
									<p>'.$duration.'</p>
								</div>
								<div class="clck small-clck">
									<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
								</div>
							</div>
							<div class="resent-grid-info recommended-grid-info video-info-grid">
								<h5><a href="/watch?v='.$id.'" class="title">'.$title.'</a></h5>
								<ul>
									<li><p class="author author-info"><a href="#" class="author">'.$channel.'</a></p></li>
									<li class="right-list"><p class="views views-info">'.$view.'</p></li>
								</ul>
							</div>
						</div>
';
}
}
echo ' 						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
';
include './footer.php';
?>