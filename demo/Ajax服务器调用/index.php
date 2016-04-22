<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajax服务器调用</title>
</head>
<body>
	<?php
	//如果没有传入查询字符串，那么将无法搜索
	if (empty($_REQUEST['state'])) {
		echo "No State Sent";
	} else {
		//将查询字符串中从开始到结尾的空白符去除
		$search=trim($_REQUEST['state']);
		switch ($search) {
			case 'MO':
			$result="<ul><li>St.Louis</li>".
			"<li>Kansas City</li></ul>";
				break;
			case 'WA':
			$result="<ul><li>Seattle</li>".
			"<li>Spokane</li>".
			"<li>Olympia</li></ul>";
				break;
			case 'CA':
			$result="<ul><li>San Francisco</li>".
			"<li>Los Angeles</li>".
			"<li>WEB 2.0 City</li>".
			"<li>BarCamp</li></ul>";
				break;
			case 'ID':
			$result="<ul><li>Boise</li></ul>";
				break;				
			default:
			$result="NO Cities Found";
				break;
		}
		echo "<h3>Cities:</h3><p>".$result."</p>";
	}
	?>
</body>
</html>