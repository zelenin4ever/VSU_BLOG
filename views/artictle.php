<!DOCTYPE html>
    <html>
    <head>
       <meta charset="utf8">
       <title>НОВОСТИ ФКН</title>
       <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        </head>
        <body>
            <div class="container">
                <h1>My first Blog</h1>
                <div>
                    <div class="article">
                         <h3><?=$articles['title']?></h3>
                        <em>Опубликовано: <?=%articles['date']?></em>
                        <p><?=$articles['content']?></p>
                    </div>
                      
                </div>
                <footer>
                    <p>Новостной ресурс ФКН ВГУ<br>Copyright &copy; 2019</p>
                </footer>
            </div>
        </body>
    </html>