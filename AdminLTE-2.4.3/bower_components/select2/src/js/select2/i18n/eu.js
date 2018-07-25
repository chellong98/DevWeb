<<<<<<< HEAD
define(function () {
  // Basque
  return {
    inputTooLong: function (args) {
      var overChars = args.input.length - args.maximum;

      var message = 'Idatzi ';

      if (overChars == 1) {
        message += 'karaktere bat';
      } else {
        message += overChars + ' karaktere';
      }

      message += ' gutxiago';

      return message;
    },
    inputTooShort: function (args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'Idatzi ';

      if (remainingChars == 1) {
        message += 'karaktere bat';
      } else {
        message += remainingChars + ' karaktere';
      }

      message += ' gehiago';

      return message;
    },
    loadingMore: function () {
      return 'Emaitza gehiago kargatzen…';
    },
    maximumSelected: function (args) {
      if (args.maximum === 1) {
        return 'Elementu bakarra hauta dezakezu';
      } else {
        return args.maximum + ' elementu hauta ditzakezu soilik';
      }
    },
    noResults: function () {
      return 'Ez da bat datorrenik aurkitu';
    },
    searching: function () {
      return 'Bilatzen…';
    }
  };
});
=======
define(function () {
  // Basque
  return {
    inputTooLong: function (args) {
      var overChars = args.input.length - args.maximum;

      var message = 'Idatzi ';

      if (overChars == 1) {
        message += 'karaktere bat';
      } else {
        message += overChars + ' karaktere';
      }

      message += ' gutxiago';

      return message;
    },
    inputTooShort: function (args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'Idatzi ';

      if (remainingChars == 1) {
        message += 'karaktere bat';
      } else {
        message += remainingChars + ' karaktere';
      }

      message += ' gehiago';

      return message;
    },
    loadingMore: function () {
      return 'Emaitza gehiago kargatzen…';
    },
    maximumSelected: function (args) {
      if (args.maximum === 1) {
        return 'Elementu bakarra hauta dezakezu';
      } else {
        return args.maximum + ' elementu hauta ditzakezu soilik';
      }
    },
    noResults: function () {
      return 'Ez da bat datorrenik aurkitu';
    },
    searching: function () {
      return 'Bilatzen…';
    }
  };
});
>>>>>>> dc6f5e4785075211e9a8d0f8d80bd5a4d0d7383c
