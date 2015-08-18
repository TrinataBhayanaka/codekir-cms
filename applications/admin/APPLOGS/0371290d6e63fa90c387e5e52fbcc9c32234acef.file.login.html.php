<?php /* Smarty version Smarty-3.1.15, created on 2015-08-14 18:06:38
         compiled from "/home/ovancop/Data/htdocs/codekir-cms/applications/admin/view/login.html" */ ?>
<?php /*%%SmartyHeaderCode:73493508055cdc44b68fa30-39305603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0371290d6e63fa90c387e5e52fbcc9c32234acef' => 
    array (
      0 => '/home/ovancop/Data/htdocs/codekir-cms/applications/admin/view/login.html',
      1 => 1439550396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73493508055cdc44b68fa30-39305603',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55cdc44cba6126_79361880',
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55cdc44cba6126_79361880')) {function content_55cdc44cba6126_79361880($_smarty_tpl) {?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
css/demo/nifty-demo.min.css" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
js/demo/bg-images.js"></script>
	<div id="container" class="cls-container">
		
		<!-- BACKGROUND IMAGE -->
		<!--===================================================-->
		<div id="bg-overlay" class="bg-img"></div>
		<!-- HEADER -->
		<!--===================================================-->
		<div class="cls-header cls-header-lg">
			<div class="cls-brand">
				<a class="box-inline">
					<!-- <img alt="Admin" src="images/logo.png" class="brand-icon"> -->
					<span class="brand-title">Administration</span>
				</a>
			</div>
		</div>
		<!--===================================================-->
		<!-- LOGIN FORM -->
		<!--===================================================-->
		<div class="cls-content">
			<div class="cls-content-sm panel">
				<div class="panel-body">
					<!-- <img width="130px" src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
images/logos/logo-login.png" alt="Logo" /> -->
					<p class="pad-btm">Sign In to your account</p>
					<form action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
login/local" class="form" method="post">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-user"></i></div>
								<input type="text" class="form-control" placeholder="Username" name="username" required>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
								<input type="password" class="form-control" placeholder="Password" name="password" required>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-8 text-left checkbox">
								<label class="form-checkbox form-icon">
								<input type="checkbox"> Remember me
								</label>
							</div>
							<div class="col-xs-4">
								<div class="form-group text-right">
								<input type="hidden" name="token" value="1">
								<!-- <button class="btn btn-success text-uppercase" type="submit">Sign In</button> -->
								</div>
							</div>
						</div>
						<!-- <div class="mar-btm"><em>- or -</em></div> -->
						<button class="btn btn-primary btn-lg btn-block" type="submit">
							Sign In
						</button>
					</form>
				</div>
			</div>
			<div class="pad-ver">
				<a href="#" class="btn-link mar-rgt">Forgot password ?</a>
				<a href="#" class="btn-link mar-lft">Create a new account</a>
			</div>
		</div>
		<!--===================================================-->
	</div>
	<!--===================================================-->
	<!-- END OF CONTAINER --><?php }} ?>
