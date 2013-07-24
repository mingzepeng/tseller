<?php /* Smarty version 2.6.26, created on 2013-07-24 20:57:40
         compiled from admin/user_modify.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'admin/user_modify.tpl', 35, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "navibar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "sidebar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- START 以上内容不需更改，保证该TPL页内的标签匹配即可 -->

<?php echo $this->_tpl_vars['osadmin_action_alert']; ?>

<?php echo $this->_tpl_vars['osadmin_quick_note']; ?>

<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">请修改账号资料</a></li>
    </ul>	
	
	<div id="myTabContent" class="tab-content">
		  <div class="tab-pane active in" id="home">

           <form id="tab" method="post" action="" autocomplete="off">
				
				<label>登录名 <span class="label label-info">不可修改</span></label>
				<input type="text" name="user_name" value="<?php echo $this->_tpl_vars['user']['user_name']; ?>
" class="input-xlarge" readonly="true">
				<label>密码 <span class="label label-important" >如不修改请留空</span></label>
				<input type="password" name="password" value="" class="input-xlarge">
				<label>淘宝账号</label>
				<input type="text" name="taobao_id" value="<?php echo $this->_tpl_vars['user']['taobao_id']; ?>
" class="input-xlarge">	
				<label>姓名</label>
				<input type="text" name="real_name" value="<?php echo $this->_tpl_vars['user']['real_name']; ?>
" class="input-xlarge" required="true" >
				<label>手机</label>
				<input type="text" name="mobile" value="<?php echo $this->_tpl_vars['user']['mobile']; ?>
" class="input-xlarge" required pattern="\d{11}">
				<label>邮件</label>
				<input type="email" name="email" value="<?php echo $this->_tpl_vars['user']['email']; ?>
"  class="input-xlarge" required="true" >
				<label>描述</label>
				<textarea name="user_desc" rows="3" class="input-xlarge"><?php echo $this->_tpl_vars['user']['user_desc']; ?>
</textarea>
				<label>账号组</label>
				
				<?php if ($this->_tpl_vars['user']['user_id'] == 1): ?>
				<?php echo smarty_function_html_options(array('name' => 'user_group','id' => 'DropDownTimezone','class' => "input-xlarge",'options' => $this->_tpl_vars['group_options'],'disabled' => 'true','selected' => $this->_tpl_vars['user']['user_group']), $this);?>

				<?php else: ?>
				<?php echo smarty_function_html_options(array('name' => 'user_group','id' => 'DropDownTimezone','class' => "input-xlarge",'options' => $this->_tpl_vars['group_options'],'selected' => $this->_tpl_vars['user']['user_group']), $this);?>

				<?php endif; ?>
			<div class="btn-toolbar">
				<button type="submit" class="btn btn-primary"><strong>提交</strong></button>
				<div class="btn-group"></div>
			</div>
			</form>
        </div>
    </div>
</div>	
<!-- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>