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
		$this->themeModel = $this->loadModel('themeModel');
	}
	
	public function index(){
		global $upload_theme;
		global $app_domain;
		// pr($app_domain);

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

		// pr($listTheme);
		// if (is_dir($dir)){

		//   if ($dh = opendir($dir)){
		//     while (($file = readdir($dh)) !== false){
		//       echo "filename:" . $file . "<br>";
		//     }
		//     closedir($dh);
		//   }
		// }
		$urlTheme=$app_domain."applications/default/view/theme/";
		$this->view->assign('urlTheme',$urlTheme);
		$this->view->assign('listTheme',$listTheme);
		return $this->loadView('theme/listTheme');

	}

	public function formAddBlog(){
		

		return $this->loadView('blog/addBlog');

	}
	

	
}

?>
