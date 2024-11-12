
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $QT = $_POST['QT'];
            $kq = (5 - ($QT * 0.4)) / 0.6;
            echo "<div class='result'>Bạn cần thi đạt <strong>" . round($kq, 2) . "</strong> nữa để qua môn!</div>";
        }
        ?>

