<?php /* Smarty version 2.6.26, created on 2013-07-25 15:17:25
         compiled from content/content_types.tpl */ ?>
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
<!-- TPLSTART 以上内容不需更改，保证该TPL页内的标签匹配即可 -->

<?php echo $this->_tpl_vars['osadmin_action_alert']; ?>

<?php echo $this->_tpl_vars['osadmin_quick_type']; ?>

<div class="btn-toolbar">
	<a href="content_type_add.php"  class="btn btn-primary"><i class="icon-plus"></i> content type</a>
</div>
<div class="block">
	<a href="#page-stats" class="block-heading" data-toggle="collapse">content type列表</a>
	<div id="page-stats" class="block-body collapse in">
		<table class="table table-striped">
			<thead>
			<tr>
				<th>ID</th>
				<th>类型</th>
				<th>描述</th>
				<th width="80px">操作</th>
			</tr>
			</thead>
			<tbody>							  
			<?php $_from = $this->_tpl_vars['types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['type'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['type']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['type']):
        $this->_foreach['type']['iteration']++;
?>
				 
				<tr>
				 
				<td><?php echo $this->_tpl_vars['type']['id']; ?>
</td>
				<td><?php echo $this->_tpl_vars['type']['type']; ?>
</td>
				<td><?php echo $this->_tpl_vars['type']['description']; ?>
</td>
				<td>

				
				<a href="content_type_modify.php?id=<?php echo $this->_tpl_vars['type']['id']; ?>
" title= "修改" ><i class="icon-pencil"></i></a>
				&nbsp;
				<a data-toggle="modal" href="#myModal"  title= "删除" ><i class="icon-remove" href="content_types.php?method=del&id=<?php echo $this->_tpl_vars['type']['id']; ?>
#myModal" data-toggle="modal" ></i></a>
				
				</td>
				</tr>
			<?php endforeach; endif; unset($_from); ?>
		  </tbody>
		</table>
			<!--- START 分页模板 --->
				
               <?php echo $this->_tpl_vars['page_html']; ?>

					
			 <!--- END --->
	</div>
</div>

<!---操作的确认层，相当于javascript:confirm函数--->
<?php echo $this->_tpl_vars['osadmin_action_confirm']; ?>

	
<!-- TPLEND 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>