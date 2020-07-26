 <?php
                $connect = mysqli_connect("localhost", "admin", "adminM1234@", "db") or die("fail");
 
		$number = $_GET[number];
                $id = $_GET[name];                      //Writer
                $pw = $_GET[pw];                        //Password
                $title = $_GET[title];                  //Title
                $content = $_GET[content];                //Content
                $date = date('Y-m-d H:i:s');            //Date
 
                $URL = './index.php';                   //return URL
 
 
                $query = "insert into board (number, title, content, date, hit, id, password) 
                        values(null,'$title', '$content', '$date',0, '$id', '$pw')";
 		
		if(empty($title)){
?>			<script>
			alert("<?php echo "제목을 입력하지 않으셨습니다. 게시판으로 돌아갑니다."?>");
                     	location.replace("list.php");
			</script>
<?php
		}
			
	
                $result = $connect->query($query);
                
		if($result){
?>                  <script>
                        alert("<?php echo "글이 등록되었습니다."?>");
                        location.replace("list.php");
                    </script>
<?php
                }
                else{
                        echo "FAIL";
                }
 
                mysqli_close($connect);
?>
 
