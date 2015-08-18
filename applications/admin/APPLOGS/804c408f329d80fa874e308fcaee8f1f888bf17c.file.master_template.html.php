<?php /* Smarty version Smarty-3.1.15, created on 2015-08-14 18:07:11
         compiled from "/home/ovancop/Data/htdocs/codekir-cms/applications/admin/view/master_template.html" */ ?>
<?php /*%%SmartyHeaderCode:157241545855cdc44cc7dce4-88316822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '804c408f329d80fa874e308fcaee8f1f888bf17c' => 
    array (
      0 => '/home/ovancop/Data/htdocs/codekir-cms/applications/admin/view/master_template.html',
      1 => 1439550429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157241545855cdc44cc7dce4-88316822',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55cdc44ceea190_40789554',
  'variables' => 
  array (
    'basedomain' => 0,
    'admin' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55cdc44ceea190_40789554')) {function content_55cdc44ceea190_40789554($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/template/meta.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body>
	<script>
		var basedomain = "<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
";
	</script>
	
	<?php if (($_smarty_tpl->tpl_vars['admin']->value)) {?>
	<div id="container" class="effect mainnav-lg">
			
			<?php echo $_smarty_tpl->getSubTemplate ("view/template/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 

			<div class="boxed">

				<!--CONTENT CONTAINER-->
				<!--===================================================-->
				<div id="content-container">
					
					<?php echo $_smarty_tpl->tpl_vars['content']->value;?>


				</div>
			<?php echo $_smarty_tpl->getSubTemplate ("view/template/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


			<?php echo $_smarty_tpl->getSubTemplate ("view/template/top-bar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


			</div>
			<?php echo $_smarty_tpl->getSubTemplate ("view/template/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php echo $_smarty_tpl->getSubTemplate ("view/template/jsplugin.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	<?php } else { ?>
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php echo $_smarty_tpl->getSubTemplate ("view/template/jsplugin.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>			<?php }} ?>
