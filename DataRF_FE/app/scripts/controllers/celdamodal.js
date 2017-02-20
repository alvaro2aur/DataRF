'use strict';

/**
 * @ngdoc function
 * @name dataRfFeApp.controller:CeldamodalCtrl
 * @description
 * # CeldamodalCtrl
 * Controller of the dataRfFeApp
 */
angular.module('dataRfFeApp')
  .controller('CeldamodalCtrl', ['row', function (row) {
    this.awesomeThings = [
      'HTML5 Boilerplate',
      'AngularJS',
      'Karma'
    ];
    this.row = row;


  }]);
