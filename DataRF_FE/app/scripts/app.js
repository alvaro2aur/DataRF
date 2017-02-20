'use strict';

/**
 * @ngdoc overview
 * @name dataRfFeApp
 * @description
 * # dataRfFeApp
 *
 * Main module of the application.
 */
angular
  .module('dataRfFeApp', [
    'ngAnimate',
    'ngCookies',
    'ngResource',
    'ngRoute',
    'ngSanitize',
    'smart-table',
    'ui.bootstrap',
    'ngMaterial',
    'filters'
  ])
  .config(function ($routeProvider) {
    $routeProvider
      .when('/', {
        templateUrl: 'views/main.html',
        controller: 'MainCtrl',
        controllerAs: 'main'
      })
      .when('/about', {
        templateUrl: 'views/about.html',
        controller: 'AboutCtrl',
        controllerAs: 'about'
      })
      .when('/celdas', {
        templateUrl: 'views/celdas.html',
        controller: 'CeldasCtrl',
        controllerAs: 'celdas'
      })
      .when('/celdas/1', {
        templateUrl: 'views/detalle.html',
        controller: 'CeldasCtrl',
        controllerAs: 'celdas'
      })
      .otherwise({
        redirectTo: '/'
      });
  });

  angular.module('filters', []).
    filter('truncate', function () {
        return function (text, length, end) {
            if (isNaN(length))
                length = 20;

            if (end === undefined)
                end = "...";

            if (text.length <= length || text.length - end.length <= length) {
                return text;
            }
            else {
                return String(text).substring(0, length-end.length) + end;
            }

        };
    });
