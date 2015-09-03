<?php
// defined ('TATARUANG') or exit ( 'Forbidden Access' );

class menu extends Controller {
	
	var $models = FALSE;
	
	public function __construct()
	{
		parent::__construct();

		global $app_domain;
		$this->loadmodule();
		$this->view = $this->setSmarty();
		$sessionAdmin = new Session;
		$this->admin = $sessionAdmin->get_session();
		// $this->validatePage();
		$this->view->assign('app_domain',$app_domain);
	}
	public function loadmodule()
	{
		
		// $this->contentHelper = $this->loadModel('contentHelper');
		$this->themeModel = $this->loadModel('theme_model');
	}
				
	
	public function index(){
		
		$menu=$this->themeModel->getAllMenu();
		$Indexmenu=$this->themeModel->getIndexMenu();
		// pr($menu);

		$this->view->assign('menu',$menu);
		$this->view->assign('menuIndex',$Indexmenu);
		return $this->loadView('theme/menu');

	}
	public function edit(){
		
		$menu=$this->themeModel->getAllMenu();

		$menuEdit=$this->themeModel->getIDMenu($_GET['id']);
		// pr($menuEdit);

		$this->view->assign('menu',$menu);
		$this->view->assign('menuEdit',$menuEdit);

		return $this->loadView('theme/menuEdit');

	}
	public function inputMenu(){
		global $basedomain;
		
		// $json=json_decode($_POST['jsonMenu'],true);
		
		$input=$this->themeModel->inputMenu($_POST);

		echo "<script>alert('Success Input');window.location.href='".$basedomain."menu'</script>";

	}
	public function updateSortMenu(){
		// pr($_POST);
		global $basedomain;
		
		$json=json_decode($_POST['jsonMenu'],true);

		$upd=$this->themeModel->updOrder($json);

		echo "<script>alert('Success');window.location.href='".$basedomain."menu'</script>";

	}
	function getUrl()
	{
		$typeLink=$_POST['linkMenu'];

		if($typeLink==1){
			$getData = $this->themeModel->getDataPage();

			$this->view->assign('getData',$getData);

			$data=$this->loadView('theme/selectUrl');
		}elseif ($typeLink==3) {
			$data = $this->themeModel->getDataPage();
		}

		if ($data){
			print json_encode(array('status'=>true,'dataVal'=>$data));
		}else{
			print json_encode(array('status'=>false));
		}
		
		exit;
	}

	
}

?>
