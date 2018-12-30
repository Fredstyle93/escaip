$(function(){
    $(".add-post-icon").click(function(){
        $(".add-post-icon").toggleClass("add-post-icon-clicked");
        $(".add-post-form").toggleClass("post-form-isActive");
    });
    // $(".post-learning-button").click(
    //             function() {
    //                 $(".post-learning-button").toggleClass("learning-clicked");
    //                 $(".post-event-button").removeClass("event-clicked");
    //                 $(".post-project-button").removeClass("project-clicked");
    //                 $(".new-post").toggleClass("post-type-clicked");

    //                 $(".post-form-learning").toggleClass("post-learning-clicked");
    //                 $(".post-form-event").removeClass("post-event-clicked");
    //                 $(".post-form-project").removeClass("post-project-clicked");

    //                 $(".arrow-indicator").addClass("arrow-align-learning");
    //                 $(".arrow-indicator").removeClass("arrow-align-event");
    //                 $(".arrow-indicator").removeClass("arrow-align-project");

    //             }
    //         )
    //         $(".post-event-button").click(
    //             function() {
    //                 $(".post-event-button").toggleClass("event-clicked");
    //                 $(".post-learning-button").removeClass("learning-clicked");
    //                 $(".post-project-button").removeClass("project-clicked");
    //                 $(".new-post").toggleClass("post-type-clicked");

    //                 $(".post-form-event").toggleClass("post-event-clicked");
    //                 $(".post-form-learning").removeClass("post-learning-clicked");
    //                 $(".post-form-project").removeClass("post-project-clicked");

    //                 $(".arrow-indicator").addClass("arrow-align-event");
    //                 $(".arrow-indicator").removeClass("arrow-align-learning");
    //                 $(".arrow-indicator").removeClass("arrow-align-project");
    //             }
    //         )
    //         $(".post-project-button").click(
    //             function() {
    //                 $(".post-project-button").toggleClass("project-clicked");
    //                 $(".post-learning-button").removeClass("learning-clicked");
    //                 $(".post-event-button").removeClass("event-clicked");
    //                 $(".new-post").toggleClass("post-type-clicked");

    //                 $(".post-form-project").toggleClass("post-project-clicked");
    //                 $(".post-form-event").removeClass("post-event-clicked");
    //                 $(".post-form-learning").removeClass("post-learning-clicked");

    //                 $(".arrow-indicator").addClass("arrow-align-project");
    //                 $(".arrow-indicator").removeClass("arrow-align-event");
    //                 $(".arrow-indicator").removeClass("arrow-align-learning");
    //             }
    //         )
    //         $(function(){
    //             $(".post-learning-button").hover(function() {
    //                 $(".hover-learning-button").addClass(".learning-hover");                    
    //             }, function() {
    //                     $(".hover-learning-button").removeClass(".learning-hover");                    
    //                 });
    //         });

})