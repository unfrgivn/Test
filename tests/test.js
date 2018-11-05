var assert = require('assert');
const increment = require('../src/functions');

describe('Array', () => {
  describe('#indexOf()', () => {
    it('should return -1 when the value is not present', function() {
      assert.equal([1,2,3].indexOf(4), -1);
    });
  });
});

describe('Math', () => {
    // Test One: A string explanation of what we're testing
    it('should increment 2 and equal 3', () => {
      // Our actual test: 3*3 SHOULD EQUAL 9
      assert.equal(increment(2), 3);
    });
    // Test Two: A string explanation of what we're testing
    it('should test if (3-4)*8 = -8', () => {
      // Our actual test: (3-4)*8 SHOULD EQUAL -8
      assert.equal(-8, (3-4)*8);
    });
});
