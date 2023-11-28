<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>
            .dragdrop {
                height: 500px;
            }
            .firstClass {
                background-color : #fefbd8;
                padding:20px;
                margin-right:10px;
            }
            .secondClass {
                background-color: #80ced6;
                padding:20px;
            }
            .item {
                padding: 15px;
                background-color: #777777;
                width : 125px;
                margin-top:10px;
            }
            .item-drag-drop {
                padding: 15px;
                background-color: #80ced6;
                width : 125px;
                margin-right:5px;
            }

        </style>
    </head>
    <body class="container">
        <h5>Drag drop item</h5>
        <div class="row dragdrop">
        <div class="col-sm-5 col-md-5 border border-light firstClass">
            <div class="item border border-dark">item1</div>
            <div class="item border border-dark">item2</div>
        </div>
        <div class="col-sm-5 col-md-5 border border-light secondClass">
            <div class="row">
                <div class="col-sm-3 col-md-3 item-drag-drop"></div>
                <div class="col-sm-3 col-md-3 item-drag-drop"></div>
            </div>
        </div>
        </div>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script>
        $(document).ready(function(){
            $(function() {
                $(".item").draggable();
                $(".item-drag-drop").droppable();
            });
        });
        </script>
    </body>
</html>
