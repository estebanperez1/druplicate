<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="Home Page for UC Water">
        <meta name="author" content="Esteban Perez">

        <title>UC Water</title>



    </head>
    <style>
        .card
        {
            box-shadow: 0px 0px 5px 1px #5F5F5F;
            border-radius: 5px;
            padding: 5px 7px;
            margin-bottom: 10px;
        }
        .editButton
        {
            float: right;
        }
        .editBar
        {
            width: 100%;
            height: 20px;
            border-bottom: solid 1px black
        }
    </style>
    <body>

        <div class="card editable" id="test"></div>
        <div class="card editable" id="test3"></div>
        <p class="editable" id="paragraph"></p>
        <div class="editable" id="test4"></div>




        <footer>
            <p>©UC Water 2016</p>
        </footer>
        <script src="./js/libraries/jquery-3.1.1.min.js"></script>
        <form action="updateContent.php" method="post">
            <textarea name="post_contents"></textarea>
            <input type="submit">
        </form>
        <script>
            function editBar(temp)
            {
                temp.innerHTML = '<div class="editBar"><a href="#" class = "editButton">edit</a></div><div class="fetchedData">'+temp.innerHTML+"</div>";
                $("#"+temp.id+" .editButton").click(function(){
                    editContent($("#"+temp.id));
                });
            }
            function editContent(elem)
            {
                var temp = elem.children()[1].innerHTML;
                var content = '<form action="./php/updateContent.php" method="post"><input type="text" name="id" value="'+elem[0].id+'"><textarea name="post_contents" style="width:100%"></textarea><input type="submit"></form>';
                elem.children()[1].innerHTML = content;
                elem.find( "textarea" ).val(temp);
            }
        </script>
        <script>
            var editables = $(".editable");
            editables.each(function(){
                var temp = $(this)[0];
                var query = './php/getContent.php?id="'+temp.id+'"';
                $.get(query, function(data) {
                    var out = data;
                    temp.innerHTML = out;
                   <?php echo "editBar(temp);";?>*/
                });
            });

        </script>

        <?php
        $user = true;
        if($user)
        {

        }
        ?>
    </body>
</html>
