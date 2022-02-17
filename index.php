<?php
include __DIR__ . "/database/dischiDb.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src=" https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>

<body>
    <div id="app">
        <header>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/Spotify_App_Logo.svg/2048px-Spotify_App_Logo.svg.png" alt="">
        </header>
        <div class="container-card">
            <?php foreach ($arrayDisc as  $disc) { ?>
                <div class="card">
                    <div class="card-app">
                        <div class="img">
                            <img src=<?php echo $disc["poster"] ?> alt="">
                        </div>
                        <h4><?php echo $disc["title"] ?></h4>
                        <p><?php echo $disc["author"] ?></p>
                        <p><?php echo $disc["year"] ?></p>
                    </div>
                </div>
        </div>
    </div>
<?php } ?>

</body>

</html>