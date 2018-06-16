
//var jQuery = require('jquery-deferred');
$(document).ready(function(){

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

  

   $('#search').keyup(function(){
    $('#se').empty();
   
    if( this.value.length < 3 ){ 
        return;
    }else{
        //$('#se').hide();
    }
    
      
       var url = '/ajaxcall/'+this.value;
    
       $.get(url,
          function(data){
                    
            $('#se').empty();
            var html = '';
              // alert(data[0].title);
              $.each(data, function(i,d){
                html += '<div class="item "><img class="thumb" src="'+d.poster+'"><div class="info">';
                html += '<a class="name" href="/watchmovie/'+d.slug+'/'+d.imdb_id+'">'+d.title+'</a>';
                html += ' <div class="meta">';
            
            html +=  '<span>IMDb: <span class="imdb">'+d.rating+'</span></span>';
            html += ' <span><span class="year">Release:</span> 1990</span>';
            html +=  '</div>';
                html +=    '<div class="genre">';
                    html +=    '<a href="#">'+d.genre+'</a>';
                   
                    html += '</div>';
                 html +=  '</div></div>';
                 return i<3;
              });
            //    for(var i =0; i <= 4;i++){
            //     html += '<div class="item "><img class="thumb" src="'+data[i].poster+'"><div class="info">';
            //     html += '<a class="name" href="#">'+data[i].title+'</a>';
            //     html += ' <div class="meta">';
            
            // html +=  '<span>IMDb: <span class="imdb">'+data[i].rating+'</span></span>';
            // html += ' <span><span class="year">Release:</span> 1990</span>';
            // html +=  '</div>';
            //     html +=    '<div class="genre">';
            //         html +=    '<a href="#">'+data[i].genre+'</a>';
                   
            //         html += '</div>';
            //      html +=  '</div></div>';

            //    }
         
              
               $('#se').append(html);

              
           }
         
       );
      
   })





   })

