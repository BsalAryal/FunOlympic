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


    h3 {
        color: #A438FF;
        text-align: center;
        margin: .75em auto;
    }

    .bottom-section {
        display: flex;
        justify-content: space-between;
        margin-top: 2em;
    }

    .video-section,
    .news-section,
    .fixtures-section {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
    }

    .video-section,
    .news-section {
        width: 40%;
        height: auto;
    }

    .fixtures-section {
        width: 15%;
    }



    .card-section:first-of-type,
    .card-section:nth-of-type(2) {
        width: 100%;
        display: grid;
        grid-template-columns: repeat(2, 47.5%);
        column-gap: 2.5em;
        grid-template-rows: repeat(2, 20em);
        row-gap: 2.5em;
        align-content: center;
        justify-items: center;
    }

    .fixtures-section .card-section{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }


    .fixture-card{
        width: 80%;
        height: auto;
        padding: .75em 1.5em;
        margin: .5em 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        box-shadow: .1em .1em .5em rgba(128, 128, 128, 0.45);
        font-size: .92em;
    }

    .fixture-card p{
        margin: .15em 0;
        font-weight: .5em;
    }

    .fixture-card p:first-of-type{
        font-weight: bolder;
        color: #0175a7;
    }

    .fixture-card p:nth-of-type(2){
        color: grey;
        font-weight: bold;
    }

    .fixture-card p:last-of-type{
        font-weight: bold;
    }


    .video-card {
        width: 90%;
        height: 18em;
        box-shadow: .1em .1em .5em rgba(128, 128, 128, 0.45);
        border-radius: .25em;
        overflow: hidden;
    }

    .video-card p,
    .video-card a {
        margin: .75em 0 .75em .75em;
    }

    .video-card a {
        text-decoration: none;
        background-color: #0175a7;
        color: white;
        font-weight: bold;
        padding: .5em 1em;
        border-radius: .25em;
        margin-top: 1em;
    }
   
    .news-card {
        width: 90%;
        height: 18em;
        box-shadow: .1em .1em .5em rgba(128, 128, 128, 0.45);
        border-radius: .25em;
        overflow: hidden;
    }

    .news-card p, .news-card a {
        margin: .75em 0 .75em .75em;
    }

    .news-card a {
        text-decoration: none;
        background-color: #0175a7;
        color: white;
        font-weight: bold;
        padding: .5em 1em;
        border-radius: .25em;
        margin-top: 1em;
    }

    .news-card img{
        width: 100%;
        height: 60%;
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
            <h3>Most Viewed Videos</h3>
            <div class="card-section">
                <div class="video-card">
                    <video width="100%" height="50%" controls>
                        <source src="./uploads/highlight.avi" type="video/mp4">
                    </video>
                    <p>$video_title
                    <p>
                    <p>$upload_date</p>
                    <a href="">View</a>
                </div>
                <div class="video-card">
                    <video width="100%" height="50%" controls>
                        <source src="./uploads/highlight.avi" type="video/mp4">
                    </video>
                    <p>$video_title
                    <p>
                    <p>$upload_date</p>
                    <a href="">View</a>
                </div>
                <div class="video-card">
                    <video width="100%" height="50%" controls>
                        <source src="./uploads/highlight.avi" type="video/mp4">
                    </video>
                    <p>$video_title
                    <p>
                    <p>$upload_date</p>
                    <a href="">View</a>
                </div>
                <div class="video-card">
                    <video width="100%" height="50%" controls>
                        <source src="./uploads/highlight.avi" type="video/mp4">
                    </video>
                    <p>$video_title
                    <p>
                    <p>$upload_date</p>
                    <a href="">View</a>
                </div>
            </div>
        </div>
        <div class="news-section">
            <h3>Recent News</h3>
            <div class="card-section">
                <div class="news-card">
                    <img src="./images/logo.png" alt="">
                    <p>$news_title</p>
                    <p>$date</p>
                    <a href="">View</a>
                </div>
                <div class="news-card">
                    <img src="./images/logo.png" alt="">
                    <p>$news_title</p>
                    <p>$date</p>
                    <a href="">View</a>
                </div>
                <div class="news-card">
                    <img src="./images/logo.png" alt="">
                    <p>$news_title</p>
                    <p>$date</p>
                    <a href="">View</a>
                </div>
                <div class="news-card">
                    <img src="./images/logo.png" alt="">
                    <p>$news_title</p>
                    <p>$date</p>
                    <a href="">View</a>
                </div>
            </div>
        </div>
        <div class="fixtures-section">
            <h3>Fixtures</h3>
            <div class="card-section">
            <div class="fixture-card">
                    <p>$fixture_title</p>
                    <p>Sports: $category</p>
                    <p>Date: $fixture_date</p>
                </div>
                <div class="fixture-card">
                    <p>$fixture_title</p>
                    <p>Sports: $category</p>
                    <p>Date: $fixture_date</p>
                </div>
                <div class="fixture-card">
                    <p>$fixture_title</p>
                    <p>Sports: $category</p>
                    <p>Date: $fixture_date</p>
                </div>
                <div class="fixture-card">
                    <p>$fixture_title</p>
                    <p>Sports: $category</p>
                    <p>Date: $fixture_date</p>
                </div>
                <div class="fixture-card">
                    <p>$fixture_title</p>
                    <p>Sports: $category</p>
                    <p>Date: $fixture_date</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>