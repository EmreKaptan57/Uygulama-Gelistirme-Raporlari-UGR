<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href='img/ugrIcon.png' type="image/x-icon"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Uygulamayı Düzenle</title>
</head>
<body>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Uygulamayı Düzenle</h1>
            <div>
            <a href="index.php" class="btn btn-primary">Geri</a>
            </div>
        </header>
        <form action="process.php" method="post">
            <?php 
            
            if (isset($_GET['id'])) {
                include("connect.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM lists WHERE id=$id";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                ?>
                     <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="title" placeholder="Uygulama İsmi:" value="<?php echo $row["title"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="task" placeholder="Görev:" value="<?php echo $row["task"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <select name="type" id="" class="form-control">
                    <option value="">Uygulama Durumu:</option>
                    <option value="Yeni Başladı" style="color: red;"<?php if($row["type"]=="Yeni Başladı"){echo "selected";} ?>>Yeni Başladı</option>
                    <option value="Azı Bitti" style="color: orange;"<?php if($row["type"]=="Azı Bitti"){echo "selected";} ?>>Azı Bitti</option>
                    <option value="Çoğu Bitti" style="color: blue;"<?php if($row["type"]=="Çoğu Bitti"){echo "selected";} ?>>Çoğu Bitti</option>
                    <option value="Tamamlandı" style="color: green;"<?php if($row["type"]=="Tamamlandı"){echo "selected";} ?>>Tamamlandı</option>
                </select>
            </div>
            <div class="form-element my-4">
                <textarea name="description" id="" class="form-control" placeholder="Uygulama Açıklaması:"><?php echo $row["description"]; ?></textarea>
            </div>
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <div class="form-element my-4">
                <input type="submit" name="edit" value="Güncelle" class="btn btn-primary">
            </div>
                <?php
            }else{
                echo "<h3>Uygulama Mevcut Değil</h3>";
            }
            ?>
           
        </form>
        
        
    </div>
</body>
</html>