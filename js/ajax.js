$(function(){
    $("#send").click(function(){
        var cont = $("input").serialize();
        //alert(cont);
        $.ajax({
            url:'ajax.php',
            type:'post',
            dataType:'json',
            data:cont,
            success:function(data){
                var str = data.username + data.age + data.job;
                $("#result").html(str);
            }
        });
    });
});