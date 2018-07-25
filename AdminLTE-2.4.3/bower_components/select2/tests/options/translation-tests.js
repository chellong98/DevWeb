<<<<<<< HEAD
module('Options - Translations');

var $ = require('jquery');
var Options = require('select2/options');

test('partial dictionaries can be passed', function (assert) {
  var options = new Options({
    language: {
      searching: function () {
        return 'Something';
      }
    }
  });

  var translations = options.get('translations');

  assert.equal(
    translations.get('searching')(),
    'Something',
    'The partial dictionary still overrides translations'
  );

  assert.equal(
    translations.get('noResults')(),
    'No results found',
    'You can still get English translations for keys not passed in'
  );
});
=======
module('Options - Translations');

var $ = require('jquery');
var Options = require('select2/options');

test('partial dictionaries can be passed', function (assert) {
  var options = new Options({
    language: {
      searching: function () {
        return 'Something';
      }
    }
  });

  var translations = options.get('translations');

  assert.equal(
    translations.get('searching')(),
    'Something',
    'The partial dictionary still overrides translations'
  );

  assert.equal(
    translations.get('noResults')(),
    'No results found',
    'You can still get English translations for keys not passed in'
  );
});
>>>>>>> dc6f5e4785075211e9a8d0f8d80bd5a4d0d7383c
