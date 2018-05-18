angular.module('dashApp').config(function($stateProvider, $urlRouterProvider) {

    $urlRouterProvider.otherwise('/admin');

    $stateProvider

        // HOME STATES AND NESTED VIEWS ========================================
      
       
        .state('admin', {
            url: '/admin',
            template:require('./templates/insertm.html'),
            controller:'dashCtrl'
        })

        .state('allmovies', {
            url: '/allmovies',
            template:require('./templates/allmovies.html'),
            controller:'allmovieCtrl'
        })

        .state('tvseries', {
            url: '/tvseries',
            template:require('./templates/tvseries.html'),
            controller:'tvseriesCtrl'
        })
        // ABOUT PAGE AND MULTIPLE NAMED VIEWS =================================
    

        

});
