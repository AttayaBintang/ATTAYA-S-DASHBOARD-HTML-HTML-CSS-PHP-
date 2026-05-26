<?php
require_once "crud_web.php";

$db = "SELECT * FROM students";
$data = mysqli_query($connect, $db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleDashboard.css">
    <title>Homepage</title>
</head>
<body>
    <section>
    <div class="left">
        
        <div>
            <div class="logo"><img src="daunLogo.png" alt=""><h6>friend.</h6></div>
            <ul class="list">
                <li><a href="http://localhost/DASHBOARD%20HTML/dashboard.php">Dashboard</a></li>
                <li><a href="">Calendar</a></li>
                <li><a href="">About Website</a></li>
                <li><a href="http://localhost/DASHBOARD%20HTML/">Log Out</a></li>
            </ul>
        </div>
        <div class="quote">
        <h4>"humans are social creatures"</h4>
        </div>
    </div>

    </div>
    <div class="right">
        <div class="navbar">
            <h1 style="color:white;">List Of Names</h1>

        </div>
    <div class="header">
        <div class="leftHeader">
            <h3>Hello Friend!</h3>
            <h4>Keep gathering your friend's name in this website to always remember who they are, keep your friend's honor. 
            It is important because relationships are important for your survivability in this era.</h4>
            <h6>“Names are the sweetest and most important sound in any language.” - Dale Carnegie's "How To Win Friends And Influence People"</h6>
        </div>
        <div class="rightHeader">
            <img src="Johnny_Joestar.png" alt="">
        </div>
    </div>

    <a class="add" href="http://localhost/DASHBOARD%20HTML/insert_data.php">Add</a>
    <div class="table-container">
        <table border="1" cellpadding="10" cellspacing="0" width="70%" height="10%">
            <thead class="container-sticky">
                <tr>
                    <th>NO</th>
                    <th>Nama Panggilan</th>
                    <th>Nama lengkap</th>
                    <th>Umur</th>
                    <th>id</th>
                    <th>Aksi</th>
                    <!-- <th>Delete</th> -->
                </tr>
            </thead>
            <?php
                $no = 1; // Buat variabel counter
                while($row = mysqli_fetch_assoc($data)) :; 
            ?>
            <tbody>
            <tr>
                <td><?= $no++ ?></td> <!-- Nomor akan selalu urut di tampilan -->
                <td><?= $row['first_name']?></td>
                <td><?= $row['last_name']?></td>
                <td><?= $row['age']?></td>
                <td><?= $row['id']?></td>
                <td>
                    <a href="http://localhost/DASHBOARD%20HTML/update_data.php?id=<?php echo $row['id']?>" class="update">Edit</a>
                    <a href="http://localhost/DASHBOARD%20HTML/delete_data.php?id=<?php echo $row['id']?>" class="delete">Delete</a>
                </td>
            </tr>
            </tbody>
            <?php endwhile; ?>


        <?php
        $no = 1; // Buat variabel counter
        while($row = mysqli_fetch_assoc($data)) :; 
        ?>
            <tr>
                <td><?= $no++ ?></td> <!-- Nomor akan selalu urut di tampilan -->
                <td><?= $row['first_name']?></td>
                <td><?= $row['last_name']?></td>
                <td><?= $row['age']?></td>
                <td><?= $row['id']?></td>
                <td>
                    <a href="http://localhost/DASHBOARD%20HTML/update_data.php?id=<?php echo $row['id']?>" class="update">Update</a>
                    <a href="http://localhost/DASHBOARD%20HTML/delete_data.php?id=<?php echo $row['id']?>" class="delete">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>

        </table>
    </div>


    <?php
    if(isset($_GET['message'])){
        echo "<h6>" . $_GET['message']."<h6>";
    }
    ?>

    <?php
    if(isset($_GET['insert_msg'])){
        echo "<h6>" . $_GET['insert_msg']."<h6>";
    }
    ?>

    <?php
    if(isset($_GET['delete_msg'])){
        echo "<h6>".$_GET['delete_msg']."</h6>";
    }
    ?>

    <?php
    if(isset($_GET['update_msg'])){
        echo "<h6>".$_GET['update_msg']."</h6>";
    }
    ?>

    </div>
    </section>


</body>
</html>