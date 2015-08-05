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
});