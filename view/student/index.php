<div class="container">
    <table class="tabletable">
        <?php
        $months = array('', 'januari', 'februari', 'maart', 'april', 'mei', 'juni', 'juli', 'augustus', 'september', 'oktober', 'november', 'december');
        $lastmonth = "";
        $lastday = "";
        $i = 0;
        foreach ($bday as $birthday =>$value){
            if ($months[$value['month']] != $lastmonth){
                echo "<h1>" . $months[$value['month']] . "</h1>";
                $lastmonth = $months[$value['month']];
                $lastday = "";
            }
            if ($value['day'] != $lastday){
                echo "<h2>" . $value['day'] . "</h2>";
                $lastday = $value['day'];
            }
            echo "<p>" . '<a href="' . URL . 'student/update?id=' . $value['id'] .  '">'  . $value['person'] . " (" . $value['year'] . ")" . '</a>'  . '<a href="' . URL . 'student/delete?id=' . $value['id'] .  '">'  . 'x</a>' ;
        }
        echo '<a class="last" href="' . URL . 'student/addbirthday">+ Toevoegen.</a>' . "</p>";

        ?>
    </table>
</div>