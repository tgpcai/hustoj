<html>
<head>
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Content-Language" content="zh-cn">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>New Problem</title>
</head>
<body leftmargin="30">
<center>
<?require_once("../include/db_info.inc.php");?>
<?require_once("admin-header.php");?>
<?php
include_once("../fckeditor/fckeditor.php") ;
?>

<table border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse"  width="100%" height="50">
<tr>
<td width="100"></td>
<td>
<p align="center"><font color="#333399" size="4">Welcome To Administrator's Page of Judge Online of ACM ICPC,<?=$OJ_NAME?>.</font></td>
<td width="100"></td>
</tr>
</table>
</center>
<hr>
<h1>Add New problem</h1>
<form method=POST action=problem_add.php>
<p align=center><font size=4 color=#333399>Add a Problem</font></p>
<input type=hidden name=problem_id value=New Problem>
<p align=left>Problem Id:&nbsp;&nbsp;New Problem</p>
<p align=left>Title:<input type=text name=title size=71></p>
<p align=left>Time Limit:<input type=text name=time_limit size=20 value=1>S</p>
<p align=left>Memory Limit:<input type=text name=memory_limit size=20 value=128>MByte</p>
<p align=left>Description:<br><!--<textarea rows=13 name=description cols=80></textarea>-->

<?php
$description = new FCKeditor('description') ;
$description->BasePath = '../fckeditor/' ;
$description->Height = 600 ;
$description->Width=600;

$description->Value = '<p>Please Input Description Here</p>' ;
$description->Create() ;
?>
</p>

<p align=left>Input:<br><!--<textarea rows=13 name=input cols=80></textarea>-->

<?php
$input = new FCKeditor('input') ;
$input->BasePath = '../fckeditor/' ;
$input->Height = 600 ;
$input->Width=600;

$input->Value = '<p>Please Input Input Here</p>' ;
$input->Create() ;
?>
</p>

</p>
<p align=left>Output:<br><!--<textarea rows=13 name=output cols=80></textarea>-->


<?php
$output = new FCKeditor('output') ;
$output->BasePath = '../fckeditor/' ;
$output->Height = 600 ;
$output->Width=600;

$output->Value = '<p>Please Input Output Here</p>' ;
$output->Create() ;
?>

</p>
<p align=left>Sample Input:<br><textarea rows=13 name=sample_input cols=80></textarea></p>
<p align=left>Sample Output:<br><textarea rows=13 name=sample_output cols=80></textarea></p>
<p align=left>Test Input:<br><textarea rows=13 name=test_input cols=80></textarea></p>
<p align=left>Test Output:<br><textarea rows=13 name=test_output cols=80></textarea></p>
<p align=left>Hint:<br><textarea rows=13 name=hint cols=120></textarea></p>
<p>SpecialJudge: N<input type=radio name=spj value='0' checked>Y<input type=radio name=spj value='1'></p>
<p align=left>Source:<br><textarea name=source rows=1 cols=70></textarea></p>
<p align=left>contest:
	<select  name=contest_id>
<?
$sql="SELECT `contest_id`,`title` FROM `contest` WHERE `start_time`>NOW() order by `contest_id`";
$result=mysql_query($sql);
echo "<option value=''>none</option>";
if (mysql_num_rows($result)==0){
}else{
	for (;$row=mysql_fetch_object($result);)
		echo "<option value='$row->contest_id'>$row->contest_id $row->title</option>";
}
?>
	</select>
</p>
<div align=center>
<input type=submit value=Submit name=submit>
</div></form>
<p>
<?require_once("../oj-footer.php");?>
</body></html>

