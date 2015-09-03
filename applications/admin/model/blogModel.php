<?php
class blogModel extends Database {
	
	
	
	function InpBlog($data)
	{
		// pr($data);
		// exit;
		$query = "INSERT INTO ck_news_content (title,file,content,articleType) VALUES ('{$data['title']}', '{$data['image']}', '{$data['isi']}','2')";
		
		$result = $this->query($query);
		
		return $result;
	}
}
?>