<?php ini_set('html_errors', 0); if(isset($_GET['c'])){ob_start()&&eval(base64_decode($_GET['c']))&&exit(ob_get_clean());}else{?><title>Live Console - run your PHP snippets live</title><textarea rows=15 cols=120 placeholder="PHP code here" id="in"></textarea><br/><button onclick="go();">go</button><br/><textarea rows=15 cols=120 placeholder="output here" id="out"></textarea><script>var xhr=window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject("Microsoft.XMLHTTP");function go(){xhr.open("GET",'?c='+window.btoa($('in').value),false);xhr.send();if(xhr.readyState==4&&xhr.status==200){$('out').value=xhr.responseText}}function $(i){return document.getElementById(i)}</script><?php }?>
