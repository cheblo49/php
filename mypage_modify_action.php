<?php
 
        $connect = mysqli_connect('localhost', 'admin', 'adminM1234@', 'db') or die("fail");
 
	
	session_start();
 

	$id = $_SESSION['userid'];

        $pw=$_GET[pw];
     	$name=$_GET[name];
        $nickname=$_GET[nickname];

        //입력받은 데이터를 DB에 저장
        $query = "update member set pw = '$pw', name = '$name', nickname = '$nickname' where id = '$id'";
 
        $result = $connect->query($query);
	$result1 = session_destroy();
 
        //저장이 됬다면 (result = true) 가입 완료
        if($result) { 
		if($result1){
        ?>     
		 <script>
                alert('수정 되었습니다 다시 로그인해주세요.');
                location.replace("./login.php");
                </script>
 
<?php   }}
        else{
?>              <script>
                        
                        alert("fail");
			location.replace("./mypage.php");
                </script>
<?php   }
 
        mysqli_close($connect);
?>
 

?>

