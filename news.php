<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
</head>

<style>
    .container {
        width: 90%;
        height: auto;
        margin: 2.5em auto;
        padding: 1.5em 3em;
    }

    .container h1 {
        color: #A438FF;
    }

    .card {
        width: 20%;
        height: 20em;
        box-shadow: .1em .1em .5em rgba(128, 128, 128, 0.45);
        border-radius: .25em;
        overflow: hidden;
    }

    .card p, .card a {
        margin: .75em 0 .75em .75em;
    }

    .card a {
        text-decoration: none;
        background-color: #0175a7;
        color: white;
        font-weight: bold;
        padding: .5em 1em;
        border-radius: .25em;
        margin-top: 1em;
    }

    .card img{
        width: 100%;
        height: 60%;
    }
</style>

<body>
    <?php include('header.php') ?>
    <div class="container">
        <h1>News</h1>
        <div class="card-section">
            <div class="card">
                <img src="./images/logo.png" alt="">
                <p>$video_title</p>
                <p>$date</p>
                <a href="">View</a>
            </div>
        </div>
    </div>
</body>

</html>