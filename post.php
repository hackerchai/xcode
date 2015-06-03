<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
	<title>Preview My Code</title>

	<link rel="stylesheet" type="text/css" href="stylesheets/stylesheet.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="stylesheets/pygment_trac.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="stylesheets/print.css" media="print" />
    <link rel="icon" type="image/png" href="images/favicon.png" />
</head>

<body>
	<header>
		<div class="container">
			<h1>Xcode Program Code Share</h1>
			<p><font face="Bodoni MT Black">
				Hey , programmer! You have post your code successfully.Just click the button to get the share page
			</font></p>
		</div>
	</header>
<div class="container">
  <section id="main_content">
<?php
include_once ( './geshi.php' );
include_once ( './config.php' );
$conn = @mysql_connect( SQL_HOST , SQL_USER , SQL_PASS ) or die( 'MySQL connection error' . mysql_error( $conn ) );
$encode=$_POST['code'];
$encode = str_replace( '\\' , '\\\\' , $encode );
$encode = str_replace( '\'' , '\\\'' , $encode);
mysql_select_db( SQL_DB , $conn );
$table = SQL_TABLE;
$input = "INSERT INTO `{$table}`(`Name`,`Lan`,`Info`,`Code`)
VALUES('$_POST[name]','$_POST[language]','$_POST[describe]','$encode');";
mysql_query( $input , $conn );
if( mysql_errno( $conn ) > 0 ){
    echo 'Error caught at Line 24,details' . mysql_error( $conn );
}
$id = mysql_insert_id( $conn );
$output = mysql_query( "SELECT * FROM `$table` WHERE `codeID`=$id;" );
if( mysql_errno( $conn ) > 0 ){
    echo 'Error caught at Line 29,details' . mysql_error( $conn );
}
$result = mysql_fetch_array( $output );
?>
Author:<?=$result[ 'Name' ]?>
<br />
	<br />
Description:<?=$result[ 'Info' ]?>
<br />
	<br /> Code:
	<br />
[<?=$result[ 'Lan' ]?>]
<?php
$geshi = new GeSHi( $result[ 'Code' ] , $result[ 'Lan' ] );
$geshi -> enable_line_numbers( GESHI_NORMAL_LINE_NUMBERS , 37 );
$geshi -> set_line_style( 'color: grey; font-weight: bold;' , 'color: blue; font -weight: bold' );
$geshi -> set_overall_style( 'background:whitesmoke;' , true );
echo $geshi -> parse_code();
mysql_close( $conn );
?>
<p>
		<a href="./showmycode.php?id=<?=$result[ 'codeID' ]?>"> <img border='0'
			id='imageButton' src='button2.jpg' height='25' width='123'
			alt='Get My Share Code' fp-title='Get My Share Code' />
		</a>
	</p>
 </section>
<?php
include('foot.php');
?> 

</div>
</body>

</html>