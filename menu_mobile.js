var botaoRemover = $(".icone_x");
var menu = $(".menu_flutuante");

botaoRemover.on("click",function(event){
menu.css("display","none");


event.preventDefault();

});

var botaoMenu = $(".icone");
botaoMenu.on("click",function(event){
menu.css("display","block");

event.preventDefault();
 
});