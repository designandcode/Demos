
jQuery(function(){
jQuery("ul#mainNav li:not('.iphone') a").hover(function() {

if(jQuery(this).attr("rel") == "")
{ jQuery(this).attr("rel", jQuery(this).css("background-color")); }

jQuery(this).stop().css({
backgroundColor: jQuery(this).attr("rel")
}).animate({
backgroundColor: "#fe4902"
}, 300);
}, function() {

jQuery(this).stop().animate({
backgroundColor: jQuery(this).attr("rel")
}, 300);
});

jQuery("#moving-links a").hover(function(){
jQuery(this).stop().animate({
paddingLeft: "20px"
}, 300);
}, function(){
jQuery(this).stop().animate({
paddingLeft: "0px"
}, 300);
});

getTwitters('tweet', {
id: 'chriscoyier', 
count: 1, 
enableLinks: true, 
ignoreReplies: false,
template: '%text%',
timeout: 8000,
onTimeout: function () {
this.innerHTML = 'Twitter is being slow... this area will only load if Twitter is being a good boy.';
},
onTimeoutCancel: true
}); 

jQuery('a').filter(function() {
var theHref = this;
if (theHref.hostname && theHref.hostname !== location.hostname) {
jQuery(theHref).bind('click keypress', function(event) {
var code=event.charCode || event.keyCode;
if (!code || (code && code == 13)) {
if(pageTracker){
var fixedLink = this.href;
fixedLink = fixedLink.replace(/https?:\/\/(.*)/,"$1");
fixedLink = '/outgoing/' + fixedLink;
pageTracker._trackPageview(fixedLink);
};
};
});
};
});
});
