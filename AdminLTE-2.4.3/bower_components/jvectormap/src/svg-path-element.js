<<<<<<< HEAD
jvm.SVGPathElement = function(config, style){
  jvm.SVGPathElement.parentClass.call(this, 'path', config, style);
  this.node.setAttribute('fill-rule', 'evenodd');
}

=======
jvm.SVGPathElement = function(config, style){
  jvm.SVGPathElement.parentClass.call(this, 'path', config, style);
  this.node.setAttribute('fill-rule', 'evenodd');
}

>>>>>>> dc6f5e4785075211e9a8d0f8d80bd5a4d0d7383c
jvm.inherits(jvm.SVGPathElement, jvm.SVGShapeElement);