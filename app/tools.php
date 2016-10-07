<?php
	function issetEcho($isDataSet){
		if(isset($isDataSet)){
			echo $isDataSet;
		}else{
			echo "";
		}
	}

	function ifValueChecked($value1,$value2){

		if($value1 == $value2){
			echo 'checked="checked"';
		}

	}

?>