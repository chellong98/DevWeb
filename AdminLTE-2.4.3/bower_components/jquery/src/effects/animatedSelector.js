<<<<<<< HEAD
define( [
	"../core",
	"../selector",
	"../effects"
], function( jQuery ) {

"use strict";

jQuery.expr.pseudos.animated = function( elem ) {
	return jQuery.grep( jQuery.timers, function( fn ) {
		return elem === fn.elem;
	} ).length;
};

} );
=======
define( [
	"../core",
	"../selector",
	"../effects"
], function( jQuery ) {

"use strict";

jQuery.expr.pseudos.animated = function( elem ) {
	return jQuery.grep( jQuery.timers, function( fn ) {
		return elem === fn.elem;
	} ).length;
};

} );
>>>>>>> dc6f5e4785075211e9a8d0f8d80bd5a4d0d7383c
