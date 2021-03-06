﻿<html>

<head>
	<meta http-equiv="Content-Language" content="zh-cn">
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
    <title>Xcode Program Code Share</title>

    <link rel="stylesheet" type="text/css" href="stylesheets/stylesheet.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="stylesheets/pygment_trac.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="stylesheets/print.css" media="print" />
    <link rel="icon" type="image/png" href="images/favicon.png" />
    
</head>

<body>
    <bgsound src="SmoothCriminal.mp3" loop="-1"></bgsound>
	<header>
		<div class="container">
			<h1>Xcode Program Code Share</h1>
			<p><font face="Bodoni MT Black">
				Hey , programmer! Type or just copy the code you want to share.
			</font></p>
			
		</div>
	</header>

	<div class="container">
      <section id="main_content">
      	<form method="POST" action="post.php">
      	<h2>Author:<input type="text" name="name" size="20"></input></h2>
      	<h2>Language:<select size="1" name="language" tabindex="0">
	                    <option>php</option>
	                    <option>cpp-qt</option>
						<option>css</option>
						<option>d</option>
						<option>delphi</option>
						<option>dos</option>
						<option>emacscript</option>
						<option>fo</option>
						<option>fortan</option>
						<option>freebasic</option>
						<option>fsharp</option>
						<option>go</option>
						<option>html4strict</option>
						<option>html5</option>
						<option>ini</option>
						<option>actionscript</option>
						<option>java5</option>
						<option>javascript</option>
						<option>jquery</option>
						<option>lisp</option>
						<option>lua</option>
						<option>matlab</option>
						<option>mysql</option>
						<option>pascal</option>
						<option>perl</option>
						<option>postgresql</option>
						<option>ruby</option>
						<option>vb</option>
						<option>vbnet</option>
						<option>vim</option>
						<option>xml</option>
						<option>algo168</option>
						<option>applescript</option>
						<option>arm</option>
						<option>asm</option>
						<option>asp</option>
						<option>autoconf</option>
						<option>bash</option>
						<option>boo</option>
						<option>c</option>
						<option>c_mac</option>
						<option>cadlisp</option>
						<option>cfdg</option>
						<option>chaiscript</option>
						<option>cobol</option>
						<option>coffeescript</option>
						<option>cpp</option>
						<option>apache</option>
	                    <option>csharp</option>
	                    <option>java</option>
                        <option>python</option>
	                </select>
	            </h2>
	   <h2>Description:<input type="text" name="describe" size="100"></input></h2>
	   <h2>Code:<textarea id="code" name="code" rows="250" cols="250"></textarea><h2>      
       <input type="submit" value="Share Your Code" name="B1" style="font-weight: bold"></input>
   </form>
<link rel="stylesheet" href="/lib/codemirror.css"></link>
<script src="/lib/codemirror.js"></script>
<script src="/addon/mode/multiplex.js"></script>
<script src="/mode/xml/xml.js"></script>
<style type="/text/css">
      .CodeMirror {border: 5px solid black;}
      .cm-delimit {color: #fa4;}
 </style>
<script>
   CodeMirror.defineMode("demo", function(config) {
   return CodeMirror.multiplexingMode(
   CodeMirror.getMode(config, "text/html"),
   {open: "<<", close: ">>",
    mode: CodeMirror.getMode(config, "text/plain"),
     delimStyle: "delimit"}
    // .. more multiplexed styles can follow here
  );
});
var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
  mode: "demo",
  lineNumbers: true,
  lineWrapping: true
});
</script>





</section>
</div>
</body>

</html>
<?php
include('foot.php');
?>
