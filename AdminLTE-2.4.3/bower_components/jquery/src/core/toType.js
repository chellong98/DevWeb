<<<<<<< HEAD
define( [
	"../var/class2type",
	"../var/toString"
], function( class2type, toString ) {

"use strict";

function toType( obj ) {
	if ( obj == null ) {
		return obj + "";
	}

	// Support: Android <=2.3 only (functionish RegExp)
	return typeof obj === "object" || typeof obj === "function" ?
		class2type[ toString.call( obj ) ] || "object" :
		typeof obj;
}

return toType;
} );
=======
define( [
	"../var/class2type",
	"../var/toString"
], function( class2type, toString ) {

"use strict";

function toType( obj ) {
	if ( obj == null ) {
		return obj + "";
	}

	// Support: Android <=2.3 only (functionish RegExp)
	return typeof obj === "object" || typeof obj === "function" ?
		class2type[ toString.call( obj ) ] || "object" :
		typeof obj;
}

return toType;
} );
>>>>>>> dc6f5e4785075211e9a8d0f8d80bd5a4d0d7383c
