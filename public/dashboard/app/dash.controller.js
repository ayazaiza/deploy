;(function(undefined){

    angular.module('dashApp').controller('dashCtrl',['$scope','factory','$window','$timeout',function($scope,factory,$window,$timeout) {

    let inc = 174.130;
    let pa = 2;
    $scope.incc = 204;
        let keepCall =  function(p){
            factory.getApi('https://user.gomostream.com/user-api/movies?key=bXBpbm41U25tS2FucDV1Y29acW1jNXFnbEp5ZllaYWlvSytsbkt5VXJWT1ZsS2FibEE9PQ&p='+p)
                .then(function(res){
                    if(res.data === ""){
                        console.log(res);
                        keepCall(p);
                        let key = ['487b67cd','39e86d41','20de9d93'];
                    }else{
                       console.log(res.data);
                        $scope.output = res.data;
                        let c = 0;
                        for(let i =0;i<=res.data.length;i++){              
                            factory.getApi('http://www.omdbapi.com/?i='+res.data[i].imdId+'&apikey=487b67cd')
                            .then(function(resp){
                                //console.log(resp.data);
                                let d = {};
                                d.genres = resp.data.Genre;
                                d.title = res.data[i].title;
                                d.imdId = res.data[i].imdId;
                                d.slug = res.data[i].slug;
                                d.overview =resp.data.Plot;
                                d.poster_path =resp.data.Poster;
                                d.vote_count =resp.data.imdbVotes;
                                d.vote_average =resp.data.imdbRating;
                                d.release_date =resp.data.Released;
                                d.original_language =resp.data.Language;
                                d.runtime =resp.data.Runtime;
                                d.type = resp.data.Type;
                                d.country = resp.data.Country;
                                d.year = resp.data.Year;
                                d.director =resp.data.Director;
                                d.actors = resp.data.Actors;
                                let da  = JSON.stringify(d);

                                factory.postReq(da,'/dashboard/php/insertcall.php')
                                .then(function(resp){
                                    if(resp.data === 'Successfully Inserted'){
                                        c++;
                                        console.log(c);
                                    }else{
                                        console.log(resp.data);
                                    }
                                    
                                });


                            });
                              
                        }


                    }

            });
        }

       let updates =  function(pa){

        factory.getApi('https://user.gomostream.com/user-api/movies?key=bXBpbm41U25tS2FucDV1Y29acW1jNXFnbEp5ZllaYWlvSytsbkt5VXJWT1ZsS2FibEE9PQ&p='+pa)
        .then(function(res){
            if(res.data === ""){
                console.log(res);
                updates(pa);
           
            }else{
                let g = 0;
                //res.data.length
                for(let i =0;i<=40;i++){
                   factory.getApi('https://api.themoviedb.org/3/find/'+res.data[i].imdId+'?api_key=1f6024be98da306342793234cb081dbe&external_source=imdb_id') 
                    .then(function(resp){
                         console.log(resp.data.movie_results[0]);

                         let d = {};
                         d.imdId =res.data[i].imdId;
                         d.backdrop_path =resp.data.movie_results[0].backdrop_path;
                         d.release_date =resp.data.movie_results[0].release_date;
                         d.id =resp.data.movie_results[0].id;

                         let da  = JSON.stringify(d);
                         factory.postReq(da,'/dashboard/php/updates.php')
                         .then(function(respo){
                             if(respo.data === 'Successfully Inserted'){
                                 g++;
                                 console.log(g);
                             }else{
                                console.log(respo.data);
                             }

                            //
                             
                         });

                    });  
                }


            }

        });

       }


        $scope.insert = function(){
            keepCall($scope.incc);
        }

        $scope.update = function(){
            updates(pa);
        }

        
    }]);


        
    angular.module('dashApp').controller('allmovieCtrl',['$scope','factory','$window','$timeout','$interval',function($scope,factory,$window,$timeout,$interval) {

      
        $scope.search = function(){
            if($scope.se.colum != null & $scope.se.query != null){
                console.log($scope.se);
                 factory.postReq($scope.se,'/dashboard/php/jus.php').then(function(res){
                    console.log(res.data);
                    $scope.out = res.data.result;
                 });

            }else{
                alert();
            }
        }

        $scope.updates = function(){

            let interval = function(){

                factory.postReq($scope.se,'/dashboard/php/jus.php').then(function(res){
                    console.log(res.data);
                    $scope.out = res.data.result;
                    let g =0;
                    for(let i =0;i<=$scope.out.length;i++){
                        console.log($scope.out[i].imdb_id);
                        factory.getApi('https://api.themoviedb.org/3/find/'+$scope.out[i].imdb_id+'?api_key=1f6024be98da306342793234cb081dbe&external_source=imdb_id') 
                         .then(function(resp){
                              console.log(resp.data.movie_results[0]);
        
        
                              if(resp.data.movie_results[0].backdrop_path != ""){
                                
                              let d = {};
                              d.imdId =$scope.out[i].imdb_id;
                              d.backdrop_path =resp.data.movie_results[0].backdrop_path;
                              d.release_date =resp.data.movie_results[0].release_date;
                              d.id =resp.data.movie_results[0].id;
        
                              let da  = JSON.stringify(d);
                              factory.postReq(da,'/dashboard/php/updates.php')
                              .then(function(respo){
                                  if(respo.data === 'Successfully Inserted'){
                                      g++;
                                      console.log(g);
                                  }else{
                                     console.log(respo.data);
                                  }
        
                                 //
                                  
                              });
                              }else{
                                  console.log('sorry');
                              }
        
        
                         });  
                     }
                 });

          

            }
            $interval(interval, 10000);

        }


    }]);


        
    angular.module('dashApp').controller('tvseriesCtrl',['$scope','factory','$window','$timeout','$interval',function($scope,factory,$window,$timeout) {

        $scope.pages = 1;
    
        let keepCall =  function(p){
            factory.getApi('https://user.gomostream.com/user-api/episodes?key=bXBpbm41U25tS2FucDV1Y29acW1jNXFnbEp5ZllaYWlvSytsbkt5VXJWT1ZsS2FibEE9PQ&p='+p)
                .then(function(res){
                    if(res.data === ""){
                        console.log(res);
                        keepCall(p);
                        let key = ['487b67cd','39e86d41','20de9d93'];
                    }else{
                       console.log(res.data);
                        $scope.output = res.data;
                        let c = 0;
                        for(let i =0;i<=res.data.length;i++){              
                            factory.getApi('http://www.omdbapi.com/?i='+res.data[i].imdId+'&apikey=487b67cd')
                            .then(function(resp){

                               console.log(resp.data);

                                if(resp.data.Response === "True"){
                                let d = {};
                                $scope.guid = function() {
                                    return $scope.s4() + $scope.s4() + $scope.s4() + $scope.s4() +
                                        $scope.s4() + $scope.s4() + $scope.s4() + $scope.s4();
                                }
                    
                                $scope.s4 = function() {
                                    return Math.floor((1 + Math.random()) * 0x10000)
                                        .toString(16)
                                        .substring(1);
                                }

                                d.uni_id = $scope.guid();
                                d.genres = resp.data.Genre;
                                d.title = resp.data.Title;
                                d.imdId = res.data[i].imdId;
                                d.season = res.data[i].seasonsNo;
                                d.slug = res.data[i].slug;
                                d.episode = res.data[i].episodesNo;
                                d.overview =resp.data.Plot;
                                d.poster_path =resp.data.Poster;
                                d.vote_count =resp.data.imdbVotes;
                                d.vote_average =resp.data.imdbRating;
                                d.release_date =resp.data.Released;
                                d.original_language =resp.data.Language;
                                d.runtime =resp.data.Runtime;
                                d.type = resp.data.Type;
                                d.country = resp.data.Country;
                                d.year = resp.data.Year;
                                d.director =resp.data.Director;
                                d.actors = resp.data.Actors;
                                let da  = JSON.stringify(d);

                                factory.postReq(da,'/dashboard/php/tvseries.php')
                                .then(function(resp){
                                    if(resp.data === 'Successfully Inserted'){
                                        c++;
                                        console.log(c);
                                    }else{
                                        console.log(resp.data);
                                    }
                                    
                                });

                                }else{
                                    console.log(resp.data.Response);
                                }


                            });
                              
                        }


                    }

            });
        }

        $scope.series = function(){
            keepCall($scope.pages);
        }

    }]);




}.call(this));
