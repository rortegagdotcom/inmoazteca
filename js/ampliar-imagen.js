$(function(){$(".ampliar").click(function(){var a=$(this).attr("src"),b=$(this).attr("alt");$("#func-ampliar-img").css({display:"block",visibility:"visible"}),$(".img-ampliado").attr("src",a),$(".img-ampliado p").text(b),$("#boton-cerrar").click(function(){$("#func-ampliar-img").css({display:"none",visibility:"hidden"})})})});