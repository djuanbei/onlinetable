<!doctype html>

<html>

  <head>
    <meta charset="utf-8"/>
    <title>大作业题目选题结果</title>
  </head>
  <body>
    <table style='text-align:left;border:solid' border="1">	
      <tr><td>ID</td><td>题目编号</td> <td>对名</td><td>成员1</td><td>成员2</td> <td>成员3</td> </tr>
      <?php

	     $conn= new mysqli('localhost','admin','7l1d6ZEDLnUj','android');
	     if($conn){
	     //echo '连接成功';
	     }else{
	     echo '连接失败';
	     }

	     mysqli_set_charset($conn,"utf8");

	     $sqls="select * from ZuGroup";
	     $retval = mysqli_query($conn,$sqls);
	     $num=mysqli_num_rows($retval);
	     if ($num > 100){
      mysql_close($conn);
      return ;
      }
      
      $gname=$_POST[gname];
      $caseid=$_POST[caseID];
      $user1ID=$_POST[xuehao1];
      $user2ID=$_POST[xuehao2];
      $user3ID=$_POST[xuehao3];
      if($caseid >8){
      echo "题号选择错误";
      mysql_close($conn);
      return ;
      }

      if($caseid <0){
	echo "题号选择错误"
	mysql_close($conn);
	return ;
       }

	if($user1ID>1000){
		$sql=	"select * from ZuGroup where xuehao1=$user1ID";

		$retval = mysqli_query($conn,$sql);
	    	$num=mysqli_num_rows($retval);
	    
	    	if($num>0){
			echo "每个人只能加入一组";
			mysql_close($conn);
			return ;
	    	}

	    	$sql=	"select * from ZuGroup where xuehao2=$user1ID";
        	$retval = mysqli_query($conn,$sql);
	    	$num=mysqli_num_rows($retval);
	    	if($num>0){
			echo "每个人只能加入一组";
			mysql_close($conn);
			return ;
	    	}

	    	$sql=	"select * from ZuGroup where xuehao3=$user1ID";
        	$retval = mysqli_query($conn,$sql);
	    	$num=mysqli_num_rows($retval);
	    	if($num>0){
		    echo "每个人只能加入一组";
		      mysql_close($conn);
		     return ;
	        }
	    
	    }

        if($user2ID>1000){
		$sql=	"select * from ZuGroup where xuehao1=$user2ID";

		$retval = mysqli_query($conn,$sql);
	    	$num=mysqli_num_rows($retval);
	    
	    	if($num>0){
			echo "每个人只能加入一组";
			mysql_close($conn);
			return ;
	    	}

	    	$sql=	"select * from ZuGroup where xuehao2=$user2ID";
        	$retval = mysqli_query($conn,$sql);
	    	$num=mysqli_num_rows($retval);
	    	if($num>0){
			echo "每个人只能加入一组";
			mysql_close($conn);
			return ;
	    	}

	    	$sql=	"select * from ZuGroup where xuehao3=$user2ID";
        	$retval = mysqli_query($conn,$sql);
	    	$num=mysqli_num_rows($retval);
	    	if($num>0){
		    echo "每个人只能加入一组";
		      mysql_close($conn);
		     return ;
	        }
	    
	    }


        if($user3ID>1000){
		$sql=	"select * from ZuGroup where xuehao1=$user3ID";

		$retval = mysqli_query($conn,$sql);
	    	$num=mysqli_num_rows($retval);
	    
	    	if($num>0){
			echo "每个人只能加入一组";
			mysql_close($conn);
			return ;
	    	}

	    	$sql=	"select * from ZuGroup where xuehao2=$user3ID";
        	$retval = mysqli_query($conn,$sql);
	    	$num=mysqli_num_rows($retval);
	    	if($num>0){
			echo "每个人只能加入一组";
			mysql_close($conn);
			return ;
	    	}

	    	$sql=	"select * from ZuGroup where xuehao3=$user3ID";
        	$retval = mysqli_query($conn,$sql);
	    	$num=mysqli_num_rows($retval);
	    	if($num>0){
		    echo "每个人只能加入一组";
		      mysql_close($conn);
		     return ;
	        }
	    
	    }
        


	 $sql= "insert into ZuGroup(ID, NAME, caseid, xuehao1,xuehao2,xuehao3) values('$num','$gname', '$caseid','$user1ID' , '$user2ID', '$user3ID')";

	 $query=mysqli_query($conn, $sql);

	    if($query!=TRUE){
	    echo "新建失败";
	    mysql_close($conn);
	    return ;
	    }
	    
	    
	    $retval = mysqli_query($conn,$sqls);
	    $num=mysqli_num_rows($retval);
	    for ($i=0; $i <$num ; $i++) {
			                $row=mysqli_fetch_assoc($retval);
			                $id=$row['ID'];
			                $gid=$row['CASEID'];
			                $name=$row['NAME'];
			                $xue1=$row['xuehao1'];
			                $xue2=$row['xuehao2'];
			                $xue3=$row['xuehao3'];
			                echo "<tr><td>".$id."</td><td>".$gid."</td><td>".$name."</td><td>".$xue1."</td><td>".$xue2."</td><td>".$xue3."</td></tr>";

			                }

			                mysql_close($conn);


			                ?>
    </table>

    
  </body>
</html>
