<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
   body {
    background: #c7b39b url(fon1.jpg);
    background-attachment: fixed; /* Цвет фона и путь к файлу */
    color: #fff; /* Цвет текста */
   }
  </style>

    
  </head>
  <body>
    <form enctype="multipart/form-data" class="contactsToUs" action="form.php" method="post">
  <div class="text-center"><font size="25" color="black" face="arial"><p>Информация о страже</p></font></div>


  <div class="form-group">
    <label for="exampleFormControlInput1"><font color="black">Ваш ник:</font></label>
    <input type="textц" class="form-control" id="exampleFormControlInput1" name="nickname">
  </div>


  <div class="form-group">
    <label for="exampleFormControlInput2"><font color="black">Email:</font></label>
    <input type="email" name="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com">
  </div>


  <div class="form-group">
    <label for="exampleFormControlSelect1"><font color="black">Ваш класс:</font></label>
    <select name="class" class="form-control" id="exampleFormControlSelect1">
      <option value="Титан">Титан</option>
      <option value="Охотник">Охотник</option>
      <option value="Варлок">Варлок</option>
    </select>
  </div>


  <div class="form-group">
    <label for="exampleFormControlSelect2"><font color="black">Ветка умений:</font></label>
    <select multiple class="form-control" id="exampleFormControlSelect2" name="vetka">
      <option value="Солнечная">Солнечная</option>
      <option value="Пустотная">Пустотная</option>
      <option value="Электрическая">Электрическая</option>
    </select>
  </div>


  <div class="form-check">
  <input class="form-check-input" type="radio" name="podvetka" id="exampleRadios1" value="Верхняя подветка" checked>
  <label class="form-check-label" for="exampleRadios1">
    <font color="black">Верхняя подветка</font>
  </label>
  </div>


<div class="form-check">
  <input class="form-check-input" type="radio" name="podvetka" id="exampleRadios2" value="Средняя подветка" checked>
  <label class="form-check-label" for="exampleRadios2">
    <font color="black">Средняя подветка</font>
  </label>
</div>


<div class="form-check disabled">
  <input class="form-check-input" type="radio" name="podvetka" id="exampleRadios3" value="Нижняя подветка" checked>
  <label class="form-check-label" for="exampleRadios3">
    <font color="black">Нижняя подветка</font>
  </label>
</div>


  <div class="form-group">
    <label for="exampleFormControlTextarea1"><font color="black">Расскажите про вашего стража:</font></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text"></textarea>
  </div>


  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="chec">
    <label class="form-check-label" for="exampleCheck1"><font color="black" >Согласие с обработкой данных</font></label>
  </div>


  <div class="form-group">
    <label for="exampleFormControlFile1"><font color="black">Аватар</font></label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
  </div>


  <div class="form-group">
        <input type="reset" class="btn btn-primary">
        <button type="submit" class="btn btn-primary" >Отправить</button>
  </div>
</form>
    
  </body>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</html>