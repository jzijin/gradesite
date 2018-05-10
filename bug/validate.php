<?php
// if(empty($_POST)) {
// 	require('./bug.html');
// } else {
$link = mysqli_connect('localhost', 'root', 'root', 'grade_site');
mysqli_query($link, "set names utf8");
$data['bug_title'] = $_POST['bug_title'];
if(empty($data['bug_title'])) {
	exit("请填写标题");
}

$data['bug_content'] = $_POST['bug_content'];
if(empty($data['bug_content'])) {
	exit("请填写内容");
}

$data['pubtime'] = time();
$sql = "insert into bug (bug_title, bug_content, pubtime) values ('$data[bug_title]','$data[bug_content]',$data[pubtime])";
if(mysqli_query($link, $sql))
{
	// TODO:ajax 反馈 js弹出：
	echo '反馈成功，感谢您的反馈，我们会努力做的更好！！！';
} else {
	echo '不好意思，出了一点错误哦';
}
	
// }
?>