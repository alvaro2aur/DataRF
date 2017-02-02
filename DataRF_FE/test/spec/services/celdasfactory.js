'use strict';

describe('Service: celdasfactory', function () {

  // load the service's module
  beforeEach(module('dataRfFeApp'));

  // instantiate service
  var celdasfactory;
  beforeEach(inject(function (_celdasfactory_) {
    celdasfactory = _celdasfactory_;
  }));

  it('should do something', function () {
    expect(!!celdasfactory).toBe(true);
  });

});
