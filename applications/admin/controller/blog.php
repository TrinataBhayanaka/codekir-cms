<?php
// defined ('TATARUANG') or exit ( 'Forbidden Access' );

class blog extends Controller {
	
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
		$this->marticle = $this->loadModel('marticle');
		$this->mquiz = $this->loadModel('mquiz');
		$this->mcourse = $this->loadModel('mcourse');
	}
	
	public function index(){
		

		return $this->loadView('product/listProduct');

	}

	public function formAddBlog(){
		

		return $this->loadView('blog/addBlog');

	}
	public function inputBlog(){
		
		global $CONFIG;
		
		if(isset($_POST)){
            // validasi value yang masuk
           $x = form_validation($_POST);
		   try
		   {
		   		if(isset($x) && count($x) != 0)
		   		{
					//update or insert
					
					//upload file
					if(!empty($_FILES)){
						
						// if($x['gallerytype'] == '9'){
						// 	$path_upload = 'gallery/images';
						// }else{
							$path_upload = '';
						// }
						// pr($_FILES);
						// pr($_FILES);
						$image = uploadFile('title',$path_upload,'image');
						pr($image);
						exit;
						foreach ($_FILES['file_image']['name'] as $filekey => $file){
							$x['image_url'] = $CONFIG['admin']['app_url'].$image[$filekey]['folder_name'].$image[$filekey]['full_name'];
							$x['image'] = $image[$filekey]['full_name'];
							$data = $this->gallery->gallery_inp($x);
						}
					}
					
		   		}
			   	
		   }catch (Exception $e){}
        
        $redirect = $CONFIG['admin']['base_url'].'home';
        if(isset($x['gallerytype'])){
            if($x['gallerytype']=='9'){
				$redirect = $CONFIG['admin']['base_url'].'gallery/album/?album='.$x['otherid'];
			}
        }
        
        echo "<script>alert('Data berhasil di simpan');window.location.href='".$redirect."'</script>";
        }
	}

	public function formCatProduct(){
		

		return $this->loadView('product/addProduct');

	}
	public function listCatProduct(){
		

		return $this->loadView('product/listCatProduct');

	}
	

	
}

?>
