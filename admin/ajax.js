$(function(){

    $(".loodding").hide();

    function myloader(){
        $(".loodding").show();
    };

    function myresponse(response){
        $("#myresp").html(response);
        $('#myalert').fadeOut(6000);
    };



    $("#actfrm").submit(function (e) {

        e.preventDefault();

        var mf = {
            url: "actions.php?dollar=addactivity",
            type: 'post',
            data : new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: myloader,
            success: myresponse


        };

        $.ajax(mf);
        

        
    });

   


    $(".btndel").click(function(e){

         var dd =this.id
         alert (dd);

        e.preventDefault();

        // var delopt = {

        //     url: "actions.php?dollar=delact",
        //     type: 'post',
        //     data : {myid: dd },
        //     cache: false,
        //     contentType: false,
        //     processData: false,
        //     beforeSend: myloader,
        //     success: myresponse


        // };
            
        // $.ajax(delopt);

    })

    
})