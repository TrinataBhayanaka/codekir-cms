<?php

class categoryHelper extends Database 
{
	function __construct() {
        global $basedomain;
	}
	
	function addCategory() {
		global $CONFIG;
		
		$parent = _p('parent');
		$name = _p('name');
		$description = _p('description');
		$meta_description = _p('meta_description');
		$meta_keywords = _p('meta_keywords');
		$top = _p('top');
		$column = _p('column');
		$sort_order = _p('sort_order');
		$status = _p('status');
		$pathUpload = "";
		$image = uploadFile('gambar', $pathUpload, 'image');
		$date_added = date('Y-m-d H:i:s');
		
		// pr ($_FILES['gambar']);
		// echo ("<br/>");
		// pr ($image);
		// echo ("<br/>");

		
		$query = "INSERT INTO ck_category (image, parent_id, top, `column`, status, sort_order, date_added) VALUES ('{$image['full_name']}', {$parent}, {$top}, {$column}, {$status}, {$sort_order}, '{$date_added}')";
		
		// echo "<br />".$query;
		// exit();
		
		$result_query = $this->query($query);
		
		$id = $this->insert_id(); 
		
		$query_desc = "INSERT INTO ck_category_description (category_id, name, description, meta_description, meta_keyword) VALUES ({$id}, '{$name}', '{$description}', '{$meta_description}', '{$meta_keywords}')";
		
		$result_desc = $this->query($query_desc);
		
		return $result_desc && $result_query;
	}
	
	function updateCategory() {
		global $CONFIG;
		
		$id = _p('category_id');
		$parent = _p('parent');
		$name = _p('name');
		$description = _p('description');
		$meta_description = _p('meta_description');
		$meta_keywords = _p('meta_keywords');
		$top = _p('top');
		$column = _p('column');
		$sort_order = _p('sort_order');
		$status = _p('status');
		$pathUpload = "";
		$date_modified = date('Y-m-d H:i:s');
		
		
		if ($_FILES['gambar']['name'] == "") {
			$query = "UPDATE ck_category SET parent_id={$parent}, top={$top}, `column`={$column}, sort_order={$sort_order}, status={$status}, date_modified = '{$date_modified}' WHERE category_id = {$id}";
		} else {
			$image = uploadFile('gambar', $pathUpload, 'image');
			$query = "UPDATE ck_category SET image='{$image}', parent_id={$parent}, top={$top}, `column`={$column}, sort_order={$sort_order}, status={$status}, date_modified='{$date_modified}' WHERE category_id = {$id}";
		}
		
		$query_desc = "UPDATE ck_category_description SET name = '{$name}', description = '{$description}', meta_description = '{$meta_description}', meta_keyword = '{$meta_keywords}' WHERE category_id = {$id}";
		
		$result_query = $this->query($query);
		$result_desc = $this->query($query_desc);
		
		// pr ($_FILES['gambar']);
		// echo ("<br/>");
		// pr ($image);
		// echo ("<br/>");
		// echo "<br />".$query;
		// exit();
		
		return $result_desc && $result_query;
	}
	
	function getCategory() {
		$query = "SELECT * FROM ck_category AS cat1 
					JOIN ck_category_description AS catd ON cat1.category_id = catd.category_id
					ORDER BY cat1.date_added DESC";
		
		$result = $this->fetch($query,1);
		
		foreach($result as $key => $category) {
			if ($category['status'] == 1) {
				$result[$key]['status'] = 'published';
			}	else {
				$result[$key]['status'] = 'unpublished';
			}
			
			$category_id = $category['parent_id'];
			
			$query_parent = "SELECT name FROM ck_category_description WHERE category_id = {$category_id}";
			
			$parent = $this->fetch($query_parent);
			
			$result[$key]['parent_id'] = $parent['name']; 
		}
		
		return $result;
	}
	
	function getOneCategory($id="") {
		$query = "SELECT * FROM ck_category_description WHERE category_id={$id}";
		
		$result = $this->fetch($query);
		
		$query = "SELECT * FROM ck_category WHERE category_id={$id}";
		
		$result += $this->fetch($query);
		
		return $result;
	}
	
	function getParent() {
		$query = "SELECT category_id, name FROM ck_category_description";
		$result = $this->fetch($query, 1);
		
		return $result;
	}
	
	function deleteCategory($id="") {
		$query = "DELETE FROM ck_category WHERE category_id = {$id}";
		$query_desc = "DELETE FROM ck_category_description WHERE category_id = {$id}";
		
		$result = $this->query($query);
		$result_desc = $this->query($query_desc);
		
		return $result && $result_desc;
	}
	
}

?>