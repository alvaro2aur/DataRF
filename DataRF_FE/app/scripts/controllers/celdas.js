'use strict';

/**
 * @ngdoc function
 * @name dataRfFeApp.controller:CeldasCtrl
 * @description
 * # CeldasCtrl
 * Controller of the dataRfFeApp
 */

  
angular.module('dataRfFeApp')
.controller('CeldasCtrl', [ '$http','$uibModal', function ($http,$uibModal) {
    this.awesomeThings = [
      'HTML5 Boilerplate',
      'AngularJS',
      'Karma'
    ];
    
    this.filas = ['10','20','30','50','100','300','500'];
    this.filtros = [
      {
        nombre: 'Celda',
        columna: 'nombre'
      },
      {
        nombre: 'Cell ID',
        columna: 'cellid'
      },
      {
        nombre: 'BCCH/PSC/PCI',
        columna: 'psc'
      }
    ];

    this.defaultFiltro = this.filtros[0];







    var celdas = this;


    


    
    /**
     * Gets all the celdas
     *
     * @return promise
     */

    $http.get('http://localhost:8000/api/celdas').then(function(response){
        celdas.rowCollection = response.data;
    });


    /*
    $scope.openModal = function(){
        var modalInstance = $modal.open({
            templateUrl: 'views/detalle.html'})
    };
    */




    celdas.openModal = function(data){
        var uibModalInstance = $uibModal.open({
            animation: true,
            templateUrl: 'views/detalle.html',
            controller: 'CeldamodalCtrl',
            controllerAs: 'modal',
            size: 'lg',
            resolve: {
              row: function () {
                return data;
              }
          }
        });
    };
  

}]);