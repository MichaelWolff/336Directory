const app = {};

app.apiUrl = 'https://api.spotify.com/v1';


var oAuth = 'BQBktNQniNx5IoGfiUFbsxI_MIsIdlTrvw6YX_mmEedLr5F1tmZ0PTFDmmE-aYwky3f_zzM4CTgovndMqP6VWgTZVLtNeIYBN8jRGNHgnqNeiJoCRgYIg8t07wRUK7lGU0jgtIV_iSYgoQAuzhlzvvnwcM3MMg1vDvOw3eTdouorG8UH289W1olE_g';



$('.playlist').html('<iframe src="${baseURL}></iframe>');

app.events = function(){
    $('form').on('submit', function(e){
        e.preventDefault();
        let artists = $('input[type=search]').val();
        artists = artists.split(',');
        let search = artists.map(artistName => app.searchArtist(artistName));
        console.log(search);
        app.retreiveArtistInfo(search);
        
        
        // console.log(artists);
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
   }
});

app.getArtistTracks = (artistAlbumsId)=>$.ajax({
    url: app.apiUrl + '/albums/'+artistAlbumsId,
   method: 'GET',
   dataType: 'json',
   headers: {//Handles authorizing the applicaiton with my OAuth token
    'Authorization': 'Bearer ' + oAuth
  },
   data:{
       album_type: 'album'
   }
});


app.retreiveArtistInfo = function(search){
    $.when(...search)
            .then((...results)=>{
                results = results.map(res => results[0].artists.items[0].id)
                    //.map(id => app.getArtistAlbums(id));
                console.log(results[0]);
                //console.log(app.getArtistAlbums(results));
            });
}

app.init = function(){
    app.events();
    
};

$(app.init);

//Playing from the spotify web player
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
			
			
		
			