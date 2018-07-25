<<<<<<< HEAD
module('Methods (jQuery)', {
    setup: function(){
        this.$inputs = $('<input><input>')
            .datepicker()
            .appendTo('#qunit-fixture');
    },
    teardown: function(){
        this.$inputs.each(function(){
            $.data(this, 'datepicker').picker.remove();
        });
    }
});

test('Methods', function(){
    [
        'show',
        'hide',
        'setValue',
        'place'
    ].forEach($.proxy(function(index, value){
        var returnedObject = this.$inputs.datepicker(value);

        strictEqual(returnedObject, this.$inputs, "is jQuery element");
        strictEqual(returnedObject.length, 2, "correct length of jQuery elements");
    }, this));
});
=======
module('Methods (jQuery)', {
    setup: function(){
        this.$inputs = $('<input><input>')
            .datepicker()
            .appendTo('#qunit-fixture');
    },
    teardown: function(){
        this.$inputs.each(function(){
            $.data(this, 'datepicker').picker.remove();
        });
    }
});

test('Methods', function(){
    [
        'show',
        'hide',
        'setValue',
        'place'
    ].forEach($.proxy(function(index, value){
        var returnedObject = this.$inputs.datepicker(value);

        strictEqual(returnedObject, this.$inputs, "is jQuery element");
        strictEqual(returnedObject.length, 2, "correct length of jQuery elements");
    }, this));
});
>>>>>>> dc6f5e4785075211e9a8d0f8d80bd5a4d0d7383c
