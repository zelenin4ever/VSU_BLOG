<!DOCTYPE html>
    <html>
    <head>
       <meta charset="utf8">
       <title>My first Blog</title>
       <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        </head>
        <body>
            <div class="container">
                <h1>НОВОСТИ ФКН (режим редактирования)</h1>
             
                <div>
				
				<a href="../admin/phpform/logout.php">Выйти</a>
				</br>
                <a href="index.php?action=add">Добавить статью</a>
                   
                   <table class="admin-table">
    <tr>
        <th>Дата</th>
        <th>Заголовок</th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach($articles as $a): ?>
    <tr>
        <td><?=$a['date']?></td>
        <td><?=$a['title']?></td>
        <td>
            <a href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a>
        </td>
        <td>
            <a href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a>
        </td>
    </tr>
    <?php endforeach ?>
</table>
       
      
                </div>
                <footer>
                    <p>Новостной ресурс ФКН ВГУ<br>Copyright &copy; 2019</p>
                </footer>
            </div>
        </body>
    </html>