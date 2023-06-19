<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href='img/ugrIcon.png' type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Uygulama Ekle</title>
</head>
<body>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Uygulama Ekle</h1>
            <div>
            <a href="index.php" class="btn btn-primary">Geri</a>
            </div>
        </header>
        <form action="process.php" method="post">
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="title" placeholder="Uygulama İsmi:">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="task" placeholder="Görev:">
            </div>
            <div class="form-elemnt my-4">
                <select name="type" id="" class="form-control">
                    <option value="">Uygulama Durumu:</option>
                    <option value="Yeni Başladı" style="color: red;">Yeni Başladı</option>
                    <option value="Azı Bitti" style="color: orange;">Azı Bitti</option>
                    <option value="Çoğu Bitti" style="color: blue;">Çoğu Bitti</option>
                    <option value="Tamamlandı" style="color: green;">Tamamlandı</option>
                </select>
            </div>
            <div class="form-element my-4">
                <textarea name="description" id="" class="form-control" placeholder="Uygulama Detayları:"></textarea>
            </div>
            <div class="form-element my-4">
                <input type="submit" name="create" value="Ekle" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>
</html>