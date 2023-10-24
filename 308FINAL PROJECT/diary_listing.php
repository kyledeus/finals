<?php 

    require_once('connection.php');
    $query = " select * from listing ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="diary_listing.css">
    <link rel="stylesheet" href="styles.css">
    <title>Diary list</title>
</head>
<body class="bg-dark">

        <header>
            <main class="group">
                <nav>
                    <ul>
                        <a href="login.php"></a>
                        <a href="index.php"><li>Kyle's Profile</li></a>
                        <a href="index2.php"><li>Miles's Profile</li></a>                   
                    </ul>
                </nav>
                <main class="nav-bottom">
                    <main class="nav-bot-con"></main>
                </main>
            </main>
        </header>

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                        <tr>
                            <td style="color: white; font-weight: bold;"> Topic </td>
                            <td style="color: white; font-weight: bold;"> Category </td>
                            <td style="color: white; font-weight: bold;"> Content </td>
                            <td style="color: white; font-weight: bold;"> Date </td>
                        </tr>

                                    <tr>
                                    <?php
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                    ?>
                                    <td><?php echo $row['topic']; ?></td>
                                    <td><?php echo $row['category']; ?></td>
                                    <td><?php echo $row['content']; ?></td>
                                    <td><?php echo $row['date']; ?></td>
                                    </tr>
                                          
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>