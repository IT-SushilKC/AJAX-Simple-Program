<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP With AJAX</title>
</head>
<body>
    <table id="main" border="0" cellspacing="0">
        <tr>
            <td id="header">
                <h1>PHP With AJAX</h1>
            </td>
        </tr>
        <tr>
            <td id="table_load">
                <input type="button" id="load-button" value="load Data">
            </td>
        </tr>
        <tr>
            <td id="table_data">
            </td>
        </tr>
    </table>
    <script src="jquery-3.5.1.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#load-button").on("click",function(e){
                $.ajax({
                    url: "load.php",
                    type: "POST",
                    success: function(data){
                        $("#table_data").html(data);
                    }
                });
            });
        });
    </script>
    </body>
</html>