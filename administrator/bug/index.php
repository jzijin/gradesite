<?php
// 这里是bug反馈
$link = mysqli_connect('localhost', 'root', 'root', 'grade_site');
$sql = "set names utf8";
mysqli_query($link, $sql);

$sql = "select *from bug order by bug_id desc";
$rs = mysqli_query($link, $sql);

//得到二维数组
//$arr 为查询到的二维数组
$arr = [];
while($row = mysqli_fetch_assoc($rs)) {
	$arr[] = $row;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>bug反馈</title>
</head>
<style>
	#content {
		text-align: center;
		margin: 0 auto;
		width: 1100px;
		/* background: rgb(220, 220, 220, 75); */
		/*background: blue;*/
    }
    body {
        background: #EFEFEF;
    }

    article {
        background: white;
        margin-bottom: 20px;
        padding: 40px;
    }

    article h2 {
        font: 30px/36px '微软雅黑','黑体',sans-serif;
    }

    article a,article:visited {
        color: #1e73be;
    }

    article a:hover{
        color: black;
    }

    .entry_header,.entry_header a{
        color: #666666;
        font-size: 12px;
    }

    .entry_header a:hover {
        color: #1e73be;
    }
</style>
<body>
	<div id="content">
		<?php foreach($arr as $k=>$v) {?>
		<article>
        <h2><?php echo $v['bug_title'];?></h2>
            <div class="entry_header">
                <time><?php echo date('Y-m-d', $v['pubtime'])?></time>
            </div>
			
			
            <div class="entry_content">
                <?php echo $v['bug_content'];?>
            </div>
		</article>
		<?php }?>
	</div>
</body>
</html>
