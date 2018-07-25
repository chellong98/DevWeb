<<<<<<< HEAD
import { normalizeObjectUnits } from '../units/aliases';
import { configFromArray } from './from-array';
import map from '../utils/map';

export function configFromObject(config) {
    if (config._d) {
        return;
    }

    var i = normalizeObjectUnits(config._i);
    config._a = map([i.year, i.month, i.day || i.date, i.hour, i.minute, i.second, i.millisecond], function (obj) {
        return obj && parseInt(obj, 10);
    });

    configFromArray(config);
}
=======
import { normalizeObjectUnits } from '../units/aliases';
import { configFromArray } from './from-array';
import map from '../utils/map';

export function configFromObject(config) {
    if (config._d) {
        return;
    }

    var i = normalizeObjectUnits(config._i);
    config._a = map([i.year, i.month, i.day || i.date, i.hour, i.minute, i.second, i.millisecond], function (obj) {
        return obj && parseInt(obj, 10);
    });

    configFromArray(config);
}
>>>>>>> dc6f5e4785075211e9a8d0f8d80bd5a4d0d7383c
