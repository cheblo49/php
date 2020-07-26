<?php
    $connect = mysqli_connect("localhost", "admin", "adminM1234@", "db") or die ("connect fail");
    $number = $_GET[number];
    $title = $_GET[title];
    $content = $_GET[content];
    $date = date('Y-m-d H:i:s');



  	 $URL = "./list.php";
 
                if(!isset($_SESSION['userid'])) {
        ?>              <script>
                                alert("권한이 없습니다. 게시판으로 이동합니다.");
                                location.replace("<?php echo $URL?>");
                        </script>
        <?php   }

		else{


 $query = "delete from board where number=$number";


    $result1 = $connect->query($query);

    $connect->query("ALTER TABLE board DROP number");   
    $connect->query("ALTER TABLE board ADD number int primary key auto_increment FIRST");   

    $result1 = $connect->query($query);

    if($result1) {
	
?>	
        <script>
            alert("삭제되었습니다.");
            location.replace("./list.php");
        </script>
<?php    }
    else {
        echo "fail";
    }
}
?>
