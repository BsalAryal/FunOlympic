<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>

<style>
    .result-container{
        width: 90%;
        height: auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(30%, 100%));
        grid-template-rows: repeat(auto-fit, minmax(30%,30%));
        column-gap: .75em;
        row-gap: .5em;
    }

    .video-results, .news-results, .fixture-results{
        width: 100%;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(25%, 25%));
        grid-template-rows: repeat(auto-fit, minmax(25em,25em));
        column-gap: .75em;
        row-gap: .5em;
    }
</style>
<body>
    <h1>Search results for '$search_query':</h1>
    <div class="result-container">
        <div class="video-results"></div>
        <div class="news-resutls"></div>
        <div class="fixture-results"></div>
    </div>
</body>
</html>