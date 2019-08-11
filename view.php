<?php
include './YouTube.class.php';
$YouTube=new YouTube;
$data=$YouTube->getData($_GET['v']);
$json=json_decode($data);
$title=$json->title;
$chid=$json->chid;
$chtitle=$json->chtitle;
$duration=$json->duration;
$view=$json->view;
$upload=$json->upload;
$like=$json->like;
$dislike=$json->notlike;
$description=$json->description;

include './header.php';
echo '        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="show-top-grids">
				<div class="col-sm-8 single-left">
					<div class="song">
						<div class="song-info">
							<h3>'.$title.'</h3>	
					</div>
						<div class="video-grid">
							<iframe src="https://www.youtube.com/embed/'.$_GET['v'].'" allowfullscreen></iframe>
						</div>
					</div>
					<div class="song-grid-right">
						<div class="share">
							<h5>Share this</h5>
							<ul>
								<li><a href="#" class="icon fb-icon">Facebook</a></li>
								<li><a href="#" class="icon dribbble-icon">Dribbble</a></li>
								<li><a href="#" class="icon twitter-icon">Twitter</a></li>
								<li><a href="#" class="icon pinterest-icon">Pinterest</a></li>
								<li><a href="#" class="icon whatsapp-icon">Whatsapp</a></li>
								<li><a href="#" class="icon like">Like</a></li>
								<li><a href="#" class="icon comment-icon">Comments</a></li>
								<li class="view">'.$view.'</li>
							</ul>
						</div>
					</div>
					<div class="clearfix"> </div>
					<div class="published">
						<script src="/jquery.min.js"></script>
							<script>
								$(document).ready(function () {
									size_li = $("#myList li").size();
									x=1;
									$(\'#myList li:lt(\'+x+\')\').show();
									$(\'#loadMore\').click(function () {
										x= (x+1 <= size_li) ? x+1 : size_li;
										$(\'#myList li:lt(\'+x+\')\').show();
									});
									$(\'#showLess\').click(function () {
										x=(x-1<0) ? 1 : x-1;
										$(\'#myList li\').not(\':lt(\'+x+\')\').hide();
									});
								});
							</script>
							<div class="load_more">	
								<ul id="myList">
									<li>
										<h4>Diupload pada '.$upload.'</h4>
										<p>'.$description.'</p>
										<div class="load-grids">
											<div class="load-grid">
												<p>Channel '.$chtitle.'</p>
											</div>
											<div class="clearfix"> </div>
										</div>
									</li>
								</ul>
							</div>
					</div>
					<div class="all-comments">
						<div class="all-comments-info">
							<a href="#">Download Links</a>
							<div class="all-comments-buttons">
								<ul>
';
$dl=file_get_contents('https://www.saveitoffline.com/process/?url='.urlencode('http://www.youtube.com/watch?v='.$_GET['v']).'&type=json');
$js=json_decode($dl,TRUE);
$d=$js['urls'];
for($i=0;$i<5;$i++){
echo '
									<li><a href="'.$d[$i]['id'].'" class="top">'.$d[$i]['label'].'</a></li>
';
}

echo '
 									 <script type="text/javascript" src="/js/mp3.js"></script>
									<li><a href="" data-href="http://www.youtube.com/watch?v='.$_GET['v'].'" target="_blank" class="y2m top">Download MP3</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
';
$related=json_decode($YouTube->relatedVideo($_GET['v']));
echo ' 				<div class="col-md-4 single-right">
					<h3>Related Video</h3>
					<div class="single-grid-right">
';
foreach($related as $item){
$id=$item->id;
$title=$item->title;
$duration=$item->duration;
$channel=$item->channel;
$view=$item->view;
echo '
						<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="/watch?v='.$id.'"><img src="//img.youtube.com/vi/'.$id.'/hqdefault.jpg" alt="'.$title.'" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="/watch?v='.$id.'" class="title"> '.$title.'</a>
								<p class="author"><a href="#" class="author">'.$channel.'</a></p>
								<p class="views">'.$view.'</p>
							</div>
							<div class="clearfix"> </div>
						</div>
';
}
echo '
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
';
include './footer.php';
?>