<<<<<<< HEAD
define(function () {
  // Finnish
  return {
    errorLoading: function () {
      return 'Tuloksia ei saatu ladattua.';
    },
    inputTooLong: function (args) {
      var overChars = args.input.length - args.maximum;

      return 'Ole hyvä ja anna ' + overChars + ' merkkiä vähemmän';
    },
    inputTooShort: function (args) {
      var remainingChars = args.minimum - args.input.length;

      return 'Ole hyvä ja anna ' + remainingChars + ' merkkiä lisää';
    },
    loadingMore: function () {
      return 'Ladataan lisää tuloksia…';
    },
    maximumSelected: function (args) {
      return 'Voit valita ainoastaan ' + args.maximum + ' kpl';
    },
    noResults: function () {
      return 'Ei tuloksia';
    },
    searching: function () {
      return 'Haetaan…';
    }
  };
});
=======
define(function () {
  // Finnish
  return {
    errorLoading: function () {
      return 'Tuloksia ei saatu ladattua.';
    },
    inputTooLong: function (args) {
      var overChars = args.input.length - args.maximum;

      return 'Ole hyvä ja anna ' + overChars + ' merkkiä vähemmän';
    },
    inputTooShort: function (args) {
      var remainingChars = args.minimum - args.input.length;

      return 'Ole hyvä ja anna ' + remainingChars + ' merkkiä lisää';
    },
    loadingMore: function () {
      return 'Ladataan lisää tuloksia…';
    },
    maximumSelected: function (args) {
      return 'Voit valita ainoastaan ' + args.maximum + ' kpl';
    },
    noResults: function () {
      return 'Ei tuloksia';
    },
    searching: function () {
      return 'Haetaan…';
    }
  };
});
>>>>>>> dc6f5e4785075211e9a8d0f8d80bd5a4d0d7383c
