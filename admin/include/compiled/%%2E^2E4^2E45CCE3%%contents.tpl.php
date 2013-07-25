<?php /* Smarty version 2.6.26, created on 2013-07-25 21:20:09
         compiled from content/contents.tpl */ ?>
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
	<a href="content_add.php"  class="btn btn-primary"><i class="icon-plus"></i> content</a>
</div>
<div class="block">
	<a href="#page-stats" class="block-heading" data-toggle="collapse">content 列表</a>
	<div id="page-stats" class="block-body collapse in">
		<table class="table table-striped">
			<thead>
			<tr>
				<th>ID</th>
				<th>标题</th>
				<th>类型</th>
				<th>作者</th>
				<th>添加时间</th>
				<th>修改时间</th>
				<th>链接</th>
				<td>顺序</td>
				<th width="80px">操作</th>
			</tr>
			</thead>
			<tbody>							  
			<?php $_from = $this->_tpl_vars['contents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['content'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['content']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['content']):
        $this->_foreach['content']['iteration']++;
?>
				 
				<tr>
				 <td><?php echo $this->_tpl_vars['content']['id']; ?>
</td>
				<td><?php echo $this->_tpl_vars['content']['title']; ?>
</td>
				<td><?php echo $this->_tpl_vars['content']['type']; ?>
</td>
				<td><?php echo $this->_tpl_vars['content']['author']; ?>
</td>
				<td><?php echo $this->_tpl_vars['content']['add_time']; ?>
</td>
				<td><?php echo $this->_tpl_vars['content']['modify_time']; ?>
</td>
				<td><?php echo $this->_tpl_vars['content']['url']; ?>
</td>
				<td><?php echo $this->_tpl_vars['content']['order_no']; ?>
</td>
				<td>

				
				<a href="content_modify.php?id=<?php echo $this->_tpl_vars['content']['id']; ?>
" title= "修改" ><i class="icon-pencil"></i></a>
				&nbsp;
				<a data-toggle="modal" href="#myModal"  title= "删除" ><i class="icon-remove" href="contents.php?method=del&id=<?php echo $this->_tpl_vars['content']['id']; ?>
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