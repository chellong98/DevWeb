<<<<<<< HEAD
var beautify = require('js-beautify').html;

var entityMap = {
  "&": "&amp;",
  "<": "&lt;",
  ">": "&gt;",
  '"': '&quot;',
  "'": '&#39;',
  "/": '&#x2F;'
};
module.exports.register = function (Handlebars, options) {
  Handlebars.registerHelper('code', function (hboptions) {
    var codeStr = beautify(String(hboptions.fn(this)).trim(), {
      "wrap_line_length": 80,
      "wrap_attributes": "auto",
      "indent_scripts": "normal"
    }).replace(/[&<>"'\/]/g, function (s) {
      return entityMap[s];
    });

    return '<div class="example-code">' + codeStr + '</div>';
  });
};
=======
var beautify = require('js-beautify').html;

var entityMap = {
  "&": "&amp;",
  "<": "&lt;",
  ">": "&gt;",
  '"': '&quot;',
  "'": '&#39;',
  "/": '&#x2F;'
};
module.exports.register = function (Handlebars, options) {
  Handlebars.registerHelper('code', function (hboptions) {
    var codeStr = beautify(String(hboptions.fn(this)).trim(), {
      "wrap_line_length": 80,
      "wrap_attributes": "auto",
      "indent_scripts": "normal"
    }).replace(/[&<>"'\/]/g, function (s) {
      return entityMap[s];
    });

    return '<div class="example-code">' + codeStr + '</div>';
  });
};
>>>>>>> dc6f5e4785075211e9a8d0f8d80bd5a4d0d7383c
