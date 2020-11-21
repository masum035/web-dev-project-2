<?php
require_once "Head.php";
?>
<body>
<center>
    <div class="main-container">
        <div class="flip" id="rightSide">
            <div class="flip flip-vertical">
                <div class="front"
                     style="background-image: url('picture_for_web/tokyo_ghoul.jpg')">
                </div>
                <div class="back">
                    <h2>Anime name</h2>
                    <p>Good tools make application development quicker and easier to maintain than if you did everything
                        by
                        hand..</p>
                </div>
            </div>
        </div>
        <div class="player-section container-fluid"
             style="padding-top: 20px; padding-bottom: 0px; background-color: #36393E;">
            <di class="av-player-box" id="leftSide">
                <h4 class="episode-number-title">You are watching : Anime name</h4>
                <!--<iframe src="https://animevibe.wtf/players/default.php?id=304895f99d31feaa6a" id="main-frame"
                        class="embed-responsive-item" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO
                        WIDTH=680 HEIGHT=390 allowfullscreen webkitallowfullscreen=true
                        mozallowfullscreen=true></IFRAME>-->
                <iframe src="https://www.youtube.com/embed/NUYvbT6vTPs" frameborder="0" MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO
                        WIDTH=680 HEIGHT=390 allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen webkitallowfullscreen=true></iframe>
        </div>
        <a class="btn btn-success btn-default" href="Home.php" style="width:166px">Go Back</a> <br><br>
        <style>
            @import url("https://fonts.googleapis.com/css?family=Roboto+Mono");

            * {
                box-sizing: border-box;
                font-weight: normal;
            }

            .main-container {
                color: white;
                background: #36393E;
                text-align: center;
                font-family: 'Roboto Mono';
                padding: 1em;
            }

            h1 {
                font-size: 2.2em;
            }

            .flip {
                position: relative;
            }

            .flip > .front,
            .flip > .back {
                display: block;
                transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
                transition-duration: .5s;
                transition-property: transform, opacity;
            }

            .flip > .front {
                transform: rotateY(0deg);
            }

            .flip > .back {
                position: absolute;
                opacity: 0;
                top: 0px;
                left: 0px;
                width: 100%;
                height: 100%;
                transform: rotateY(-180deg);
            }

            .flip:hover > .front {
                transform: rotateY(180deg);
            }

            .flip:hover > .back {
                opacity: 1;
                transform: rotateY(0deg);
            }

            .flip.flip-vertical > .back {
                transform: rotateX(-180deg);
            }

            .flip.flip-vertical:hover > .front {
                transform: rotateX(180deg);
            }

            .flip.flip-vertical:hover > .back {
                transform: rotateX(0deg);
            }

            .flip {
                position: relative;
                display: inline-block;
                margin-right: 2px;
                margin-bottom: 1em;
                width: 400px;
            }

            .flip > .front,
            .flip > .back {
                display: block;
                color: white;
                width: inherit;
                background-size: cover !important;
                background-position: center !important;
                height: 220px;
                padding: 1em 2em;
                background: #313131;
                border-radius: 10px;
            }

            .flip > .front p,
            .flip > .back p {
                font-size: 0.9125rem;
                line-height: 160%;
                color: #999;
            }
        </style>
    </div>
</center>
<?php
require_once "Footer.php";
?>
