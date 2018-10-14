$(".post").on("click", function(){
   console.log("done!"); 
    
});
var night = false;
$('.container').click(function() {
    if(!night){
    $(this).removeClass('container');
    $(this).addClass('night');
    night = true;
    }else{
    $(this).removeClass('night');
    $(this).addClass('container');
    night = false;
    }
});
$(".search").on("click", function(){
    $( ".search" ).replaceWith("<input class='searchClick' type='text' placeholder='Buscar..'>" );
    $(".search").select();
});