// $('document').ready(function(){
//     // $('a.reveal-link').trigger('click');
//     // $('#myModal').foundation('reveal', 'open');
//     // $('#myModal').foundation('reveal', 'close');
// });

$(document).ready(function() {
		$(".fancybox").fancybox();
	$("#sdp").fancybox({
          helpers: {
              title : {
                  type : 'float'
              }
          }
      });
     
    $(".banner>u").hover(fnOver,fnOut);
    
    function fnOver(){
        // $(this).css({"background":"linear-gradient(white,#40403e)","border":"none","border-radius":"2px 12px","padding":"3px 15px","color":"#40403e"});
        $(this).css({"font-size":"1.3em","color":"orange"})
    }
    function fnOut(){
        $(this).css({"background":"transparent","font-size":"1em","border":"none","border-radius":"2px 12px","padding":"0px","color":"grey"});
    }
   
   
   $(".mark").hover(emIn,emOut);
   
   function emIn(){
       $(this).find("dt").css({"padding":"10px 2px","font-size":"1.2em"})
       $(this).find("strong,.date").css({"color":"#40403e","border-bottom":"2px double grey"});
   }
   
   function emOut(){
       $(this).find("dt").css({"padding":"none","font-size":"1em"});
       $(this).find("strong , .date").css({"color":"orange"});
   }
   
});