<?php
$lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis nobis impedit laborum praesentium fuga molestias et? Vitae nostrum delectus voluptatibus et blanditiis deserunt. Molestias necessitatibus, rem soluta impedit a quia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, possimus ab corporis doloribus, tempora odio impedit, accusamus fugiat molestias rerum maxime saepe est eaque! Tempore sunt distinctio beatae debitis perferendis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, possimus ab corporis doloribus, tempora odio impedit, accusamus fugiat molestias rerum maxime saepe est eaque! Tempore sunt distinctio beatae debitis perferendis! ";

$blur = $_GET["word"];
$replace = "***";
$censoredWord = str_replace($blur, $replace, $lorem);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Primo esercizio</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1>
        Titolo
    </h1>
    <p>
      <?php
      echo $censoredWord;
      ?>  
    </p>
    <h2>
        la lunghezza del paragrafo è :
        <?php
        echo strlen($lorem);
        ?>
        caratteri
    </h2>

    
</body>

<style>
    h1 {
        color: red;
        font-size: 50px;
    }
    body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        max-width: 600px;
        margin: 0 auto;
    }
</style>
</html>