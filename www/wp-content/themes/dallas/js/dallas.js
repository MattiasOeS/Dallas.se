(function ($) {
$.fn.vAlign = function() {
	return this.each(function(i){
	var ah = $(this).height();
	var ph = $(this).parent().height();
	var mh = (ph - ah) / 2;
	$(this).css('margin-top', mh);
	});
};
})(jQuery);

var dallas = {
	init : function () {
		this.fonts();
		this.pngFix();
		this.videoPlayer();
		this.caseFilter();
		this.lightbox();
		this.linkPostImg();
		$("#caseresults .mediawrapper img").vAlign();
	},
	fonts : function () {
		Cufon.replace('.font-small', { fontFamily: 'CongressDallas'});
		Cufon.replace('.lubalin', { fontFamily: 'LubalinGraphITCbyBT',hover: true});
		Cufon.replace('h2', { fontFamily: 'LubalinGraphITCbyBT'});
		Cufon.replace('h3', { fontFamily: 'LubalinGraphITCbyBT'});
		Cufon.replace('.trebuchet', { fontFamily: 'TrebuchetDallas'});
		
		Cufon.CSS.ready(function() {
			$("h3").show();
			$("h2").show();
			$(".trebuschet").show();
			$(".lubalin").show();
			$(".font-small").show();
		});
		
	},
	linkPostImg : function () {
		$(".homepage .post img").each(function(){
			href=$(this).parent().parent().find("a").attr("href");
			if(href){
				$(this).wrap('<a href="'+href+'"></a>');
			}
		});
		$("#caseresults li .mediawrapper img").each(function(){
			$(this).parent().click(function(){
				document.location.href=$(this).parent().find("a").attr("href");
			});
			$(this).parent().hover(function(){
				$(this).css('cursor','pointer');
			},function(){
				$(this).css('cursor','auto');
			});
		});
	},
	addCounterClass : function (selector,limit){
		var counter=1;
		$(selector).each(function(){
			$(this).addClass("count-"+counter);
			if(counter==limit){
				counter=1;
			}else{
				counter++;
			}
			
		});
	},
	animateScroll : function (selector){
		var targetOffset = $(selector).offset().top;
		if ($("html").outerHeight() - targetOffset < 500) {
			if($.browser.safari) {
				$("body").animate({scrollTop: targetOffset-50}, 1200);	
			}else{
				$("html").animate({scrollTop: targetOffset-50}, 1200);
			}

		}
	},
	caseFilter : function () {

		$(".js #caseresults").fadeIn(1200);
		var posttrail = $("#post-trail").text();
		var caseclients = posttrail.split("|||");
		if(caseclients){
			var caseclient = caseclients[0];
		}else{
			var caseclient = "";
		}
		var navimarkup = '';
		navimarkup += '<a href="#" id="navi-clients" title="clients" class="navibtn lubalin">clients</a>';
		navimarkup += '<a href="#" id="navi-tasks" title="tasks" class="navibtn lubalin">type of work</a>';
		$("#casefilter").html(navimarkup);
		Cufon.replace('.lubalin', { fontFamily: 'LubalinGraphITCbyBT'});
		
		if(caseclients.length>1){ //we're on a case page
			$("#navi-clients").addClass("current");
			$(".clients").show(); //show only the choosen types
			$("#caseresults li").hide(); //hide all cases
			$("#caseresults li").removeClass("count-1").removeClass("count-2").removeClass("count-3");	
			for(i=0;i<caseclients.length;i++){
				$(".clients--"+caseclients[i]+"_item").show(); //show only choosen cases
				$(".clients--"+caseclients[i]+"_item").addClass("current"); //add current-class to choosen cases
				$(".clients--"+caseclients[i]).addClass("current"); //add current-class to choosen filter
			};
			dallas.addCounterClass("#caseresults li:visible",3); //apply css fixes to cases	
			//apply css fixes to cases
			//$("#caseresults li"); //apply css fixes to cases
			//$("#caseresults li"); //apply css fixes to cases	
		}else{ //we're on the cases-index
			$("#navi-clients").addClass("current"); //default to clients navi
			$(".clients").show(); //default to clients filter
			$("#caseresults li").show(); //show all cases
			dallas.addCounterClass("#caseresults li",3); //apply css fixes to cases
		}
		$(".navibtn").click(function(){
			$(".filterlist").hide(); //hide all types
			$(".navibtn").removeClass("current"); //remove current-class from this navi
			$(this).addClass("current"); //add current-class to this btn
			btnvalue = $(this).attr("id").replace("navi-",""); //get btn value
			$("."+btnvalue).show(); //show only the choosen types
			return false;
		});
		// from case listing
		$(".filterlist a").click(function(){
			$(".filterlist a").removeClass("current"); //remove current-class from filter navi
			$(this).addClass("current"); //add current-class to this btn
			$("#caseresults li").hide(); //hide all cases
			$("."+$(this).attr("rel")+"_item").show(); //show only choosen cases
			$("#caseresults li").removeClass("count-1"); //add css for design
			$("#caseresults li").removeClass("count-2"); //add css for design
			$("#caseresults li").removeClass("count-3"); //add css for design
			dallas.addCounterClass("."+$(this).attr("rel")+"_item",3); //add css for design
			dallas.animateScroll("#caseresults");
			return false;
		});
		// from within a case
		$(".caselinks a").click(function(){
			$("#navi-tasks").click();
			//$(".filterlist").hide(); //hide all types
			$(".filterlist."+$(this).attr("rel")).removeClass("current"); //add current-class for filternavi
			$(".filterlist a").removeClass("current"); //remove current-class from case filter navi		
			$("#navi-clients").removeClass("current"); //remove current-class from filter navi
			$("#navi-tasks").addClass("current"); //add current-class to navi btn
			$("."+$(this).attr("rel")).addClass("current"); //add current-class to filter navi btn
			$("#caseresults li").hide(); //hide all cases
			$("."+$(this).attr("rel")+"_item").show(); //show choosen cases
			$("#caseresults li").removeClass("count-1"); //add css for design
			$("#caseresults li").removeClass("count-2"); //add css for design
			$("#caseresults li").removeClass("count-3"); //add css for design
			dallas.addCounterClass("."+$(this).attr("rel")+"_item",3); //add css for design
			dallas.animateScroll("#caseresults");
			return false;
		});
	},
	videoPlayer : function () {
		var casevideo = $(".youtubevideo");
		casevideo.each(function() {
			var currvideowidth=0;
			var currvideoheight=0;			
			var currvideo=0;
			var currplaceholder=$(this).attr('id');
			var classes=$(this).attr('class');
			var videoclassarray=classes.split(" ");
			for(i=0;i<videoclassarray.length;i++){
				if(videoclassarray[i].indexOf("w_")>=0){
					currvideowidth=videoclassarray[i].replace(/w_/g,'');
				}
				if(videoclassarray[i].indexOf("h_")>=0){
					currvideoheight=videoclassarray[i].replace(/h_/g,'');
				}
				if(videoclassarray[i].indexOf("y_")>=0){
					currvideo=videoclassarray[i].replace(/y_/g,'');
				}
			}
			var flashvars = {};
			var params = {
				allowfullscreen:"true", 
				allowscriptaccess:"always",
				wmode:"opaque"
			};
			var attributes = {
				id:"player"+currvideo,  
				name:"player"+currvideo
			};
			swfobject.embedSWF("http://www.youtube.com/v/"+currvideo+"&hl=sv&fs=1&rel=0&hd=1&showinfo=0", currplaceholder, currvideowidth, currvideoheight, "9.0.115", false, flashvars, params, attributes);
		});
	},
	pngFix : function () {
		if ($.browser.msie && parseInt($.browser.version, 10) <= 6) {
			$("#header h1").each(function() {
				DD_belatedPNG.fixPng(this);
			});
		}
	},
	lightbox : function () {
		var imgs = $(".lightbox img");
		imgs.each(function() {
			var links = $(this).wrap('<a href="'+$(this).attr("alt")+'" rel="lightbox"></a>');
		});
		$("a[rel*=lightbox]").lightBox();
	}
};
$(document).ready(function() {
	dallas.init();
});