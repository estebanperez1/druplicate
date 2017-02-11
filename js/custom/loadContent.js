/*Select all editable elements, and refresh the content from the database*/
window.onload = function() {
    init();
};


function init(){
    var editables = $(".editable");
    editables.each(function(){
        getContent($(this));
    });

}
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
            <?php if($user){echo "addEditButton(elem);";}?>
        },
            error: function(e) {
                alert("oops");
            }
        });
    }
