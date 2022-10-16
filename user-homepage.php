<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Lexend&display=swap');

    * {
        font-family: 'Lexend', sans-serif;
    }

    .container {
        width: 90%;
        margin: 2.5em auto;
        padding: 1.5em 3em;
    }

    .top-section {
        width: 100%;
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }

    .top-section p {
        font-size: 1.25em;
        margin-right: .5em;
    }

    select {
        font-size: 1.25em;
        border: .1em solid rgba(128, 128, 128, 0.75);
        border-radius: .25em;
        padding: .15em;
        background-color: white;
    }
</style>


<?php include_once('header.php') ?>
<div class="container">
    <div class="top-section">
        <!--filter options-->
        <p>Filter by:</p>
        <select name="filter">
            <option value="default">Select a category</option>
        </select>
    </div>
    <!--content section-->
    <div class="bottom-section">
        <div class="video-section">
            <h3>Videos</h3>
            <div class="card-section">

            </div>
        </div>
        <div class="news-section">
            <h3>News</h3>
            <div class="card-section"></div>
        </div>
        <div class="fixtures-section">
            <h3>Fixtures</h3>
            <div class="card-section"></div>
        </div>
    </div>
</div>
</body>

</html>