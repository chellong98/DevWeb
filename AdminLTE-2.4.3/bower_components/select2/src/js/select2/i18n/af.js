<<<<<<< HEAD
define(function () {
  // English
  return {
    errorLoading: function () {
      return 'Die resultate kon nie gelaai word nie.';
    },
    inputTooLong: function (args) {
      var overChars = args.input.length - args.maximum;

      var message = 'Verwyders asseblief ' + overChars + ' character';

      if (overChars != 1) {
        message += 's';
      }

      return message;
    },
    inputTooShort: function (args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'Voer asseblief ' + remainingChars + ' of meer karakters';

      return message;
    },
    loadingMore: function () {
      return 'Meer resultate word gelaai…';
    },
    maximumSelected: function (args) {
      var message = 'Kies asseblief net ' + args.maximum + ' item';

      if (args.maximum != 1) {
        message += 's';
      }

      return message;
    },
    noResults: function () {
      return 'Geen resultate gevind';
    },
    searching: function () {
      return 'Besig…';
    }
  };
});
=======
define(function () {
  // English
  return {
    errorLoading: function () {
      return 'Die resultate kon nie gelaai word nie.';
    },
    inputTooLong: function (args) {
      var overChars = args.input.length - args.maximum;

      var message = 'Verwyders asseblief ' + overChars + ' character';

      if (overChars != 1) {
        message += 's';
      }

      return message;
    },
    inputTooShort: function (args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'Voer asseblief ' + remainingChars + ' of meer karakters';

      return message;
    },
    loadingMore: function () {
      return 'Meer resultate word gelaai…';
    },
    maximumSelected: function (args) {
      var message = 'Kies asseblief net ' + args.maximum + ' item';

      if (args.maximum != 1) {
        message += 's';
      }

      return message;
    },
    noResults: function () {
      return 'Geen resultate gevind';
    },
    searching: function () {
      return 'Besig…';
    }
  };
});
>>>>>>> dc6f5e4785075211e9a8d0f8d80bd5a4d0d7383c
