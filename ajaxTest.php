<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 17/04/2017
 * Time: 00:33
 */
?><html>
<head>
    <script>
    var values = $(this).serialize();

    $.ajax({
    url: "test.php",
    type: "post",
    data: values ,
    success: function (response) {
    // you will get response from your php page (what you echo or print)

    },
    error: function(jqXHR, textStatus, errorThrown) {
    console.log(textStatus, errorThrown);
    }


    });
    </script>
</head>
<body>
<form id="foo">
    <label for="bar">A bar</label>
    <input id="bar" name="bar" type="text" value="" />
    <input type="submit" value="Send" />
</form>

<!-- The result of the search will be rendered inside this div -->
<div id="result"></div>
</body>
</html>