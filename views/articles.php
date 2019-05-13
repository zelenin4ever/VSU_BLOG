<!DOCTYPE html>
    <html>
    <head>
       <meta charset="utf8">
       <title>My first Blog</title>
       <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        </head>
        <body>
            <div class="container">
                <h1>НОВОСТИ ФКН</h1>
                <a href="admin/phpform/login.php">Панель администратора</a>
                <div>
                    <?php
                    foreach($articles as $a): ?>
                    <div class="article">
                        <h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
                        <em>Опубликовано: <?=$a['date']?></em>
                        <p><?=$a['content']?></p>
                    </div>
                    <?php endforeach ?>
                </div>
                <footer>
                    <p>Новостной ресурс ФКН ВГУ<br>Copyright &copy; 2019</p>
                </footer>
            </div>
        </body>
    </html>