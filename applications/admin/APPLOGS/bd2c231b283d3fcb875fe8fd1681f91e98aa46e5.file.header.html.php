<?php /* Smarty version Smarty-3.1.15, created on 2015-08-18 13:08:55
         compiled from "view/template/header.html" */ ?>
<?php /*%%SmartyHeaderCode:28780712455d2be7243f1a6-47677042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd2c231b283d3fcb875fe8fd1681f91e98aa46e5' => 
    array (
      0 => 'view/template/header.html',
      1 => 1439877610,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28780712455d2be7243f1a6-47677042',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55d2be72458cd6_48975023',
  'variables' => 
  array (
    'basedomain' => 0,
    'admin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d2be72458cd6_48975023')) {function content_55d2be72458cd6_48975023($_smarty_tpl) {?>
<!--NAVBAR-->
<!--===================================================-->
<header id="navbar">
	<div id="navbar-container" class="boxed">

		<!--Brand logo & name-->
		<!--================================-->
		<div class="navbar-header">
			<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
" class="navbar-brand">
				<img src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
images/logo.png" alt="Logo" class="brand-icon">
				<div class="brand-title">
<<<<<<< HEAD
					<span class="brand-text">CMS CODEKIR</span>
=======

					<span class="brand-text">Administration</span>

>>>>>>> fee896a4e5195819250f12a4d442f49d673cb1bc
				</div>
			</a>
		</div>
		<!--================================-->
		<!--End brand logo & name-->

		<!--Navbar Dropdown-->
		<!--================================-->
		<div class="navbar-content clearfix">
			<ul class="nav navbar-top-links pull-left">

				<!--Navigation toogle button-->
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<li class="tgl-menu-btn">
					<a class="mainnav-toggle" href="#">
						<i class="fa fa-navicon fa-lg"></i>
					</a>
				</li>
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<!--End Navigation toogle button-->



				<!--Messages Dropdown-->
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<!-- <li class="dropdown">
					<a href="#" data-toggle="dropdown" class="dropdown-toggle">
						<i class="fa fa-envelope fa-lg"></i>
						<span class="badge badge-header badge-warning">1</span>
					</a> -->

					<!--Message dropdown menu-->
					<!-- <div class="dropdown-menu dropdown-menu-md with-arrow">
						<div class="pad-all bord-btm">
							<p class="text-lg text-muted text-thin mar-no">You have 1 message.</p>
						</div>
						<div class="nano scrollable">
							<div class="nano-content">
								<ul class="head-list"> -->
							
									<!-- Dropdown list-->
									<!-- <li>
										<a href="#" class="media">
											<div class="media-left">
												<img src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
images/ava/av2.png" alt="Profile Picture" class="img-circle img-sm">
											</div>
											<div class="media-body">
												<div class="text-nowrap">Any message goes here</div>
												<small class="text-muted">15 minutes ago</small>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div> -->

						<!--Dropdown footer-->
						<!-- <div class="pad-all bord-top">
							<a href="#" class="btn-link text-dark box-block">
								<i class="fa fa-angle-right fa-lg pull-right"></i>Show All Messages
							</a>
						</div>
					</div> -->
				</li>
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<!--End message dropdown-->




				<!--Notification dropdown-->
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<!-- <li class="dropdown">
					<a href="#" data-toggle="dropdown" class="dropdown-toggle">
						<i class="fa fa-bell fa-lg"></i>
						<span class="badge badge-header badge-danger">1</span>
					</a> -->

					<!--Notification dropdown menu-->
					<!-- <div class="dropdown-menu dropdown-menu-md with-arrow">
						<div class="pad-all bord-btm">
							<p class="text-lg text-muted text-thin mar-no">You have 1 notification.</p>
						</div>
						<div class="nano scrollable">
							<div class="nano-content">
								<ul class="head-list">
									<li>
										<a href="#" class="media">
											<div class="media-left">
												<span class="icon-wrap icon-circle bg-primary">
													<i class="fa fa-comment fa-lg"></i>
												</span>
											</div>
											<div class="media-body">
												<div class="text-nowrap">Any notification goes here.</div>
												<small class="text-muted">15 minutes ago</small>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div> -->

						<!--Dropdown footer-->
						<!-- <div class="pad-all bord-top">
							<a href="#" class="btn-link text-dark box-block">
								<i class="fa fa-angle-right fa-lg pull-right"></i>Show All Notifications
							</a>
						</div>
					</div>
				</li> -->
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<!--End notifications dropdown-->



				


			</ul>
			<ul class="nav navbar-top-links pull-right">

				<!--User dropdown-->
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<li id="dropdown-user" class="dropdown">
					<a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
						<span class="pull-right">
							<img class="img-circle img-user media-object" src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
images/ava/av1.png" alt="Profile Picture">
						</span>
						<div class="username hidden-xs"><?php echo $_smarty_tpl->tpl_vars['admin']->value['username'];?>
</div>
					</a>


					<div class="dropdown-menu dropdown-menu-md dropdown-menu-right with-arrow panel-default">

						<!-- User dropdown menu -->
						<ul class="head-list">
							<li>
								<a href="#">
									<i class="fa fa-user fa-fw fa-lg"></i> Profile
								</a>
							</li>

							<!-- <li>
								<a href="#">
									<span class="badge badge-danger pull-right">9</span>
									<i class="fa fa-envelope fa-fw fa-lg"></i> Messages
								</a>
							</li> -->

							<li>
								<a href="#">
									<span class="label label-success pull-right">Upcoming</span>
									<i class="fa fa-gear fa-fw fa-lg"></i> Settings
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-question-circle fa-fw fa-lg"></i> Help
								</a>
							</li>
							<!-- <li>
								<a href="#">
									<i class="fa fa-lock fa-fw fa-lg"></i> Lock screen
								</a>
							</li> -->
						</ul>

						<!-- Dropdown footer -->
						<div class="pad-all text-right">
							<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
logout.php" class="btn btn-primary">
								<i class="fa fa-sign-out fa-fw"></i> Logout
							</a>
						</div>
					</div>
				</li>
				<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
				<!--End user dropdown-->

			</ul>
		</div>
		<!--================================-->
		<!--End Navbar Dropdown-->

	</div>
</header>
<!--===================================================-->
<!--END NAVBAR--><?php }} ?>
