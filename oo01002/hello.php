<!DOCTYPE html>
<html><head><title>PHP Example</title></head>
<body>
<h2>Hello, Internet!</h2>
<?php
    if(isset($_SERVER["QUERY_STRING"])) {
        $e = $_SERVER["QUERY_STRING"];
        if(!empty($e)) {
            echo "Query string is $e";
        }
    }
?>
</body</html>