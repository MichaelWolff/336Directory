const app = {};

app.apiUrl = 'https://api.spotify.com/v1';


var oAuth = 'BQCTl4Qgyf8arXUbRfWkl2u5JWIwa8nzUb57Gb1w10hCxCuUuEzv-p43qCDmirfPE17CsWPHdw82wODLZu_SJXvm7t5axN6oWWFJsPjw_j2cr3is0UHz5yPyNq5qI8JOEF_6ney4BxhhzIR2QckCON_AnsVZuvUpJ3_Z1xoUMnZ0iyzgatg5RwF8Bg';




app.events = function(){
    $('form').on('submit', function(e){
        e.preventDefault();
        let artists = $('input[type=search]').val();
        artists = artists.split(',');
        //artists = artists[0];
        console.log(artists);
        let search = artists.map(artistName => app.searchArtist(artistName));
        console.log(search);
        //console.log(search.artists.items[0].id);
        //app.retreiveArtistInfo(search);
    });
};

app.searchArtist = (artistName) => $.ajax({
   url: app.apiUrl+'/search',
   method: 'GET',
   dataType: 'json',
   headers: {//Handles authorizing the applicaiton with my OAuth token
    'Authorization': 'Bearer ' + oAuth
  },
   data: {
       q: artistName,
       type: 'artist'
   },
   success: function(result){
       console.log("Search Artist");
       console.log(result.artists.items[0].id);
       app.getTopTracks(result.artists.items[0].id);
   }
});

app.getArtistAlbums=(artistId)=> $.ajax({
   url: app.apiUrl + '/artists/'+artistId[0]+'/albums',
   method: 'GET',
   dataType: 'json',
   headers: {//Handles authorizing the applicaiton with my OAuth token
    'Authorization': 'Bearer ' + oAuth
  },
   data:{
       id: 'Album'
   },
   success: function(result){
       console.log("getArtistAlbums");
   }
});

app.getArtistTracks = (artistAlbumsId)=>$.ajax({
    url: app.apiUrl + '/albums/'+artistAlbumsId+'/top-tracks',
    method: 'GET',
    dataType: 'json',
    headers: {//Handles authorizing the applicaiton with my OAuth token
        'Authorization': 'Bearer ' + oAuth
    },
    data:{
        album_type: 'album'
        //Need to return the album image, Album name, Artist, the length, the rating
    },
    success: function(result){
       console.log("Get Artist Tracks");
   }
});


app.retreiveArtistInfo = function(search){
    $.when(...search)
            .then((...results)=>{
                results = results.map(res => results[0].artists.items[0].id)
                    .map(id => app.getTopTracks(id));//Correctly returns the top tracks of the artist.
                    
               //console.log(results[0]);
                
                
                //results = results.map(res => results[0].tracks);
                //console.log(results);
                //console.log(results[0].tracks);
                //Append the new track here
                
                //console.log(app.getArtistAlbums(results));
            });
}

app.getTopTracks = (artistId)=>$.ajax({
    url: app.apiUrl + '/artists/'+artistId+'/top-tracks?country=US',
    method: 'GET',
    dataType: 'json',
    country: 'US',
    headers: {//Handles authorizing the applicaiton with my OAuth token
        'Authorization': 'Bearer ' + oAuth
    },
    data:{
        tracks: 'track'
        //Need to return the album image, Album name, Artist, the length, the rating
    },
    success: function(result){
        // console.log(result.tracks[0]);
        // console.log(result.tracks[0].name);
        // console.log(result.tracks[0].artists[0].name);
        // console.log(result.tracks[0].duration_ms);
        // console.log(result.tracks[0].album.name);
        // console.log(result.tracks[0].album.images[0]);
        var tempTrack = new Track(result.tracks[0].name, result.tracks[0].artists[0].name, result.tracks[0].duration_ms, result.tracks[0].album.name, result.tracks[0].album.images[0].url);
        appendTrack(tempTrack);
        console.log("Get Top Tracks");
    } 
    
})

app.init = function(){
    app.events();
    
};

$(app.searchArtist("Eminem"));
$(app.searchArtist("Muse"));
$(app.searchArtist("Skrillex"));
$(app.searchArtist("Avicii"));
$(app.searchArtist("Rise Against"));
$(app.searchArtist("ACDC"));
$(app.searchArtist("Van Halen"));
$(app.searchArtist("Queen"));
$(app.searchArtist("Abba"));
$(app.searchArtist("Skillet"));
$(app.searchArtist("Dead South"));

$(app.init);


//This is the playground area




function Track(title, artist, duration, album, image){
    this.title = title;
    this.artist = artist;
    this.duration = duration;
    this.album = album;
    this.image = image;
}


//This will be the tester of adding an item to the playlist, it will eventualyl need to pull from the database but it should append the image, play time etc

function appendTrack(track){
    $("body div").append('<ul class= trackListing>');
    $("body div").append('<img class="playImage" src="'+track.image+'"alt="Spotify">');
    $("body div").append('<li class="trackText">'+ track.title+'</li>');
    $("body div").append('<li class="trackText">'+ track.artist+'</li>');
    $("body div").append('<li class="trackText">'+ track.album+'</li>');
    $("body div").append('<li class="trackText">'+ msToTime(track.duration)+'</li>');
    $("body div").append('</ul>');
    console.log('append track');
}
 function msToTime(duration) {
        var  seconds = parseInt((duration/1000)%60)
            , minutes = parseInt((duration/(1000*60))%60);

        minutes = (minutes < 10) ? "0" + minutes : minutes;
        seconds = (seconds < 10) ? "0" + seconds : seconds;

        return minutes + ":" + seconds;
    }

//Playing from the spotify web player
var track = {
    title:"Way Down we go",
    artist:"Kaleo",
    duration:"123541",
    album:"A/B",
    image:'https://i.scdn.co/image/45bec52b528374350b3d5f1cd1fe719a6bd7b683'
}
appendTrack(track)
//myTrack = new Track('Way Down we go', 'Kaleo', '3:23', 'A/B', 'https://i.scdn.co/image/45bec52b528374350b3d5f1cd1fe719a6bd7b683');
//Track.appendTrack(myTrack.title,myTrack.artist,myTrack.duration,myTrack.album,myTrack.image);
	window.onSpotifyWebPlaybackSDKReady = () => {
			const token = oAuth;
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
			$("body").append(player);	
			};
			
			
		
			