var x = 0;

jQuery(function($) {
  $('#typeIt').typeIt({
       speed: 50,
       autoStart: false,
       callback: function() {
         $('#typeIt').find('.ti-cursor').addClass('is-hidden');
       }
  })
  .tiType('I am a cert')
  .tiPause(200)
  .tiSettings({speed: 300})
  .tiDelete(4)
  .tiSettings({speed: 50})
  .tiPause(500)
  .tiType('Certified Salesforce Advanced Administrator')
  .tiPause(500)
  .tiType(' &')
  .tiBreak()
  .tiPause(750)
  .tiType('Certified Salesforce Platform App Builder')
  .tiPause(1250)
  .tiDelete()
  .tiPause(500)
  .tiType('I am also a Netsui')
  .tiSettings({speed: 300})
  .tiDelete(3)
  .tiSettings({speed: 50})
  .tiType('Suite Certified Administrator')
  .tiPause(1000)
  .tiDelete()
  .tiType('I like ')
  .tiPause(100)
  .tiSettings({speed: 300})
  .tiDelete(5)
  .tiSettings({speed: 50})
  .tiPause(300)
  .tiType('<mark>love</mark> building custom solutions')
  .tiBreak().tiPause(750)
  .tiType('for the end users I support')
  .tiPause(1250)
  .tiDelete()
  .tiPause(500)
  .tiType('I am a CRM and ERP')
  .tiBreak().tiPause(750)
  .tiType('Administrator & Developer')  
});

function randomGif(specific) {
    var tag = "happy"; // search query
    var rating = "pg";
    console.log(x);

    request = new XMLHttpRequest;
    // if this is the first time the page loads pull the static GIF else pull a random GIF
    if(specific === 1){
        request.open('GET', 'http://api.giphy.com/v1/gifs/12SXVd8bmXdSg0?api_key=dc6zaTOxFJmzC', true);
        }
    else if  (specific === 2) {
    request.open('GET', 'http://api.giphy.com/v1/gifs/d78vbBA54uHFS?api_key=dc6zaTOxFJmzC', true);
    }
     else {
    request.open('GET', 'http://api.giphy.com/v1/gifs/random?api_key=dc6zaTOxFJmzC&tag=' + tag + '&rating=' + rating, true);
  }

    request.onload = function() {
        if (request.status >= 200 && request.status < 400) {
          if(specific){
            data = JSON.parse(request.responseText).data.images.fixed_height_downsampled.url;
          }else {
            data = JSON.parse(request.responseText).data.fixed_height_downsampled_url;
          }
            document.getElementById("giphyme").innerHTML = '<center><img src = "' + data + '"  title="GIF via Giphy"></center>';
        } else {
            console.log('reached giphy, but API returned an error');
        }
    };

    request.onerror = function() {
        console.log('connection error');
    };

    request.send();


}

document.getElementById("randomGifButton").onclick = function(){
jQuery(function($) {
if(x != 3 && x <= 5){ 
	randomGif();
	} else if (x === 3) {
		$("#giphyme").html("<div class=\"easterEgg\"><h2>Okay, let\'s not go crazy </h2><h4>You get two more clicks, click wisely</h4></div>");
	} else if (x === 6) {
	$("#giphyme").html("<div class=\"easterEgg\"><h2>Okay that was your last click.</h2><h4>That was fun right? Now what ever you do, don\'t click the button again.</h4></div>");
	$("#randomGifButton").prop('value', 'Don\'t Click!');
	}
	else if (x === 7) {
		specific = 2;
		randomGif(specific);
		$( "#giphyme" ).after("<p id=\"grumpyCatText\" style=\"margin-top:20px;\">Grumpy Cat is disappointed in you.</p>" );
		$("#randomGifButton").prop('value', 'Poke the Cat');
	} else if (x === 8) {
		$("#grumpyCatText").remove();
		$("#giphyme").html("<div class=\"easterEgg\"><h2>Have you no decency!</h2></div>");
		$("#randomGifButton").prop('value', 'Don\'t Click!');
	}
	else if (x === 9) {
		$("#giphyme").html("<div class=\"easterEgg\"><h2>Well that answers that.</h2></div>");
		$("#randomGifButton").prop('value', 'Don\'t Click!');
	}
	x++;
	});
};


document.addEventListener('DOMContentLoaded', function() {
  var specific = 1;
    randomGif(specific);
});
