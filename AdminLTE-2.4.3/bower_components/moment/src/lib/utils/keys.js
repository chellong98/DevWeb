<<<<<<< HEAD
import hasOwnProp from './has-own-prop';

var keys;

if (Object.keys) {
    keys = Object.keys;
} else {
    keys = function (obj) {
        var i, res = [];
        for (i in obj) {
            if (hasOwnProp(obj, i)) {
                res.push(i);
            }
        }
        return res;
    };
}

export { keys as default };
=======
import hasOwnProp from './has-own-prop';

var keys;

if (Object.keys) {
    keys = Object.keys;
} else {
    keys = function (obj) {
        var i, res = [];
        for (i in obj) {
            if (hasOwnProp(obj, i)) {
                res.push(i);
            }
        }
        return res;
    };
}

export { keys as default };
>>>>>>> dc6f5e4785075211e9a8d0f8d80bd5a4d0d7383c
