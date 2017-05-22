$(document).ready(function(){
	$("#menu li").on("click", function() {
		var cible= $(this).find("a").attr("href");
		$("html, body").animate({scrollTop: $(cible).offset().top}, 750);
		return false;
	})
	console.log($("#menu li"));	
	
});

$(function() {
    var words = [
        'autodidacte',
        'un dessinateur',
        'enthousiaste',
        'curieux',

    ];
    i=0;

     setInterval(function() {
        $("#word").fadeOut(function() {
            $(this).html(words[i = (i+1) % words.length]).fadeIn();
        });
    }, 2500)
});

/*$(document).ready(function(){       
            var scroll_pos = 0;
            $(document).scroll(function() { 
                scroll_pos = $(this).scrollTop();
                if(scroll_pos > 610) {
                    $(".navigation").css('background-color', '#0e2f52');
                } else {
                    $(".navigation").css('background-color', '');
                }
            });
        });

$(document).ready(function(){       
            var scroll_pos = 0;
            $(document).scroll(function() { 
                scroll_pos = $(this).scrollTop();
                if(scroll_pos > 610) {
                    $(".navigation").css('width', '100%');
                } else {
                    $(".navigation").css('width', '');
                }
            });
        }); */
