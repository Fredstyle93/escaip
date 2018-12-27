
$(function(){
    $("#click").click(function(){
        $(this).toggleClass("navbar-menu-is-active");
        $(".subnav").toggleClass("subnav-is-active");
    }); 
})
