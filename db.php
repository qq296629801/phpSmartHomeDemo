<?php    $mysql_server_name="192.168.0.111:3306"; //数据库服务器名称    $mysql_username="root"; // 连接数据库用户名    $mysql_password="root"; // 连接数据库密码    $mysql_database="smart"; // 数据库的名字    // 连接到数据库   $conn = @mysql_connect($mysql_server_name,$mysql_username,$mysql_password);	if (!$conn){		die("连接数据库失败：" . mysql_error());	}	mysql_select_db($mysql_database, $conn);	mysql_query("set names 'gbk'");      // 从表中提取信息的sql语句    // 执行sql查询	$sql = "select * from `home` where id=1";	$result=mysql_query($sql,$conn);	if($result){		$row=mysql_fetch_row($result);		echo $row[1];	}else{		echo 'fail';	}    // 关闭连接    mysql_close($conn);  		?>