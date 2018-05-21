<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
    <script src="assets/js/jquery.min.js"></script>
    <script src="asssets/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <?php
        $host='host = ec2-54-204-39-46.compute-1.amazonaws.com';
        $port='port = 5432';
        $dbname='dbname = d71q4kjq41m05c';
        $credentials='user = iqkoqhofwpruzk password = 6ca122086060feab86342066b0bfcedafbee49417bf19aa10b04c2626b441dac';
        $db= pg_connect("$host $port $dbname $credentials");
       
        $sql= "select * from courses";
        $query=pg_query($db,$sql);

        while(($row=pg_fetch_assoc($query))){
            echo  "<li>" .$row['course_name']."</li>";
        }
        pg_close($db);
    ?>
</div>
</body>
</html>