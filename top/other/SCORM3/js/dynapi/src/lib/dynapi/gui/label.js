/*
   DynAPI Distribution
   Label Class

   The DynAPI Distribution is distributed under the terms of the GNU LGPL license.

   Requirements:
	dynapi.api [dynlayer, dyndocument, browser, events]
*/

function Label(text) {
	this.DynLayer = DynLayer;
	this.DynLayer();
	this.wrap = false;
	this.padding = 0;
	this.align = 'left';
	this.font = {};
	this.font.family="arial";
	this.font.size="2";
	this.font.color="#000000";
	this.pWidth = false;
	this.pHeight = false;
	this.selectable	= true;
	this.setText(text);
	var listener = new EventListener(this);
	listener.oncreate = function(e)	{
		var	o = e.target;
		if (!o.selectable) {
			if (o.created&&(is.ie||is.dom)) {
				o.css.cursor="default";
			}
		}
	};
	listener.onresize = function(e) {
		var o = e.target;
		if (o.created) {
			if (o.pWidth && o.pHeight) {
				o.setSize(o.getContentWidth(),o.getContentHeight(),false);
			}
			if (o.pWidth) {
				o.setWidth(o.getContentWidth(),false);
			}
			if (o.pHeight) {
				o.setHeight(o.getContentHeight(),false);
			}
		}
	};
	this.addEventListener(listener);
	this.selectListener = new EventListener(this);
	this.selectListener.onmousedown = function(e) {
		e.cancelBrowserEvent();
	};
	this.selectListener.onmousemove = function(e) {
		e.cancelBrowserEvent();
	};
};
Label.prototype = new DynLayer();

Label.prototype.setText = function(text) {
	this.text = text || '';
	var styled = '<font size="'+this.font.size+'" face="'+this.font.family+'" color="'+this.font.color+'">'+this.text+'</font>';
	if (this.font.bold) styled = '<b>'+styled+'</b>';
	if (this.font.italic) styled = '<i>'+styled+'</i>';
	
	var width = this.wrap? 'width='+this.w : '';
	var wrap = this.wrap? '':'nowrap';
	this.textFull = '<table '+width+' cellpadding='+this.padding+' cellspacing=0 border=0><td align="'+this.align+'" '+wrap+'>'+styled+'</td></table>';
	this.setHTML(this.textFull);
};
Label.prototype.setFontFamily = function(f,noevt) {
	this.font.family = f;
	if (noevt!=false) this.setText(this.text);
};
Label.prototype.setFontSize = function(s,noevt) {
	this.font.size = s;
	if (noevt!=false) this.setText(this.text);
};
Label.prototype.setFontBold = function(b,noevt) {
	this.font.bold = b;
	if (noevt!=false) this.setText(this.text);
};
Label.prototype.setFontItalic = function(b,noevt) {
	this.font.italic = b;
	if (noevt!=false) this.setText(this.text);
};
Label.prototype.setFontColor = function(b,noevt) {
	this.font.color = b;
	if (noevt!=false) this.setText(this.text);
};
Label.prototype.getText = function() {
	return this.text;
};
Label.prototype.setWrap = function(wrap,noevt) {
	this.wrap = wrap;
	if (noevt!=false) this.setText(this.text);
};
Label.prototype.setPadding = function(p,noevt) {
	this.padding = p;
	if (noevt!=false) this.setText(this.text);
};
Label.prototype.setAlignment = function(a) {
	this.align = a;
	this.setText(this.text);
};
Label.prototype.setSelectable = function(b) {
	this.selectable=b
	if (b==false) {
		this.addEventListener(this.selectListener);
		if (this.created&&(is.ie||is.dom)) {
			this.css.cursor="default";
		}
	}
	else {
		this.removeEventListener(this.selectListener);
		if (this.created&&(is.ie||is.dom)) {
			this.css.cursor="text";
		}
	}
};
Label.prototype.packWidth = function() {
	this.pack(true,false);
};
Label.prototype.packHeight = function() {
	this.pack(false,true);
};
Label.prototype.pack = function(bWidth,bHeight) {
	if (bWidth==null && bHeight==null) {
		bWidth=bHeight=true;
	}
	var w = bWidth? this.getContentWidth() : this.w;
	var h = bHeight? this.getContentHeight() : this.h;
	this.pWidth = bWidth;
	this.pHeight = bHeight;
	if (this.created) this.setSize(w,h,false);
};
