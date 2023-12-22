<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FlexBox Template 1</title>
   <link href="https://fonts.googleapis.com/css?family=Arima+Madurai:400,700|Lato" rel="stylesheet">

  <link href="" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  
</head>
<body>
</div>
  <div class="container">

    <div class="navbar">
      <a class="nav-link brand" href="">Cosmic</a>

      <div class="nav-links-right">
        <a class="nav-link" href="index3.html">Каталог</a>
        <a class="nav-link" href="indexx2.html">Наш блог</a>
      </div>
    </div>

    <form class="form" action="registr.php" method='POST'>
      <div class="form-group">
      <h4> Форма обратной связи</h4>
        <label for="exampleInputEmail1">Email</label>
        <input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Пароль</label>
        <input type="password" name = "password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="form-group">
      <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
    </div>
    </form>
    
    <div class="features">
      <div class="section half-section feature feature-1">
        <h3>МОРЕ - НАША СТРАСТЬ</h3>
        <p>Мы вдохновляемся необузданной силой и непередаваемой мощью моря вот уже более 20 лет, производя продукты, которые одновременно как оздоравливают, так и наполняют гармонией наш организм.
</p>
      </div>

      <div class="section half-section feature feature-2">
        <h3>НЕМНОГО О НАС</h3>
        <p>Мы работаем с удовольствием и создаем красоту уже более 20 лет. Мы верим в силу инноваций и делаем красоту доступной каждому. Наша компания - это объединение инноваций, силы красоты и натуральной косметики.</p>
      </div>
    </div>
  </div>
  
<script src="snow/snowstorm-min.js"></script>

<script>

	window.onload = function() {

		snowStorm.snowColor = "#fff"; // Цвет снежинок
		snowStorm.flakesMaxActive = 100; // Максимальное количество видимых снежинок
		snowStorm.followMouse = true; // true - гоняться за курсором, false - нет
		snowStorm.snowCharacter = "&bull;"; // Вид снежинки

	};

</script>
</body>
<footer>
  <p>2022. Made with ❤ by Cosmic.</p>
</footer>
</html>