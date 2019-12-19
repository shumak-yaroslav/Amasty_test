<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<link href="style.css" rel="stylesheet">
<body>
	<form action="test4.php" method="post">
    Введите название команды:  <input type="text" name="name" /><br />
    <input type="submit" name="submit" value="Найти" />
</form>
</body>
</html>
<?php
	$arr = [];
	$arr1 = [];
	$year = [];
	$arr2 = ["https://terrikon.com/football/italy/championship/table", "https://terrikon.com/football/italy/championship/2018-19/table", "https://terrikon.com/football/italy/championship/2017-18/table", "https://terrikon.com/football/italy/championship/2016-17/table", "https://terrikon.com/football/italy/championship/2015-16/table", "https://terrikon.com/football/italy/championship/2014-15/table", "https://terrikon.com/football/italy/championship/2013-14/table", "https://terrikon.com/football/italy/championship/2012-13/table", "https://terrikon.com/football/italy/championship/2011-12/table", "https://terrikon.com/football/italy/championship/2010-11/table", "https://terrikon.com/football/italy/championship/2009-10/table"];
require_once("simplehtmldom/simple_html_dom.php");
	if (isset($_POST['submit'])) {
	require_once("simplehtmldom/simple_html_dom.php");
	$name = $_POST['name'];

	for ($i=0; $i < count($arr2) ; $i++) { 
	$html = file_get_html("$arr2[$i]");

	foreach ($html->find(".id") as $item) {
		array_push($year, $item);
	}
	foreach ($html->find(".tab") as $element) {
		foreach ($element->find("tr") as $item) {
			if ($name == $item->children(1)->plaintext) {
			array_push($arr, $item->find("text", 1). $item->children(1)->plaintext);
		}

	}	
	}
}
}
 for ($i=0; $i < count($arr) ; $i++) { 
 	echo $year[$i]."<br>";
 	echo "Место: ",$arr[$i];
 }



 ?>

