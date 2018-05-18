
;(function(undefined){
angular.module('dashApp').factory('factory',function($rootScope,$http){
    var evnt = {};
    var baseUrl = '/moviesapp/';
    evnt.postReq = function(req,url){
        return $http({
                method: 'post',    
                url: baseUrl+url,
                data:req,
                headers: {'Content-Type': undefined},
               })
            .then(function(resp){
                return resp;
            });
    }
    evnt.getReq = function(req){
        return $http.get(baseUrl+req)
                .then(function(resp){
                    return resp;
        });
    }
    evnt.getApi = function(req){
        return $http.get(req)
                .then(function(resp){
                    return resp;
        });
    }

    evnt.cache = {};

    evnt.addCache = function(data){
        event.cache = data;
    }

    
    return evnt;
  });

}.call(this));