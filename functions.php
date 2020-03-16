<?php
function getDayOfWeek($dayOfWeek){
    switch ($dayOfWeek) {
        case 1:
            echo "<p>It is Monday!</p>";
            break;
        case 2:
            echo "<p>It is Tuesday!</p>";
            break;
        case 3:
            echo "<p>It is Wednesday!</p>";
            break;
        case 4:
            echo "<p>It is Thrusday!</p>";
            break;
        case 5:
            echo "<p>It is Friday!</p>";
            break;
        case 6:
            echo "<p>It is Saturday!</p>";
            break;
        default:
            echo "<p>It is Sunday!</p>";
    }
}
