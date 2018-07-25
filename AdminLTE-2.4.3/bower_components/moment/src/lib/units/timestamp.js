<<<<<<< HEAD
import { addFormatToken } from '../format/format';
import { addRegexToken, matchTimestamp, matchSigned } from '../parse/regex';
import { addParseToken } from '../parse/token';
import toInt from '../utils/to-int';

// FORMATTING

addFormatToken('X', 0, 0, 'unix');
addFormatToken('x', 0, 0, 'valueOf');

// PARSING

addRegexToken('x', matchSigned);
addRegexToken('X', matchTimestamp);
addParseToken('X', function (input, array, config) {
    config._d = new Date(parseFloat(input, 10) * 1000);
});
addParseToken('x', function (input, array, config) {
    config._d = new Date(toInt(input));
});
=======
import { addFormatToken } from '../format/format';
import { addRegexToken, matchTimestamp, matchSigned } from '../parse/regex';
import { addParseToken } from '../parse/token';
import toInt from '../utils/to-int';

// FORMATTING

addFormatToken('X', 0, 0, 'unix');
addFormatToken('x', 0, 0, 'valueOf');

// PARSING

addRegexToken('x', matchSigned);
addRegexToken('X', matchTimestamp);
addParseToken('X', function (input, array, config) {
    config._d = new Date(parseFloat(input, 10) * 1000);
});
addParseToken('x', function (input, array, config) {
    config._d = new Date(toInt(input));
});
>>>>>>> dc6f5e4785075211e9a8d0f8d80bd5a4d0d7383c
