<?php 
	$items = "";
	$genders = array('woman','man');
	$type = isset($_GET['type']) ? $_GET['type'] : 'IN_TOWN';

	$url = "https://managerfashion.com/api/v2/5683nz91rvtpbdasmyrjjmulftm94h/talents";
	$json = file_get_contents($url,0,null,null);
	$models_request = json_decode($json);

	$models = array();
	foreach ($models_request as $key => $tp) {
		if($tp->status == '1' ){
			$last = trim($tp->name) != '' ? ' '.trim($tp->name) : '';
			$tp->fullname = trim($tp->name);

			$models['modbyId'][$tp->id] = $tp;
		}
	}

	function checkIfMaterialAvailable($m){
		return ($m->book == 0 && $m->snap == 0 && $m->compo == 0 && $m->video == 0) ? false : true;
	}


	if($type == 'man' || $type == 'woman'){

		foreach($models['modbyId'] as $kl => $m){
			$cover = $m->cover_xbig;
			if($type == $m->gender && checkIfMaterialAvailable($m))
			{

				$items .= '

		    		<div class="col-md-3 col-sm-6 col-xs-6 ps0">
						<div class="talents-list-itm">
							<a href="index.php?section=talents&profile='.$m->id.'">
								<img src="'.$cover.'?v=vdop190">
								<h5>'.$m->fullname.'</h5>
							</a>
						</div>
					</div>';
			}
		}

	}else{

		foreach($models['modbyId'] as $kl => $m){
			$cat = $m->categories;
			$cat2 = (array) $cat;
			$cover = $m->cover_xbig;
			if(in_array('IN TOWN',$cat2) && checkIfMaterialAvailable($m))
			{
				$items .= '

		    		<div class="col-md-3 col-sm-6 col-xs-6 ps0 lista-models">
						<div class="talents-list-itm">
							<a href="index.php?section=talents&profile='.$m->id.'">
								<img src="'.$cover.'?v=vdop190">
								<h5>'.$m->fullname.'</h5>
							</a>
						</div>
					</div>';
			}
		}

	}


	//$femeninoMenu = $masculinoMenu = $modelList['man'] = $modelList['woman'] = '';
/*if($items == '' || $_GET['type'] == 'INFLUENCERS'){
		$items = '<div class="col-xs-12 text-center"><h1 class="coming-soon">coming soon</h1></div>';
	}*/
   // $include_js = '<script src="js/settings_talents.js"></script>';

	ob_start();
?>
<div class="clear"></div>
<div class="container">
	<div class="row">
		<?php echo $items; ?>
	</div>
</div>
<?php
	$content .= ob_get_clean();
?>
