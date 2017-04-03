<?php
		$otheritems = "";
		$meas = $meases = array();
		$mes = array('height','waist','bust','hips','eyes','hair','shoes','suit','jeans'); $i = 1;
		$mesCMIN = array('height','waist','bust','hips');
		$mesEURUSA = array('suit','shoes');
		$mesnobi = array('eyes','hair','jeans');
		foreach($mes as $ms){
			if($m->$ms != ""){
				$mesves = '';
				if(in_array($ms,$mesCMIN)){
					$ma = explode('/',$m->$ms);
					if(count($ma)==1){ $mesv = $ma[0];
					}else{
						$mesv = $ma[0].'cm';
					}
				}else if(in_array($ms,$mesEURUSA)){
					$ma = explode('/',$m->$ms);
					if(count($ma)==1){ $mesv = $ma[0];
					}else{
						$mesv = $ma[0].'EUR';
						if(isset($ma[1])){ $mesv .= '/'.$ma[1].'USA';}
					}
				}else{ $mesv = $m->$ms;}
				// $mesves = $ms == 'suit' ? $labels['dress'] : $mesves;
				if($ms == 'suit'){ $mesves = $mesv; }
				$mesves = $ms == 'eyes' ? $tabEyes[$mesv] : $mesves;
				$mesves = $ms == 'hair' ? $tabHair[$mesv] : $mesves;
				$mesves = $mesves == '' ? $mesv : $mesves;

				if($m->gender == 'man' && $ms == 'bust'){ $ms = 'Chest';}
				if($m->gender == 'woman' && $ms == 'suit'){ $ms = 'Dress';}
				array_push($meas,'
					<li class="li-meas">
						'.ucwords($ms).': <span>'.$mesv.'</span>
					</li>
						');
				array_push($meases,'
					<li class="li-meas">
						'.$labels[strtolower($ms)].': <span>'.$mesves.'</span>
					</li>
						');
			}

		}
		$btnGal = '';
		if(isset($_GET['media']))
		{
			$med = $_GET['media'];
		}
		else{
			$med = 'book';
		}
		if($med == 'snap'){
			$tmedia = isset($model_request->snap) ? new ArrayObject($model_request->snap) : array(); 
			//$tmedia = new ArrayObject($tmedia0);
		}else if($med == 'video'){
			$tmedia0 = $model_request->video;
			$tmedia = new ArrayObject($tmedia0);
		}else{
			$med = 'book';
			$tmedia0 = $model_request->book; 
			$tmedia = new ArrayObject($tmedia0);
		}

		$classBook = $med == 'book' ? ' menuItemActive ': '';
		$classSnap = $med == 'snap' ? ' menuItemActive ': '';
		$classVideo = $med == 'video' ? ' menuItemActive ': '';
		//if(isset($model_request->book)){
			$link = isset($model_request->book) ? 'index.php?section=talents&profile='.$_GET['profile'].'&media=book' : '#';
			$btnGal .= '<a class="'.$classBook.'" href="'.$link.'" style="font-size:15px;">BOOK</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ';
		//}
		//if(x){
		$link = isset($model_request->snap) ? 'index.php?section=talents&profile='.$_GET['profile'].'&media=snap' : '#';
			$btnGal .= '<a class="'.$classSnap.'" href="'.$link.'" style="font-size:15px;">POLAROIDS</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ';
		//}
		//if(isset($model_request->video)){
			$link = isset($model_request->video) ? 'index.php?section=talents&profile='.$_GET['profile'].'&media=video' : '#'; 
			$btnGal .= '<a class="'.$classVideo.'" href="'.$link.'" style="font-size:15px;">VIDEO</a>&nbsp;&nbsp;';
		//}

		$dwid = $i = 0; 
		$wgt = '100%';
		$hgt = '100%';
		$itemsA = $images['horizontal'] = $images['vertical'] = $imagesOrder = array();
		// $tmedia->asort();

		if(!empty($tmedia)){
			$k = 0;
			foreach($tmedia as $p){
				if($med == 'video'){
					$itemsA[$k]['iframe'] = getEmbedded($p->vid,$p->site,$wgt,$hgt,$k);
					$itemsA[$k]['description'] = $p->description;
				}else{
					if($med == 'compo'){
						$f = $p->file;
					}else{
						$f = $p->file_hr;
					}
					$f = str_replace('.0','.jpg',$f);

					// $f = $p->file;

					$nw = ceil($p->file_width*600/$p->file_height);
					$dwid = $dwid + ceil($p->file_width*600/$p->file_height);
					
					$image = array(
						'h' => $p->file_height,
						'w' => $p->file_width,
						'r' => $p->file_width/$p->file_height,
						'f' => $f
					);

					$layout = $image['r'] > 1 ? 'horizontal' : 'vertical';
					$layout = ($s == "compo" && $k == 0 ) ? 'vertical' : $layout;
					array_push($images[$layout], $image);
					array_push($imagesOrder,$layout);
				}

				$k++;
			}
		
		}

		if($med != 'video'){
			$data['imagesOrder'] = $imagesOrder;
			$data['images_before'] = $images;

			$qtdimages = count($images['horizontal']) + count($images['vertical']);
			$data['qtdimages'] = $qtdimages;
			$otheritems = "";
			
			$data['images_after'] = $images;
			
			// echo '<pre class="text-left">';
			// print_r($tmedia);
			// echo '<pre>';

			$i_H = $i_V = 0;
			$first_item = "1";
			for($i = 0; $i < count($imagesOrder); $i++) {

				//Feat: Images with Layout Horizontal
				if($imagesOrder[$i] == 'horizontal')
				{
					$data['indexH'.$i_H] = $i_H;
					$imageH = isset($images['horizontal'][$i_H]) ? $images['horizontal'][$i_H]['f'] : '';
					$imageH = $imageH == '' ? '' : '<img  src="'.$imageH.'" class="c_image" data-w="'.$images['horizontal'][$i_H]['w'].'" data-h="'.$images['horizontal'][$i_H]['h'].'" data-media="'.$s.'" alt = "model" >';
					$cssitem = $first_item == "1" ? " active " : "";
					$otheritems .= '
					<div class = "item'.$cssitem.'" style="height:100%;"> 
				    	<table style="width:100%;height:100%;">
				    		<tr>
				    			<td style="width:100%;height:100%;background:white;text-align:center;" valign="middle">
				    				'.$imageH.'
				    			</td>
				    		</tr>
				    	</table>
				    </div>';
					$i_H++;
				}
				if($imagesOrder[$i] == 'vertical'){
					$imageleft = $imageright = '';
					if( !empty($images['vertical']) ){
						$img = array_shift($images['vertical']);
						$imageleft = '<img  src="'.$img['f'].'" class="c_image" data-w="'.$img['w'].'" data-h="'.$img['h'].'" data-media="'.$s.'"  alt = "model" >';
					}
					if( !empty($images['vertical']) ){
						$img = array_shift($images['vertical']);
						$imageright = '<img  src="'.$img['f'].'" class="c_image" data-w="'.$img['w'].'" data-h="'.$img['h'].'" data-media="'.$s.'"  alt = "model" >';
					}
					$cssitem = $first_item == "1" ? " active " : "";
					$otheritems .= '
					<div class = "item'.$cssitem.'"> 
				    	<table style="width:100%;height:100%;background:white;">
				    		<tr>
				    			<td style="width:50%;height:100%;text-align:center;" valign="middle">
				    				'.$imageleft.'
				    			</td>
				    			<td style="width:50%;height:100%;text-align:center;" valign="middle">
				    				'.$imageright.'
				    			</td>
				    		</tr>
				    	</table>
				    </div> 
				';
				$find = false;
					for ($k=($i+1); $k < count($imagesOrder); $k++) { 
						if($imagesOrder[$k] == 'vertical' && $find == false){
							// unset($imagesOrder[$k]);
							$imagesOrder[$k] = 'skip';
							$find = true;
						}
					}
					// $i_V++;
				}
				$first_item = "0";
			}

			//Feat: Polas
			$snap = '';
			if(isset($model_request->snap)){
				foreach ($model_request->snap as $sn) {
					$snap = '<img src="'.$sn->file.'" width="100%">';
				}
			}
		}else{
			$videoplayer = $videomenu = '';
			$videoSelected = '0';
			if(isset($_GET['vid']) && isset($itemsA[$_GET['vid']])){ $videoSelected = $_GET['vid']; }
			foreach ($itemsA as $key => $video) {
				$classMenuItem = '';				
				if($key == $videoSelected){
					$classMenuItem = ' active ';
					$videoplayer = $video['iframe'];
				}
				$videomenu .= '<a href="index.php?section=talents&profile='.$_GET['profile'].'&media=video&vid='.$key.'" class="link-video'.$classMenuItem.'">'.$video['description'].'</a>&nbsp;&nbsp;';
				
				//$videoplayer .= '<a href="index.php?section=model&id='.$_GET['id'].'&media=video">'.$video['vid'].'</a>';
			}
		}
		$include_js .= "<script src='js/gallery.js?v=12223'></script>";
	ob_start();
?>

<div class="container container-gallery">

	<div class="gallery-menu-wrapper">
		<table height="30" width="100%;" style="margin-bottom:10px;">
			<tr>
				<td valign="middle" style="text-align:right;">
					<?php echo $btnGal; ?>
				</td>
			</tr>
		</table>
	</div>
<?php
	if($med != 'video'):
		$otheritems = $otheritems == '' ? 'This Gallery is empty' : $otheritems; 
?>
	<div class="container-setas">
		<div class="gallery-wrapper" data-width="" data-height="" style="margin:auto;">
			<div id="talent-gallery" class="carousel slide" height="auto" style="height:100%;">

				<div class="carousel-inner" role="listbox" style="height:100%;">
				<?php echo $otheritems;?>
				</div>
			</div>	
		</div>
		<a class="left carousel-control" href="#talent-gallery" role="button" data-slide="prev">
			<table height="100%" width="100%">
				<tr>
					<td valign="middle">
						<img src="images/slide-arrow.png" height="50" class="img-flipped">
					</td>
				</tr>
			</table>
		</a>
		<a class="right carousel-control" href="#talent-gallery" role="button" data-slide="next">
			<table height="100%" width="100%">
				<tr>
					<td valign="middle" width="50" height="auto">
						<img src="images/slide-arrow.png" height="50">
					</td>
				</tr>
			</table>
		</a>
	</div>
<?php 
	else:
?>
		<div class="container-video-titles" style="text-align:center;"><?php echo $videomenu; ?></div>	
		<div class="container-video"><?php echo $videoplayer; ?></div>
		
<?php
	endif;
?>
		<div class="profile">
				<ul>
					<?php echo implode(" ",$meas)  ;?>
				</ul>
				<div class="talent-name"><?php echo $m->name; ?></div>
			<div style="clear:both;"></div>
		</div>
</div>

<?php 

function getEmbedded($vid,$sit,$wgt,$hgt,$visible){
    $em = '';
    $display = $visible == 1 ? '': 'display:none;';

    if($sit == "youtube"){ $em .= '<iframe class="ivideo" width="'.$wgt.'" height="'.$hgt.'" src="https://www.youtube.com/embed/'.$vid.'" frameborder="0" allowfullscreen></iframe>';}
    if($sit == "dailymotion"){ $em .= '<iframe class="ivideo" style="'.$display.'" frameborder="0" width="'.$wgt.'" height="'.$hgt.'" src="https://www.dailymotion.com/embed/video/'.$vid.'" wmode="transparent"></iframe>';}
    if($sit == "vimeo"){ $em .= '<iframe class="ivideo" style="'.$display.'" src="https://player.vimeo.com/video/'.$vid.'?title=0&amp;byline=0&amp;portrait=0" width="'.$wgt.'" height="'.$hgt.'" frameborder="0" wmode="transparent" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';}
    if($sit == "wistia"){ $em .= '<iframe class="ivideo" style="'.$display.'" src="//fast.wistia.net/embed/iframe/'.$vid.'?videoFoam=false" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="'.$wgt.'" height="'.$hgt.'"></iframe>';}
    return $em;
}

?>
<?php
$content = ob_get_clean();
?>
