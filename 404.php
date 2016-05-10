<!--
* GenesisUI Bootstrap 4 Admin Template built as framework!
* Version 1.4.0
* https://GenesisUI.com
* Copyright 2016 creativeLabs Łukasz Holeczek
* License : https://GenesisUI.com/license.html
-->
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Упс, ошибочка</title>
        <!-- Main styles for this application -->
        <link href="admin/assets/css/style.css" rel="stylesheet">
    </head>
    <body class="">
        <div class="container">
            <div class="row">
                <div class="col-md-5 center-block pull-xs-none vamiddle">
                    <div class="clearfix">
                        <h1 class="pull-left display-3 m-r-2">404</h1>
                        <h4 class="p-t-1">Упс, что-то не так.</h4>
                        <p class="text-muted">Запрашиваемая страница не существует.</p>
                    </div>
                            <a href="index"><button class="btn btn-info center-block" type="button">На главную</button></a>
                </div>
            </div>
        </div>
        <!-- Bootstrap and necessary plugins -->
        <script src="admin/assets/js/libs/jquery.min.js"></script>
        <script src="admin/assets/js/libs/tether.min.js"></script>
        <script src="admin/assets/js/libs/bootstrap.min.js"></script>
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