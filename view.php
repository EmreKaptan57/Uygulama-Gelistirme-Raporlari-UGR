<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href='img/ugrIcon.png' type="image/x-icon"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Book Details</title>
    <style>
        .book-details{
            background-color:#F5f5f5;
        }
    </style>
</head>
<body>
    <div class="container my-4">
        <header class="d-flex justify-content-between my-4">
            <h1>Uygulama Detayları</h1>
            <div>
            <a href="index.php" class="btn btn-primary">Geri</a>
            </div>
        </header>
        <div class="book-details p-5 my-4">
            <?php
            include("connect.php");
            $id = $_GET['id'];
            if ($id) {
                $sql = "SELECT * FROM lists WHERE id = $id";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {
                 ?>
                 <h3>İsim:</h3>
                 <p><?php echo $row["title"]; ?></p>
                 <h3>Görev:</h3>
                 <p><?php echo $row["task"]; ?></p>
                 <h3>Süreç:</h3>
                 <p><?php echo $row["type"]; ?></p>
                 <h3>Açıklama:</h3>
                 <p><?php echo $row["description"]; ?></p>
                 <?php
                }
            }
            else{
                echo "<h3>Uygulama Bulunamadı</h3>";
            }
            ?>
            
        </div>
    </div>
</body>
</html>