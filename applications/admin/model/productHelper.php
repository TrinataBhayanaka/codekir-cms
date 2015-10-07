<?php
class productHelper extends Database {
	
	function __construct() {
		global $basedomain;
	}
	
	
	function addProduct() {
		$category = _p('category');
		$name = _p('name');
		$description = _p('description');
		$meta_desc = _p('meta_descriptoion');
		$meta_key = _p('meta_keywords');
		
		$model = _p('model');
		$sku = _p('sku');
		$upc = _p('upc');
		$ean = _p('ean');
		$jan = _p('jan');
		$isbn = _p('isbn');
		$mpn = _p('mpn');
		
		$weight = _p('weight');
		$weight_class = _p('weight_class');
		$length = _p('length');
		$width = _p('width');
		$height = _p('height');
		$length_class = _p('length_class'); 
		
		$location = _p('location');
		$price = _p('price');
		$quantity = _p('quantity');
		$minimum = _p('minimum');
		$substract = _p('substract');
		$shipping = _p('shipping');
		$status = _p('status');
		$date_added = date('Y-m-d H:i:s');
		
		$pathUpload = "";
		$image = uploadFile('gambar', $pathUpload, 'image');
		
		$query_product = "INSERT INTO ck_product (`model`, `sku`, `upc`, `ean`, `jan`, `isbn`, `mpn`, `location`, `quantity`, `image`, `shipping`, `price`, `weight`, `weight_class_id`, `length`, `width`, `height`, `length_class_id`, `subtract`, `minimum`, `sort_order`, `status`, `date_added`) VALUES ('{$model}', '{$sku}', '{$upc}', '{$ean}', '{$jan}', '{$isbn}', '{$mpn}', '{$location}', {$quantity}, '{$image}', '{$shipping}', {$price}, {$weight}, '{$weight_class}', {$length}, {$width}, {$height}, '{$length_class}', '{$substract}', {$minimum}, '', {$status}, '{$date_added}' )";
		
		echo "<br />".$query_product;
		echo "<br />";
		pr($image);
	}
}
?>