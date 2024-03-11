// AJAX 
// ACCEPTE
$("#gateauRecetteOui").submit(function (event) {
    $.ajax({
        url:"../includes/cookie-process.php",
        method:'post',
        data:{"gateau":"true"},
        dataType:'json',
        cache:false,
        success:function(reponse){
            // console.log('success :'+JSON.stringify(reponse));
        },
        error:function(err){
            alert(err.responseText);
        }
    });
    $('.popupGateau').hide();
    event.preventDefault();
});

// REFUSE
$("#gateauRecetteNon").submit(function (event) {
    $.ajax({
        url:"../includes/cookie-process.php",
        method:'post',
        data:{"gateau":"false"},
        dataType:'json',
        cache:false,
        success:function(reponse){
            // console.log('success :'+JSON.stringify(reponse));
        },
        error:function(err){
            alert(err.responseText);
        }
    });
    $('.popupGateau').hide();
    event.preventDefault();
});