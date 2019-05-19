
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Page Description">
    <meta name="author" content="diego">
    <title>Lista contactos</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="extra.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="container">
    <h1>Lista de contactos</h1>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Fecha-Hora(CET)</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Mensaje</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once ('conexion.php');
        $sql = "SELECT id,date, name, email, message FROM cf LIMIT 150";
        foreach ($db->query($sql) as $fila) {
            $id=$fila['id'];
            $date=$fila['date'];
            $name= $fila['name'];
            $email= $fila['email'];
            $message=$fila['message'];
            echo"<tr><td>$id</td><td>$date</td><td>$name</td><td>$email</td><td>$message</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
