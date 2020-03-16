<?php
include "Nav.php";
?>

<body>
    <h1 class="header">Using the Database</h1>

    <div style="overflow-x:auto;">
        <table class="table">
            <tr class="row_heading">
                <th>user_id </th>
                <th>user_uid</th>
                <th>user_email</th>
            </tr>

            <?php
            $sql = "SELECT * FROM users where user_first='Daniel';";
            $result = mysqli_query($conn, $sql);
            $resulCheck = mysqli_num_rows($result);
            if ($resulCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr class=" . 'row' . ">";
                    echo "<td>" . $row['user_id'] . "</td>";
                    echo "<td>" . $row['user_uid'] . "</td>";
                    echo "<td>" . $row['user_email'] . "</td>";
                    echo "</tr>";
                }
            }

            ?>
        </table>
    </div>
</body>

</html>