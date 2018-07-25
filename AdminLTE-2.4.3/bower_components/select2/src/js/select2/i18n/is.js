<<<<<<< HEAD
define(function () {
  // Icelandic
  return {
    inputTooLong: function (args) {
      var overChars = args.input.length - args.maximum;

      var message = 'Vinsamlegast styttið texta um ' + overChars + ' staf';

      if (overChars <= 1) {
        return message;
      }

      return message + 'i';
    },
    inputTooShort: function (args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'Vinsamlegast skrifið ' + remainingChars + ' staf';

      if (remainingChars > 1) {
        message += 'i';
      }

      message += ' í viðbót';

      return message;
    },
    loadingMore: function () {
      return 'Sæki fleiri niðurstöður…';
    },
    maximumSelected: function (args) {
      return 'Þú getur aðeins valið ' + args.maximum + ' atriði';
    },
    noResults: function () {
      return 'Ekkert fannst';
    },
    searching: function () {
      return 'Leita…';
    }
  };
});
=======
define(function () {
  // Icelandic
  return {
    inputTooLong: function (args) {
      var overChars = args.input.length - args.maximum;

      var message = 'Vinsamlegast styttið texta um ' + overChars + ' staf';

      if (overChars <= 1) {
        return message;
      }

      return message + 'i';
    },
    inputTooShort: function (args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'Vinsamlegast skrifið ' + remainingChars + ' staf';

      if (remainingChars > 1) {
        message += 'i';
      }

      message += ' í viðbót';

      return message;
    },
    loadingMore: function () {
      return 'Sæki fleiri niðurstöður…';
    },
    maximumSelected: function (args) {
      return 'Þú getur aðeins valið ' + args.maximum + ' atriði';
    },
    noResults: function () {
      return 'Ekkert fannst';
    },
    searching: function () {
      return 'Leita…';
    }
  };
});
>>>>>>> dc6f5e4785075211e9a8d0f8d80bd5a4d0d7383c
