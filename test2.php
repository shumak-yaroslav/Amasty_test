 <?php 

    $arr = ["red", "blue", "green", "yellow", "magenta", "black", "gold", "gray", "tomato"];
	$count = 0;
	$arrWord = [];
	$arrColor = [];
	$bufferArr = [];
	while($count != 25) {
		random();
	}

	function random() {
		global $word; 
		global $color; 
		global $arr; 
		global $bufferArr;
		global $arrWord;

		$flag = false;
		$word = array_rand($arr);
		$color = array_rand($arr);
		check($word, $color, $arr, $flag);
		}
		function check($word, $color, $arr, $flag) {
			global $arrWord;
			global $count;
			global $bufferArr;
			global $arrColor;
			for ($i=0; $i < count($arrWord); $i++) { 
				if ($arr[$word] == $arrWord[$i] || $word==$color ) {
				$flag = true;
				}
			}
		if ($flag == true) random();
		 else {
				array_push($arrWord, $arr[$word]);
				array_push($arrColor, $arr[$color]);
				$count++;
		}
		 if ($count % 5 === 0 && $count >= 5) {
	        for ($i = 0; $i < count($arrWord); $i++) {
	            array_push($bufferArr, $arrWord[$i]);
	        }
        $arrWord = [];
    }
}	
for ($i=0; $i < count($bufferArr); $i++) {
	for ($i=0; $i < 25 ; $i++) {
		if ($i==5 || $i==10 || $i==15 || $i==20 || $i==25) {
			echo "<br>";
		} 
	echo $bufferArr[$i] . "|".$arrColor[$i]. ' ';
}
}

 ?>