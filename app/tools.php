<?php
	function issetEcho($isDataSet){
		echo $isDataSet;
	}

	function ifValueChecked($value1,$value2){

		if($value1 == $value2){
			echo 'checked="checked"';
		}

	}

	function isLiked($val){
		if($val == 0){
			?>
				<a class="likeButton" href="" onclick="like(this,event)">LIKE</a>
			<?php
		}else{
			?>
				<a class="likeButton dislikeButton" href="" onclick="like(this,event)">DISLIKE</a>
			<?php
		}
	}

?>