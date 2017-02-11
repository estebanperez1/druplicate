<?php
$user = true;
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="Home Page for UC Water">
        <meta name="author" content="Esteban Perez">

        <title>UC Water</title>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <style>
        .card
        {
            box-shadow: 0px 0px 5px 1px #5F5F5F;
            border-radius: 5px;
            margin-bottom: 10px;
            padding: 10px;
        }
        .list-type-button
        {
            width: 48.15%;
            float: left;
        }
        .list-type-button.left
        {
            border-radius: 20px 0px 0px 0px;
            background-color: white;
            text-align: center;
            border: solid 1px grey;
            padding: 5px 10px;
            border-right: solid 1px black;
        }
        .list-type-button.right
        {
            border-radius: 0px 20px 0px 0px;
            background-color: white;
            text-align: center;
            border: solid 1px grey;
            padding: 5px 10px;
            border-left: solid 1px black;
        }

    </style>

    <body>


        <div style="height:100px; width:70%;">
            <div class="listSelect">
                <div class="list-type-button left">Numbered</div>
                <div class="list-type-button right">Buletted</div>
            </div>
            <textarea style="width:100%;height:100%;max-width:100%;max-height:120%"></textarea>
        </div>



        <script src="./js/libraries/jquery-3.1.1.min.js"></script>

        <script>

        </script>
        <script>
            var listType;

            $(".list-type-button").each(function(){
                $(".list-type-button").click(function () {

                });
            })
            /*Select all editable elements, and refresh the content from the database*/

        </script>
    </body>
</html>
