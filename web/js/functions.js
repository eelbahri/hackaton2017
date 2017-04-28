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
        var counter = setInterval(timer, 1000); //1000 will  run it every 1 second
        next();
    })

    var i = 0;
    $(".next").click(function(){
        if($(this).hasClass('finish')) {
            return;
        }

        if($('input:checked').length == i) {
            i++;
        } else {
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
        progress = progress + 33;
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
        if (count <= 0)
        {
            stopQuiz();
            clearInterval(counter);
            min = 0;
            secs = 0;
            document.getElementById("timer").innerHTML = min+":" +secs;
            return;
        }

        count = count-1;
        min = getMinutes(count);
        secs = getSecondes(count);

        document.getElementById("timer").innerHTML = min+":" +secs;
    }

    function getMinutes(count)
    {
        if (count === 0) {
            min = 0;
            return min;
        }
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
        if (count === 0) {
            secs = 0;
            return secs;
        }
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

    // Submit QCM action
    $('.finish').on('click', function () {
        var answers = new Array();

        $('input:checked').each(function () {
            answers.push($(this).val());
        });

        if (answers.length != $('.intitule').length) {
            return;
        }

        $.ajax({
            url : '/post/ajax/correctAnswers',
            type : 'POST',
            data : {
                'answers' : answers
            },
            dataType:'json',
            success : function(data) {
                if (data.success) {
                    // Animate Popup
                    $('#popup-overlay').fadeIn('fast');
                    $('#popup').fadeIn('slow');
                    $('.content-success').fadeIn('slow');
                } else {
                    // Animate Popup
                    $('#popup-overlay').fadeIn('fast');
                    $('#popup').fadeIn('slow');
                    $('.content-fail').fadeIn('slow');
                }
            },
            error : function(request,error)
            {
                $('.alert-info').show();
            }
        });

    });


    //        RDV SUBMIT BUTTON
    $('#submitRdv').on('click', function () {
        var meets = new Array();

        $('.content-success input:checked').each(function() {
            meets.push($(this).attr('value'));
        });

        if(!meets.length) {
            return
        }

        $.ajax({
            url : '/post/ajax/saveMeetAction',
            type : 'POST',
            data : {
                'meets' : meets
            },
            dataType:'json',
            success : function(data) {
                $('.content-success').fadeOut('fast');
                $('.content-rdv-success').fadeIn('slow');
            },
            error : function(request,error)
            {
            }
        });
    });

    function stopQuiz() {
        $('#popup-overlay').fadeIn('fast');
        $('#popup').fadeIn('slow');
        $('.content-timeout').fadeIn('slow');
    }

})
