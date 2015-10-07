<?php

class product extends Controller {
	
	var $models = FALSE;
	
	public function __construct()
	{
		parent::__construct();

		global $app_domain;
		global $basedomain;
		
		$this->loadmodule();
		$this->view = $this->setSmarty();
		$sessionAdmin = new Session;
		$this->admin = $sessionAdmin->get_session();
		// $this->validatePage();
		$this->view->assign('app_domain',$app_domain);
	}
	public function loadmodule()
	{	
		$this->mcategory = $this->loadModel('categoryHelper');
		$this->mproduct = $this->loadModel('productHelper');
	}
	
	public function index(){
		

		return $this->loadView('product/listProduct');

	}

	public function formAddProduct(){
		
		$getCategory = $this->mcategory->getParent();
		
		$this->view->assign('categories', $getCategory);

		return $this->loadView('product/addProduct');

	}
	
	public function addProduct(){
		
		$getProduct = $this->mproduct->addProduct();
		
	}
	
	public function formCatProduct(){
		$getParent = $this->mcategory->getParent();
		
		$this->view->assign('parents', $getParent);
		
		return $this->loadView('product/addCategory');

	}
	
	public function formEditCatProduct() {
		// echo $_GET['id'];
		
		$getOneCategory = $this->mcategory->getOneCategory($_GET['id']);
		
		$getParents = $this->mcategory->getParent();
		
		// pr($getOneCategory);
		
		$this->view->assign('category', $getOneCategory);
		
		$this->view->assign('parents', $getParents);
		
		return $this->loadView('product/editCategory');
	}
	
	public function listCatProduct(){
		
		$getCatProduct = $this->mcategory->getCategory();
		
		//pr ($getCatProduct);
		
		$this->view->assign('catProduct', $getCatProduct);

		return $this->loadView('product/listCatProduct');

	}
	public function addCatProduct() {
		global $basedomain;
		
		$getCatProduct = $this->mcategory->addCategory();
		
		 if ($getCatProduct){
		 	redirect($basedomain."product/listCatProduct");
		 } else {
		 	echo $getCatProduct;
			exit();		
		 }
	}
	public function editCatProduct() {
		global $basedomain;
		
		$getCatProduct = $this->mcategory->updateCategory();
		
		 if ($getCatProduct){
		 	redirect($basedomain."product/listCatProduct");
		 } else {
		 	echo $getCatProduct;
			exit();		
		 }
	}
	public function deleteCatProduct() {
		global $basedomain;
		
		$delCat = $this->mcategory->deleteCategory($_GET['id']);
		
		if ($delCat){
		 	redirect($basedomain."product/listCatProduct");
		 } else {
		 	echo $delCat;
			exit();		
		 }
	}

	
}

?>
