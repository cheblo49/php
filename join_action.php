<?php
 
        $connect = mysqli_connect('localhost', 'admin', 'adminM1234@', 'db') or die("fail");
 
 
        $id=$_GET[id];
        $pw=$_GET[pw];
     	$name=$_GET[name];
        $nickname=$_GET[nickname];
        $date = date('Y-m-d H:i:s');
 
        //입력받은 데이터를 DB에 저장
        $query = "insert into member (id, pw, date, permit, name, nickname) values ('$id', '$pw','$date', 0, '$name', '$nickname')";
 
 
        $result = $connect->query($query);
 
        //저장이 됬다면 (result = true) 가입 완료
        if($result) {
        ?>     
		 <script>
                alert('가입 되었습니다.');
                location.replace("./login.php");
                </script>
 
<?php   }
        else{
?>              <script>
                        
                        alert("fail");
			location.replace("./join.php");
                </script>
<?php   }
 
        mysqli_close($connect);
?>
 



