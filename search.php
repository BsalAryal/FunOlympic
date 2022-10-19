<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Lexend&display=swap');

    * {
        font-family: 'Lexend', sans-serif;
    }

    h1 {
        text-align: center;
        margin-top: 2.5em;
        color: #A438FF;
    }

    .result-container {
        margin: 2.5em auto;
        padding: 1.5em 3em;
        width: 90%;
        height: auto;
        display: flex;
        flex-direction: column;
    }

    .video-results,
    .news-results,
    .fixture-results {
        width: 100%;
        height: auto;
        display: flex;
        flex-direction: column;
    }

    h3{
        color: #0175a7;
    }

    .card-section {
        width: 100%;
        height: auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(25%, 25%));
        grid-template-rows: repeat(auto-fit, minmax(25em, 25em));
        column-gap: .75em;
        row-gap: .5em;
    }
</style>

<body>
    <?php include('header.php') ?>
    <h1>Search results for '$search_query':</h1>
    <div class="result-container">
        <div class="video-results">
            <h3>Video Results</h3>
            <div class="card-section">

            </div>
        </div>
        <div class="news-resutls">
            <h3>News Results</h3>
            <div class="card-section">

            </div>
        </div>
        <div class="fixture-results">
            <h3>Fixture Results</h3>
            <div class="card-section">

            </div>
        </div>
    </div>
</body>

</html>