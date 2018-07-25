<<<<<<< HEAD
﻿/*
 Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
*/
=======
﻿/*
 Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
*/
>>>>>>> dc6f5e4785075211e9a8d0f8d80bd5a4d0d7383c
CKEDITOR.plugins.add("divarea",{afterInit:function(a){a.addMode("wysiwyg",function(c){var b=CKEDITOR.dom.element.createFromHtml('\x3cdiv class\x3d"cke_wysiwyg_div cke_reset cke_enable_context_menu" hidefocus\x3d"true"\x3e\x3c/div\x3e');a.ui.space("contents").append(b);b=a.editable(b);b.detach=CKEDITOR.tools.override(b.detach,function(a){return function(){a.apply(this,arguments);this.remove()}});a.setData(a.getData(1),c);a.fire("contentDom")})}});