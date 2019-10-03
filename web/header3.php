
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en-US" prefix="og: http://ogp.me/ns#"> <!--<![endif]-->
<head>
    <meta charset="utf-8" /><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(3),u=e(4),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],t),e}finally{f.emit("fn-end",[c.now()],t)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e,n){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now(),!1,n])}},{}],2:[function(e,n,t){function r(e,n){if(!o)return!1;if(e!==o)return!1;if(!n)return!0;if(!i)return!1;for(var t=i.split("."),r=n.split("."),a=0;a<r.length;a++)if(r[a]!==t[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var u=navigator.userAgent,f=u.match(a);f&&u.indexOf("Chrome")===-1&&u.indexOf("Chromium")===-1&&(o="Safari",i=f[1])}n.exports={agent:o,version:i,match:r}},{}],3:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],4:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],5:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=v(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){h[e]=v(e).concat(n)}function m(e,n){var t=h[e];if(t)for(var r=0;r<t.length;r++)t[r]===n&&t.splice(r,1)}function v(e){return h[e]||[]}function g(e){return p[e]=p[e]||o(t)}function w(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var h={},y={},b={on:l,addEventListener:l,removeEventListener:m,emit:t,get:g,listeners:v,context:n,buffer:w,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(3),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!E++){var e=x.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+x.offset],null,"api");var t=l.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===l.readyState&&i()}function i(){f("mark",["domContent",a()+x.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-x.offset}var u=(new Date).getTime(),f=e("handle"),c=e(3),s=e("ee"),p=e(2),d=window,l=d.document,m="addEventListener",v="attachEvent",g=d.XMLHttpRequest,w=g&&g.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:g,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var h=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1118.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),x=n.exports={offset:u,now:a,origin:h,features:{},xhrWrappable:b,userAgent:p};e(1),l[m]?(l[m]("DOMContentLoaded",i,!1),d[m]("load",r,!1)):(l[v]("onreadystatechange",o),d[v]("onload",r)),f("mark",["firstbyte",u],null,"api");var E=0,O=e(5)},{}]},{},["loader"]);</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - WAOW</title>

<!-- Google Tag Manager for WordPress by gtm4wp.com -->
<script data-cfasync="false" type="text/javascript">//<![CDATA[
	var gtm4wp_datalayer_name = "dataLayer";
	var dataLayer = dataLayer || [];
