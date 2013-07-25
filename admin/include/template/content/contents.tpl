<{include file ="header.tpl"}>
<{include file ="navibar.tpl"}>
<{include file ="sidebar.tpl"}>
<!-- TPLSTART 以上内容不需更改，保证该TPL页内的标签匹配即可 -->

<{$osadmin_action_alert}>
<{$osadmin_quick_type}>
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
			<{foreach name=content from=$contents item=content}>
				 
				<tr>
				 <td><{$content.id}></td>
				<td><{$content.title}></td>
				<td><{$content.type}></td>
				<td><{$content.author}></td>
				<td><{$content.add_time}></td>
				<td><{$content.modify_time}></td>
				<td><{$content.url}></td>
				<td><{$content.order_no}></td>
				<td>

				
				<a href="content_modify.php?id=<{$content.id}>" title= "修改" ><i class="icon-pencil"></i></a>
				&nbsp;
				<a data-toggle="modal" href="#myModal"  title= "删除" ><i class="icon-remove" href="contents.php?method=del&id=<{$content.id}>#myModal" data-toggle="modal" ></i></a>
				
				</td>
				</tr>
			<{/foreach}>
		  </tbody>
		</table>
			<!--- START 分页模板 --->
				
               <{$page_html}>
					
			 <!--- END --->
	</div>
</div>

<!---操作的确认层，相当于javascript:confirm函数--->
<{$osadmin_action_confirm}>
	
<!-- TPLEND 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<{ include file="footer.tpl" }>