<?php /* Smarty version Smarty-3.1.15, created on 2015-08-18 13:08:55
         compiled from "view/template/sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:205115394155d2be72462469-59088883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fb477f62eee9518e070d65b2506edcecdb3df77' => 
    array (
      0 => 'view/template/sidebar.html',
      1 => 1439877337,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205115394155d2be72462469-59088883',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55d2be725a4d86_50728755',
  'variables' => 
  array (
    'page' => 0,
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d2be725a4d86_50728755')) {function content_55d2be725a4d86_50728755($_smarty_tpl) {?>	
<!--MAIN NAVIGATION-->
<!--===================================================-->
<nav id="mainnav-container">
	<div id="mainnav">

		<!--Shortcut buttons-->
		<!--================================-->
		<div id="mainnav-shortcut">
			
		</div>
		<!--================================-->
		<!--End shortcut buttons-->
		<!--<?php echo pr($_smarty_tpl->tpl_vars['page']->value['function']);?>

		<?php echo pr($_smarty_tpl->tpl_vars['page']->value['page']);?>
-->

		<!--Menu-->
		<!--================================-->
		<div id="mainnav-menu-wrap">
			<div class="nano">
				<div class="nano-content">
					<ul id="mainnav-menu" class="list-group">
						
						<li class="list-header">Home</li>

						<li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='home'&&$_smarty_tpl->tpl_vars['page']->value['function']=='index') {?>active-link<?php }?>">
							<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
home">
								<i class="fa fa-dashboard"></i>
								<span class="menu-title">
									Dashboard
								</span>
							</a>
						</li>
						<!--Category name-->
						<li class="list-header">CMS TOKO</li>
			
						<!--Menu list item-->
						<li>
							<a href="#">
								<i class="fa fa-newspaper-o"></i>
								<span class="menu-title">PRODUCT</span>
								<i class="arrow"></i>
							</a>
			
							<!--Submenu-->
							<ul class="collapse <?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='news') {?>in<?php }?>">

								<li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['function']=='addnews') {?>active-link<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
news/addnews">Category Product</a></li>
								<li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['function']=='addnews') {?>active-link<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
news/addnews">Add Product</a></li>
								<li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='news'&&$_smarty_tpl->tpl_vars['page']->value['function']=='index') {?>active-link<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
news">Product List</a></li>
							</ul>
						</li>
						<li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='gallery') {?>active-link<?php }?>">
							<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
gallery">
								<i class="fa fa-picture-o"></i>
								<span class="menu-title">
									Order
								</span>
							</a>
						</li>
						<li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='home'&&$_smarty_tpl->tpl_vars['page']->value['function']=='glosariumlist') {?>active-link<?php }?>">
							<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
home/glosariumlist">
								<i class="fa fa-book"></i>
								<span class="menu-title">Customer</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-newspaper-o"></i>
								<span class="menu-title">Blog</span>
								<i class="arrow"></i>
							</a>
			
							<!--Submenu-->
							<ul class="collapse <?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='news') {?>in<?php }?>">

								<li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['function']=='addnews') {?>active-link<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
news/addnews">Add Blog</a></li>
								<li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='news'&&$_smarty_tpl->tpl_vars['page']->value['function']=='index') {?>active-link<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
news">Blog List</a></li>
							</ul>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-newspaper-o"></i>
								<span class="menu-title">Theme & Design</span>
								<i class="arrow"></i>
							</a>
			
							<!--Submenu-->
							<ul class="collapse <?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='news') {?>in<?php }?>">

								<li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['function']=='addnews') {?>active-link<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
news/addnews">Setting Theme</a></li>
								<li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='news'&&$_smarty_tpl->tpl_vars['page']->value['function']=='index') {?>active-link<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
news">Menu</a></li>
							</ul>
						</li>
						
						
			
						<!--Category name-->
						
						<!-- <li class="list-divider"></li> -->
			
						<!--Category name-->
						<li class="list-header">User</li>
			
						<!--Menu list item-->
						<li>
							<a href="#">
								<i class="fa fa-group"></i>
								<span class="menu-title">Manage Users</span>
								<i class="arrow"></i>
							</a>
			
							<!--Submenu-->
							<ul class="collapse <?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='user') {?>in<?php }?>">
								<li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='user'&&$_smarty_tpl->tpl_vars['page']->value['function']=='index') {?>active-link<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
user">User list</a></li>
								<li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page']=='home'&&$_smarty_tpl->tpl_vars['page']->value['function']=='wilayah') {?>active-link<?php }?>">
									<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
home/wilayah">
										Wilayah
									</a>
								</li>
							</ul>
						</li>
					</ul>

				</div>
			</div>
		</div>
		<!--================================-->
		<!--End menu-->

	</div>
</nav>
<!--===================================================-->
<!--END MAIN NAVIGATION-->
<?php }} ?>
