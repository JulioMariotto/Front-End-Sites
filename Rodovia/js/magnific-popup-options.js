$(document).ready(function(){var popup=function(){$('.image-popup').magnificPopup({type:'image',removalDelay:300,mainClass:'mfp-with-zoom',gallery:{enabled:true},zoom:{enabled:true,duration:300,easing:'ease-in-out',opener:function(openerElement){return openerElement.is('img')?openerElement:openerElement.find('img');}}});};var popup1=function(){$('.image-popup1').magnificPopup({type:'image',removalDelay:300,mainClass:'mfp-with-zoom',gallery:{enabled:true},zoom:{enabled:true,duration:300,easing:'ease-in-out',opener:function(openerElement){return openerElement.is('img')?openerElement:openerElement.find('img');}}});};var popup2=function(){$('.image-popup2').magnificPopup({type:'image',removalDelay:300,mainClass:'mfp-with-zoom',gallery:{enabled:true},zoom:{enabled:true,duration:300,easing:'ease-in-out',opener:function(openerElement){return openerElement.is('img')?openerElement:openerElement.find('img');}}});};var popup3=function(){$('.image-popup3').magnificPopup({type:'image',removalDelay:300,mainClass:'mfp-with-zoom',gallery:{enabled:true},zoom:{enabled:true,duration:300,easing:'ease-in-out',opener:function(openerElement){return openerElement.is('img')?openerElement:openerElement.find('img');}}});};var magnifVideo=function(){$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({disableOn:700,type:'iframe',mainClass:'mfp-fade',removalDelay:160,preloader:false,fixedContentPos:false});};popup();popup1();popup2();popup3();magnifVideo();});