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
                                <form method="POST" id="submitThis" action="javascript:void(null);" onsubmit="callUpdate()">
                                    <div class="input-group m-b-1">
                                        <span class="input-group-addon"><i class="icon-user"></i></span>
                                        <input type="text" class="form-control" placeholder="Логин" name="login">
                                    </div>
                                    <div class="input-group m-b-2">
                                        <span class="input-group-addon"><i class="icon-lock"></i></span>
                                        <input type="password" class="form-control" placeholder="Пароль" name="password">
                                    </div>
                                            <button type="submit" class="btn btn-primary">Войти</button>
                                </form>
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

            function callUpdate() {
              var msg   = $('#submitThis').serialize();
                $.ajax({
                  type: 'POST',
                  url: 'login_db.php',
                  data: msg,
                    success:function(data){
                        if (data==1){
                            window.location.href="index";
                        }else {
                            window.location.href="login";
                        }
                    }
                });
            }
        </script>
        
        
    </body>
</html>