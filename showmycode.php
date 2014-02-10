<?php
include_once ( './geshi.php' );
include_once ( './config.php' );
$conn = @mysql_connect( SQL_HOST , SQL_USER , SQL_PASS ) or die( 'MySQL connection error' . mysql_error() );
mysql_select_db( SQL_DB , $conn );
$table = SQL_TABLE;
$output = mysql_query( "SELECT * FROM `{$table}` WHERE `codeID`='$_GET[id]'" );
$result = mysql_fetch_array( $output );
?>
This Page's Address :
<?php
$address = SITE_URL.'/showmycode.php?id=' . $_GET[ 'id' ];
echo "<a href=\"{$address}\">{$address}</a>&nbsp;&nbsp;";
?>
<input type="button" name="copy" onClick='copyToClipBoard()'
	value="Copy to share">
<script language="javascript"> 
    function copyToClipBoard()
    { 
        var clipBoardContent=""; 
        clipBoardContent+=this.location.href; 
        window.clipboardData.setData("Text",clipBoardContent); 
        alert("Copy Succeed!"); 
    } 
</script>
<br />
<br />
Author:<?=$result[ 'Name' ]?>
<br />
<br />
Description: <?=$result[ 'Info' ]?>
<br />
<br />
Code:
<br />
[<?=$result[ 'Lan' ]?>]
<?php
$geshi = new GeSHi( $result[ 'Code' ] , $result[ 'Lan' ] );
$geshi -> set_line_style( 'color: grey; font-weight: bold;' , 'color: blue; font -weight: bold' );
$geshi -> enable_line_numbers( GESHI_NORMAL_LINE_NUMBERS , 37 );
$geshi -> set_overall_style( 'background:whitesmoke;' , true );
echo $geshi -> parse_code();
mysql_close( $conn );
include ( 'foot.php' );
?>