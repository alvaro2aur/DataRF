'use strict';

/**
 * @ngdoc service
 * @name dataRfFeApp.celdasfactory
 * @description
 * # celdasfactory
 * Factory in the dataRfFeApp.
 */
angular.module('dataRfFeApp')
  .factory('celdasfactory', function () {
    // Service logic
    // ...

    var meaningOfLife = 42;

    // Public API here
    return {
      someMethod: function () {
        return meaningOfLife;
      }
    };
  });
