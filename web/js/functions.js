$(document).ready(function() {
    var lock = false;
    var count = 1200;
    var min  = 0;
    var secs = 0;
    var progress = 0;

    var w = $(window).width();

    // a mettre a partir du slide 2

    // $("#slide2").hide();
    // $("#slide3").hide();
    // $("#slide4").hide();

    $("#start").click(function() {
        var counter=setInterval(timer, 1000); //1000 will  run it every 1 second
        next();
    })

    $(".next").click(function(){
        if($(this).hasClass('finish')) {
            $("#popup-overlay").show();
            $("#popup").show();
            return;
        }
        next();
    })
    var test = 0;
    function next(){
        if(lock){
			return;
		}
        test++;
        lock = true;
        console.log(progress);
        progress = progress + 33;
        console.log(progress);
        $('.progress-bar').css('width', progress+'%').attr('aria-valuenow', progress);
        $("#quests").animate({
			marginLeft : -w*test
		}, 1000,
		function(){
            // $("#slide .element:last").after($("#slide .element:first"));
			// $("#slide").css("margin-left", "0px");
			lock = false;
		});


    }

    function timer()
    {
        count = count-1;
        min = getMinutes(count);
        secs = getSecondes(count);

        if (count <= 0)
        {
            clearInterval(counter);
            // stopQuiz();
            return;
        }

        document.getElementById("timer").innerHTML = min+":" +secs;
    }

    function getMinutes(count)
    {
        if (count >= 60) {
            var modulo = count % 60;
            min = (count - modulo) / 60
        } else { 
            min = 0;
        }
        return min;
    }

    function getSecondes(count)
    {
        if (count <= 60) {
            secs = count;
        } else {
            secs = count % 60;
        }

        if(secs >= 0 && secs < 10) {
            return "0"+secs;
        } else {
            return secs;
        }
    }

})
