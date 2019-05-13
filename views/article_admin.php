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
                  
                    <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                    <label>
                            
                    Название <input type="text" name="title" value="<?=$article[0]['title']?>" class= "form-item" autofocus required>
                    </label>
           
                        <br/>
                    <label>
                    Дата <input class="form-item" name="date" required type="date" value="<?=$article[0]['date']?>"> 
                    </label><br/>
                        <label>
                    Содержимое <textarea class="form-item-content" name="content" required><?=$article[0]['content']?></textarea>
                    </label><br/>
                    <input type="submit" value="Сохранить" class="btn">
                    </form>
        
                </div>
            
                
                
                <footer>
                    <p>Новостной ресурс ФКН ВГУ<br>Copyright &copy; 2019</p>
                </footer>
            </div>
        </body>
    </html>