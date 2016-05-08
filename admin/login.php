<!--
* GenesisUI Bootstrap 4 Admin Template built as framework!
* Version 1.4.0
* https://GenesisUI.com
* Copyright 2016 creativeLabs Łukasz Holeczek
* License : https://GenesisUI.com/license.html
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
        <title>Вход</title>
        <!-- Main styles for this application -->
        <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="card-group vamiddle">
                        <div class="card  p-a-2">
                            <div class="card-block">
                                <h1 class="pull-center">Вход</h1>
                                <div class="input-group m-b-1">
                                    <span class="input-group-addon"><i class="icon-user"></i></span>
                                    <input type="text" class="form-control" placeholder="Логин">
                                </div>
                                <div class="input-group m-b-2">
                                    <span class="input-group-addon"><i class="icon-lock"></i></span>
                                    <input type="password" class="form-control" placeholder="Пароль">
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <button type="button" class="btn btn-primary">Войти</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap and necessary plugins -->
        <script src="assets/js/libs/jquery.min.js"></script>
        <script src="assets/js/libs/tether.min.js"></script>
        <script src="assets/js/libs/bootstrap.min.js"></script>
        <script>
        function verticalAlignMiddle()
        {
            var bodyHeight = $(window).height();
            var formHeight = $('.vamiddle').height();
            var marginTop = (bodyHeight / 2) - (formHeight / 2);
            if (marginTop > 0)
            {
                $('.vamiddle').css('margin-top', marginTop);
            }
        }
        $(document).ready(function()
        {
            verticalAlignMiddle();
        });
        $(window).bind('resize', verticalAlignMiddle);
        </script>
        
        
    </body>
</html>