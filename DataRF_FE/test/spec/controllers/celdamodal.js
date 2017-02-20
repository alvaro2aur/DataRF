'use strict';

describe('Controller: CeldamodalCtrl', function () {

  // load the controller's module
  beforeEach(module('dataRfFeApp'));

  var CeldamodalCtrl,
    scope;

  // Initialize the controller and a mock scope
  beforeEach(inject(function ($controller, $rootScope) {
    scope = $rootScope.$new();
    CeldamodalCtrl = $controller('CeldamodalCtrl', {
      $scope: scope
      // place here mocked dependencies
    });
  }));

  it('should attach a list of awesomeThings to the scope', function () {
    expect(CeldamodalCtrl.awesomeThings.length).toBe(3);
  });
});
