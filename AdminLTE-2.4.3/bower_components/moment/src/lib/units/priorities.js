<<<<<<< HEAD
var priorities = {};

export function addUnitPriority(unit, priority) {
    priorities[unit] = priority;
}

export function getPrioritizedUnits(unitsObj) {
    var units = [];
    for (var u in unitsObj) {
        units.push({unit: u, priority: priorities[u]});
    }
    units.sort(function (a, b) {
        return a.priority - b.priority;
    });
    return units;
}
=======
var priorities = {};

export function addUnitPriority(unit, priority) {
    priorities[unit] = priority;
}

export function getPrioritizedUnits(unitsObj) {
    var units = [];
    for (var u in unitsObj) {
        units.push({unit: u, priority: priorities[u]});
    }
    units.sort(function (a, b) {
        return a.priority - b.priority;
    });
    return units;
}
>>>>>>> dc6f5e4785075211e9a8d0f8d80bd5a4d0d7383c
