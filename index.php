<?php include 'connect.php'; ?>

<?php

echo mysql_fetch_array(mysql_query("SELECT * FROM box"))['box_id'];
echo "a";

?>
