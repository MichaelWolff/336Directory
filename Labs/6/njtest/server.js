  /* Load the HTTP library */
  // var http = require("http");

  /* Create an HTTP server to handle responses */
window.onSpotifyWebPlaybackSDKReady = () => {
  const token = 'BQARCaUNfn94x8-M3t-AHHjfuA1RO1XCPiwHvaJZtxS4mqS6cV6LapSdDwGXhVrALazBikFoL4kNKeaDR5KxrDT3Y0Iw0qgZ0cRGHPwlPznWMLsC2pUgPn2tqjwMbP_AOYY5oFOvNrXTOCxfcKr7kMr726_xCDXCYBqW35vy8C43UGErHjJKRXfuZQ';
  const player = new Spotify.Player({
    name: 'Web Playback SDK Quick Start Player',
    getOAuthToken: cb => { cb(token); }
  });

  // Error handling
  player.addListener('initialization_error', ({ message }) => { console.error(message); });
  player.addListener('authentication_error', ({ message }) => { console.error(message); });
  player.addListener('account_error', ({ message }) => { console.error(message); });
  player.addListener('playback_error', ({ message }) => { console.error(message); });

  // Playback status updates
  player.addListener('player_state_changed', state => { console.log(state); });

  // Ready
  player.addListener('ready', ({ device_id }) => {
    console.log('Ready with Device ID', device_id);
  });

  // Connect to the player!
  player.connect();
};