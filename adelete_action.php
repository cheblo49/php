
<?php
        $connect = mysqli_connect("localhost", "admin", "adminM1234@", "db") or die ("connect fail");
        $number = $_GET[number];
        $title = $_GET[title];
        $content = $_GET[content];
        $date = date('Y-m-d H:i:s');
	$id = $_GET[id];
     
        $query = "select title, content, date, id from board where number=$number";
        $result = $connect->query($query);
        $rows = mysqli_fetch_assoc($result);
 
        $title = $rows['title'];
        $content = $rows['content'];
        $usrid = $rows['id'];

	


	session_start();

         $URL = "./alist.php";

               
        ?>            
        <?php  

        


 			$query = "delete from board where number=$number";


			$result1 = $connect->query($query);

			$connect->query("ALTER TABLE board DROP number");
			$connect->query("ALTER TABLE board ADD number int primary key auto_increment FIRST");

		 	$result1 = $connect->query($query);

    			if($result1) {

			?>
			        <script>
			            alert("삭제되었습니다.");
			            location.replace("./alist.php");
			        </script>
			<?php    }
		        else {
			        echo "fail";
			}
		
?>	


