
<?php
$q = $_GET['q'];
$xml = new DOMDocument();
$xml->load("children.xml");
$c1 = $xml->getElementsByTagName('child');
$c2 = $xml->getElementsByTagName('item');
foreach ($c2 as $k) {
	$name = $k->getElementsByTagName('name');
	$nm = $name->item(0)->nodeValue;
	$auth = $k->getElementsByTagName('auth');
	$p = $auth->item(0)->nodeValue;
	$desc = $k->getElementsByTagName('description');
	$d = $desc->item(0)->nodeValue;
	if ($nm == $q) {
		echo "<br><h5>Name = $nm </h5>";
		echo "<br><h5>Author Name = $p </h5>";
		echo "<br><h5>Catagory : Children </h5>";
		echo "<br><h5>Review : $d </h5><br>";
	}
}

//name auth cat summ
?>	