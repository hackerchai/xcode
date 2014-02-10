install Xcode SQL Database...
<?php
include_once( './config.php' );
// connect the SQL Database
$conn = @mysql_connect( SQL_HOST , SQL_USER , SQL_PASS ) or die( 'MySQL connection error' . mysql_error() );
@mysql_select_db( SQL_DB , $conn );
// table id:1 name:code description:basic-code-store
$table = SQL_TABLE;
$sqlcreate = "CREATE TABLE `{$table}` (`codeID` int NOT NULL AUTO_INCREMENT PRIMARY KEY,`Name` varchar(30),`Lan` varchar(20),`Info` varchar(256),`Code` longtext);";
mysql_query( $sqlcreate , $conn );
if( mysql_errno( $conn ) > 0 ){
    echo ( 'MySQL table creation failture' . mysql_error( $conn ) );
}
mysql_close( $conn );
?>