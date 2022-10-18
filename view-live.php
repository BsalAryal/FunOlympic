<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$video_title</title>
</head>

<style>
    .container {
        width: 90%;
        height: auto;
        box-sizing: border-box;
        margin: auto;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: flex-start;
        padding: 1.5em 3em;
    }

    video {
        width: 100%;
        height: 40vh;
    }

    .info-section {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .info-section p {
        margin: .5em 0;
    }


    .info-section p:first-of-type {
        font-size: 1.5em;
        font-weight: bolder;
        margin: .15em 0;
    }

    .info-section p:nth-of-type(2) {
        color: grey;
        font-weight: bold;
        font-size: .9em;
        margin: .25em 0;
    }

    .info-section p:last-of-type {
        color: #000000BD;
        font-size: .9em;
        margin: .75em 0;
    }


    .interaction-section {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        width: 60%;
    }

    .interaction-section p {
        margin-right: 1.5em;
    }

    #comment-form {
        margin: 1.25em 0;
        width: 60%;
        height: auto;
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }

    #comment-form textarea {
        margin-right: 1.5em;
        border: none;
        border-bottom: .12em solid grey;
        outline: none;
        padding: .75em;
    }
</style>

<body>
    <?php include('./header.php') ?>
    <div class="container">
        <video>
            <source src="./uploads/highlight.avi" type="video/mp4">
        </video>
    </div>
</body>
</html>