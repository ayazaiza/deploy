;(function(undefined){

    angular.module('dashApp').controller('homeCtrl',['$scope','factory','$window','$timeout',function($scope,factory,$window,$timeout) {

    let inc = 1;
        let keepCall =  function(p){
            factory.getApi('https://putstream.com/user-api/movies?key=bXBpbm41U25tS2FucDV1Y29acW1jNXFnbEp5ZllaYWlvSytsbkt5VXJWT1ZsS2FibEE9PQ&p='+p)
                .then(function(res){
                    if(res.data === ""){
                        console.log(res);
                        keepCall(p);
                    }else{
                       console.log(res.data);
                        $scope.output = res.data;
                        //alert(res.data.length);

                        for(let i =0;i<=39;i++){
                           // console.log(res.data[0].title);
                            // let d  = JSON.stringify(res.data[i]);
                            // factory.postReq(d,'dashboard/php/insertcall.php')
                            //     .then(function(resp){
                            //         console.log(resp.data);
                            //     });

                           // $timeout(function(){},3000);
                            factory.getApi('https://api.themoviedb.org/3/search/movie?api_key=1f6024be98da306342793234cb081dbe&language=en-US&query='+res.data[i].title+'&page=1&include_adult=false')
                            .then(function(resp){
                                console.log(resp.data.results[0]);
                               

                               $timeout(function(){
                                factory.getApi('https://api.themoviedb.org/3/movie/'+resp.data.results[0].id+'?api_key=1f6024be98da306342793234cb081dbe&language=en-US')
                                .then(function(respo){
                                    console.log(respo.data);
                                    let d = {};
                                    d.genres = [];

                                    if(respo.data.production_countries.length != 0){
                                    for(let k = 0;k<=respo.data.genres.length;k++){
                                        if(respo.data.genres[k]){
                                            d.genres.push(respo.data.genres[k].name);
                                        }
                                        
                                    }
                                }else{
                                    d.genres.push("Drama");
                                }
                                  
                                    d.country = [];

                                    if(respo.data.production_countries.length != 0){
                                        for(let h = 0;h<=respo.data.production_countries.length;h++){
                                            if(respo.data.production_countries[h]){
                                                d.country.push(respo.data.production_countries[h].name);
                                            }
                                            
                                        }
                                    }else{
                                        d.country.push("unknown");
                                    }
                                    d.backdrop_path = respo.data.backdrop_path;
                                    d.overview =respo.data.overview;
                                    d.poster_path =respo.data.poster_path;
                                    d.id =respo.data.id;
                                    d.vote_count =respo.data.vote_count;
                                    d.vote_average =respo.data.vote_average;
                                    d.release_date =respo.data.release_date;
                                    d.original_language =respo.data.original_language;
                                    d.runtime =respo.data.runtime;
                                    d.title = res.data[i].title;
                                    d.imdId = res.data[i].imdId;
                                    d.slug = res.data[i].slug;
                                    let da  = JSON.stringify(d);
                                    //console.log(da);
                                factory.postReq(da,'dashboard/php/insertcall.php')
                                    .then(function(resp){
                                        console.log(resp.data);
                                    });
                                });
                               },5000); 

                                });
                              
                        }

                        $timeout(function(){
                        for(let i =40;i<=78;i++){
                            //console.log(res.data[0].title);
                            // let d  = JSON.stringify(res.data[i]);
                            // factory.postReq(d,'dashboard/php/insertcall.php')
                            //     .then(function(resp){
                            //         console.log(resp.data);
                            //     });

                           // $timeout(function(){},3000);
                            factory.getApi('https://api.themoviedb.org/3/search/movie?api_key=1f6024be98da306342793234cb081dbe&language=en-US&query='+res.data[i].title+'&page=1&include_adult=false')
                            .then(function(resp){
                               console.log(resp.data.results[0]);
                               

                               $timeout(function(){
                                factory.getApi('https://api.themoviedb.org/3/movie/'+resp.data.results[0].id+'?api_key=1f6024be98da306342793234cb081dbe&language=en-US')
                                .then(function(respo){
                                    console.log(respo.data);
                                    let d = {};
                                    d.genres = [];

                                    if(respo.data.production_countries.length != 0){
                                    for(let k = 0;k<=respo.data.genres.length;k++){
                                        if(respo.data.genres[k]){
                                            d.genres.push(respo.data.genres[k].name);
                                        }
                                        
                                    }
                                }else{
                                    d.genres.push("Drama");
                                }
                                  
                                    d.country = [];

                                    if(respo.data.production_countries.length != 0){
                                        for(let h = 0;h<=respo.data.production_countries.length;h++){
                                            if(respo.data.production_countries[h]){
                                                d.country.push(respo.data.production_countries[h].name);
                                            }
                                            
                                        }
                                    }else{
                                        d.country.push("unknown");
                                    }
                                    d.backdrop_path = respo.data.backdrop_path;
                                    d.overview =respo.data.overview;
                                    d.poster_path =respo.data.poster_path;
                                    d.id =respo.data.id;
                                    d.vote_count =respo.data.vote_count;
                                    d.vote_average =respo.data.vote_average;
                                    d.release_date =respo.data.release_date;
                                    d.original_language =respo.data.original_language;
                                    d.runtime =respo.data.runtime;
                                    d.title = res.data[i].title;
                                    d.imdId = res.data[i].imdId;
                                    d.slug = res.data[i].slug;
                                    let da  = JSON.stringify(d);
                                    //console.log(da);
                                factory.postReq(da,'dashboard/php/insertcall.php')
                                    .then(function(resp){
                                        console.log(resp.data);
                                    });
                                });
                               },5000); 

                                });
                              
                        }},5000);


                        $timeout(function(){
                            for(let i =79;i<=res.data.length;i++){
                                //console.log(res.data[0].title);
                                // let d  = JSON.stringify(res.data[i]);
                                // factory.postReq(d,'dashboard/php/insertcall.php')
                                //     .then(function(resp){
                                //         console.log(resp.data);
                                //     });
    
                               // $timeout(function(){},3000);
                                factory.getApi('https://api.themoviedb.org/3/search/movie?api_key=1f6024be98da306342793234cb081dbe&language=en-US&query='+res.data[i].title+'&page=1&include_adult=false')
                                .then(function(resp){
                                   console.log(resp.data.results[0]);
                                   
    
                                   $timeout(function(){
                                    factory.getApi('https://api.themoviedb.org/3/movie/'+resp.data.results[0].id+'?api_key=1f6024be98da306342793234cb081dbe&language=en-US')
                                    .then(function(respo){
                                        console.log(respo.data);
                                        let d = {};
                                        d.genres = [];
    
                                        if(respo.data.production_countries.length != 0){
                                        for(let k = 0;k<=respo.data.genres.length;k++){
                                            if(respo.data.genres[k]){
                                                d.genres.push(respo.data.genres[k].name);
                                            }
                                            
                                        }
                                    }else{
                                        d.genres.push("Drama");
                                    }
                                      
                                        d.country = [];
    
                                        if(respo.data.production_countries.length != 0){
                                            for(let h = 0;h<=respo.data.production_countries.length;h++){
                                                if(respo.data.production_countries[h]){
                                                    d.country.push(respo.data.production_countries[h].name);
                                                }
                                                
                                            }
                                        }else{
                                            d.country.push("unknown");
                                        }
                                        d.backdrop_path = respo.data.backdrop_path;
                                        d.overview =respo.data.overview;
                                        d.poster_path =respo.data.poster_path;
                                        d.id =respo.data.id;
                                        d.vote_count =respo.data.vote_count;
                                        d.vote_average =respo.data.vote_average;
                                        d.release_date =respo.data.release_date;
                                        d.original_language =respo.data.original_language;
                                        d.runtime =respo.data.runtime;
                                        d.title = res.data[i].title;
                                        d.imdId = res.data[i].imdId;
                                        d.slug = res.data[i].slug;
                                        let da  = JSON.stringify(d);
                                        //console.log(da);
                                    factory.postReq(da,'dashboard/php/insertcall.php')
                                        .then(function(resp){
                                            console.log(resp.data);
                                        });
                                    });
                                   },5000); 
    
                                    });
                                  
                            }},5000);






                        // $timeout( function(){for(let i =31;i<=60;i++){
                        //     console.log(res.data[0].title);
                        //     // let d  = JSON.stringify(res.data[i]);
                        //     // factory.postReq(d,'dashboard/php/insertcall.php')
                        //     //     .then(function(resp){
                        //     //         console.log(resp.data);
                        //     //     });
                        //     factory.getApi('https://api.themoviedb.org/3/search/movie?api_key=1f6024be98da306342793234cb081dbe&language=en-US&query='+res.data[i].title+'&page=1&include_adult=false')
                        //     .then(function(resp){
                        //         console.log(resp.data.results);
                        //     });
                        // }},5000);

                    }

            })
        }

        keepCall(inc);

        
    }]);

}.call(this));
