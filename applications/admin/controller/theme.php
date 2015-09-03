<?php
// defined ('TATARUANG') or exit ( 'Forbidden Access' );

class theme extends Controller {
	
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
		
		$this->contentHelper = $this->loadModel('contentHelper');
		$this->themeModel = $this->loadModel('theme_model');
	}
	
	public function index(){
		global $upload_theme;
		global $app_domain;
		// pr($app_domain);
		// exit;
		$dir = $upload_theme;
		$files = array_values(array_filter(scandir($dir), function($file) {
		    return !is_dir($file);
		}));
		// pr($files);
		foreach($files as $file){
		    $listTheme[$file]['nameFolder']=$file;
		    $listTheme[$file]['image']="image.png";

		    // $listTheme[][$file]

		}
		$getTheme=$this->themeModel->getTheme();
		// pr($getTheme);
		$urlTheme=$app_domain."applications/default/view/theme/";
		$this->view->assign('urlTheme',$urlTheme);
		$this->view->assign('listTheme',$listTheme);
		$this->view->assign('themeCurrent',$getTheme);
		return $this->loadView('theme/listTheme');

	}

	public function changeTheme(){
		
		global $basedomain;
		
		if($_GET['value']){
			$change=$this->themeModel->updTheme();
		}
		
		if($change){
			echo "<script>alert('Change Theme Succes');window.location.href='".$basedomain."theme'</script>";
			// exit;
			// redirect($basedomain."theme/index");
		}
		// else{
		// 	// echo "<script>alert('Change Theme failed');window.location.href='".$basedomain."theme'</script>";
		// 	redirect($basedomain."theme");
		
		// }

	}
	

	
}

?>
