<?php /* Smarty version 2.6.26, created on 2013-07-24 20:13:23
         compiled from admin/menu_modify.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'admin/menu_modify.tpl', 25, false),)), $this); ?>
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
      <li class="active"><a href="#home" data-toggle="tab">请填写功能资料</a></li>
    </ul>	
	
	<div id="myTabContent" class="tab-content">
		  <div class="tab-pane active in" id="home">

           <form id="tab" method="post" action="">
				<label>名称</label>
				<input type="text" name="menu_name" value="<?php echo $this->_tpl_vars['menu']['menu_name']; ?>
" class="input-xlarge" required="true">
				<label>链接 <span class="label label-important">不可重复</span></label>
				<input type="text" name="menu_url" value="<?php echo $this->_tpl_vars['menu']['menu_url']; ?>
" class="input-xlarge" required="true" >
				
				<label>所属模块</label>
				<?php if ($this->_tpl_vars['menu']['menu_id'] > 100): ?>
				<?php echo smarty_function_html_options(array('name' => 'module_id','id' => 'DropDownTimezone','class' => "input-xlarge",'options' => $this->_tpl_vars['module_options_list'],'selected' => $this->_tpl_vars['menu']['module_id']), $this);?>

				<?php else: ?>
				<?php echo smarty_function_html_options(array('name' => 'module_id','id' => 'DropDownTimezone','class' => "input-xlarge",'options' => $this->_tpl_vars['module_options_list'],'disabled' => 'true','selected' => $this->_tpl_vars['menu']['module_id']), $this);?>

				<?php endif; ?>
				<label>是否显示为左侧菜单</label>
				<?php echo smarty_function_html_options(array('name' => 'is_show','id' => 'DropDownTimezone','class' => "input-xlarge",'options' => $this->_tpl_vars['show_options_list'],'selected' => $this->_tpl_vars['menu']['is_show']), $this);?>

				<label>所属菜单</label>
				<?php echo smarty_function_html_options(array('name' => 'father_menu','id' => 'DropDownTimezone','class' => "input-xlarge",'options' => $this->_tpl_vars['father_menu_options_list'],'selected' => $this->_tpl_vars['menu']['father_menu']), $this);?>

				<label>是否有效</label>
				<?php echo smarty_function_html_options(array('name' => 'online','id' => 'DropDownTimezone','class' => "input-xlarge",'options' => $this->_tpl_vars['online_options_list'],'selected' => $this->_tpl_vars['menu']['online']), $this);?>
			 
				<label>是否允许快捷菜单 <span class="label label-important">修改/ 删除类链接不允许</span></label>
				<?php echo smarty_function_html_options(array('name' => 'shortcut_allowed','id' => 'DropDownTimezone','class' => "input-xlarge",'options' => $this->_tpl_vars['shortcut_allowed_options_list'],'selected' => $this->_tpl_vars['menu']['shortcut_allowed']), $this);?>

				<label>描述</label>
				<textarea name="menu_desc" rows="3" class="input-xlarge"><?php echo $this->_tpl_vars['menu']['menu_desc']; ?>
</textarea>
				<div class="btn-toolbar">
					<button type="submit" class="btn btn-primary"><strong>提交</strong></button>
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