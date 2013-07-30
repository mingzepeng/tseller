<{include file ="header.tpl"}>
<{include file ="navibar.tpl"}>
<{include file ="sidebar.tpl"}>
<!-- START 以上内容不需更改，保证该TPL页内的标签匹配即可 -->

<{$osadmin_action_alert}>
<{$osadmin_quick_note}>
   <style type="text/css">
 #editor {  max-height: 250px;
    height: 250px;
    background-color: white;
    border-collapse: separate; 
    border: 1px solid rgb(204, 204, 204); 
    padding: 4px; 
    box-sizing: content-box; 
    -webkit-box-shadow: rgba(0, 0, 0, 0.0745098) 0px 1px 1px 0px inset; 
    box-shadow: rgba(0, 0, 0, 0.0745098) 0px 1px 1px 0px inset;
    border-top-right-radius: 3px; border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px; border-top-left-radius: 3px;
    overflow: scroll;
    outline: none;}
    div[data-role="editor-toolbar"] {
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.dropdown-menu a {
  cursor: pointer;
}

#files>div{float: left}
</style> 
<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">请填写内容类型</a></li>
    </ul>	
	
	<div id="myTabContent" class="tab-content">
		  <div class="tab-pane active in" id="home">

           <form id="tab" method="post" action="" autocomplete="off">
				<label>标题</label>
				<input type="text" name="type" value="<{$data.title}>" class="input-xlarge" autofocus="true" required="true" >

				<label>封面图片</label>
				<input type="text" name="img_url" value="<{$data.img_url}>" class="input-xlarge"  required="true">

				<label>内容类型</label>
				 <{html_options name="type_id" id="DropDownTimezone" class="input-xlarge" options=$content_type_options_list selected=$data.type_id}>

				<label>说明</label>
				<textarea name="description" rows="3" class="input-xlarge"><{$data.description}></textarea>		

				<label>内容</label>
   <div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">

      <div class="btn-group">
        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="icon-font"></i><b class="caret"></b></a>
          <ul class="dropdown-menu">
          </ul>
        </div>
      <div class="btn-group">
        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="icon-text-height"></i>&nbsp;<b class="caret"></b></a>
          <ul class="dropdown-menu">
          <li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
          <li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
          <li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
          </ul>
      </div>
      <div class="btn-group">
        <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i></a>
        <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="icon-italic"></i></a>
        <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="icon-strikethrough"></i></a>
        <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="icon-underline"></i></a>
      </div>
      <div class="btn-group">
        <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="icon-list-ul"></i></a>
        <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="icon-list-ol"></i></a>
        <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="icon-indent-left"></i></a>
        <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="icon-indent-right"></i></a>
      </div>
      <div class="btn-group">
        <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="icon-align-left"></i></a>
        <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="icon-align-center"></i></a>
        <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="icon-align-right"></i></a>
        <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="icon-align-justify"></i></a>
      </div>
      <div class="btn-group">
            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="icon-link"></i></a>
            <div class="dropdown-menu input-append">
                <input class="span2" placeholder="URL" type="text" data-edit="createLink" style="width:200px"/>
                <button class="btn" type="button">Add</button>
            </div>
        <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="icon-cut"></i></a>

      </div>
      
<!--       <div class="btn-group">
        <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="icon-picture"></i></a>
        <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
      </div> -->
      <div class="btn-group">
        <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="icon-undo"></i></a>
        <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="icon-repeat"></i></a>
      </div>
     
    </div>
                <div id="editor"><{$data.content}></div>

 <textarea name="content" id="content" style="display:none"></textarea>
<br />
				<label>链接地址<span class="label label-important">如果不是外部内容链接，此处为空</span></label>
				<input type="text" name="url" value="<{$data.url}>" class="input-xlarge"  required="true">

				<label>TAG<span class="label label-important">多个tag用空格隔开</span></label>
				<input type="text" name="tag" value="<{$data.tag}>" class="input-xlarge" />
				
				<label>序号 <span class="label label-important">只允许数字</span></label>
				<input type="text" name="order_no" value="<{$data.order_no}>" class="input-xlarge"  />

				<label>可用</label>
		 <{html_options name="used" id="DropDownTimezone" class="input-xlarge" options=$content_used_options_list selected=$data.used}>	
		

			<div class="btn-toolbar">
				<button type="submit" class="btn btn-primary"><strong>提交</strong></button>
				<div class="btn-group"></div>
			</div>
			</form>
        </div>
    </div>
</div>

<script src="<{$smarty.const.ADMIN_URL}>/assets/js/jquery.hotkeys.js"></script>
<script type="text/javascript" src="<{$smarty.const.ADMIN_URL}>/assets/lib/bootstrap/js/bootstrap-wysiwyg.js"></script>
<script type="text/javascript">

    function initToolbarBootstrapBindings() {
      var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 
            'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
            'Times New Roman', 'Verdana'],
            fontTarget = $('[title=Font]').siblings('.dropdown-menu');
      $.each(fonts, function (idx, fontName) {
          fontTarget.append($('<li><a data-edit="fontName ' + fontName +'" style="font-family:\''+ fontName +'\'">'+fontName + '</a></li>'));
      });
      $('a[title]').tooltip({container:'body'});
        $('.dropdown-menu input').click(function() {return false;})
            .change(function () {$(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');})
        .keydown('esc', function () {this.value='';$(this).change();});

      $('[data-role=magic-overlay]').each(function () { 
        var overlay = $(this), target = $(overlay.data('target')); 
        overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
      });

    };
    function showErrorAlert (reason, detail) {
        var msg='';
        if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
        else {
            console.log("error uploading file", reason, detail);
        }
        $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+ 
         '<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
    };
    initToolbarBootstrapBindings();  
    $('#editor').wysiwyg({ fileUploadError: showErrorAlert} );
        $("#tab").submit(function(){
        	$('#content').val($('#editor').html());
        	return true;
    })
</script>

<!-- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<{ include file="footer.tpl" }>