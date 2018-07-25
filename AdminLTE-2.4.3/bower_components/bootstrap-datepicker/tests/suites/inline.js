<<<<<<< HEAD
module('Inline', {
    setup: function(){
        this.component = $('<div data-date="12-02-2012"></div>')
                        .appendTo('#qunit-fixture')
                        .datepicker({format: "dd-mm-yyyy"});
        this.dp = this.component.data('datepicker');
        this.picker = this.dp.picker;
    },
    teardown: function(){
        this.picker.remove();
    }
});


test('Picker gets date/viewDate from data-date attr', function(){
    datesEqual(this.dp.dates[0], UTCDate(2012, 1, 12));
    datesEqual(this.dp.viewDate, UTCDate(2012, 1, 12));
});


test('Visible after init', function(){
    ok(this.picker.is(':visible'));
});

test('update', function(){
    this.dp.update('13-03-2012');
    datesEqual(this.dp.dates[0], UTCDate(2012, 2, 13));
});
=======
module('Inline', {
    setup: function(){
        this.component = $('<div data-date="12-02-2012"></div>')
                        .appendTo('#qunit-fixture')
                        .datepicker({format: "dd-mm-yyyy"});
        this.dp = this.component.data('datepicker');
        this.picker = this.dp.picker;
    },
    teardown: function(){
        this.picker.remove();
    }
});


test('Picker gets date/viewDate from data-date attr', function(){
    datesEqual(this.dp.dates[0], UTCDate(2012, 1, 12));
    datesEqual(this.dp.viewDate, UTCDate(2012, 1, 12));
});


test('Visible after init', function(){
    ok(this.picker.is(':visible'));
});

test('update', function(){
    this.dp.update('13-03-2012');
    datesEqual(this.dp.dates[0], UTCDate(2012, 2, 13));
});
>>>>>>> dc6f5e4785075211e9a8d0f8d80bd5a4d0d7383c
