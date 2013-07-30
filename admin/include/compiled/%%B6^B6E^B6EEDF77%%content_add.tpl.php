<?php /* Smarty version 2.6.26, created on 2013-07-29 15:49:25
         compiled from content/content_add.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'content/content_add.tpl', 53, false),)), $this); ?>
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

<link rel="stylesheet" type="text/css" href="<?php echo @ADMIN_URL; ?>
/assets/lib/file-upload/css/jquery.fileupload-ui.css">
<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
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
				<input type="text" name="title" value="<?php echo $this->_tpl_vars['_POST']['title']; ?>
" class="input-xlarge" autofocus="true" required="true" >




				<label>内容类型</label>
				 <?php echo smarty_function_html_options(array('name' => 'type_id','id' => 'DropDownTimezone','required' => 'true','class' => "input-xlarge",'options' => $this->_tpl_vars['content_type_options_list'],'selected' => 0), $this);?>


				<label>说明</label>
				<textarea name="description" rows="3" class="input-xlarge"><?php echo $this->_tpl_vars['_POST']['description']; ?>
</textarea>		

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
                <div id="editor"></div>

 <textarea name="content" id="content" style="display:none"></textarea>
<br />
				<label>链接地址 <span class="label label-important">如果不是外部内容链接，此处为空</span></label>
				<input type="text" name="url" value="<?php echo $this->_tpl_vars['_POST']['url']; ?>
" class="input-xlarge">



				<label>TAG<span class="label label-important">多个tag用空格隔开</span></label>
				<input type="text" name="tag" value="<?php echo $this->_tpl_vars['_POST']['tag']; ?>
" class="input-xlarge" />
				
				<label>序号 <span class="label label-important">只允许数字</span></label>
				<input type="text" name="order_no" value="<?php echo $this->_tpl_vars['_POST']['order_no']; ?>
" class="input-xlarge" />

				<label>可用</label>
				<select name="used" class="input-xlarge" >
					<option value="1">是</option>
					<option value="0">否</option>
				</select>		
    <div style="display:none">
    <label>图片上传</label>
    <span class="btn btn-success fileinput-button">
        <i class="icon-plus icon-white"></i>
        <span>Add files...</span>
        <!-- The file input field used as target for the file upload widget -->
        <input id="fileupload" type="file" name="files[]" multiple>
     </span>
         <!-- The global progress bar -->
    <div id="progress" class="progress progress-success progress-striped">
        <div class="bar"></div>
    </div>
    <!-- The container for the uploaded files -->
    <div id="files" class="files clearfix"></div>
    </div>

			<div class="btn-toolbar">
				<button type="submit" class="btn btn-primary"><strong>提交</strong></button>
				<div class="btn-group"></div>
			</div>
			</form>

        </div>
    </div>
</div>
<!-- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<script src="<?php echo @ADMIN_URL; ?>
/assets/lib/file-upload/js/vendor/jquery.ui.widget.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="<?php echo @ADMIN_URL; ?>
/assets/lib/file-upload/js/load-image.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="<?php echo @ADMIN_URL; ?>
/assets/lib/file-upload/js/canvas-to-blob.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="<?php echo @ADMIN_URL; ?>
/assets/lib/file-upload/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="<?php echo @ADMIN_URL; ?>
/assets/lib/file-upload/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="<?php echo @ADMIN_URL; ?>
/assets/lib/file-upload/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="<?php echo @ADMIN_URL; ?>
/assets/lib/file-upload/js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<!-- <script src="js/jquery.fileupload-audio.js"></script> -->
<!-- The File Upload video preview plugin -->
<!-- <script src="js/jquery.fileupload-video.js"></script> -->

<!-- The File Upload validation plugin -->
<script src="<?php echo @ADMIN_URL; ?>
/assets/lib/file-upload/js/jquery.fileupload-validate.js"></script>

<script src="<?php echo @ADMIN_URL; ?>
/assets/js/jquery.hotkeys.js"></script>
<script type="text/javascript" src="<?php echo @ADMIN_URL; ?>
/assets/lib/bootstrap/js/bootstrap-wysiwyg.js"></script>

<script>
/*jslint unparam: true, regexp: true */
/*global window, $ */
$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = '<?php echo @ADMIN_URL; ?>
/admin/upload/index.php',
        uploadButton = $('<button/>')
            .addClass('btn')
            .prop('disabled', true)
            .text('Processing...')
            .on('click', function () {
                var $this = $(this),
                    data = $this.data();
                $this
                    .off('click')
                    .text('Abort')
                    .on('click', function () {
                        $this.remove();
                        data.abort();
                    });
                data.submit().always(function () {
                    $this.remove();
                    return false;
                });
            });
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        autoUpload: false,
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: 5000000, // 5 MB
        // Enable image resizing, except for Android and Opera,
        // which actually support image resizing, but fail to
        // send Blob objects via XHR requests:
        disableImageResize: /Android(?!.*Chrome)|Opera/
            .test(window.navigator.userAgent),
        previewMaxWidth: 100,
        previewMaxHeight: 100,
        previewCrop: true
    }).on('fileuploadadd', function (e, data) {
       // console.log(data);
        data.context = $('<div/>').appendTo('#files');
        $.each(data.files, function (index, file) {
            var node = $('<p/>')
                    .append($('<span/>').text(file.name));
            if (!index) {
                node
                    .append('<br>')
                    .append(uploadButton.clone(true).data(data));
            }
            node.appendTo(data.context);

        });
    }).on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
            file = data.files[index],
            node = $(data.context.children()[index]);
        if (file.preview) {
            node
                .prepend('<br>')
                .prepend(file.preview);
        }
        if (file.error) {
            node
                .append('<br>')
                .append(file.error);
        }
        if (index + 1 === data.files.length) {
            data.context.find('button')
                .text('Upload')
                .prop('disabled', !!data.files.error);
        }
    }).on('fileuploadprogressall', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        $('#progress .bar').css(
            'width',
            progress + '%'
        );
    }).on('fileuploaddone', function (e, data) {
        $.each(data.result.files, function (index, file) {
            var link = $('<a>')
                .attr('target', '_blank')
                .prop('href', file.url);
            $(data.context.children()[index])
                .wrap(link);
            $("#files").append('<input type="hidden" name="img_url[]" value="'+ encodeURIComponent(file.name) +'" />');
        });
    }).on('fileuploadfail', function (e, data) {
        $.each(data.result.files, function (index, file) {
            var error = $('<span/>').text(file.error);
            $(data.context.children()[index])
                .append('<br>')
                .append(error);
        });
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});



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

    window.prettyPrint && prettyPrint();

</script>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>