<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 17/04/2017
 * Time: 00:33
 */
?><html>
<head>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script>
        function chk() {
            var name=document.getElementById('name').value;
            var name2=document.getElementById('name2').value;
            var name3=document.getElementById('name3').value;



            var dataString='name='+name+'&name2='+name2+'&name3='+name3;
            $.ajax({
                type:"post",
                url:"reply.php",
                data: dataString,
                cache:false,
                success:function (d) {
                if(d>0){
                    alert("working");
                }else{
                        $('#msg').html(d);


                }
            });
            return false
        }
    </script>
</head>
<body>
<form>

    <input type="text" id="name"/>
    <input type="text" id="name2"/>
    <input type="text" id="name3"/>


    <input type="submit" value="submit" onclick="return chk()" />
</form>

<!-- The result of the search will be rendered inside this div -->
<p id="msg"></p>
</body>
</html>