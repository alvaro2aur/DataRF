'use strict';

describe('Service: celdas', function () {

  // load the service's module
  beforeEach(module('dataRfFeApp'));

  // instantiate service
  var celdas;
  beforeEach(inject(function (_celdas_) {
    celdas = _celdas_;
  }));

  it('should do something', function () {
    expect(!!celdas).toBe(true);
  });

});
