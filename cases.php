<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>大作业题目</title>
</head>
<body>
	<table style='text-align:left;border:solid' border="1">	
		<tr><td>ID</td><td>题目</td><td>描述</td>td>人数限制</td> </tr>
 <?php
     $conn = mysqli_connect('47.95.215.87:3306','admin','7l1d6ZEDLnUj');

	 if($conn){
			echo '连接成功';
     }else{
     	echo '连接失败';
     }
    mysqli_query($conn,"use android");
    mysqli_query($conn,"set name utf-8");
 
    $sql = 'select * from TestCase';
    $retval = mysqli_query($conn,$sql);
    $num=mysqli_num_rows($retval);
    //这里用一个for循环输出所有满足条件的查询语句
    for ($i=0; $i <$num ; $i++) { 
    	$row=mysqli_fetch_assoc($retval);
    	$id=$row['ID'];
    	$name=$row['NAME'];
    	$info=$row['info'];
        $num=$row['userLimit'];
		<tr><td>$id</td><td>$name</td><td>$info</td>td>$num</td> </tr>
    }
?>
 </table>
</body>
</html>

