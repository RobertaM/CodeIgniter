<?php $requested_page = $_POST['page_num'];
$set_limit = (($requested_page - 1) * 12) . ",12";

$con = mysql_connect("localhost", "", "");

mysql_select_db("postai");
$result = mysql_query("select  * from postai order by id asc limit $set_limit");
$html = '';
 
while ($row = mysql_fetch_array($result)) {
$html .= "</pre>
<div><img src="images/&quot; . $row[" alt="" name="" /></div>
<pre>
";

}
echo $html;
exit;

?>
