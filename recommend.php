

<?php
   		$connect = mysqli_connect('localhost', 'admin', 'adminM1234@', 'db');
                $number = $_GET[number];
		$recommend = "update board set recommend=recommend+1 where number=$number";

                $connect->query($recommend);


                $query = "select title, content, date, hit, recommend, id from board where number =$number";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);


?>
        <script>
            alert("추천하셨습니다.");
            location.replace("./list.php");
        </script>
<?php    

?>


