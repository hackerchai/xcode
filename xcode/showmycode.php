<?php
include ('geshi.php');
$conn=mysql_connect("localhost","hackerchai","hackchaiyisheng");
if(!$conn)
{
  die("can not connect:".mysql_error());
}
mysql_select_db("hackerchai",$conn);
$output=mysql_query("SELECT * FROM code WHERE codeID='$_GET[id]'");
$result=mysql_fetch_array($output);
echo "This Page's Address : ";
$address="http://xcode.hackerchai.com/"."showmycode.php"."?id=".$_GET['id'];
echo '<a href'.'='.'\''.$address.'\''.'>'.$address.'</a>'.'&nbsp'.'&nbsp';
?>
<input type="button" name="copy" onClick='copyToClipBoard()' value="Copy to share">
<script language="javascript"> 
   function copyToClipBoard()
  { 
    var clipBoardContent=""; 
    clipBoardContent+=this.location.href; 
    window.clipboardData.setData("Text",clipBoardContent); 
    alert("Copy Succeed!"); 
  } 
</script>
<?php
echo "<br />";
echo "<br />";
echo "Author: ".$result['Name'];
echo "<br />";
echo "<br />";
echo "Description: ".$result['Info'];
echo "<br />";
echo "<br />";
echo "Code:";
echo "<br />";
echo "[".$result['Lan']."]";
$geshi=&new GeSHi($result['Code'],$result['Lan']); 
echo $geshi->parse_code();
mysql_close($conn);
?>
 <?php
include('foot.php');
?> 

