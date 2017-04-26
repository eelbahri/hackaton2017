<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Hackaton</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="../style/jquery.fullPage.css" />

    <script type="text/javascript" src="../style/jquery.fullPage.js"></script>

    <link rel="stylesheet" href="../style/style.css">
    </head>
    <body>
        <div class="container">
            <nav role="navigation" class="nav">
                <ul class="nav nav-pills">
                    <li role="presentation" class="active"><a href="/<?php echo FOLDERNAME; ?>/">Profile</a></li>
                    <li role="presentation"><a href="/<?php echo FOLDERNAME; ?>/testsAlgo/index">Tests Algo</a></li>
                    <li role="presentation"><a href="/<?php echo FOLDERNAME; ?>/chatbot">ChatBot</a></li>
                </ul>
            </nav>

        <?php include $this->view;?>
    </body>
</html>
