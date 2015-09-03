<?php
class theme_model extends Database {
	
	function getIndexMenu()
	{
		// pr($data);
		// exit;
		$sql = "SELECT * FROM ck_menu WHERE parent_id='0' order by ordering";
		$data = $this->fetch($sql,1);
		// pr($res);
		if ($data) return $data;
		return false;
	}
	
	function getAllMenu()
	{
		// pr($data);
		// exit;
		$sql = "SELECT * FROM ck_menu order by ordering";
		$res = $this->fetch($sql,1);
		// pr($res);
		foreach ($res as $key => $value) {
			if ($value['parent_id']=='0') {
				$data[$key]=$value;

				foreach ($res as $keysub => $valSub) {
					if ($valSub['parent_id']==$value['id_menu']) {
						$data[$key]['subMenu'][]=$valSub;
					}
				}
			}
		}
		// pr($data);
		if ($data) return $data;
		return false;
	}

	function getIDMenu($id)
	{
		// pr($data);
		// exit;
		$sql = "SELECT * FROM ck_menu WHERE id_menu='".$id."'";
		$data = $this->fetch($sql,0);
		// pr($res);
		
		// pr($data);
		if ($data) return $data;
		return false;
	}
	function inputMenu(){

		$query = "INSERT INTO ck_menu (parent_id,title_menu,link_menu,n_status) VALUES ('{$_POST['parent']}', '{$_POST['title']}', '{$_POST['linkMenu']}','{$_POST['status']}')";
		
		
		$result = $this->query($query);

		if ($data) return $data;
		return false;
	}
	function updOrder($array,$parent=0,$i=1){
		
		foreach ($array as $k => $v) {
			$id=$array[$k]['id'];

			// echo "urutan ke ".$i." parentnya ".$parent." id=".$id."<br/>";
			// $de=$this->theme_model->updOrder($i,$parent,$id);
			$query = "UPDATE ck_menu SET ordering='".$i."',parent_id='".$parent."' WHERE id_menu='".$id."'";
		
			$result = $this->query($query);
			// pr($result);
			if(isset($array[$k]['children'])){
  				$children=$array[$k]['children'];
  				foreach ($children as $key => $obj) {
  					$child =$children[$key]['id'];

  					$i++;
  				// echo "urutan ke ".$i." parentnya ".$id." id=".$child."<br/>";
  				$query = "UPDATE ck_menu SET ordering='".$i."',parent_id='".$id."' WHERE id_menu='".$child."'";
		
				$result = $this->query($query);
						// $se=$this->theme_model->updOrder($i,$id,$child);
  				if(isset($children[$k]['children']))
  					$this->extract_value($children[$k]['children'],$child,++$i);
				
  				}

			}
			$i++;
		}
		return $result;
	}	

	function getDataPage(){

		$sql = "SELECT id,title FROM ck_news_content WHERE articleType='1'";
		$data = $this->fetch($sql,1);
		// pr($res);
		
		// pr($data);
		if ($data) return $data;
		return false;
	}
	
}
?>