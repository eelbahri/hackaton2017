<div id="fullpage">
    <div class="alert alert-success fade in">
        <strong>Victoire !</strong> Vous avez correctement répondu aux questions
    </div>
    <div class="alert alert-danger fade in">
        <strong>Dommage !</strong> Vous avez raté le test
    </div>
    <div class="alert alert-info fade in">
        <strong>Erreur !</strong> Renvoyer le formulaire
    </div>
    <div class="alert alert-warning">
        <strong>Attention!</strong> Vous n'avez pas répondu à toutes les questions
    </div>
    <div class="section" id="section1">
        <div class="slide" id="slide1" data-anchor="slide1" style="background-color: orangered">
            <div class="intro">
                <h1>Questionnaire Algo Facile</h1>
            </div>
        </div>

        <div class="slide" id="slide2" data-anchor="slide2" style="background-color: forestgreen">
            <h2>Quel est l'opérateur capable de stocker une valeur dans une variable ?</h2>
            <label class="radio"><input type="radio" name="optradio1" value="1">/</label>
            <label class="radio"><input type="radio" name="optradio1" value="2">*</label>
            <label class="radio"><input type="radio" name="optradio1" value="3">=</label>
        </div>

        <div class="slide" id="slide3" data-anchor="slide3" style="background-color: yellow">
            <h2>Comment s'appelle l'action qui soustrait un d'une variable ?</h2>
            <label class="radio"><input type="radio" name="optradio2" value="1">incrémentation</label>
            <label class="radio"><input type="radio" name="optradio2" value="2">décrémentation</label>
            <label class="radio"><input type="radio" name="optradio2" value="3">comparaison</label>
        </div>

        <div class="slide" id="slide4" data-anchor="slide4" style="background-color: cornflowerblue">
            <h2>Parmi les éléments suivants, quel est celui qui permet de stocker une valeur ?</h2>
            <label class="radio"><input type="radio" name="optradio3" value="1">constante</label>
            <label class="radio"><input type="radio" name="optradio3" value="2">variable</label>
            <label class="radio"><input type="radio" name="optradio3" value="3">expression</label>
        </div>

        <div class="slide" id="slide5" data-anchor="slide5" style="background-color: coral">
            <button class="btn btn-default" id="submitButton">Envoyer</button>
        </div>

    </div>
</div>

<style>
    .alert {
        display: none;
    }
</style>

<script>
    $(document).ready(function() {
        $('#fullpage').fullpage({
            anchors:['slide1', 'slide2', 'slide3']
        });
    });

    $('.alert').on('click', function () {
        $(this).hide();
    });

    $('button#submitButton').on('click', function (e) {
        var answers = new Array();

        $('input:checked').each(function () {
            answers.push($(this).val());
        });
        console.log(answers.length);
        // Compare le nombre questions avec le nombre de questions
        if (answers.length != $('div.slide h2').length) {
            $('.alert-warning').show();
            return;
        }

        $.ajax({
            url : '../controllers/correctAnswers.php',
            type : 'POST',
            data : {
                'answers' : answers
            },
            dataType:'json',
            success : function(data) {
                $('button#submitButton').prop('disabled', true);
                if (data.success) {
                    $('.alert-success').show();
                } else {
                    $('.alert-danger').show();
                }
            },
            error : function(request,error)
            {
                $('.alert-info').show();
            }
        });

    });

// ANIMATE BUTTON




</script>