<!DOCTYPE html>
<html ng-app="myAppModule">
<head>
<title>Angular JS - Weborion Demo</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script type="text/javascript"
        src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
</head>
<body>
<div>Find Square of Number Below:</div>

<div ng-controller="myAppController" style="text-align:center">
     <p style="font-size:28px;">Enter Number  to Find Square:
 <input type="text" ng-model="number"/></p>
 <h2>Total Square of{{quantity}} is :{{calculateval(number)}}</h2>
</div>
<script type="text/javascript">
 var myAppModule = angular.module('myAppModule', []);
    myAppModule.controller('myAppController', function($scope,calculateService) {
  $scope.number=1;
  $scope.calculateval = function(xval) {                       
   return calculateService.calculate(xval);
  }
    });
// Service 
 myAppModule.factory('calculateService', function(){
    return {
        calculate: function(xval,yval){
            return xval*xval;
        }  
    }               
    });
</script>
</body>
</html>
