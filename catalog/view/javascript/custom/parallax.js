function isInViewport(t){var i=t.getBoundingClientRect();return(i.height>0||i.width>0)&&i.bottom>=0&&i.right>=0&&i.top<=(window.innerHeight||document.documentElement.clientHeight)&&i.left<=(window.innerWidth||document.documentElement.clientWidth)}$(document).ready(function(){var t=$(window).scrollTop();$(".parallax").each(function(i){var n=$(this).data("image-src"),e=$(this).data("height");$(this).css("background-image","url("+n+")"),$(this).css("height",e);var o=$(this).offset().top,h=$(this).height(),s=t-o,r=Math.round(s/h*100);$(this).css("background-position","center "+parseInt(.5*r)+"px")}),$(window).scroll(function(){var t=$(window).scrollTop();$(".parallax").each(function(i,n){var e=$(this).offset().top,o=$(this).height();$(this).height();if(isInViewport(this)){var h=t-e,s=Math.round(h/o*100);$(this).css("background-position","center "+parseInt(.5*s)+"px")}})})}); 