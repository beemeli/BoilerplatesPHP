//Controller del convertidor, Lee los campos del formulario y manda la peticiÃ³n al PHP

$(document).ready(function () {


    $("#preguntar").click(function () {

        var pregunta = $('#question').val();


//------

        $.post("servicios/servicioWatson.php",
                {pregunta: pregunta},
                function (res) {
                    alert(res);
                    console.log(res);
                    //$('#divError').css('opacity', '1').html(res);
                });

        /*
         $.ajax({
         url: 'https://dal09-gateway.watsonplatform.net/instance/582/deepqa/v1/question',
         user: 'udem_student21',
         pass: 'kGytpsPu',
         type: 'post',
         crossDomain: true,
         async: true,
         
         xhrFields: {
         withCredentials: true,
         'Access-Control-Allow-Origin':'localhost'
         },
         
         headers: {
         'Content-Type': 'application/json; charset=utf-8',
         'Accept': 'application/json',
         //'X-SyncTimeout': '30'
         },
         
         rejectUnauthorized: false,
         requestCert: true,
         agent: false,
         body: pregunta,
         dataType: 'json',
         
         success: function (data) {
         console.log(data);
         }
         });
         
         
         */


    });


});