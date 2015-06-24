<!DOCTYPE html>
<html ng-app="weboSqaureAppModule">
<head>
<title>Angular JS - Weborion Demo</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script type="text/javascript"
        src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
</head>
<body>
<!-- <div>Find Square of Number Below:</div> -->

<form class="form-horizontal">
<h1>Demo Angular App with Directive and Dependency Injection</h1>  
<div ng-controller="weboSqaureAppController" class="well well-lg control-group">
    <label class="control-label" for="inputSqaure">Sqaure (i.e. n*n ) of </label>
    <div class="controls">
      <input type="text" ng-model="number" class="input-lg" id="inputSqaure" placeholder="Enter Number :">
     <label class="control-label" for="result">&nbsp; is&nbsp;{{calculateval(number)}} </label> 
    </div>
</form>
  <!-- </div>
  div ng-controller="weboSqaureAppController" style="text-align:center">
     <p style="font-size:28px;">Enter Number  to Find Square:
 <input type="text" ng-model="number"/></p>
 <h2>Total Square of{{quantity}} is :{{calculateval(number)}}</h2>
</div> -->
<script type="text/javascript">
 var weboSqaureAppModule = angular.module('weboSqaureAppModule', []);
    weboSqaureAppModule.controller('weboSqaureAppController', function($scope,calculateService) {
  $scope.number=1;
  $scope.calculateval = function(xval) {                       
   return calculateService.calculate(xval);
  }
    });
// Service 
 weboSqaureAppModule.factory('calculateService', function(){
    return {
        calculate: function(xval){
            return xval*xval;
        }  
    }               
    });
</script>
</body>
</html>
