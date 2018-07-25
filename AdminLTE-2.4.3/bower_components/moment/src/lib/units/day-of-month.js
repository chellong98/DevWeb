<<<<<<< HEAD
import { makeGetSet } from '../moment/get-set';
import { addFormatToken } from '../format/format';
import { addUnitAlias } from './aliases';
import { addUnitPriority } from './priorities';
import { addRegexToken, match1to2, match2 } from '../parse/regex';
import { addParseToken } from '../parse/token';
import { DATE } from './constants';
import toInt from '../utils/to-int';

// FORMATTING

addFormatToken('D', ['DD', 2], 'Do', 'date');

// ALIASES

addUnitAlias('date', 'D');

// PRIOROITY
addUnitPriority('date', 9);

// PARSING

addRegexToken('D',  match1to2);
addRegexToken('DD', match1to2, match2);
addRegexToken('Do', function (isStrict, locale) {
    // TODO: Remove "ordinalParse" fallback in next major release.
    return isStrict ?
      (locale._dayOfMonthOrdinalParse || locale._ordinalParse) :
      locale._dayOfMonthOrdinalParseLenient;
});

addParseToken(['D', 'DD'], DATE);
addParseToken('Do', function (input, array) {
    array[DATE] = toInt(input.match(match1to2)[0]);
});

// MOMENTS

export var getSetDayOfMonth = makeGetSet('Date', true);
=======
import { makeGetSet } from '../moment/get-set';
import { addFormatToken } from '../format/format';
import { addUnitAlias } from './aliases';
import { addUnitPriority } from './priorities';
import { addRegexToken, match1to2, match2 } from '../parse/regex';
import { addParseToken } from '../parse/token';
import { DATE } from './constants';
import toInt from '../utils/to-int';

// FORMATTING

addFormatToken('D', ['DD', 2], 'Do', 'date');

// ALIASES

addUnitAlias('date', 'D');

// PRIOROITY
addUnitPriority('date', 9);

// PARSING

addRegexToken('D',  match1to2);
addRegexToken('DD', match1to2, match2);
addRegexToken('Do', function (isStrict, locale) {
    // TODO: Remove "ordinalParse" fallback in next major release.
    return isStrict ?
      (locale._dayOfMonthOrdinalParse || locale._ordinalParse) :
      locale._dayOfMonthOrdinalParseLenient;
});

addParseToken(['D', 'DD'], DATE);
addParseToken('Do', function (input, array) {
    array[DATE] = toInt(input.match(match1to2)[0]);
});

// MOMENTS

export var getSetDayOfMonth = makeGetSet('Date', true);
>>>>>>> dc6f5e4785075211e9a8d0f8d80bd5a4d0d7383c
