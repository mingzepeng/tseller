<{include file ="header.tpl"}>
<{include file ="navibar.tpl"}>
<{include file ="sidebar.tpl"}>
<!-- START 以上内容不需更改，保证该TPL页内的标签匹配即可 -->

<{$osadmin_action_alert}>
<{$osadmin_quick_note}>
    
<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">请填写内容类型</a></li>
    </ul>	
	
	<div id="myTabContent" class="tab-content">
		  <div class="tab-pane active in" id="home">

           <form id="tab" method="post" action="" autocomplete="off">
				<label>标题</label>
				<input type="text" name="type" value="<{$_POST.title}>" class="input-xlarge" autofocus="true" required="true" >

				<label>封面图片</label>
				<input type="text" name="img_url" value="<{$_POST.img_url}>" class="input-xlarge"  required="true">

				<label>内容类型</label>
				 <{html_options name=type_id id="DropDownTimezone" class="input-xlarge" options=$content_type_options_list selected=0}>

				<label>说明</label>
				<textarea name="description" rows="3" class="input-xlarge"><{$_POST.description}></textarea>		

				<label>内容</label>
				<textarea name="content" rows="5" class="input-xlarge"><{$_POST.content}></textarea>

				<label>地址 <span class="label label-important">如果不是外部内容链接，此处为空</span></label>
				<input type="text" name="url" value="<{$_POST.url}>" class="input-xlarge"  required="true">

				<label>TAG</label>
				<input type="text" name="tag" value="<{$_POST.tag}>" class="input-xlarge" />
				
				<label>序号 <span class="label label-important">只允许数字</span></label>
				<input type="text" name="order_no" value="<{$_POST.order_no}>" class="input-xlarge"  />

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
<{ include file="footer.tpl" }>