<?php
include 'poll.php';
?>
<!DOCTYPE html>
<html>
    <!--<script src="https://sdk.scdn.co/spotify-player.js"></script>-->
    <head>
        <title> Wolff's Spotify Application</title>
        <style>
            @import url("css/styles.css");
        </style>
            
    </head>
    <body style="margin: 0;">
        
            <ul>
              <li><a href="https://www.spotify.com/" style="padding:0;"><img src="img/SpotifyLogo.png" alt="Spotify"></a>
              <li><a href="index.php">Home</a></li>
              <li><a href="news.asp">News</a></li>
              <li><a href="contact.asp">Contact</a></li>
              <li style="float:right"><a class="active" href="#logout">Logout</a></li>
            </ul>

      <!--        <h1>Spotify Web Playback SDK Quick Start Tutorial</h1>-->
      <!--            <h2>Open your console log: <code>View > Developer > JavaScript Console</code></h2>-->

      <!--            <script src="https://sdk.scdn.co/spotify-player.js"></script>-->
      <!--              <script>-->
      <!--                  window.onSpotifyWebPlaybackSDKReady = () => {-->
      <!--                  const token = 'BQARCaUNfn94x8-M3t-AHHjfuA1RO1XCPiwHvaJZtxS4mqS6cV6LapSdDwGXhVrALazBikFoL4kNKeaDR5KxrDT3Y0Iw0qgZ0cRGHPwlPznWMLsC2pUgPn2tqjwMbP_AOYY5oFOvNrXTOCxfcKr7kMr726_xCDXCYBqW35vy8C43UGErHjJKRXfuZQ';-->
      <!--                  const player = new Spotify.Player({-->
      <!--                  name: 'Web Playback SDK Quick Start Player',-->
      <!--                  getOAuthToken: cb => { cb(token); }-->
      <!--                  });-->

      <!--// Error handling-->
      <!--                  player.addListener('initialization_error', ({ message }) => { console.error(message); });-->
      <!--                  player.addListener('authentication_error', ({ message }) => { console.error(message); });-->
      <!--                  player.addListener('account_error', ({ message }) => { console.error(message); });-->
      <!--                  player.addListener('playback_error', ({ message }) => { console.error(message); });-->

      <!--// Playback status updates-->
      <!--                  player.addListener('player_state_changed', state => { console.log(state); });-->

      <!--// Ready-->
      <!--                  player.addListener('ready', ({ device_id }) => {-->
      <!--                  console.log('Ready with Device ID', device_id);-->
      <!--                  });-->

      <!--// Connect to the player!-->
      <!--                  player.connect();-->
      <!--                  };-->
      <!--        </script>-->
        </body>
</html>