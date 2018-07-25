<<<<<<< HEAD
define(function () {
  // German
  return {
    errorLoading: function () {
      return 'Die Ergebnisse konnten nicht geladen werden.';
    },
    inputTooLong: function (args) {
      var overChars = args.input.length - args.maximum;

      return 'Bitte ' + overChars + ' Zeichen weniger eingeben';
    },
    inputTooShort: function (args) {
      var remainingChars = args.minimum - args.input.length;

      return 'Bitte ' + remainingChars + ' Zeichen mehr eingeben';
    },
    loadingMore: function () {
      return 'Lade mehr Ergebnisse…';
    },
    maximumSelected: function (args) {
      var message = 'Sie können nur ' + args.maximum + ' Eintr';

      if (args.maximum === 1) {
        message += 'ag';
      } else {
        message += 'äge';
      }

      message += ' auswählen';

      return message;
    },
    noResults: function () {
      return 'Keine Übereinstimmungen gefunden';
    },
    searching: function () {
      return 'Suche…';
    }
  };
});
=======
define(function () {
  // German
  return {
    errorLoading: function () {
      return 'Die Ergebnisse konnten nicht geladen werden.';
    },
    inputTooLong: function (args) {
      var overChars = args.input.length - args.maximum;

      return 'Bitte ' + overChars + ' Zeichen weniger eingeben';
    },
    inputTooShort: function (args) {
      var remainingChars = args.minimum - args.input.length;

      return 'Bitte ' + remainingChars + ' Zeichen mehr eingeben';
    },
    loadingMore: function () {
      return 'Lade mehr Ergebnisse…';
    },
    maximumSelected: function (args) {
      var message = 'Sie können nur ' + args.maximum + ' Eintr';

      if (args.maximum === 1) {
        message += 'ag';
      } else {
        message += 'äge';
      }

      message += ' auswählen';

      return message;
    },
    noResults: function () {
      return 'Keine Übereinstimmungen gefunden';
    },
    searching: function () {
      return 'Suche…';
    }
  };
});
>>>>>>> dc6f5e4785075211e9a8d0f8d80bd5a4d0d7383c
