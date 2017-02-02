'use strict';

/**
 * @ngdoc function
 * @name dataRfFeApp.controller:CeldasCtrl
 * @description
 * # CeldasCtrl
 * Controller of the dataRfFeApp
 */

  
angular.module('dataRfFeApp')
.controller('CeldasCtrl', [ '$http', function ($http) {
    this.awesomeThings = [
      'HTML5 Boilerplate',
      'AngularJS',
      'Karma'
    ];

    var celdas = this;
    celdas.displayed = [];

    
    /**
     * Gets all the celdas
     *
     * @return promise
     */

    $http.get('http://localhost:8000/api/celdas').then(function(response){
        celdas.rowCollection = response.data;
    });

    
    

/*


    this.rowCollection = [
  {
    "nombre": "et991089",
    "ret": "BCU",
    "region": "Centro",
    "cluster": "Tennessee",
    "controladora": "BNC06",
    "marca": "Blick, Johnston and Cremin",
    "modelo": "529953",
    "az": "360",
    "te": "5",
    "tm": "5"
  },
  {
    "nombre": "quisquam570097",
    "ret": "N/A",
    "region": "Centro llanos",
    "cluster": "Massachusetts",
    "controladora": "BNC12",
    "marca": "Mayert, Klocko and Satterfield",
    "modelo": "878279",
    "az": "6",
    "te": "2",
    "tm": "0"
  },
  {
    "nombre": "et742276",
    "ret": "N/A",
    "region": "Centro",
    "cluster": "Kentucky",
    "controladora": "BNC06",
    "marca": "Rowe, Hahn and Zulauf",
    "modelo": "798376",
    "az": "314",
    "te": "9",
    "tm": "0"
  },
  {
    "nombre": "qui304900",
    "ret": "BCU",
    "region": "Centro",
    "cluster": "New Mexico",
    "controladora": "BSC05",
    "marca": "Nitzsche-Weber",
    "modelo": "27802",
    "az": "360",
    "te": "2",
    "tm": "3"
  },
  {
    "nombre": "ut827332",
    "ret": "N/A",
    "region": "Centro",
    "cluster": "West Virginia",
    "controladora": "BNC06",
    "marca": "Shanahan PLC",
    "modelo": "749460",
    "az": "336",
    "te": "9",
    "tm": "6"
  },
  {
    "nombre": "cumque293781",
    "ret": "BCU",
    "region": "Centro",
    "cluster": "New Mexico",
    "controladora": "BNC12",
    "marca": "Rowe, Hahn and Zulauf",
    "modelo": "798376",
    "az": "218",
    "te": "0",
    "tm": "3"
  },
  {
    "nombre": "voluptatum457625",
    "ret": "INTENO",
    "region": "Centro llanos",
    "cluster": "Vermont",
    "controladora": "BSC12",
    "marca": "Jacobson and Sons",
    "modelo": "99204",
    "az": "359",
    "te": "4",
    "tm": "3"
  },
  {
    "nombre": "voluptatem192167",
    "ret": "INTENO",
    "region": "Centro",
    "cluster": "Tennessee",
    "controladora": "BNC06",
    "marca": "Zemlak-Walker",
    "modelo": "220817",
    "az": "351",
    "te": "6",
    "tm": "8"
  },
  {
    "nombre": "quis989858",
    "ret": "BCU",
    "region": "Centro llanos",
    "cluster": "Massachusetts",
    "controladora": "BSC05",
    "marca": "Bashirian, Durgan and Thiel",
    "modelo": "493008",
    "az": "228",
    "te": "4",
    "tm": "7"
  },
  {
    "nombre": "exercitationem486828",
    "ret": "INTENO",
    "region": "Centro llanos",
    "cluster": "North Dakota",
    "controladora": "MME",
    "marca": "Bernier-Botsford",
    "modelo": "751819",
    "az": "14",
    "te": "8",
    "tm": "6"
  },
  {
    "nombre": "voluptas758950",
    "ret": "N/A",
    "region": "Centro",
    "cluster": "Iowa",
    "controladora": "BNC06",
    "marca": "Yundt-Ryan",
    "modelo": "921207",
    "az": "153",
    "te": "8",
    "tm": "2"
  },
  {
    "nombre": "et323316",
    "ret": "BCU",
    "region": "Centro",
    "cluster": "Minnesota",
    "controladora": "MME",
    "marca": "Blick, Johnston and Cremin",
    "modelo": "529953",
    "az": "273",
    "te": "9",
    "tm": "9"
  },
  {
    "nombre": "possimus988901",
    "ret": "N/A",
    "region": "Centro llanos",
    "cluster": "New York",
    "controladora": "BNC06",
    "marca": "Jacobson and Sons",
    "modelo": "99204",
    "az": "176",
    "te": "0",
    "tm": "3"
  },
  {
    "nombre": "nemo33071",
    "ret": "N/A",
    "region": "Centro",
    "cluster": "New York",
    "controladora": "BSC06",
    "marca": "Gulgowski, Jacobi and Dooley",
    "modelo": "103809",
    "az": "101",
    "te": "0",
    "tm": "2"
  },
  {
    "nombre": "minima247959",
    "ret": "BCU",
    "region": "Centro",
    "cluster": "New Mexico",
    "controladora": "BSC12",
    "marca": "Nitzsche-Weber",
    "modelo": "27802",
    "az": "65",
    "te": "2",
    "tm": "2"
  },
  {
    "nombre": "doloribus357805",
    "ret": "N/A",
    "region": "Centro",
    "cluster": "Kentucky",
    "controladora": "BNC05",
    "marca": "Emmerich-Kuhic",
    "modelo": "963442",
    "az": "355",
    "te": "1",
    "tm": "7"
  },
  {
    "nombre": "et568848",
    "ret": "INTENO",
    "region": "Centro",
    "cluster": "North Dakota",
    "controladora": "BNC06",
    "marca": "Rowe, Hahn and Zulauf",
    "modelo": "798376",
    "az": "34",
    "te": "6",
    "tm": "7"
  }];
  */
}]);