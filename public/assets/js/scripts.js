$(document).ready(function(){

    //autocomplete

//     $('#country').keyup(function(){  
//         var query = $(this).val();  
//         if(query != '')  
//         {  
//              $.ajax({  
//                   url:"/moviesapp/req/search.php",  
//                   method:"POST",  
//                   data:{query:query},  
//                   success:function(data)  
//                   {  
//                        $('#countryList').fadeIn();  
//                        $('#countryList').html(data);  
//                   }  
//              });  
//         }  
//    });  

    $('.ml-mask').qtip({
       overwrite: true,
       content: {
           text: function (event, api) {
               return $(api.target).parent('.singleVideo').find('.popcontents').html();
           }
       },
       position: {
           my: 'top left',
           at: 'top right', 
           viewport: $(window),
           effect: false,
           target: 'mouse',
           adjust: {
               mouse: false 
           },
           show: {
               effect: false
           }
       },
       hide: {
           fixed: true
       },
       style: {
           classes: 'qtip-light qtip-bootstrap',
           width: 340
       }
   });


   $('.mobile-menu.hide i').click(function(){
    $('.headerarea.container div#menu').animate({'left':'0px'}, 600);
});

$('.hide.menuCross').click(function(){
    $('.headerarea.container div#menu').animate({'left':'-3000px'}, 600);
});

$('.top-menu li').hover(function(){
    $(this).find('.sub-container').show();
}, function(){
    $(this).find('.sub-container').hide();
});

$('div.top-user-content div.logged-user').hover(function() {
$(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(100);
}, function() {
$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(300);
});



  

 

    $('.vtabmenu ul li span').click(function(event){ 
        
         event.preventDefault();
       $('.vtabmenu ul li span').removeClass('active');
       var getvalue = $(this).attr('data-value');
       if(getvalue=='featured'){
           $('.vtabmenu ul li:nth-child(1) span').addClass('active');
           $('.viewedItesmsItems, .ratedProducts').hide();
           $('.featuredItems').show();
       }else if(getvalue=='viewed'){
           $('.vtabmenu ul li:nth-child(2) span').addClass('active');
           $('.featuredItems, .ratedProducts').hide();
           $('.viewedItesmsItems').show();
       }else if(getvalue=='imdb'){
           $('.vtabmenu ul li:nth-child(3) span').addClass('active');
           $('.viewedItesmsItems, .featuredItems').hide();
           $('.ratedProducts').show();
       }
   });

});