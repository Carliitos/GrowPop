$(".post").on("click", function(){
   console.log("done!"); 
    
});
//var night = false;
//$('.container').click(function() {
//    if(!night){
//    $(this).removeClass('container');
//    $(this).addClass('night');
//    night = true;
//    }else{
//    $(this).removeClass('night');
//    $(this).addClass('container');
//    night = false;
//    }
//});
$(".search").on("click", function(){
    $( ".search" ).replaceWith("<input class='searchClick' type='text' placeholder='Buscar..'>" );
    $(".searchClick").select();
});
var n =false;
$(".fa-star").on("mouseenter", function(){
    n=false;
    console.log("enter");
    $( ".fa-star" ).replaceWith("<i class='fas fa-star'></i>" );
});
$('body').on('mouseleave' , '.fa-star'  ,function(){
    n=true;
    console.log("dkifjn");
    $(this).replaceWith("<i class='far fa-star'></i>" );
});
$("body").on("mouseenter",'.fa-star', function(){
    if(n){
    console.log("enter");
    $( ".fa-star" ).replaceWith("<i class='fas fa-star'></i>" );
        n=false;
    }
});
var likes = 0;
$("body").on("click",'.fa-star', function(){
    likes++;
    $( "h4" ).replaceWith("<h4>"+likes+"</h4>" );

});