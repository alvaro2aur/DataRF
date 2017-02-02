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
    'ngTouch',
    'smart-table'
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
