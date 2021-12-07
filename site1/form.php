<?php 

	$nickname=$_POST['nickname'];
	$email=$_POST['email'];
	$class=$_POST['class'];
	$vetka=$_POST['vetka'];
	$podvetka=$_POST['podvetka'];
	$text=$_POST['text'];
	$chec=$_POST['chec'];
	$files=$_POST['file'];


	$db_host = "localhost"; 
	$db_user = "site1"; // Логин БД
	$db_password = "oIL6HgflqmZdowIX"; // Пароль БД
	$db_base = 'site1'; // Имя БД
	$db_table = "guardian"; // Имя Таблицы БД

	$uploaddir = 'loadfiles/';
	$uploadfile = $uploaddir . basename($_FILES['file']['name']);
	move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
	$photo=$uploadfile;
	if (empty($files)) {
		$photo = "нет файла";
	}
	else {
		$photo="site1/loadfiles";
	}



	if(empty($chec)){
		$chec=false;
	}
	else{
		$chec=true;
	}




	if((empty($nickname)) || (empty($email)) || (empty($class)) || (empty($vetka)) || (empty($_podvetka)) || ($chec!=true))
	{
		$kek="Вы не заполнили обязательные поля";
		$lol=false;
    }

    if( !empty($_POST['nickname']) && !empty($_POST['email'])  && !empty($_POST['class'])  && !empty($_POST['vetka'])  && !empty($_POST['podvetka']) && $chec==true ){
    	$kek="Данные отправлены!";
    	$lol=true;
    }





	if ($lol==true){

		$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

		if ($mysqli->connect_error) {
    		die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
		}

		$result = $mysqli->query("INSERT INTO ".$db_table." (nickname,email,class,vetka,podvetka,text,file) VALUES ('$nickname','$email','$class','$vetka','$podvetka','$text','$photo')");

		
        $textmail = "Его никнейм : " . $nickname . "\n" .  "Его почта : " . $email . "\n" . "Его класс : " . $class . "\n" . "Его ветка талантов : " . $vetka . "\n" . "Его подветка : " . $podvetka . "\n";
		mail('den.elynin0903@gmail.com', 'Новый страж', $textmail ,'From : den.elynin0903@gmail.com');


		$ref="home.php";
		$label="Продолжить";
	}

	if($lol==false){
		$ref="index.php";
		$label="Вернуться назад";
	}



 ?>

 <!DOCTYPE html>
<html lang="en"> 
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<title>Результат</title>
</head>
<body>
<form class="contactsToUs" action="<?php echo $ref; ?>">
<div class="answer" >
	<div class="text-center">
		<h1><?php echo $kek; ?></h1>
		<button type="submit" class="btn btn-primary"><?php echo $label; ?></button>
	</div>
</form>
</div>

</body>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>