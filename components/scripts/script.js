


var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '475',
          width: '800',
          videoId: 'sBd0XECCkcQ',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
      	console.log('PlayerReady');
        // event.target.playVideo();
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player pauses the slider by calling the slickPause method.
      // var done = false;
      function onPlayerStateChange(event) {
      	console.log('PlayerStateChange fired');
        console.log(player.getPlayerState());
        if (event.data == YT.PlayerState.PLAYING ) {
        	console.log('PlayerState.PLAYING fired');
          jQuery('.portfolio_slider').slick('slickPause');
          jQuery('#main-slider-nav').slideUp();
          // done = false;
        } else if (event.data == YT.PlayerState.PAUSED ) {
          console.log('PlayerState.PAUSED fired');
          jQuery('#main-slider-nav').slideDown();
        
        } else if (event.data == YT.PlayerState.STOPPED ) {
          console.log('PlayerState.PAUSED fired');
          jQuery('#main-slider-nav').slideDown();
        }
      }
      // function stopVideo() {
      //   player.stopVideo();
      // }

 //   jQuery('.portfolio_slider').on('beforeChange', function (event) {
	// if (event.data == YT.PlayerState.PLAYING ) {
 //        player.pauseVideo();
	//      }
 //      });   


jQuery(document).ready(function ($) {

 
// Enable tootips via bootstrap
  $(function() {
    $('[data-toggle="tooltip"]').tooltip();
  });

  // Slick Carousel Settings
  $('.gallery-responsive').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          arrows: true
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          arrows: true
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

});