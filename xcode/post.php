<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Preview My Code</title>
</head>

<body>


    
<?php
include ('geshi.php');
$conn=mysql_connect('localhost','hackerchai','hackchaiyisheng');
if(!$conn)
{
  die('can not connect:'.mysql_error());
}
$encode=str_replace('\'','\\\'',$_POST['code']);
$encode=str_replace('\\','\\\\',$encode);
mysql_select_db('hackerchai',$conn);
$input="INSERT INTO code
(
Name,
Lan,
Info,
Code
)
VALUES
(
'$_POST[name]',
'$_POST[language]',
'$_POST[describe]',
'$encode'
)";
mysql_query($input,$conn);
$output=mysql_query("SELECT * FROM code WHERE Code='$encode'");
$result=mysql_fetch_array($output);
echo "Author:".$result['Name'];
echo "<br />";
echo "<br />";
echo "Description:".$result['Info'];
echo "<br />";
echo "<br />";
echo "Code:";
echo "<br />";
echo "[".$result['Lan']."]";
$geshi=&new GeSHi($result['Code'],$result['Lan']);
$geshi->enable_line_numbers(GESHI_NORMAL_LINE_NUMBERS,37);
 $geshi->set_line_style ('color: grey; font-weight: bold;', 'color: blue; font -weight: bold' ); 
$geshi->set_overall_style('background:whitesmoke;',true);
echo $geshi->parse_code();
mysql_close($conn);
echo "<p>";
echo "<a href=\"showmycode.php"."?id=".$result['codeID']."\"".">";
echo "<img border='0' id='imageButton' src='button2.jpg' height='25' width='123' alt='Get My Share Code'  fp-title='Get My Share Code'/>";
echo "</a></p>";
?>
 <?php
include('foot.php');
?> 


</body>

</html>












 
