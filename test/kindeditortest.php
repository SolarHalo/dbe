<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="js/jquery-1.8.0.min.js"></script>
<script src="kindeditor/kindeditor.js"></script>

<script>
$(document).ready(function(){
    KE.show({
        id : 'content',
        resizeMode : 1,
        shadowMode : false,
        allowPreviewEmoticons : false,
        allowUpload : true,
        syncType : 'auto',
        urlType : 'domain',
        cssPath : 'css/style.css',
        imageUploadJson : '<%=basePath%>fileUpDown/onUploadImg.do',
        items : [ 'bold', 'italic', 'underline', 'strikethrough',
                'removeformat', '|', 'insertorderedlist',
                'insertunorderedlist', '|', 'textcolor', 'bgcolor',
                'fontname', 'fontsize', '|', 'link', 'unlink',
                'emoticons', 'code', 'image', 'flash', 'quote',
                'attach', '|', 'selectall', 'source', 'about' ],
        afterCreate : function(id) {
            KE.event.ctrl(document, 13, function() {
                if(KE.isEmpty('content')){
                    alert('文章为空');
                }else{
                KE.util.setData(id);
                document.forms['editform'].submit();
                }
            });
            KE.event.ctrl(KE.g[id].iframeDoc, 13, function() {
                if(KE.isEmpty('content')){
                    alert('文章为空');
                }else{
                KE.util.setData(id);
                document.forms['editform'].submit();
                }
            });
        }
    });
});
 
</script>

<title>html</title>
</head>

<body>
	<form id="editform" name="editform" action="article/showDemo_DemoEditContent.do" method="post" onsubmit="return check.form_submit();">
                <textarea id="content" name="content" style="width: 580px; height: 250px; "></textarea>
                <br />
                您当前输入了
                <span id="word_count1">0</span> 个文字。（字数统计包含HTML代码。）
                <br />
 
                您当前输入了
                <span id="word_count2">0</span> 个文字。（字数统计包含纯文本、IMG、EMBED，不包含换行符，IMG和EMBED算一个文字。）
                <br />
                <button id="id_submit">
                    提交
                </button>(提交快捷键: Ctrl + Enter)
                <br />
                <input type="button" name="button" value="取得HTML" onclick="javascript:alert(KE.html('content'));" />
                <input type="button" name="button" value="判断是否为空" onclick="javascript:alert(KE.isEmpty('content'));" />
                <input type="button" name="button" value="取得文本" onclick="javascript:alert(KE.text('content'));" />
                <input type="button" name="button" value="取得文本(包含img,embed)"
                    onclick="javascript:alert(KE.util.getPureData('content'));" />
                <input type="button" name="button" value="取得选中HTML" onclick="javascript:alert(KE.selectedHtml('content'));" />
                <br />
                <br />
                <input type="button" name="button" value="设置HTML"
                    onclick="javascript:KE.html('content', '<h3>Hello KindEditor</h3>');" />
                <input type="button" name="button" value="设置文本"
                    onclick="javascript:KE.text('content', '<h3>Hello KindEditor</h3>');" />
                <input type="button" name="button" value="插入HTML"
                    onclick="javascript:KE.insertHtml('content', '<strong>测试内容</strong>');" />
                <input type="button" name="button" value="添加HTML"
                    onclick="javascript:KE.appendHtml('content', '<strong>Append HTML</strong>');" />
                <input type="button" name="button" value="清空内容" onclick="javascript:KE.html('content', '');" />
            </form>
</body>

</html>
