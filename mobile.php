<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "user_agent.php"; 
    $user = user_agent(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
<?php if($user=='ios'){?>
        <div id="mobile-redirect">
        <div class="col-xs-12 col-sm-12">
            <div class="row">
                <div class="col-xs-2 d-flex align-content-center flex-wrap">
                    <a onClick="Close()" class="p-1">X</a></div>
                <div class="col-xs-2 d-flex align-content-center flex-wrap">
                    <img src="avatar.png" alt="Avatar" width=50;></div>
                <div class="col d-flex align-content-center flex-wrap">
                    <p class="h5">Addax App Store'da</h3>
                    <p class="text-muted">Keyifli ve Kolay Alışveriş için</p></div>
                <div class="col-xs-1 d-flex align-content-center flex-wrap">
                <a class="p-2" href="https://www.apple.com/tr/ios/app-store/">İndir</a></div>
            </div>
    </div>
    </div>
    <?php }?>

    <?php if($user=='android'){?>
        <div id="mobile-redirect">
            <div class="col-xs-12 col-sm-12">
                <div class="row">
                    <div class="col-xs-1 d-flex align-content-center flex-wrap">
                        <a onClick="Close()" class="p-1">X</a></div>
                    <div class="col-xs-2 d-flex align-content-center flex-wrap">
                        <img src="avatar.png" alt="Avatar" width=50;></div>
                    <div class="col d-flex align-content-center flex-wrap">
                        <p class="h5">Addax Play Store'da</h3>
                        <p class="text-muted">Keyifli ve Kolay Alışveriş için</p></div>
                    <div class="col-xs-1 d-flex align-content-center flex-wrap">
                    <a class="p-2" href="https://play.google.com/store?hl=tr">İndir</a></div>
                </div>
        </div>
        </div>
    <?php }?>

	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="js/bootstrap.js"></script>
<script src="js/close.js"></script>
</body>
</html>