//]]>
</script>
<!-- End Google Tag Manager for WordPress by gtm4wp.com -->
<!-- This site is optimized with the Yoast SEO plugin v9.0.2 - https://yoast.com/wordpress/plugins/seo/ -->
<link rel="canonical" href="https://waow.com/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Home - WAOW" />
<meta property="og:description" content="MORE LOCAL NEWS STORM TRACK 9 WEATHER CONNECT WITH WAOW Facebook Twitter Envelope JAYME CLOSS WAKE UP WISCONSIN National News Wisconsin News Wisconsin Sports WATCH WAOW TONIGHT WAOW STOCK TRACKER" />
<meta property="og:url" content="https://waow.com/" />
<meta property="og:site_name" content="WAOW" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="MORE LOCAL NEWS STORM TRACK 9 WEATHER CONNECT WITH WAOW Facebook Twitter Envelope JAYME CLOSS WAKE UP WISCONSIN National News Wisconsin News Wisconsin Sports WATCH WAOW TONIGHT WAOW STOCK TRACKER" />
<meta name="twitter:title" content="Home - WAOW" />
<meta name="twitter:image" content="https://waow.com/wp-content/uploads/sites/9/2018/06/waowwatchlive.jpg" />
<script type='application/ld+json'>{"@context":"https:\/\/schema.org","@type":"WebSite","@id":"#website","url":"https:\/\/waow.com\/","name":"WAOW","potentialAction":{"@type":"SearchAction","target":"https:\/\/waow.com\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
<!-- / Yoast SEO plugin. -->

<link rel='dns-prefetch' href='//www.googletagservices.com' />
<link rel='dns-prefetch' href='//cdn.jsdelivr.net' />
<link rel='dns-prefetch' href='//unpkg.com' />
<link rel='dns-prefetch' href='//waow.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="WAOW &raquo; Feed" href="https://waow.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="WAOW &raquo; Comments Feed" href="https://waow.com/comments/feed/" />
<link rel="alternate" type="application/rss+xml" title="WAOW &raquo; Home Comments Feed" href="https://waow.com/sample-page/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/waow.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.8"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='cordillera-ads-styles-css'  href='https://waow.com/wp-content/plugins/cordillera-ads/assets/css/ads.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='cordillera-intra-articles-css'  href='https://waow.com/wp-content/plugins/cordillera-intra-article-nav/assets/css/intra-articles.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='cordillera-video-embed-css'  href='https://waow.com/wp-content/plugins/cordillera-post-modification/assets/css/video-embed.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='wp-polls-css'  href='https://waow.com/wp-content/plugins/wp-polls/polls-css.css?ver=2.73.8' type='text/css' media='all' />
<style id='wp-polls-inline-css' type='text/css'>
.wp-polls .pollbar {
	margin: 1px;
	font-size: 6px;
	line-height: 8px;
	height: 8px;
	background-image: url('https://waow.com/wp-content/plugins/wp-polls/images/default/pollbg.gif');
	border: 1px solid #c8c8c8;
}

</style>
<link rel='stylesheet' id='cordillera-weather-icon-styles-css'  href='https://waow.com/wp-content/plugins/cordillera-current-weather-conditions/assets/css/weather-icons.min.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='cordillera-current-conditions-styles-css'  href='https://waow.com/wp-content/plugins/cordillera-current-weather-conditions/assets/css/current-conditions.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='pojo-a11y-css'  href='https://waow.com/wp-content/plugins/pojo-accessibility/assets/css/style.min.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-css'  href='https://waow.com/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=3.6.0' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='https://waow.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/font-awesome.min.css?ver=4.7.0' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-animations-css'  href='https://waow.com/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=2.1.6' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css'  href='https://waow.com/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=2.1.6' type='text/css' media='all' />
<style id='elementor-frontend-inline-css' type='text/css'>
/* Start custom CSS for wp-widget-pojo_recent_posts, class: .elementor-element-1f1bba8a */.elementor-2 .elementor-element.elementor-element-1f1bba8a .entry-meta { margin-top: 0px; margin-bottom: -5px; }/* End custom CSS */
</style>
<link rel='stylesheet' id='elementor-pro-css'  href='https://waow.com/wp-content/plugins/elementor-pro/assets/css/frontend.min.css?ver=2.1.2' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-2-css'  href='https://waow.com/wp-content/uploads/sites/9/elementor/css/post-2.css?ver=1547843749' type='text/css' media='all' />
<link rel='stylesheet' id='__EPYT__style-css'  href='https://waow.com/wp-content/plugins/youtube-embed-plus/styles/ytprefs.min.css?ver=12.2' type='text/css' media='all' />
<style id='__EPYT__style-inline-css' type='text/css'>

                .epyt-gallery-thumb {
                        width: 33.333%;
                }

</style>
<link rel='stylesheet' id='pojo-css-framework-css'  href='https://waow.com/wp-content/themes/buzz/assets/bootstrap/css/bootstrap.min.css?ver=3.3.5' type='text/css' media='all' />
<link rel='stylesheet' id='photoswipe-css'  href='https://waow.com/wp-content/plugins/pojo-lightbox/assets/photoswipe/photoswipe.min.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='photoswipe-skin-css'  href='https://waow.com/wp-content/plugins/pojo-lightbox/assets/photoswipe/default-skin/default-skin.min.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='pojo-base-style-css'  href='https://waow.com/wp-content/themes/buzz/core/assets/css/style.min.css?ver=1.7.12' type='text/css' media='all' />
<link rel='stylesheet' id='pojo-style-css'  href='https://waow.com/wp-content/themes/buzz-child/assets/css/style.css?ver=1.7.12' type='text/css' media='all' />
<link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Montserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;ver=4.9.8' type='text/css' media='all' />
<script type='text/javascript' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/vue?ver=2.5.16'></script>
<script type='text/javascript' src='https://unpkg.com/axios/dist/axios.min.js?ver=0.18.0'></script>
<script type='text/javascript' src='https://waow.com/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='https://waow.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='https://waow.com/wp-content/plugins/cordillera-current-weather-conditions/assets/js/current-conditions.js'></script>
<script type='text/javascript' src='https://waow.com/wp-content/plugins/duracelltomi-google-tag-manager/js/gtm4wp-form-move-tracker.js?ver=1.9'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _EPYT_ = {"ajaxurl":"https:\/\/waow.com\/wp-admin\/admin-ajax.php","security":"99c97f1f0d","gallery_scrolloffset":"20","eppathtoscripts":"https:\/\/waow.com\/wp-content\/plugins\/youtube-embed-plus\/scripts\/","epresponsiveselector":"[\"iframe.__youtube_prefs_widget__\"]","epdovol":"1","version":"12.2","evselector":"iframe.__youtube_prefs__[src], iframe[src*=\"youtube.com\/embed\/\"], iframe[src*=\"youtube-nocookie.com\/embed\/\"]","ajax_compat":"","ytapi_load":"light","stopMobileBuffer":"1","vi_active":"","vi_js_posttypes":[]};
/* ]]> */
</script>
<script type='text/javascript' src='https://waow.com/wp-content/plugins/youtube-embed-plus/scripts/ytprefs.min.js?ver=12.2'></script>
<link rel='https://api.w.org/' href='https://waow.com/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://waow.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://waow.com/wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 4.9.8" />
<link rel='shortlink' href='https://waow.com/' />
<link rel="alternate" type="application/json+oembed" href="https://waow.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwaow.com%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://waow.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwaow.com%2F&#038;format=xml" />

<script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script>

<!-- Google Tag Manager for WordPress by gtm4wp.com -->
<script data-cfasync="false" type="text/javascript">//<![CDATA[
	dataLayer.push({"siteID":"9","siteName":"WAOW","pageTitle":"Home - WAOW","pagePostType":"frontpage","pagePostType2":"single-page","pageCategory":["homepage"],"pagePostAuthorID":1,"pagePostAuthor":"adwpadmin"});//]]>
</script>
<script data-cfasync="false">//<![CDATA[
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.'+'js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T7J729R');//]]>
</script>
<!-- End Google Tag Manager -->
<!-- End Google Tag Manager for WordPress by gtm4wp.com --><link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic|Open+Sans:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic|Roboto:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic|Droid+Serif:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"><style type="text/css">body{background-color: rgba(236, 240, 241, 1);background-position: top center;background-repeat: repeat;background-size: auto;background-attachment: scroll;color: #5e5e5e; font-family: 'Roboto', Arial, sans-serif; font-weight: normal; font-size: 17px;line-height: 1.5em;}#primary{background-color: rgba(255, 255, 255, 1);background-position: top center;background-repeat: repeat;background-size: auto;background-attachment: scroll;}button,.button,#commentform .button{color: #ffffff; font-family: 'Montserrat', Arial, sans-serif; font-weight: bold; font-size: 15px;text-transform: uppercase;background-color: #e74c3c;border-color: #e74c3c;}button:hover,.button:hover,#commentform .button:hover{color: #e74c3c;background-color: #ffffff;border-color: #e74c3c;}div.logo-text a{color: #34495e; font-family: 'Montserrat', Arial, sans-serif; font-weight: 400; font-size: 44px;line-height: 1;}.logo{margin-top: 10px;margin-bottom: 5px;}#top-bar{background-color: rgba(183, 39, 40, 1);background-position: top center;background-repeat: repeat-x;background-size: auto;background-attachment: scroll;}#top-bar, #top-bar .widget-title{color: #ecf0f1; font-family: 'Open Sans', Arial, sans-serif; font-weight: 600; font-size: 12px;text-transform: uppercase;letter-spacing: 0px;font-style: normal;line-height: 45px;}#top-bar a{color: #ecf0f1;}#top-bar a:hover{color: #e74c3c;}#header, .sticky-header{background-color: rgba(255, 255, 255, 1);background-position: top center;background-repeat: repeat-x;background-size: auto;background-attachment: scroll;}.sf-menu a, .mobile-menu a{color: #000000; font-family: 'Montserrat', Arial, sans-serif; font-weight: 500; font-size: 18px;text-transform: uppercase;}.sf-menu a:hover,.sf-menu li.active a, .sf-menu li.current-menu-item > a,.sf-menu .sfHover > a,.sf-menu .sfHover > li.current-menu-item > a,.sf-menu li.current-menu-ancestor > a,.mobile-menu a:hover,.mobile-menu li.current-menu-item > a, a.search-toggle .fa-times{color: #b20000;}.nav-main .sf-menu .sub-menu{background-color: #515151;}.nav-main .sf-menu .sub-menu li:hover > a,.nav-main .sf-menu .sub-menu li.current-menu-item > a{background-color: #999999;color: #ecf0f1;}.nav-main .sf-menu .sub-menu li a{color: #ecf0f1; font-family: 'Roboto', Arial, sans-serif; font-weight: normal; font-size: 13px;text-transform: capitalize;line-height: 3.3em;}.search-section{background-color: rgba(206, 206, 206, 1);background-position: top center;background-repeat: repeat-x;background-size: auto;background-attachment: scroll;}.search-section,.search-section .form-search .field{color: #000000;}#sub-header{background-color: rgba(183, 39, 40, 1);background-position: top center;background-repeat: repeat-x;background-size: auto;background-attachment: scroll;}#sub-header, #sub-header .widget-title{color: #000000; font-family: 'Montserrat', Arial, sans-serif; font-weight: bold; font-size: 18px;text-transform: none;letter-spacing: 1.5px;font-style: normal;line-height: 30px;}#sub-header a{color: #ffffff;}#sub-header a:hover{color: #b72728;}#title-bar{height: 100px;line-height: 100px;color: #7f8c8d; font-family: 'Montserrat', Arial, sans-serif; font-weight: normal; font-size: 17px;text-transform: uppercase;}#title-bar.title-bar-style-custom_bg{background-color: rgba(236, 240, 241, 1);background-position: center center;background-repeat: repeat;background-size: cover;background-attachment: scroll;}#title-bar div.breadcrumbs, #title-bar div.breadcrumbs a{color: #7f8c8d; font-family: 'Droid Serif', Arial, sans-serif; font-weight: normal; font-size: 11px;text-transform: uppercase;letter-spacing: 1.2px;font-style: italic;}a{color: #95a5a6;}a:hover, a:focus{color: #d60000;}::selection{color: #ffffff;background: #d60000;}::-moz-selection{color: #ffffff;background: #d60000;}h1{color: #000000; font-family: 'Montserrat', Arial, sans-serif; font-weight: normal; font-size: 30px;text-transform: none;letter-spacing: -0.5px;font-style: normal;line-height: 1.2em;}h2{color: #000000; font-family: 'Montserrat', Arial, sans-serif; font-weight: 400; font-size: 32px;text-transform: none;font-style: normal;line-height: 1.2em;}h3{color: #000000; font-family: 'Montserrat', Arial, sans-serif; font-weight: 500; font-size: 18px;text-transform: none;font-style: italic;line-height: 1.2em;}h4{color: #000000; font-family: 'Montserrat', Arial, sans-serif; font-weight: 500; font-size: 17px;text-transform: none;font-style: normal;line-height: 1.2em;}h5{color: #000000; font-family: 'Montserrat', Arial, sans-serif; font-weight: 500; font-size: 18px;text-transform: uppercase;font-style: normal;line-height: 1.2em;}h6{color: #d60000; font-family: 'Montserrat', Arial, sans-serif; font-weight: 600; font-size: 17px;text-transform: none;font-style: normal;line-height: 1.2em;}h3.media-heading{color: #2c3e50; font-family: 'Montserrat', Arial, sans-serif; font-weight: 500; font-size: 18px;text-transform: none;font-style: normal;line-height: 1.2em;}.media.list-two h3.media-heading{color: #2c3e50; font-family: 'Montserrat', Arial, sans-serif; font-weight: 500; font-size: 16px;text-transform: none;font-style: normal;line-height: 1.2em;}.media.list-three h3.media-heading{color: #2c3e50; font-family: 'Montserrat', Arial, sans-serif; font-weight: 500; font-size: 15px;text-transform: none;font-style: normal;line-height: 1.2em;}.media.list-format h3.media-heading{color: #2c3e50; font-family: 'Montserrat', Arial, sans-serif; font-weight: 600; font-size: 27px;text-transform: uppercase;font-style: normal;line-height: 30px;}.grid-item.grid-one h4.grid-heading{color: #2c3e50; font-family: 'Montserrat', Arial, sans-serif; font-weight: 600; font-size: 22px;text-transform: none;font-style: normal;line-height: 1.2em;}.grid-item.grid-two h4.grid-heading{color: #2c3e50; font-family: 'Montserrat', Arial, sans-serif; font-weight: 600; font-size: 20px;text-transform: none;font-style: normal;line-height: 1.2em;}.grid-item.grid-three h4.grid-heading{color: #2c3e50; font-family: 'Montserrat', Arial, sans-serif; font-weight: 600; font-size: 16px;text-transform: none;font-style: normal;line-height: 1.2em;}.grid-item.grid-four h4.grid-heading{color: #2c3e50; font-family: 'Montserrat', Arial, sans-serif; font-weight: 600; font-size: 16px;text-transform: none;font-style: normal;line-height: 1.2em;}.grid-item.cover-item .caption .grid-heading,.grid-item.cover-item .caption .entry-meta span,.grid-item.cover-item .caption .entry-excerpt p,.grid-item.cover-item .caption .read-more{color: #ffffff;}.posts-group .featured-post h3.media-heading,.posts-group .featured-post h3.grid-heading{color: #2c3e50; font-family: 'Montserrat', Arial, sans-serif; font-weight: 600; font-size: 24px;text-transform: none;font-style: normal;line-height: 1.2em;}.posts-group h3.media-heading,.posts-group h4.grid-heading{color: #2c3e50; font-family: 'Montserrat', Arial, sans-serif; font-weight: 600; font-size: 16px;text-transform: none;font-style: normal;line-height: 20px;}.entry-meta > span, .more-link span,.read-more{color: #95a5a6; font-family: 'Roboto', Arial, sans-serif; font-weight: normal; font-size: 12px;text-transform: none;font-style: normal;}.entry-post .entry-meta > span{color: #95a5a6; font-family: 'Roboto', Arial, sans-serif; font-weight: normal; font-size: 12px;text-transform: none;font-style: normal;line-height: 1em;}.entry-excerpt{color: #5e5e5e; font-family: 'Roboto', Arial, sans-serif; font-weight: normal; font-size: 15px;text-transform: none;font-style: normal;line-height: 1.3em;}.entry-post .entry-excerpt{color: #5e5e5e; font-family: 'Roboto', Arial, sans-serif; font-weight: bold; font-size: 17px;text-transform: none;font-style: italic;line-height: 20px;}.category-label{color: #ffffff; font-family: 'Montserrat', Arial, sans-serif; font-weight: normal; font-size: 11px;text-transform: uppercase;font-style: normal;}#primary #breadcrumbs,#primary #breadcrumbs a, nav.post-navigation{color: #7f8c8d; font-family: 'Roboto', Arial, sans-serif; font-weight: normal; font-size: 14px;text-transform: none;font-style: normal;line-height: 1em;}#sidebar{color: #5e5e5e; font-family: 'Roboto', Arial, sans-serif; font-weight: normal; font-size: 15px;text-transform: none;font-style: normal;line-height: 21px;}#sidebar a{color: #5e5e5e;}#sidebar a:hover{color: #e74c3c;}#sidebar .widget-title{color: #7f8c8d; font-family: 'Montserrat', Arial, sans-serif; font-weight: bold; font-size: 15px;text-transform: uppercase;font-style: normal;line-height: 1;}#footer-widgets{background-color: rgba(153, 153, 153, 1);background-position: top center;background-repeat: repeat;background-size: auto;background-attachment: scroll;color: #ffffff; font-family: 'Roboto', Arial, sans-serif; font-weight: normal; font-size: 14px;text-transform: none;font-style: normal;line-height: 1.5em;}#footer-widgets a{color: #ffffff;}#footer-widgets a:hover{color: #b72728;}#footer-widgets .widget-title{color: #ffffff; font-family: 'Montserrat', Arial, sans-serif; font-weight: normal; font-size: 17px;text-transform: uppercase;font-style: normal;line-height: 2;}#footer-copyright{background-color: rgba(153, 153, 153, 1);background-position: top center;background-repeat: repeat;background-size: auto;background-attachment: scroll;color: #ffffff; font-family: 'Montserrat', Arial, sans-serif; font-weight: normal; font-size: 10px;text-transform: uppercase;font-style: normal;line-height: 70px;}#footer-copyright a{color: #ecf0f1;}#footer-copyright a:hover{color: #ffffff;}#pojo-scroll-up{width: 50px;height: 50px;line-height: 50px;background-color: rgba(51, 51, 51, 0.6);background-position: top center;background-repeat: repeat;background-size: auto;background-attachment: scroll;}#pojo-scroll-up a{color: #eeeeee;}#primary #main.sidebar-right,#primary #main.sidebar-left,.align-pagination .pagination,.single .entry-post .entry-meta, body.rtl #primary #main.sidebar-right,body.rtl #primary #main.sidebar-left,.media .media-body,.media.list-format .media-body, .media.grid-item .item-inner,.media.grid-item.list-two:nth-child(n+3) .item-inner,.media.grid-item.list-three:nth-child(n+4) .item-inner,.posts-group.featured-list-aside .media.list-item .item-inner, .posts-group .grid-item.media.featured-post .item-inner,.posts-group .grid-item.media.list-item:nth-child(n+4) .item-inner,.posts-group.featured-list-aside .media.list-item:nth-child(n+3) .item-inner,.posts-group.featured-list-two-below .media.featured-post .media-body,.posts-group.featured-list-below .grid-item, .posts-group.featured-list-below .media,nav.post-navigation,.commentlist li{border-color: #ffffff;}.sf-menu a, .menu-no-found,.sf-menu li.pojo-menu-search,.search-header{line-height: 30px;}.sf-menu li:hover ul, .sf-menu li.sfHover ul{top: 30px;}a.search-toggle{color: #000000;}.navbar-toggle{border-color: #000000;}.icon-bar{background-color: #000000;}#sub-header ul.social-links li a .social-icon:before{line-height: 30px;height: 30px;width: 30px;}</style>
		<style type="text/css">
#pojo-a11y-toolbar .pojo-a11y-toolbar-toggle a{ background-color: #4054b2;	color: #ffffff;}
#pojo-a11y-toolbar .pojo-a11y-toolbar-overlay, #pojo-a11y-toolbar .pojo-a11y-toolbar-overlay ul.pojo-a11y-toolbar-items.pojo-a11y-links{ border-color: #4054b2;}
body.pojo-a11y-focusable a:focus{ outline-style: solid !important;	outline-width: 1px !important;	outline-color: #FF0000 !important;}
#pojo-a11y-toolbar{ top: 100px !important;}
#pojo-a11y-toolbar .pojo-a11y-toolbar-overlay{ background-color: #ffffff;}
#pojo-a11y-toolbar .pojo-a11y-toolbar-overlay ul.pojo-a11y-toolbar-items li.pojo-a11y-toolbar-item a, #pojo-a11y-toolbar .pojo-a11y-toolbar-overlay p.pojo-a11y-toolbar-title{ color: #333333;}
#pojo-a11y-toolbar .pojo-a11y-toolbar-overlay ul.pojo-a11y-toolbar-items li.pojo-a11y-toolbar-item a.active{ background-color: #4054b2;	color: #ffffff;}
@media (max-width: 767px) { #pojo-a11y-toolbar { top: 50px !important; } }</style><link rel="icon" href="https://s3-ca-central-1.amazonaws.com/quincy-network/wp-content/uploads/sites/9/2018/05/23134530/cropped-waow-e1526504132358-32x32.png" sizes="32x32" />
<link rel="icon" href="https://s3-ca-central-1.amazonaws.com/quincy-network/wp-content/uploads/sites/9/2018/05/23134530/cropped-waow-e1526504132358-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="https://s3-ca-central-1.amazonaws.com/quincy-network/wp-content/uploads/sites/9/2018/05/23134530/cropped-waow-e1526504132358-180x180.png" />
<meta name="msapplication-TileImage" content="https://s3-ca-central-1.amazonaws.com/quincy-network/wp-content/uploads/sites/9/2018/05/23134530/cropped-waow-e1526504132358-270x270.png" />
        <script>
          var googletag = googletag || {};

          // Empty ad behavior
          googletag.pubads().addEventListener('slotRenderEnded', function (event) {
            var elementId = event.slot.getSlotElementId();
            var el = document.getElementById(elementId);
            var targetParentClass = 'elementor-widget-wp-widget-ad_placement';

            if (event.isEmpty && el.classList.contains('div-gpt-widget')) {
              // Find parent element with targetParentClass
              while ((el = el.parentElement) && !el.classList.contains(targetParentClass));
              if (el) {
                el.classList.add("no-ad");
              }
            }
          });

          googletag.cmd = googletag.cmd || [];
          googletag.cmd.push(function () {
                      var mapping1 = googletag.sizeMapping().
        addSize([1024,0],[300, 250]). //desktop
addSize([0,0],[300, 250]). //mobile
build();        googletag.cmd.push(function() {
                    googletag.defineSlot('/21720672171/waow/waow.com/1:1_a', [300,250], 'div-gpt-ad-1')
            .defineSizeMapping(mapping1)
        .setTargeting("wp_unit", "1:1_A Medium_Rectangle")
        .setCollapseEmptyDiv(true)
        .addService(googletag.pubads());
        googletag.pubads().enableSingleRequest();
        googletag.enableServices();
        });


        var mapping2 = googletag.sizeMapping().
        addSize([1024,0],[300, 250]). //desktop
addSize([0,0],[300, 250]). //mobile
build();        googletag.cmd.push(function() {
                    googletag.defineSlot('/21720672171/waow/waow.com/1:1_b', [300,250], 'div-gpt-ad-2')
            .defineSizeMapping(mapping2)
        .setTargeting("wp_unit", "1:1_B Medium_Rectangle")
        .setCollapseEmptyDiv(true)
        .addService(googletag.pubads());
        googletag.pubads().enableSingleRequest();
        googletag.enableServices();
        });


        var mapping3 = googletag.sizeMapping().
        addSize([1024,0],[728, 90]). //desktop
addSize([0,0],[320, 50]). //mobile
build();        googletag.cmd.push(function() {
                    googletag.defineSlot('/21720672171/waow/waow.com/8:1_a', [[728,90],[320,50]], 'div-gpt-ad-3')
            .defineSizeMapping(mapping3)
        .setTargeting("wp_unit", "8:1_A Leaderboard")
        .setCollapseEmptyDiv(true)
        .addService(googletag.pubads());
        googletag.pubads().enableSingleRequest();
        googletag.enableServices();
        });


        var mapping4 = googletag.sizeMapping().
        addSize([1024,0],[728, 90]). //desktop
addSize([0,0],[320, 50]). //mobile
build();        googletag.cmd.push(function() {
                    googletag.defineSlot('/21720672171/waow/waow.com/8:1_b', [[728,90],[320,50]], 'div-gpt-ad-4')
            .defineSizeMapping(mapping4)
        .setTargeting("wp_unit", "8:1_B Leaderboard")
        .setCollapseEmptyDiv(true)
        .addService(googletag.pubads());
        googletag.pubads().enableSingleRequest();
        googletag.enableServices();
        });


        var mapping5 = googletag.sizeMapping().
        addSize([1024,0],[300, 50]). //desktop
addSize([0,0],[300, 50]). //mobile
build();        googletag.cmd.push(function() {
                    googletag.defineSlot('/21720672171/waow/waow.com/stock_tracker', [300,50], 'div-gpt-ad-5')
            .defineSizeMapping(mapping5)
        .setTargeting("wp_unit", "Stock_Tracker")
        .setCollapseEmptyDiv(true)
        .addService(googletag.pubads());
        googletag.pubads().enableSingleRequest();
        googletag.enableServices();
        });


        var mapping6 = googletag.sizeMapping().
        addSize([1024,0],[1, 1]). //desktop
addSize([0,0],[]). //mobile
build();        googletag.cmd.push(function() {
                    googletag.defineSlot('/21720672171/waow/waow.com/outofpage/floorboard', [1,1], 'div-gpt-ad-6')
            .defineSizeMapping(mapping6)
        .setTargeting("wp_unit", "Floorboard")
        .setCollapseEmptyDiv(true)
        .addService(googletag.pubads());
        googletag.pubads().enableSingleRequest();
        googletag.enableServices();
        });


        var mapping7 = googletag.sizeMapping().
        addSize([1024,0],[]). //desktop
addSize([0,0],[1, 1]). //mobile
build();        googletag.cmd.push(function() {
                    googletag.defineSlot('/21720672171/waow/waow.com/outofpage/interstitial', [1,1], 'div-gpt-ad-7')
            .defineSizeMapping(mapping7)
        .setTargeting("wp_unit", "Interstitial")
        .setCollapseEmptyDiv(true)
        .addService(googletag.pubads());
        googletag.pubads().enableSingleRequest();
        googletag.enableServices();
        });


        var mapping8 = googletag.sizeMapping().
        addSize([1024,0],[1060, 30]). //desktop
addSize([0,0],[]). //mobile
build();        googletag.cmd.push(function() {
                    googletag.defineSlot('/21720672171/waow/waow.com/ppd', [1060,30], 'div-gpt-ad-8')
            .defineSizeMapping(mapping8)
        .setTargeting("wp_unit", "Pencil Pushdown")
        .setCollapseEmptyDiv(true)
        .addService(googletag.pubads());
        googletag.pubads().enableSingleRequest();
        googletag.enableServices();
        });


googletag.pubads().setTargeting("wp_category", ["homepage"]);

            googletag.pubads().enableSingleRequest();
            googletag.enableServices();
          });
        </script>

        <style>
    			.sf-menu a {
    		    padding: 0 0em!important;
    			}
    		</style>
    		<script type="text/javascript">window.parent.document.getElementsByTagName('iframe')[0].height = '145';
        jQuery(document).ready(function( $ ) {
        var options = '';
        $('#menu-main-menu > li > a').each(function(){
        var elm = $(this);
        var href = elm.attr('href');
        var span = elm.find('span:first');
        var html = span.html();
        options += '<option value="' + href + '">' + html + '</option>';
        });
        $('.select-menu', window.parent.document).html(options);
        });
        </script>

        </head>
<body class="home page-template-default page page-id-2 layout-full-width elementor-default elementor-page elementor-page-2 format-text ">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T7J729R"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) --><br style="display:none;">
<!--[if lt IE 7]><p class="chromeframe">Your browser is <em>ancient!</em>
    <a target="_parent" href="http://browsehappy.com/">Upgrade to a different browser</a> or
    <a target="_parent" href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.
</p><![endif]-->
<div id="container">

            <section id="top-bar">
            <div class="container">
                <div class="pull-left">
                                    </div>
                <div class="pull-right">
                                    </div>
            </div><!-- .container -->
        </section>
        <header id="header"
                class="logo-left"
                role="banner">
            <div class="container">
                <div class="logo">
                                            <div class="logo-img">
                            <a target="_parent" href="https://waow.com/" rel="home"><img
                                    src="https://s3-ca-central-1.amazonaws.com/quincy-network/wp-content/uploads/sites/9/2018/05/23134219/WAOW320x100.png" alt="WAOW"
                                    class="logo-img-primary"/></a>
                        </div>
                                                                <button type="button" class="navbar-toggle visible-xs" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                                    </div><!--.logo -->
                                    <div class="header-widget">

<div class="current-conditions full-width">
    <div class="current-conditions-slides">
                    <div class="station" data-slide-number="0" data-station-id="KAUW">
                <div class="station-condition">
                    <i class="wi wi-day-sunny"
                       data-condition="Clear"
                       data-condition-abbrv="skc"
                       style="color:#0A246A"></i>
                </div>
                <div class="station-title" style="color:#212121">
                    Wausau                </div>
                                    <div class="station-temperature" style="color:#212121">
                        7&deg;
                    </div>
                            </div>
                    <div class="station" data-slide-number="1" data-station-id="KEGV">
                <div class="station-condition">
                    <i class="wi wi-day-sunny-overcast"
                       data-condition="Partly Cloudy"
                       data-condition-abbrv="sct"
                       style="color:#0A246A"></i>
                </div>
                <div class="station-title" style="color:#212121">
                    Eagle River                </div>
                                    <div class="station-temperature" style="color:#212121">
                        3&deg;
                    </div>
                            </div>
                    <div class="station" data-slide-number="2" data-station-id="KRHI">
                <div class="station-condition">
                    <i class="wi wi-day-sunny"
                       data-condition="Clear"
                       data-condition-abbrv="skc"
                       style="color:#0A246A"></i>
                </div>
                <div class="station-title" style="color:#212121">
                    Rhinelander                </div>
                                    <div class="station-temperature" style="color:#212121">
                        5&deg;
                    </div>
                            </div>
                    <div class="station" data-slide-number="3" data-station-id="KSTE">
                <div class="station-condition">
                    <i class="wi wi-day-sunny"
                       data-condition="Clear"
                       data-condition-abbrv="skc"
                       style="color:#0A246A"></i>
                </div>
                <div class="station-title" style="color:#212121">
                    Stevens Point                </div>
                                    <div class="station-temperature" style="color:#212121">
                        7&deg;
                    </div>
                            </div>
                    <div class="station" data-slide-number="4" data-station-id="KISW">
                <div class="station-condition">
                    <i class="wi wi-day-sunny"
                       data-condition="Clear"
                       data-condition-abbrv="skc"
                       style="color:#0A246A"></i>
                </div>
                <div class="station-title" style="color:#212121">
                    Wisconsin Rapids                </div>
                                    <div class="station-temperature" style="color:#212121">
                        9&deg;
                    </div>
                            </div>
                    <div class="station" data-slide-number="5" data-station-id="KMFI">
                <div class="station-condition">
                    <i class="wi wi-day-sunny"
                       data-condition="Clear"
                       data-condition-abbrv="skc"
                       style="color:#0A246A"></i>
                </div>
                <div class="station-title" style="color:#212121">
                    Marshfield                </div>
                                    <div class="station-temperature" style="color:#212121">
                        7&deg;
                    </div>
                            </div>
            </div>
        </div>
                    </div>
                                <nav class="nav-main" role="navigation">
                    <div class="navbar-collapse collapse">
                        <div class="nav-main-inner">
                                                            <ul id="menu-main-menu" class="sf-menu hidden-xs"><li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active menu-home first-item menu-item-38152"><a target="_parent" href="https://waow.com"><span>HOME</span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-news menu-item-138"><a target="_parent" href="https://waow.com/news/"><span>News</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-election-results menu-item-32612"><a target="_parent" href="https://waow.com/election-results/"><span>Election Results</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-wisconsin-news menu-item-8000"><a target="_parent" href="https://waow.com/wisconsin-news/"><span>Wisconsin News</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-wake-up-wisconsin menu-item-31084"><a target="_parent" href="https://waow.com/news/wake-up-wisconsin/"><span>Wake Up Wisconsin</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-politics menu-item-7999"><a target="_parent" href="https://waow.com/politics/"><span>Politics</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-water-cooler menu-item-7998"><a target="_parent" href="https://waow.com/water-cooler/"><span>Water Cooler</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-jefferson-awards menu-item-7997"><a target="_parent" href="https://waow.com/jefferson-awards/"><span>Jefferson Awards</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-crime-stoppers menu-item-7815"><a target="_parent" href="https://waow.com/crime-stoppers/"><span>Crime Stoppers</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-pet-saver menu-item-14132"><a target="_parent" href="https://waow.com/pet-saver/"><span>Pet Saver</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-meet-the-news-team menu-item-9936"><a target="_parent" href="https://waow.com/meet-the-news-team/"><span>Meet the News Team</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-weather menu-item-506"><a target="_parent" href="https://waow.com/weather/"><span>Weather</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-interactive-radar menu-item-901"><a target="_parent" href="https://waow.com/weather/interactive-radar/"><span>Interactive Radar</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-radar-room menu-item-8946"><a target="_parent" href="https://waow.com/radar-room/"><span>Radar Room</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-forecast-central menu-item-8943"><a target="_parent" href="https://waow.com/forecast-central/"><span>Forecast Central</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-maps-and-alerts menu-item-8949"><a target="_parent" href="https://waow.com/maps-and-alerts/"><span>Maps and Alerts</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-closings-and-delays menu-item-887"><a target="_parent" href="https://waow.com/closings/"><span>Closings and Delays</span></a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-submit-school-closings menu-item-21843"><a target="_parent" href="https://www.secure1.newsroomsolutions.com/s/closings?client=waow_mb291pq_b"><span>Submit School Closings</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-skycam-network menu-item-8944"><a target="_parent" href="https://waow.com/skycam-network/"><span>Skycam Network</span></a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-weather-blog menu-item-9309"><a target="_parent" href="https://addins.waow.com/blogs/weather/"><span>Weather Blog</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-meet-the-weather-team menu-item-9935"><a target="_parent" href="https://waow.com/meet-the-weather-team/"><span>Meet the Weather Team</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-sports menu-item-277"><a target="_parent" href="https://waow.com/sports/"><span>Sports</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-sports-express-am menu-item-12336"><a target="_parent" href="https://waow.com/sports-express-am/"><span>Sports Express AM</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-high-school-sports menu-item-7985"><a target="_parent" href="https://waow.com/high-school-sports/"><span>High School Sports</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-brewers menu-item-7986"><a target="_parent" href="https://waow.com/brewers/"><span>Brewers</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-badgers menu-item-7982"><a target="_parent" href="https://waow.com/badgers/"><span>Badgers</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-pack-attack menu-item-7983"><a target="_parent" href="https://waow.com/pack-attack/"><span>Pack Attack</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-packers menu-item-7984"><a target="_parent" href="https://waow.com/packers/"><span>Packers</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-wiaa menu-item-7981"><a target="_parent" href="https://waow.com/wiaa/"><span>WIAA</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-meet-the-sports-team menu-item-9937"><a target="_parent" href="https://waow.com/meet-the-sports-team/"><span>Meet the sports team</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-things-to-do menu-item-504"><a target="_parent" href="https://waow.com/things-to-do/"><span>Things to Do</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-toys-for-tots menu-item-43728"><a target="_parent" href="https://waow.com/toys-for-tots/"><span>Toys for Tots</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-contests menu-item-502"><a target="_parent" href="https://waow.com/contests/"><span>Contests</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-post menu-ticket-tuesday-entry-form menu-item-16218"><a target="_parent" href="https://waow.com/waow-contests/2018/09/25/ticket-tuesday/"><span>Ticket Tuesday Entry Form</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-birthdays menu-item-9308"><a target="_parent" href="https://waow.com/birthdays-2/"><span>Birthdays</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-2018-central-wisconsin-golf-card menu-item-9364"><a target="_parent" href="https://waow.com/2018-central-wisconsin-golf-card/"><span>2018 Central Wisconsin Golf Card</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-watch menu-item-505"><a target="_parent" href="https://waow.com/watch/"><span>Watch</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-waow-live-stream menu-item-2994"><a target="_parent" href="https://waow.com/news/waow-live-stream/"><span>WAOW Live Stream</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-contact menu-item-593"><a target="_parent" href="https://waow.com/contact-us/"><span>Contact</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-sign-up-for-email-alerts menu-item-21865"><a target="_parent" href="https://waow.com/sign-up-for-waow-news-and-weather-emails/"><span>Sign up for Email Alerts</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-advertise-with-waow menu-item-589"><a target="_parent" href="https://waow.com/advertise-with-waow/"><span>Advertise with WAOW</span></a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-advertiser-services menu-item-590"><a target="_parent" href="https://xprspay.ipayxepay.net/xprspay/qmi/index.jsp"><span>Advertiser Services</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-careers-at-waow menu-item-588"><a target="_parent" href="https://waow.com/waow-careers/"><span>Careers at WAOW</span></a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-quincy-media-careers menu-item-592"><a target="_parent" href="https://quincymediacareers.com"><span>Quincy Media Careers</span></a></li>
</ul>
</li>
</ul><ul id="menu-main-menu-1" class="mobile-menu visible-xs"><li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active first-item menu-item-38152"><a target="_parent" href="https://waow.com"><span>HOME</span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-138"><a target="_parent" href="https://waow.com/news/"><span>News</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-32612"><a target="_parent" href="https://waow.com/election-results/"><span>Election Results</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8000"><a target="_parent" href="https://waow.com/wisconsin-news/"><span>Wisconsin News</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31084"><a target="_parent" href="https://waow.com/news/wake-up-wisconsin/"><span>Wake Up Wisconsin</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7999"><a target="_parent" href="https://waow.com/politics/"><span>Politics</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7998"><a target="_parent" href="https://waow.com/water-cooler/"><span>Water Cooler</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7997"><a target="_parent" href="https://waow.com/jefferson-awards/"><span>Jefferson Awards</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7815"><a target="_parent" href="https://waow.com/crime-stoppers/"><span>Crime Stoppers</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14132"><a target="_parent" href="https://waow.com/pet-saver/"><span>Pet Saver</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9936"><a target="_parent" href="https://waow.com/meet-the-news-team/"><span>Meet the News Team</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-506"><a target="_parent" href="https://waow.com/weather/"><span>Weather</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-901"><a target="_parent" href="https://waow.com/weather/interactive-radar/"><span>Interactive Radar</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8946"><a target="_parent" href="https://waow.com/radar-room/"><span>Radar Room</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8943"><a target="_parent" href="https://waow.com/forecast-central/"><span>Forecast Central</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8949"><a target="_parent" href="https://waow.com/maps-and-alerts/"><span>Maps and Alerts</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-887"><a target="_parent" href="https://waow.com/closings/"><span>Closings and Delays</span></a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-21843"><a target="_parent" href="https://www.secure1.newsroomsolutions.com/s/closings?client=waow_mb291pq_b"><span>Submit School Closings</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8944"><a target="_parent" href="https://waow.com/skycam-network/"><span>Skycam Network</span></a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9309"><a target="_parent" href="https://addins.waow.com/blogs/weather/"><span>Weather Blog</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9935"><a target="_parent" href="https://waow.com/meet-the-weather-team/"><span>Meet the Weather Team</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-277"><a target="_parent" href="https://waow.com/sports/"><span>Sports</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12336"><a target="_parent" href="https://waow.com/sports-express-am/"><span>Sports Express AM</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7985"><a target="_parent" href="https://waow.com/high-school-sports/"><span>High School Sports</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7986"><a target="_parent" href="https://waow.com/brewers/"><span>Brewers</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7982"><a target="_parent" href="https://waow.com/badgers/"><span>Badgers</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7983"><a target="_parent" href="https://waow.com/pack-attack/"><span>Pack Attack</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7984"><a target="_parent" href="https://waow.com/packers/"><span>Packers</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7981"><a target="_parent" href="https://waow.com/wiaa/"><span>WIAA</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9937"><a target="_parent" href="https://waow.com/meet-the-sports-team/"><span>Meet the sports team</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-504"><a target="_parent" href="https://waow.com/things-to-do/"><span>Things to Do</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-43728"><a target="_parent" href="https://waow.com/toys-for-tots/"><span>Toys for Tots</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-502"><a target="_parent" href="https://waow.com/contests/"><span>Contests</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-16218"><a target="_parent" href="https://waow.com/waow-contests/2018/09/25/ticket-tuesday/"><span>Ticket Tuesday Entry Form</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9308"><a target="_parent" href="https://waow.com/birthdays-2/"><span>Birthdays</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9364"><a target="_parent" href="https://waow.com/2018-central-wisconsin-golf-card/"><span>2018 Central Wisconsin Golf Card</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-505"><a target="_parent" href="https://waow.com/watch/"><span>Watch</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2994"><a target="_parent" href="https://waow.com/news/waow-live-stream/"><span>WAOW Live Stream</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-593"><a target="_parent" href="https://waow.com/contact-us/"><span>Contact</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21865"><a target="_parent" href="https://waow.com/sign-up-for-waow-news-and-weather-emails/"><span>Sign up for Email Alerts</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-589"><a target="_parent" href="https://waow.com/advertise-with-waow/"><span>Advertise with WAOW</span></a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-590"><a target="_parent" href="https://xprspay.ipayxepay.net/xprspay/qmi/index.jsp"><span>Advertiser Services</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-588"><a target="_parent" href="https://waow.com/waow-careers/"><span>Careers at WAOW</span></a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-592"><a target="_parent" href="https://quincymediacareers.com"><span>Quincy Media Careers</span></a></li>
</ul>
</li>
</ul>
                                                                                    </div>
                    </div>
                </nav><!--/#nav-menu -->
            </div><!-- /.container -->
        </header>

                    <div class="hidden-xs">
                <div id="search-section-primary" class="search-section" style="display: none;">
                    <div class="container">
                        <form role="search" method="get" class="form form-search" action="https://waow.com/">
	<label for="s">
		<span class="sr-only">Search for:</span>
		<input type="search" title="Search" name="s" value="" placeholder="Search..." class="field search-field">
	</label>
	<button value="Search" class="search-submit button" type="submit">Search</button>
</form><i class="fa fa-search"></i>
                    </div>
                </div>
            </div>

        <section id="sub-header">
            <div class="container">
                                <!--                <div class="pull-left">-->
                <!--                    -->                <!--                </div>-->
                <!--                <div class="pull-right">-->
                <!--                    -->                <!--                </div>-->
            </div><!-- .container -->
        </section>

        <div class="sticky-header-running"></div>


            <div class="sticky-header logo-left">
                <div class="container">
                    <div class="logo">
                                                    <div class="logo-img">
                                <a target="_parent" href="https://waow.com/" rel="home"><img
                                        src="https://s3-ca-central-1.amazonaws.com/quincy-network/wp-content/uploads/sites/9/2018/05/23134219/WAOWsticky.png"
                                        alt="WAOW" class="logo-img-secondary"/></a>
                            </div>
                                                                            <button type="button" class="navbar-toggle visible-xs" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                                            </div><!--.logo -->
                    <nav class="nav-main" role="navigation">
                        <div class="navbar-collapse collapse">
                            <div class="nav-main-inner">
                                                                    <ul id="menu-main-menu-2" class="sf-menu hidden-xs"><li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active first-item menu-item-38152"><a target="_parent" href="https://waow.com"><span>HOME</span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-138"><a target="_parent" href="https://waow.com/news/"><span>News</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-32612"><a target="_parent" href="https://waow.com/election-results/"><span>Election Results</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8000"><a target="_parent" href="https://waow.com/wisconsin-news/"><span>Wisconsin News</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31084"><a target="_parent" href="https://waow.com/news/wake-up-wisconsin/"><span>Wake Up Wisconsin</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7999"><a target="_parent" href="https://waow.com/politics/"><span>Politics</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7998"><a target="_parent" href="https://waow.com/water-cooler/"><span>Water Cooler</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7997"><a target="_parent" href="https://waow.com/jefferson-awards/"><span>Jefferson Awards</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7815"><a target="_parent" href="https://waow.com/crime-stoppers/"><span>Crime Stoppers</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14132"><a target="_parent" href="https://waow.com/pet-saver/"><span>Pet Saver</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9936"><a target="_parent" href="https://waow.com/meet-the-news-team/"><span>Meet the News Team</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-506"><a target="_parent" href="https://waow.com/weather/"><span>Weather</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-901"><a target="_parent" href="https://waow.com/weather/interactive-radar/"><span>Interactive Radar</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8946"><a target="_parent" href="https://waow.com/radar-room/"><span>Radar Room</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8943"><a target="_parent" href="https://waow.com/forecast-central/"><span>Forecast Central</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8949"><a target="_parent" href="https://waow.com/maps-and-alerts/"><span>Maps and Alerts</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-887"><a target="_parent" href="https://waow.com/closings/"><span>Closings and Delays</span></a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-21843"><a target="_parent" href="https://www.secure1.newsroomsolutions.com/s/closings?client=waow_mb291pq_b"><span>Submit School Closings</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8944"><a target="_parent" href="https://waow.com/skycam-network/"><span>Skycam Network</span></a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9309"><a target="_parent" href="https://addins.waow.com/blogs/weather/"><span>Weather Blog</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9935"><a target="_parent" href="https://waow.com/meet-the-weather-team/"><span>Meet the Weather Team</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-277"><a target="_parent" href="https://waow.com/sports/"><span>Sports</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12336"><a target="_parent" href="https://waow.com/sports-express-am/"><span>Sports Express AM</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7985"><a target="_parent" href="https://waow.com/high-school-sports/"><span>High School Sports</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7986"><a target="_parent" href="https://waow.com/brewers/"><span>Brewers</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7982"><a target="_parent" href="https://waow.com/badgers/"><span>Badgers</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7983"><a target="_parent" href="https://waow.com/pack-attack/"><span>Pack Attack</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7984"><a target="_parent" href="https://waow.com/packers/"><span>Packers</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7981"><a target="_parent" href="https://waow.com/wiaa/"><span>WIAA</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9937"><a target="_parent" href="https://waow.com/meet-the-sports-team/"><span>Meet the sports team</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-504"><a target="_parent" href="https://waow.com/things-to-do/"><span>Things to Do</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-43728"><a target="_parent" href="https://waow.com/toys-for-tots/"><span>Toys for Tots</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-502"><a target="_parent" href="https://waow.com/contests/"><span>Contests</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-16218"><a target="_parent" href="https://waow.com/waow-contests/2018/09/25/ticket-tuesday/"><span>Ticket Tuesday Entry Form</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9308"><a target="_parent" href="https://waow.com/birthdays-2/"><span>Birthdays</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9364"><a target="_parent" href="https://waow.com/2018-central-wisconsin-golf-card/"><span>2018 Central Wisconsin Golf Card</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-505"><a target="_parent" href="https://waow.com/watch/"><span>Watch</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2994"><a target="_parent" href="https://waow.com/news/waow-live-stream/"><span>WAOW Live Stream</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-593"><a target="_parent" href="https://waow.com/contact-us/"><span>Contact</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21865"><a target="_parent" href="https://waow.com/sign-up-for-waow-news-and-weather-emails/"><span>Sign up for Email Alerts</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-589"><a target="_parent" href="https://waow.com/advertise-with-waow/"><span>Advertise with WAOW</span></a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-590"><a target="_parent" href="https://xprspay.ipayxepay.net/xprspay/qmi/index.jsp"><span>Advertiser Services</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-588"><a target="_parent" href="https://waow.com/waow-careers/"><span>Careers at WAOW</span></a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-592"><a target="_parent" href="https://quincymediacareers.com"><span>Quincy Media Careers</span></a></li>
</ul>
</li>
</ul><ul id="menu-main-menu-3" class="mobile-menu visible-xs"><li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home active first-item menu-item-38152"><a target="_parent" href="https://waow.com"><span>HOME</span></a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-138"><a target="_parent" href="https://waow.com/news/"><span>News</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-32612"><a target="_parent" href="https://waow.com/election-results/"><span>Election Results</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8000"><a target="_parent" href="https://waow.com/wisconsin-news/"><span>Wisconsin News</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31084"><a target="_parent" href="https://waow.com/news/wake-up-wisconsin/"><span>Wake Up Wisconsin</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7999"><a target="_parent" href="https://waow.com/politics/"><span>Politics</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7998"><a target="_parent" href="https://waow.com/water-cooler/"><span>Water Cooler</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7997"><a target="_parent" href="https://waow.com/jefferson-awards/"><span>Jefferson Awards</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7815"><a target="_parent" href="https://waow.com/crime-stoppers/"><span>Crime Stoppers</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14132"><a target="_parent" href="https://waow.com/pet-saver/"><span>Pet Saver</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9936"><a target="_parent" href="https://waow.com/meet-the-news-team/"><span>Meet the News Team</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-506"><a target="_parent" href="https://waow.com/weather/"><span>Weather</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-901"><a target="_parent" href="https://waow.com/weather/interactive-radar/"><span>Interactive Radar</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8946"><a target="_parent" href="https://waow.com/radar-room/"><span>Radar Room</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8943"><a target="_parent" href="https://waow.com/forecast-central/"><span>Forecast Central</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8949"><a target="_parent" href="https://waow.com/maps-and-alerts/"><span>Maps and Alerts</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-887"><a target="_parent" href="https://waow.com/closings/"><span>Closings and Delays</span></a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-21843"><a target="_parent" href="https://www.secure1.newsroomsolutions.com/s/closings?client=waow_mb291pq_b"><span>Submit School Closings</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8944"><a target="_parent" href="https://waow.com/skycam-network/"><span>Skycam Network</span></a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9309"><a target="_parent" href="https://addins.waow.com/blogs/weather/"><span>Weather Blog</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9935"><a target="_parent" href="https://waow.com/meet-the-weather-team/"><span>Meet the Weather Team</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-277"><a target="_parent" href="https://waow.com/sports/"><span>Sports</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12336"><a target="_parent" href="https://waow.com/sports-express-am/"><span>Sports Express AM</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7985"><a target="_parent" href="https://waow.com/high-school-sports/"><span>High School Sports</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7986"><a target="_parent" href="https://waow.com/brewers/"><span>Brewers</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7982"><a target="_parent" href="https://waow.com/badgers/"><span>Badgers</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7983"><a target="_parent" href="https://waow.com/pack-attack/"><span>Pack Attack</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7984"><a target="_parent" href="https://waow.com/packers/"><span>Packers</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7981"><a target="_parent" href="https://waow.com/wiaa/"><span>WIAA</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9937"><a target="_parent" href="https://waow.com/meet-the-sports-team/"><span>Meet the sports team</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-504"><a target="_parent" href="https://waow.com/things-to-do/"><span>Things to Do</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-43728"><a target="_parent" href="https://waow.com/toys-for-tots/"><span>Toys for Tots</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-502"><a target="_parent" href="https://waow.com/contests/"><span>Contests</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-16218"><a target="_parent" href="https://waow.com/waow-contests/2018/09/25/ticket-tuesday/"><span>Ticket Tuesday Entry Form</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9308"><a target="_parent" href="https://waow.com/birthdays-2/"><span>Birthdays</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9364"><a target="_parent" href="https://waow.com/2018-central-wisconsin-golf-card/"><span>2018 Central Wisconsin Golf Card</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-505"><a target="_parent" href="https://waow.com/watch/"><span>Watch</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2994"><a target="_parent" href="https://waow.com/news/waow-live-stream/"><span>WAOW Live Stream</span></a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-593"><a target="_parent" href="https://waow.com/contact-us/"><span>Contact</span></a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21865"><a target="_parent" href="https://waow.com/sign-up-for-waow-news-and-weather-emails/"><span>Sign up for Email Alerts</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-589"><a target="_parent" href="https://waow.com/advertise-with-waow/"><span>Advertise with WAOW</span></a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-590"><a target="_parent" href="https://xprspay.ipayxepay.net/xprspay/qmi/index.jsp"><span>Advertiser Services</span></a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-588"><a target="_parent" href="https://waow.com/waow-careers/"><span>Careers at WAOW</span></a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-592"><a target="_parent" href="https://quincymediacareers.com"><span>Quincy Media Careers</span></a></li>
</ul>
</li>
</ul>
                                                                                                </div>
                        </div>
                    </nav><!--.nav-menu -->
                </div><!-- /.container -->

                            </div>





</html>
