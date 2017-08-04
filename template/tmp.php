<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Выше 3 Мета-теги ** должны прийти в первую очередь в голове; любой другой руководитель контент *после* эти теги -->
    <title>Task 4 _ SQL_MySQL_PGSQL</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- Предупреждение: Respond.js не работает при просмотре страницы через файл:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script >
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-inverse ">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand " href="#">Task 4 -- SQL->MySQL SQL->PGSQL</a>
        </div>
    </div>
</nav>
<div class="container center-block ">
    <div class="starter-template text-center">
        <?php if (isset($msg)){ echo  $msg;}?>

        <table class="table container" style="width: 800px">
            <tr>
                <th class="text-center alert-info" >MySQL</th>
            </tr>
        </table>
        <table class="table container text-center" style="width: 800px">
            <tr>
                <td style="width: 400px">
                    SELECT MySQL DB:
                </td>
                <td><?php if (!empty($selectMySQL)) {foreach ($selectMySQL as $v) {echo $v['key']."<br />"; }} else {echo NO_ROW;} ?></td>
            </tr>
            <tr>
                <td style="width: 400px">
                    INSERT in MySQL key = user6:
                </td>
                <td><?php if (is_array($selectMySQLInsert)) {foreach ($selectMySQLInsert as $v) {echo $v['key']."<br />"; }} ?></td>
            </tr>
            <tr>
                <td>
                    UPDATE data where key = user6:
                </td>
                <td><?php if (is_array($selectMySQLData)) {foreach ($selectMySQLData as $v) {echo $v['data']."<br />"; }} ?></td>
            </tr>
            <tr>
                <td>DELETE all where key = user6</td>
                <td><?php if (!empty($selectMySQLDel)) {foreach ($selectMySQLDel as $v) {echo $v['key']."<br />"; }} else {echo NO_ROW;} ?></td>
            </tr>

        </table>
        <div class="alert-success">
            -
        </div>
        <br />
        <table class="table container" style="width: 800px">
            <tr>
                <th class="text-center alert-info" >PostgreSQL</th>
            </tr>
        </table>
        <table class="table container text-center" style="width: 800px">
            <tr>
                <td style="width: 400px">
                    SELECT PgSQL DB:
                </td>
                <td><?php if (!empty($selectPG)) {foreach ($selectPG as $v) {echo $v['key']."<br />"; }} else {echo NO_ROW;} ?></td>
            </tr>
            <tr>
                <td style="width: 400px">
                    INSERT in PgSQL key = user6_PG:
                </td>
                <td><?php if (is_array($selectPGInsert)) {foreach ($selectPGInsert as $v) {echo $v['key']."<br />"; }} ?></td>
            </tr>
            <tr>
                <td>
                    UPDATE data where key = user6_PG:
                </td>
                <td><?php if (is_array($selectPGData)) {foreach ($selectPGData as $v) {echo $v['data']."<br />"; }} ?></td>
            </tr>
            <tr>
                <td>DELETE all where key = user6_PG</td>
                <td><?php if (!empty($selectPGDel)) {foreach ($selectPGDel as $v) {echo $v['key']."<br />"; }} else {echo NO_ROW;} ?></td>
            </tr>

        </table>
    </div>
</div>


<!-- на jQuery (необходим для Bootstrap - х JavaScript плагины) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Включают все скомпилированные плагины (ниже), или включать отдельные файлы по мере необходимости -->
<script src="js/bootstrap.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>