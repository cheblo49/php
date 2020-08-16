<?php
                $connect = mysqli_connect('localhost', 'admin', 'adminM1234@', 'db') or die ("connect fail");
              

		session_start();
 

		$id = $_SESSION['userid'];

 		$name= $connect->query("select name from member where id='$id'");
		$nickname= $connect->query("select nickname from member where id='$id'");
		
		$name = mysqli_fetch_row($name);
		$nickname = mysqli_fetch_row($nickname);

	
		?><h1>My Page</h1> 
	
				

		ID : <?php echo $_SESSION['userid'];
	
		?></br></br>PW : <?php echo $_SESSION['userpw'];

		?></br></br>Name : <?php echo $name[0];

		?></br></br>Nickname : <?php echo $nickname[0];

?>
</br></br> <button onclick="location.href='mypage_modify.php'">수정</button>
</br></br> <button onclick="location.href='list.php'">게시판으로</button>


             
