$(document).ready(function(){
    $("#insert").click(function(event){
        event.preventDefault();
        $.ajax({
            url:"php/insert.php",
            method:"post",
            data: $('#form').serialize(),
            dataType:"text",
            success:function(strMassage){
                $("#message").text(strMassage);
            }
        });
    });

    $("#load").click(function(event){
        event.preventDefault();
        $.ajax({
            url:"php/load.php",
            method:"get",
            dataType:"html",
            success:function(result){
                $("#content").html(result);
            }
        });
    });

    $("#update").click(function(event){
        event.preventDefault();
        $.ajax({
            url:"php/update.php",
            method:"post",
            data:$('#form').serialize(),
            dataType:"text",
            success:function(strMassage){
                $("#message").text(strMassage);
            }
        });
    });

    $("#delete").click(function(event){
        event.preventDefault();
        $.ajax({
            url:"php/delete.php",
            method:"post",
            data:$('#form').serialize(),
            dataType:"text",
            success:function(strMassage){
                $("#message").text(strMassage);
            }
        })
    })

});