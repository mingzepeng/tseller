<?php /* Smarty version 2.6.26, created on 2013-07-25 21:38:09
         compiled from content/content_modify.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'content/content_modify.tpl', 25, false),)), $this); ?>
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
      <li class="active"><a href="#home" data-toggle="tab">请填写内容类型</a></li>
    </ul>	
	
	<div id="myTabContent" class="tab-content">
		  <div class="tab-pane active in" id="home">

           <form id="tab" method="post" action="" autocomplete="off">
				<label>标题</label>
				<input type="text" name="type" value="<?php echo $this->_tpl_vars['data']['type']; ?>
" class="input-xlarge" autofocus="true" required="true" >

				<label>封面图片</label>
				<input type="text" name="img_url" value="<?php echo $this->_tpl_vars['data']['img_url']; ?>
" class="input-xlarge"  required="true">

				<label>内容类型</label>
				 <?php echo smarty_function_html_options(array('name' => 'type_id','id' => 'DropDownTimezone','class' => "input-xlarge",'options' => $this->_tpl_vars['content_type_options_list'],'selected' => $this->_tpl_vars['data']['type_id']), $this);?>


				<label>说明</label>
				<textarea name="description" rows="3" class="input-xlarge"><?php echo $this->_tpl_vars['data']['description']; ?>
</textarea>		

				<label>内容</label>
				<textarea name="content" rows="5" class="input-xlarge"><?php echo $this->_tpl_vars['data']['content']; ?>
</textarea>

				<label>地址 <span class="label label-important">如果不是外部内容链接，此处为空</span></label>
				<input type="text" name="url" value="<?php echo $this->_tpl_vars['data']['url']; ?>
" class="input-xlarge"  required="true">

				<label>TAG</label>
				<input type="text" name="tag" value="<?php echo $this->_tpl_vars['data']['tag']; ?>
" class="input-xlarge" />
				
				<label>序号 <span class="label label-important">只允许数字</span></label>
				<input type="text" name="order_no" value="<?php echo $this->_tpl_vars['data']['order_no']; ?>
" class="input-xlarge"  />

				<label>可用</label>
				<select name="used" class="input-xlarge" >
					<option value="1" selected>是</option>
					<option value="0">否</option>
				</select>		


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