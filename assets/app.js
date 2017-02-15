$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  3000);

var app = angular.module('Doorshop', []);

app.controller('Body', function($scope, $http) {
    $http.get("/Doorshop/Api/Catagories/All")
    .then(function(response) {
        $scope.Catagories = response.data;
    });
});