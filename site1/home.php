<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<style>
button{
margin-left: 1%;
}
</style>
</head>

<body>

<table class="table" border="2">
<thead>
<tr>
<th scope="col">Никнэйм</th>
<th scope="col">Email</th>
<th scope="col">Класс</th>
<th scope="col">Ветка</th>
<th scope="col">Подветка</th>
<th scope="col">Текст</th>
<th scope="col">File</th>
</tr>
</thead>
<tbody>

<?php
$strings=3;
$page = $_GET['page'];

$link = mysqli_connect("localhost", "site1", "oIL6HgflqmZdowIX", "site1")
or die("Ошибка " . mysqli_error($link));

$query ="SELECT * FROM guardian";

$results = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($results)
{
$rows = mysqli_num_rows($results);
for ($i = 0 ; $i < $rows ; ++$i)
{
$row = mysqli_fetch_row($results);
echo "<tr>";
for ($j = 0 ; $j < 7 ; ++$j) echo "<td>$row[$j]</td>";
echo "</tr>";
}
echo "</table>";

// очищаем результат
mysqli_free_result($results);
}


mysqli_close($link);
?>

</tbody>
</table>
<form class="button" action="index.php">
<button type="submit" class="btn btn-primary">Вернуться к заполнению формы</button>
</form>

</body>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>