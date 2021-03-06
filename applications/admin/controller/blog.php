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
		$this->blogModel = $this->loadModel('blogModel');
	}
	
	public function index(){
		

		return $this->loadView('product/listProduct');

	}

	public function formAddBlog(){
		

		return $this->loadView('blog/addBlog');

	}
	public function inputBlog(){
		
		global $CONFIG;
		
           pr($_FILES);
           // pr($_POST);
		if(isset($_POST)){
            // validasi value yang masuk
           $x = form_validation($_POST);
           // pr($x);
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
							// $path_upload = 'uploadBlog';
						// }
						// pr($_FILES);
						// pr($_FILES);
						$image = uploadFile('userfile',$path_upload,'image');
						// pr($image);
						
						// foreach ($_FILES['userfile'] as $filekey => $file){
						// pr($image);
						// pr($file);
							$x['image_url'] = $CONFIG['admin']['app_url'].$image[0]['folder_name'].$image[0]['full_name'];
							$x['image'] = $image['full_name'];
							$data = $this->blogModel->InpBlog($x);

						// }
					}
					
		   		}
			   	
		   }catch (Exception $e){}
        // exit;
        $redirect = $CONFIG['admin']['base_url'].'blog/addBlog';
       
        
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
