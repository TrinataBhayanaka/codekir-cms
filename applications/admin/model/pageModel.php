<?php
class pageModel extends Database {
	
	
	
	function InpPage($data)
	{
		// pr($data);
		// exit;
		$query = "INSERT INTO ck_news_content (title,file,content,articleType) VALUES ('{$data['title']}', '{$data['image']}', '{$data['isi']}','1')";
		
		$result = $this->query($query);
		
		return $result;
	}
}
?>