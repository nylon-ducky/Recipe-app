<?php
    require "connect-to-db.php";
    if ($result = mysqli_query($conn, "DELETE FROM recipes where title=' ' OR title IS NULL")) {
}

