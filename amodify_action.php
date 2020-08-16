<?php
    $connect = mysqli_connect("localhost", "admin", "adminM1234@", "db") or die ("connect fail");
    $number = $_GET[number];
    $title = $_GET[title];
    $content = $_GET[content];
    $date = date('Y-m-d H:i:s');
    $query = "update board set title='$title', content='$content', date='$date' where number=$number";
    $result = $connect->query($query);
    if($result) {
?>
        <script>
            alert("수정되었습니다.");
            location.replace("./aview.php?number=<?=$number?>");
        </script>
<?php    }
    else {
        echo "fail";
    }
?>


