<p>6. Создать страницу, на которой можно загрузить несколько фотографий в галерею. Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.</p>
<hr />
<?php
   include 'functions.php';

    downloadImage();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" />
    <title>Gallery page</title>
</head>
<body>
<form enctype="multipart/form-data" action="" method="POST" name="gallery">
    <input type="file" name="userFile" accept="image/jpeg, image/png" />
    <br /><br />
    <input type="submit" value="Загрузить" />
</form>
<hr class="hr" />
<h1>Gallery</h1>
<hr class="hr2" />
<div class="gallery">
    <?=showImages()?>
</div>
</body>
</html>
