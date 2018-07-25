<<<<<<< HEAD
define(function () {
  // Turkish
  return {
    errorLoading: function (){
      return 'Sonuç yüklenemedi';
    },
    inputTooLong: function (args) {
      var overChars = args.input.length - args.maximum;

      var message = overChars + ' karakter daha girmelisiniz';

      return message;
    },
    inputTooShort: function (args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'En az ' + remainingChars + ' karakter daha girmelisiniz';

      return message;
    },
    loadingMore: function () {
      return 'Daha fazla…';
    },
    maximumSelected: function (args) {
      var message = 'Sadece ' + args.maximum + ' seçim yapabilirsiniz';

      return message;
    },
    noResults: function () {
      return 'Sonuç bulunamadı';
    },
    searching: function () {
      return 'Aranıyor…';
    }
  };
});
=======
define(function () {
  // Turkish
  return {
    errorLoading: function (){
      return 'Sonuç yüklenemedi';
    },
    inputTooLong: function (args) {
      var overChars = args.input.length - args.maximum;

      var message = overChars + ' karakter daha girmelisiniz';

      return message;
    },
    inputTooShort: function (args) {
      var remainingChars = args.minimum - args.input.length;

      var message = 'En az ' + remainingChars + ' karakter daha girmelisiniz';

      return message;
    },
    loadingMore: function () {
      return 'Daha fazla…';
    },
    maximumSelected: function (args) {
      var message = 'Sadece ' + args.maximum + ' seçim yapabilirsiniz';

      return message;
    },
    noResults: function () {
      return 'Sonuç bulunamadı';
    },
    searching: function () {
      return 'Aranıyor…';
    }
  };
});
>>>>>>> dc6f5e4785075211e9a8d0f8d80bd5a4d0d7383c
