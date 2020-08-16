 <?php
                $connect = mysqli_connect("localhost", "admin", "adminM1234@", "db") or die("fail");
 
		$number = $_POST[number];
                $id = $_POST[name];                      //Writer
                $pw = $_POST[pw];                        //Password
                $title = $_POST[title];                  //Title
                $content = $_POST[content];                //Content
                $date = date('Y-m-d H:i:s');            //Date
 
                $URL = './index.php';                   //return URL
 
		$tmpfile =  $_FILES['b_file']['tmp_name'];
		$o_name = $_FILES['b_file']['name'];
		$filename = iconv("UTF-8", "EUC-KR",$_FILES['b_file']['name']);
		$folder = "../var/www/html/upload/".$filename;
		move_uploaded_file($o_name,$folder);

                $query = "insert into board (number, title, content, date, hit, id, password, recommend, file) 
                        values(null,'$title', '$content', '$date',0, '$id', '$pw',0, '$o_name')";
 		
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
 
