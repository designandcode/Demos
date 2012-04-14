/*
 * Ample SDK - JavaScript GUI Framework
 *
 * Copyright (c) 2009 Sergey Ilinsky
 * Dual licensed under the MIT and GPL licenses.
 * See: http://www.amplesdk.com/ample/licensing/
 *
 */

(function () {


var oXHTMLNamespace	= new AMLNamespace;

ample.domConfig.setNamespace("http://www.w3.org/1999/xhtml", oXHTMLNamespace);



var cXHTMLElement	= function(){};

cXHTMLElement.prototype	= new AMLElement;
cXHTMLElement.prototype.AMLElement	= new AMLElement;



cXHTMLElement.prototype.setAttribute	= function(sName, sValue)
{
		if (sName.indexOf(":") ==-1) {
		if (sName == "tabIndex")
			this.tabIndex	= isNaN(sValue) ? -1 : sValue * 1;
		else
		if (sName == "accessKey")
			this.accessKey	= sValue;
		else
		if (sName != "id" && sName != "class" && sName != "style")
			this.$getContainer()[sName]	= sValue;
	}

	this.AMLElement.setAttribute.call(this, sName, sValue);
};

cXHTMLElement.prototype.removeAttribute	= function(sName)
{
	if (sName.indexOf(":") ==-1) {
		if (sName == "tabIndex")
			this.tabIndex	=-1;
		else
		if (sName == "accessKey")
			this.accessKey	= null;
		else
		if (sName != "id" && sName != "class" && sName != "style")
			this.$getContainer()[sName]	= null;
	}
	this.AMLElement.removeAttribute.call(this, sName);
};

cXHTMLElement.prototype.$getTagOpen	= function()
{
	var sHtml   = '<' + this.localName;
	for (var sName in this.attributes)
		if (sName != "class" && sName != "id" && sName.indexOf(':') ==-1)
			sHtml  += ' ' + sName + '="' + this.getAttribute(sName).replace(/"/g, '\"') + '"';
	sHtml	+= ' class="' + (this.prefix ? this.prefix + '-' : '') + this.localName + ("class" in this.attributes ? ' ' + this.attributes["class"] : '') + '"';
    return sHtml + '>';
};

cXHTMLElement.prototype.$getTagClose	= function()
{
    return '</' + this.localName + '>';
};

oXHTMLNamespace.setElement("#element", cXHTMLElement);



var cXHTMLElement_a	= function(){};
cXHTMLElement_a.prototype	= new cXHTMLElement;
cXHTMLElement_a.prototype.tabIndex	= 0;
cXHTMLElement_a.prototype.$hoverable= true;

cXHTMLElement_a.handlers	= {
	"focus":	function(oEvent) {
		this.$getContainer().focus();
	},
	"blur":		function(oEvent) {
		this.$getContainer().blur();
	},
	"click":	function(oEvent) {
		if (oEvent.button == 0)
		{
			var oDOMActivateEvent	= this.ownerDocument.createEvent("UIEvent");
			oDOMActivateEvent.initUIEvent("DOMActivate", true, true, window, null);
			if (!this.dispatchEvent(oDOMActivateEvent))
				oEvent.preventDefault();
		}
	},
	"DOMActivate":	function(oEvent) {
				if (document.namespaces) {
			var sHref= this.$getContainer().href,
				aUrl = sHref.match(/^([^#]*)#(.*)/);
			if (aUrl && window.location.href.match(/^([^#]*)#/) && aUrl[1] == window.RegExp.$1)
				this.ownerDocument.$bookmark(aUrl[2]);
		}

				var sTarget	= this.getAttribute("target"),
			oTarget;
		if (sTarget.match(/#(.+)$/) && (oTarget = this.ownerDocument.getElementById(window.RegExp.$1)))
		{
						oTarget.$load(this.getAttribute("href").replace(/&lt;/g, '<').replace(/&gt;/g, '>').replace(/&amp;/g, '&'));

						oEvent.preventDefault();
		}
	}
}

oXHTMLNamespace.setElement("a", cXHTMLElement_a);



var cXHTMLElement_abbr	= function(){};
cXHTMLElement_abbr.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("abbr", cXHTMLElement_abbr);



var cXHTMLElement_acronym	= function(){};
cXHTMLElement_acronym.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("acronym", cXHTMLElement_acronym);



var cXHTMLElement_address	= function(){};
cXHTMLElement_address.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("address", cXHTMLElement_address);



var cXHTMLElement_area	= function(){};
cXHTMLElement_area.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("area", cXHTMLElement_area);



var cXHTMLElement_b	= function(){};
cXHTMLElement_b.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("b", cXHTMLElement_b);



var cXHTMLElement_base	= function(){};
cXHTMLElement_base.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("base", cXHTMLElement_base);



var cXHTMLElement_bdo	= function(){};
cXHTMLElement_bdo.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("bdo", cXHTMLElement_bdo);



var cXHTMLElement_big	= function(){};
cXHTMLElement_big.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("big", cXHTMLElement_big);



var cXHTMLElement_blockquote	= function(){};
cXHTMLElement_blockquote.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("blockquote", cXHTMLElement_blockquote);



var cXHTMLElement_body	= function(){};
cXHTMLElement_body.prototype	= new cXHTMLElement;
cXHTMLElement_body.prototype.tabIndex	= 0;

oXHTMLNamespace.setElement("body", cXHTMLElement_body);



var cXHTMLElement_br	= function(){};
cXHTMLElement_br.prototype	= new cXHTMLElement;

cXHTMLElement_br.prototype.$getTagOpen	= function()
{
	var sHtml   = '<' + this.localName;
	for (var sName in this.attributes)
		if (sName != "class" && sName != "id" && sName.indexOf(':') ==-1)
			sHtml  += ' ' + sName + '="' + this.getAttribute(sName).replace(/"/g, '\"') + '"';
	sHtml	+= ' class="' + (this.prefix ? this.prefix + '-' : '') + this.localName + ("class" in this.attributes ? ' ' + this.attributes["class"] : '') + '"';
    return sHtml + '/>';
};

cXHTMLElement_br.prototype.$getTagClose	= function() {
	return '';
};

oXHTMLNamespace.setElement("br", cXHTMLElement_br);



var cXHTMLElement_button	= function(){};
cXHTMLElement_button.prototype	= new cXHTMLElement;
cXHTMLElement_button.prototype.tabIndex		= 0;

cXHTMLElement_button.prototype.$isAccessible	= function()
{
	return !this.getAttribute("disabled");
};

cXHTMLElement_button.prototype.$validate	= function() {
	return true;
};

cXHTMLElement_button.prototype.form	= null;

cXHTMLElement_button.handlers	= {
	"focus":	function(oEvent) {
		this.$getContainer().focus();
	},
	"blur":		function(oEvent) {
		this.$getContainer().blur();
	}
};

oXHTMLNamespace.setElement("button", cXHTMLElement_button);



var cXHTMLElement_caption	= function(){};
cXHTMLElement_caption.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("caption", cXHTMLElement_caption);



var cXHTMLElement_cite	= function(){};
cXHTMLElement_cite.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("cite", cXHTMLElement_cite);



var cXHTMLElement_code	= function(){};
cXHTMLElement_code.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("code", cXHTMLElement_code);



var cXHTMLElement_col	= function(){};
cXHTMLElement_col.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("col", cXHTMLElement_col);



var cXHTMLElement_colgroup	= function(){};
cXHTMLElement_colgroup.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("colgroup", cXHTMLElement_colgroup);



var cXHTMLElement_dd	= function(){};
cXHTMLElement_dd.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("dd", cXHTMLElement_dd);



var cXHTMLElement_del	= function(){};
cXHTMLElement_del.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("del", cXHTMLElement_del);



var cXHTMLElement_dfn	= function(){};
cXHTMLElement_dfn.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("dfn", cXHTMLElement_dfn);



var cXHTMLElement_div	= function(){};
cXHTMLElement_div.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("div", cXHTMLElement_div);



var cXHTMLElement_dl	= function(){};
cXHTMLElement_dl.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("dl", cXHTMLElement_dl);



var cXHTMLElement_dt	= function(){};
cXHTMLElement_dt.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("dt", cXHTMLElement_dt);



var cXHTMLElement_em	= function(){};
cXHTMLElement_em.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("em", cXHTMLElement_em);



var cXHTMLElement_fieldset	= function()
{
	this.elements	= new AMLNodeList;
};
cXHTMLElement_fieldset.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("fieldset", cXHTMLElement_fieldset);



var cXHTMLElement_form	= function()
{
	this.elements	= new AMLNodeList;
};
cXHTMLElement_form.prototype	= new cXHTMLElement;

cXHTMLElement_form.prototype.$validate	= function()
{
	for (var nIndex = 0; nIndex < this.elements.length; nIndex++) {
		if (!this.elements[nIndex].$validate())
			return false;
	}
	return true;
}

cXHTMLElement_form.prototype.submit	= function()
{
		var sTarget	= this.getAttribute("target"),
		oTarget;
	if (sTarget.match(/#(.+)$/) && (oTarget = this.ownerDocument.getElementById(window.RegExp.$1)))
	{
		var aValue	= [],
			sAction	= this.getAttribute("action").replace(/&lt;/g, '<').replace(/&gt;/g, '>').replace(/&amp;/g, '&'),
			vValue,
			sName,
			oElement;
		for (var nIndex = 0; nIndex < this.elements.length; nIndex++)
		{
			oElement	= this.elements[nIndex];
			if (!oElement.hasAttribute("disabled") && oElement.hasAttribute("name") && (vValue = oElement.$getValue()) != null)
			{
				sName	= oElement.getAttribute("name");
				if (vValue instanceof window.Array)
					for (var nValue = 0; nValue < vValue.length; nValue++)
						aValue.push(sName + '=' + vValue[nValue]);
				else
					aValue.push(sName + '=' + vValue);
			}
		}
		vValue	= window.encodeURI(aValue.join('&'));
		if (this.getAttribute("method").toLowerCase() == "post")
			oTarget.$load(sAction, "POST", {'Content-Type': 'application/x-www-form-urlencoded'}, vValue);
		else
			oTarget.$load(sAction.replace(/\?.+/, '') + '?' + vValue, this.getAttribute("method"));
	}
	else
		this.$getContainer().submit();
};

cXHTMLElement_form.prototype.reset	= function()
{
	this.$getContainer().reset();
};


cXHTMLElement_form.prototype._onSubmit	= function()
{
        var oEvent = this.ownerDocument.createEvent("Events");
    oEvent.initEvent("submit", true, true);

    return this.dispatchEvent(oEvent);
};

cXHTMLElement_form.prototype._onReset	= function()
{
        var oEvent = this.ownerDocument.createEvent("Events");
    oEvent.initEvent("reset", true, true);

    return this.dispatchEvent(oEvent);
};

cXHTMLElement_form.handlers	= {
	"DOMNodeInserted":	function(oEvent) {
		if (oEvent.target instanceof cXHTMLElement_input ||
			oEvent.target instanceof cXHTMLElement_select ||
			oEvent.target instanceof cXHTMLElement_textarea ||
			oEvent.target instanceof cXHTMLElement_button) {
				oEvent.target.form	= this;
				this.elements.$add(oEvent.target);
			}
	},
	"DOMNodeRemoved":	function(oEvent) {
		if (oEvent.target instanceof cXHTMLElement_input ||
			oEvent.target instanceof cXHTMLElement_select ||
			oEvent.target instanceof cXHTMLElement_textarea ||
			oEvent.target instanceof cXHTMLElement_button) {
				oEvent.target.form	= null;
				this.elements.$remove(oEvent.target);
		}
	}
}

cXHTMLElement_form.prototype.$getTagOpen	= function()
{
    var sHtml   = '<' + this.localName + ' onsubmit="var oElement = ample.$instance(this); if (oElement._onSubmit()) oElement.submit(); return false;" onreset="var oElement = ample.$instance(this); if (oElement._onReset()) oElement.reset(); return false;"';
    for (var sName in this.attributes)
		if (sName != "class" && sName != "id" && sName.indexOf(':') ==-1)
			sHtml  += ' ' + sName + '="' + this.getAttribute(sName).replace(/"/g, '\"') + '"';
	sHtml	+= ' class="' + (this.prefix ? this.prefix + '-' : '') + this.localName + ("class" in this.attributes ? ' ' + this.attributes["class"] : '') + '"';
    return sHtml + '>';
};

oXHTMLNamespace.setElement("form", cXHTMLElement_form);



var cXHTMLElement_h1	= function(){};
cXHTMLElement_h1.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("h1", cXHTMLElement_h1);



var cXHTMLElement_h2	= function(){};
cXHTMLElement_h2.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("h2", cXHTMLElement_h2);



var cXHTMLElement_h3	= function(){};
cXHTMLElement_h3.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("h3", cXHTMLElement_h3);



var cXHTMLElement_h4	= function(){};
cXHTMLElement_h4.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("h4", cXHTMLElement_h4);



var cXHTMLElement_h5	= function(){};
cXHTMLElement_h5.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("h5", cXHTMLElement_h5);



var cXHTMLElement_h6	= function(){};
cXHTMLElement_h6.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("h6", cXHTMLElement_h6);



var cXHTMLElement_head	= function(){};
cXHTMLElement_head.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("head", cXHTMLElement_head);



var cXHTMLElement_hr	= function(){};
cXHTMLElement_hr.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("hr", cXHTMLElement_hr);



var cXHTMLElement_html	= function(){};
cXHTMLElement_html.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("html", cXHTMLElement_html);



var cXHTMLElement_i	= function(){};
cXHTMLElement_i.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("i", cXHTMLElement_i);



var cXHTMLElement_img	= function(){};
cXHTMLElement_img.prototype	= new cXHTMLElement;

cXHTMLElement_img.prototype.$getTagOpen	= function()
{
    var sHtml   = '<' + this.localName + ' onmousedown="return '+ "false" + '" ondragstart="return '+ "false" + '"';
    for (var sName in this.attributes)
		if (sName != "class" && sName != "id" && sName.indexOf(':') ==-1)
			sHtml  += ' ' + sName + '="' + this.getAttribute(sName).replace(/"/g, '\"') + '"';
	sHtml	+= ' class="' + (this.prefix ? this.prefix + '-' : '') + this.localName + ("class" in this.attributes ? ' ' + this.attributes["class"] : '') + '"';
    return sHtml + '/>';
};
cXHTMLElement_img.prototype.$getTagClose	= function()
{
	return '';
};

oXHTMLNamespace.setElement("img", cXHTMLElement_img);



var cXHTMLElement_input	= function(){};
cXHTMLElement_input.prototype	= new cXHTMLElement;
cXHTMLElement_input.prototype.tabIndex	= 0;

cXHTMLElement_input.prototype.form	= null;

cXHTMLElement_input.prototype.$isAccessible	= function()
{
	return !this.getAttribute("disabled") && this.attributes["type"] != "hidden";
};

cXHTMLElement_input.prototype.$getValue	= function()
{
	var vValue	= this.$getContainer().value;
	switch (this.attributes["type"])
	{
		case "radio":
		case "checkbox":
			return this.$getContainer().checked ? vValue : null;
		default:
			return vValue;
	}
};

cXHTMLElement_input.prototype.$validate	= function() {
	var sValue		= this.$getContainer().value,
		bValid		= true,
		sRequired	= this.getAttributeNS("http://www.amplesdk.com/ns/aml", "required"),
		sDataType	= this.getAttributeNS("http://www.amplesdk.com/ns/aml", "type");

	if (sDataType) {
		if (sValue == '') {
			if (sRequired == "true")
				bValid	= false;
		}
		else
		if (sDataType) {
			var aQName	= sDataType.split(':'),
				sNameSpaceURI	= this.lookupNamespaceURI(aQName[0]),
				sLocalName		= aQName[1],
				oDataType		= this.ownerDocument.$model.getTypeDefinition(sNameSpaceURI, sLocalName);

			if (oDataType)
				bValid	= oDataType.$validate(sValue);
		}
			    this.$setPseudoClass("valid", bValid);
	    this.$setPseudoClass("invalid", !bValid);

	    	    var oEvent2 = this.ownerDocument.createEvent("CustomEvents");
	    oEvent2.initCustomEvent("validate", true, false, bValid);
	    this.dispatchEvent(oEvent2);
	}
	return bValid;
};

cXHTMLElement_input.prototype.select	= function()
{
	this.$getContainer().select();
};

cXHTMLElement_input.prototype._onChange	= function(oEvent)
{

        var oEvent2 = this.ownerDocument.createEvent("UIEvents");
    oEvent2.initUIEvent("change", true, false, window, null);

    this.dispatchEvent(oEvent2);
};

cXHTMLElement_input.handlers	= {
	"keyup":	function() {
		var that	= this;
		setTimeout(function() {
			that.$validate();
		}, 0);
	},
	"focus":	function(oEvent) {
		this.$getContainer().focus();
	},
	"blur":		function(oEvent) {
		this.$validate();
		this.$getContainer().blur();
	},
	"DOMNodeInsertedIntoDocument":	function() {
		this.$validate();
	}
};

cXHTMLElement_input.prototype.$getTagOpen		= function()
{
    var sHtml   = '<' + this.localName + ' onchange="ample.$instance(this)._onChange(event)"';
    for (var sName in this.attributes)
    	if (sName != "class" && sName != "id" && sName.indexOf(':') ==-1)
			sHtml  += ' ' + sName + '="' + this.getAttribute(sName).replace(/"/g, '\"') + '"';
	sHtml	+= ' class="' + (this.prefix ? this.prefix + '-' : '') + this.localName + ("class" in this.attributes ? ' ' + this.attributes["class"] : '') + '"';
    return sHtml + '/>';
};

cXHTMLElement_input.prototype.$getTagClose	= function()
{
	return '';
};

oXHTMLNamespace.setElement("input", cXHTMLElement_input);



var cXHTMLElement_ins	= function(){};
cXHTMLElement_ins.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("ins", cXHTMLElement_ins);



var cXHTMLElement_kbd	= function(){};
cXHTMLElement_kbd.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("kbd", cXHTMLElement_kbd);



var cXHTMLElement_label	= function(){};
cXHTMLElement_label.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("label", cXHTMLElement_label);



var cXHTMLElement_legend	= function(){};
cXHTMLElement_legend.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("legend", cXHTMLElement_legend);



var cXHTMLElement_li	= function(){};
cXHTMLElement_li.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("li", cXHTMLElement_li);



var cXHTMLElement_link	= function(){};
cXHTMLElement_link.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("link", cXHTMLElement_link);



var cXHTMLElement_map	= function(){};
cXHTMLElement_map.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("map", cXHTMLElement_map);



var cXHTMLElement_meta	= function(){};
cXHTMLElement_meta.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("meta", cXHTMLElement_meta);



var cXHTMLElement_noscript	= function(){};
cXHTMLElement_noscript.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("noscript", cXHTMLElement_noscript);



var cXHTMLElement_object	= function(){};
cXHTMLElement_object.prototype	= new cXHTMLElement;

cXHTMLElement_object.prototype.$getTag	= function()
{
	if (window.navigator.userAgent.indexOf("Gecko") >-1)
	{
		var sHtml   = '<embed';
		for (var sName in this.attributes)
			if (sName != "class" && sName != "id" && sName.indexOf(':') ==-1)
				sHtml  += ' ' + sName + '="' + this.getAttribute(sName).replace(/"/g, '\"') + '"';
		sHtml	+= ' class="' + (this.prefix ? this.prefix + '-' : '') + this.localName + ("class" in this.attributes ? ' ' + this.attributes["class"] : '') + '"';
		for (var nIndex = 0; nIndex < this.childNodes.length; nIndex++)
			sHtml	+= ' ' + this.childNodes[nIndex].attributes["name"] + '="' + this.childNodes[nIndex].attributes["value"] + '"';
		return sHtml + ' />';
	}
	else
		return this.AMLElement.$getTag.call(this);
};

oXHTMLNamespace.setElement("object", cXHTMLElement_object);



var cXHTMLElement_ol	= function(){};
cXHTMLElement_ol.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("ol", cXHTMLElement_ol);



var cXHTMLElement_optgroup	= function(){};
cXHTMLElement_optgroup.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("optgroup", cXHTMLElement_optgroup);



var cXHTMLElement_option	= function(){};
cXHTMLElement_option.prototype	= new cXHTMLElement;

cXHTMLElement_option.handlers	= {
	"mousedown":	function(oEvent) {
		oEvent.stopPropagation();		}
};

oXHTMLNamespace.setElement("option", cXHTMLElement_option);



var cXHTMLElement_p	= function(){};
cXHTMLElement_p.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("p", cXHTMLElement_p);



var cXHTMLElement_param	= function(){};
cXHTMLElement_param.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("param", cXHTMLElement_param);



var cXHTMLElement_pre	= function(){};
cXHTMLElement_pre.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("pre", cXHTMLElement_pre);



var cXHTMLElement_q	= function(){};
cXHTMLElement_q.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("q", cXHTMLElement_q);



var cXHTMLElement_samp	= function(){};
cXHTMLElement_samp.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("samp", cXHTMLElement_samp);



var cXHTMLElement_script	= function(){};
cXHTMLElement_script.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("script", cXHTMLElement_script);



var cXHTMLElement_select	= function()
{
    this.options	= new AMLNodeList;

    var oSelf	= this;
    this.options.add	= function (oElement, nIndex) {oSelf.add(oElement, nIndex)};
    this.options.remove	= function (nIndex) {oSelf.remove(nIndex)};
};
cXHTMLElement_select.prototype	= new cXHTMLElement;
cXHTMLElement_select.prototype.tabIndex		= 0;

cXHTMLElement_select.prototype.form		= null;

cXHTMLElement_select.prototype.$isAccessible	= function()
{
	return !this.getAttribute("disabled");
};

cXHTMLElement_select.prototype.$getValue	= function()
{
	if (this.hasAttribute("multiple"))
	{
		var aValue	= [];
		for (var nIndex = 0; nIndex < this.options.length; nIndex++)
			if (this.options[nIndex].$getContainer().selected)
				aValue[aValue.length]	= this.options[nIndex].$getContainer().value;
		return aValue;
	}
	else
		return this.$getContainer().value;
};

cXHTMLElement_select.prototype.$validate	= function()
{
	return true;
};

cXHTMLElement_select.prototype.add		= function(oElement, nIndex)
{
	return this.appendChild(oElement);
};

cXHTMLElement_select.prototype.remove	= function(nIndex)
{
	return this.removeChild(this.options[nIndex]);
};

cXHTMLElement_select.prototype._onChange	= function(oEvent)
{
        var oEvent2  = this.ownerDocument.createEvent("UIEvents");
    oEvent2.initUIEvent("change", true, false, window, null);

    this.dispatchEvent(oEvent2);
};

cXHTMLElement_select.handlers	= {
	"focus":	function(oEvent) {
		this.$getContainer().focus();
	},
	"blur":		function(oEvent) {
		this.$getContainer().blur();
	},
	"DOMNodeInserted":	function(oEvent) {
		if (oEvent.target instanceof cXHTMLElement_option)
			this.options.$add(oEvent.target);
	},
	"DOMNodeRemoved":	function(oEvent) {
		if (oEvent.target instanceof cXHTMLElement_option)
			this.options.$remove(oEvent.target);
	}
};

cXHTMLElement_select.prototype.$getTagOpen	= function()
{
    var sHtml   = '<' + this.localName + ' onchange="ample.$instance(this)._onChange(event)"';
    for (var sName in this.attributes)
    	if (sName != "class" && sName != "id" && sName.indexOf(':') ==-1)
			sHtml  += ' ' + sName + '="' + this.getAttribute(sName).replace(/"/g, '\"') + '"';
	sHtml	+= ' class="' + (this.prefix ? this.prefix + '-' : '') + this.localName + ("class" in this.attributes ? ' ' + this.attributes["class"] : '') + '"';
    return sHtml + '>';
};

oXHTMLNamespace.setElement("select", cXHTMLElement_select);



var cXHTMLElement_small	= function(){};
cXHTMLElement_small.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("small", cXHTMLElement_small);



var cXHTMLElement_span	= function(){};
cXHTMLElement_span.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("span", cXHTMLElement_span);



var cXHTMLElement_strong	= function(){};
cXHTMLElement_strong.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("strong", cXHTMLElement_strong);



var cXHTMLElement_style	= function(){};
cXHTMLElement_style.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("style", cXHTMLElement_style);



var cXHTMLElement_sub	= function(){};
cXHTMLElement_sub.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("sub", cXHTMLElement_sub);



var cXHTMLElement_sup	= function(){};
cXHTMLElement_sup.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("sup", cXHTMLElement_sup);



var cXHTMLElement_table	= function()
{
	this.tHead		= null;
	this.tBodies	= new AMLNodeList;
	this.tFoot		= null;

	this.caption	= null;

	this.rows	= new AMLNodeList;
};
cXHTMLElement_table.prototype	= new cXHTMLElement;

cXHTMLElement_table.prototype.insertRow	= function(nIndex)
{
	var oElement	= this.ownerDocument.createElementNS(this.namespaceURI, "tr");
	return nIndex ==-1 ? this.appendChild(oElement) : this.insertBefore(oElement, this.rows[nIndex]);
};

cXHTMLElement_table.prototype.deleteRow	= function(nIndex)
{
	return this.removeChild(this.rows[nIndex]);
};

cXHTMLElement_table.prototype.createCaption	= function()
{

};

cXHTMLElement_table.prototype.deleteCaption	= function()
{

};

cXHTMLElement_table.prototype.createTHead	= function()
{

};

cXHTMLElement_table.prototype.deleteTHead	= function()
{

};

cXHTMLElement_table.prototype.createTFoot	= function()
{

};

cXHTMLElement_table.prototype.deleteTFoot	= function()
{

};

cXHTMLElement_table.handlers	= {
	"DOMNodeInserted":	function(oEvent) {
		if (oEvent.target.parentNode == this)
			if (oEvent.target instanceof cXHTMLElement_caption)
				this.caption	= oEvent.target;
			else
			if (oEvent.target instanceof cXHTMLElement_tbody)
				this.tBodies.$add(oEvent.target);
			else
			if (oEvent.target instanceof cXHTMLElement_tfoot)
				this.tFoot	= oEvent.target;
			else
			if (oEvent.target instanceof cXHTMLElement_thead)
				this.tHead	= oEvent.target;
	},
	"DOMNodeRemoved":	function(oEvent) {
		if (oEvent.target.parentNode == this)
			if (oEvent.target instanceof cXHTMLElement_caption)
				this.caption	= null;
			else
			if (oEvent.target instanceof cXHTMLElement_tbody)
				this.tBodies.$remove(oEvent.target);
			else
			if (oEvent.target instanceof cXHTMLElement_tfoot)
				this.tFoot	= nullt;
			else
			if (oEvent.target instanceof cXHTMLElement_thead)
				this.tHead	= null;
	}
};

oXHTMLNamespace.setElement("table", cXHTMLElement_table);



var cXHTMLElement_tbody	= function()
{
	this.rows	= new AMLNodeList;
};
cXHTMLElement_tbody.prototype	= new cXHTMLElement;

cXHTMLElement_tbody.prototype.insertRow	= function(nIndex)
{
	var oElement	= this.ownerDocument.createElementNS(this.namespaceURI, "tr");
	return nIndex ==-1 ? this.appendChild(oElement) : this.insertBefore(oElement, this.rows[nIndex]);
};

cXHTMLElement_tbody.prototype.deleteRow	= function(nIndex)
{
	return this.removeChild(this.rows[nIndex]);
};

cXHTMLElement_tbody.handlers	= {
	"DOMNodeInserted":	function(oEvent) {
		if (oEvent.target.parentNode == this)
			if (oEvent.target instanceof cXHTMLElement_tr)
				this.rows.$add(oEvent.target);
	},
	"DOMNodeRemoved":	function(oEvent) {
		if (oEvent.target.parentNode == this)
			if (oEvent.target instanceof cXHTMLElement_tr)
				this.rows.$remove(oEvent.target);
	}
};

oXHTMLNamespace.setElement("tbody", cXHTMLElement_tbody);



var cXHTMLElement_td	= function(){};
cXHTMLElement_td.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("td", cXHTMLElement_td);



var cXHTMLElement_textarea	= function(){};
cXHTMLElement_textarea.prototype	= new cXHTMLElement;
cXHTMLElement_textarea.prototype.tabIndex	= 0;

cXHTMLElement_textarea.prototype.form		= null;

cXHTMLElement_textarea.prototype.$isAccessible	= function()
{
	return !this.getAttribute("disabled");
};

cXHTMLElement_textarea.prototype.$getValue	= function(sValue)
{
	return this.$getContainer().value;
};

cXHTMLElement_textarea.prototype.$validate	= function()
{
	return true;
};

cXHTMLElement_textarea.prototype.select	= function()
{
	this.$getContainer().select();
};

cXHTMLElement_textarea.prototype._onChange	= function(oEvent)
{
        var oEvent2 = this.ownerDocument.createEvent("UIEvents");
    oEvent2.initUIEvent("change", true, false, window, null);

    this.dispatchEvent(oEvent2);
};

cXHTMLElement_textarea.handlers	= {
	"focus":	function(oEvent) {
		this.$getContainer().focus();
	},
	"blur":		function(oEvent) {
		this.$getContainer().blur();
	}
};

cXHTMLElement_textarea.prototype.$getTagOpen	= function()
{
    var sHtml   = '<' + this.localName + ' onchange="ample.$instance(this)._onChange(event)"';
    for (var sName in this.attributes)
    	if (sName != "class" && sName != "id" && sName.indexOf(':') ==-1)
			sHtml  += ' ' + sName + '="' + this.getAttribute(sName).replace(/"/g, '\"') + '"';
	sHtml	+= ' class="' + (this.prefix ? this.prefix + '-' : '') + this.localName + ("class" in this.attributes ? ' ' + this.attributes["class"] : '') + '"';
    return sHtml + '>';
};

oXHTMLNamespace.setElement("textarea", cXHTMLElement_textarea);



var cXHTMLElement_tfoot	= function()
{
	this.rows	= new AMLNodeList;
};
cXHTMLElement_tfoot.prototype	= new cXHTMLElement;

cXHTMLElement_tfoot.prototype.insertRow	= function(nIndex)
{
	var oElement	= this.ownerDocument.createElementNS(this.namespaceURI, "tr");
	return nIndex ==-1 ? this.appendChild(oElement) : this.insertBefore(oElement, this.rows[nIndex]);
};

cXHTMLElement_tfoot.prototype.deleteRow	= function(nIndex)
{
	return this.removeChild(this.rows[nIndex]);
};

cXHTMLElement_tfoot.handlers	= {
	"DOMNodeInserted":	function(oEvent) {
		if (oEvent.target.parentNode == this)
			if (oEvent.target instanceof cXHTMLElement_tr)
				this.rows.$add(oEvent.target);
	},
	"DOMNodeRemoved":	function(oEvent) {
		if (oEvent.target.parentNode == this)
			if (oEvent.target instanceof cXHTMLElement_tr)
				this.rows.$remove(oEvent.target);
	}
};

oXHTMLNamespace.setElement("tfoot", cXHTMLElement_tfoot);



var cXHTMLElement_th	= function(){};
cXHTMLElement_th.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("th", cXHTMLElement_th);



var cXHTMLElement_thead	= function()
{
	this.rows	= new AMLNodeList;
};
cXHTMLElement_thead.prototype	= new cXHTMLElement;

cXHTMLElement_thead.prototype.insertRow	= function(nIndex)
{
	var oElement	= this.ownerDocument.createElementNS(this.namespaceURI, "tr");
	return nIndex ==-1 ? this.appendChild(oElement) : this.insertBefore(oElement, this.rows[nIndex]);
};

cXHTMLElement_thead.prototype.deleteRow	= function(nIndex)
{
	return this.removeChild(this.rows[nIndex]);
};

cXHTMLElement_thead.handlers	= {
	"DOMNodeInserted":	function(oEvent) {
		if (oEvent.target.parentNode == this)
			if (oEvent.target instanceof cXHTMLElement_tr)
				this.rows.$add(oEvent.target);
	},
	"DOMNodeRemoved":	function(oEvent) {
		if (oEvent.target.parentNode == this)
			if (oEvent.target instanceof cXHTMLElement_tr)
				this.rows.$remove(oEvent.target);
	}
};

oXHTMLNamespace.setElement("thead", cXHTMLElement_thead);



var cXHTMLElement_title	= function(){};
cXHTMLElement_title.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("title", cXHTMLElement_title);



var cXHTMLElement_tr	= function()
{
	this.cells	= new AMLNodeList;
};
cXHTMLElement_tr.prototype	= new cXHTMLElement;

cXHTMLElement_tr.prototype.insertCell	= function(nIndex)
{
	var oElement	= this.ownerDocument.createElementNS(this.namespaceURI, "td");
	return nIndex ==-1 ? this.appendChild(oElement) : this.insertBefore(oElement, this.rows[nIndex]);
};

cXHTMLElement_tr.prototype.deleteCell	= function(nIndex)
{
	return this.removeChild(this.cells[nIndex]);
};

cXHTMLElement_tr.handlers	= {
	"DOMNodeInserted":	function(oEvent) {
		if (oEvent.target.parentNode == this)
			if (oEvent.target instanceof cXHTMLElement_td || oEvent.target instanceof cXHTMLElement_th)
				this.cells.$add(oEvent.target);
	},
	"DOMNodeRemoved":	function(oEvent) {
		if (oEvent.target.parentNode == this)
			if (oEvent.target instanceof cXHTMLElement_td || oEvent.target instanceof cXHTMLElement_th)
				this.cells.$remove(oEvent.target);
	}
};

oXHTMLNamespace.setElement("tr", cXHTMLElement_tr);



var cXHTMLElement_tt	= function(){};
cXHTMLElement_tt.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("tt", cXHTMLElement_tt);



var cXHTMLElement_ul	= function(){};
cXHTMLElement_ul.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("ul", cXHTMLElement_ul);



var cXHTMLElement_var	= function(){};
cXHTMLElement_var.prototype	= new cXHTMLElement;

oXHTMLNamespace.setElement("var", cXHTMLElement_var);


})()
