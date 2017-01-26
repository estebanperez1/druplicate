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
        .submitArea
        {
            min-height: 200px;
            max-width: 100%;
        }

        <?php
        $user = true;
        if($user)
        {
            echo ".editable
        {

        }";
        }
        ?>
        .test
        {

        }
        .editWrapper
        {
            min-height:10px;
            margin-top:20px;
            padding: 5px 10px;
            position:relative;
            border:solid 1px lightgray;
            border-radius: 5px;
        }
        .editButton, .addTemplateButton
        {
            position: absolute;
            top: -13px;
            right: 20px;
            height: 26px;
            width: 26px;
            background: white;
            border-radius: 50%;
            box-shadow: 0px 0px 5px 1px #5F5F5F;
        }
        .editableTemplate
        {
            min-height:10px;
            margin-top:20px;
            padding: 5px 10px;
            position:relative;
            border:solid 1px lightgray;
            border-radius: 5px;
        }
    </style>

    <body>

        <div class="editable" id="noIdd"></div>
        <div class="test editable" id="list"></div>
        <h1 class="editable" id ="header"></h1>
        <div class="editableTemplate" id ="header">
            <div class="card">
                <h1 class="editable" id="templateHeader"></h1>
                <p class="editable" id="templateParagraph"></p>
            </div>
        </div>



        <footer>
            <p>©UC Water 2016</p>
        </footer>
        <script src="./js/libraries/jquery-3.1.1.min.js"></script>

        <script>

        </script>
        <script>

            /*Select all editable elements, and refresh the content from the database*/
            var editables = $(".editable");
            editables.each(function(){
                getContent($(this));
            });


            /*pull the content from the database, and update the screens content*/
            function getContent(elem)
            {
                console.log("getContent: "+elem[0].innerHTML);
                $.ajax({
                    url: './php/getContent.php',
                    type: 'GET',
                    data: {
                        "id": '"'+elem[0].id+'"',
                        "content": '"'+elem[0].innerHTML+'"'
                    },
                    success: function(data) {
                        var out = data;
                        elem[0].innerHTML = out;
                        <?php $user = true;if($user){echo "addEditButton(elem);";}?>
                    },
                    error: function(e) {
                        alert("oops");
                    }
                });
            }

        </script>

        <?php
        $user = true;
        if($user)
        {
            echo '<script src="./js/custom/editContent.js"></script';
        }
        ?>
    </body>
</html>
