;(function(undefined){

    angular.module('dashApp').directive("fileInput", function($parse){  
        return{  
             link: function($scope,element, attrs){
               
                  element.on("change", function(event){  
                       var files = event.target.files;  
                      console.log(files[0].name);  
                       $parse(attrs.fileInput).assign($scope, element[0].files);  
                     // $parse(attrs.fileInput).assign($scope, element[0].files[0].name);
                       $scope.$apply();
                      
                       //console.log();
                  });  
             }  
        }  
   });

   
  angular.module('dashApp').directive("navBar", function($parse){  
    return{  
      restrict: 'EA',
      controller: 'dashCtrl',
      template: require('./templates/navbar.html'),
         link: function($scope,element,attrs){

         }  
    }  
});
  
 }.call(this));