$(function(){
    $(".burger-menu").click(
        function() {
            $(".burger-menu").toggleClass("is-active")
            $(".toggle-navigation").toggleClass("is-active")
            $(".hide").toggleClass("is-active")
        }
    )
    $(".hide").click(
        function() {
            $(".hide").removeClass("is-active")
            $(".burger-menu").removeClass("is-active")
            $(".toggle-navigation").removeClass("is-active")
        }
    )
})