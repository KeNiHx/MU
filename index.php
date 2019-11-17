<?php
include("includes/config.php");

// session_destroy(); LOGOUT

if(isset($_SESSION['userLoggedIn'])){
    $userLoggedIn = $_SESSION['userLoggedIn'];
}else{
    header("Location: register.php");
}
?>

<html>
<head>
    <title>Welcome to MU's!</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <div id="mainContainer"> 
        <div id="topContainer">
            <div id="navBarContainer">
                   
            </div>
        </div>
        <div id="nowPlayingBarContainer">
            <div id="nowPlayingBar">
                <div id="nowPlayingLeft">
                    <div class="content">
                        <span class="albumLink">
                            <img src="https://i.pinimg.com/originals/7e/cb/b8/7ecbb87db2f488bc0986750e0b0f6fe3.jpg" class="albumArtwork">
                        </span>
                        <div class="trackInfo"> 
                            <span class="trackName">
                                <span>BOOMBAYAH</span>
                            </span>
                            <span class="artistName">
                                <span>BACKPINK</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div id="nowPlayingCenter">

                    <div clas="content playerControls">

                        <div class="buttons">

                            <button class="controlButton shuffle" title="Shuffle button">
                                <img src="assets/images/icons/shuffle.png" alt="Shuffle">
                            </button>
                            <button class="controlButton previous" title="Previous button">
                                <img src="assets/images/icons/previous.png" alt="Previous">
                            </button>
                            <button class="controlButton play" title="Play button">
                                <img src="assets/images/icons/play.png" alt="Play">
                            </button>
                            <button class="controlButton pause" title="Pause button" style="display: none">
                                <img src="assets/images/icons/pause.png" alt="Pause">
                            </button>
                            <button class="controlButton next" title="Next button">
                                <img src="assets/images/icons/next.png" alt="Next">
                            </button>
                            <button class="controlButton repeat" title="Repeat button">
                                <img src="assets/images/icons/repeat.png" alt="Repeat">
                            </button>
                    
                        </div>

                        <div class="playbackBar">

                            <span class="progressTime current">0.00</span>
                            <div class="progressBar">
                                <div class="progressBarBg">
                                    <div class="progress"></div>
                                </div>                       
                            </div>
                            <span class="progressTime remaining">0.00</span>

                        </div>

                    </div>
                </div>
                <div id="nowPlayingRight">
                    <div class="volumeBar">
                        <button class="controlButton volume" title="Volume button" >
                            <img src="assets/images/icons/volume.png" alt="Volume">
                        </button>
                        <div class="progressBar">
                            <div class="progressBarBg">
                                <div class="progress"></div>
                            </div>                       
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
</body>
</html>