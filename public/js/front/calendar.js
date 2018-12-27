var learningIsClicked = false;
var projectIsClicked = false;
var eventIsClicked = false;

$(".add-learning-button").click(function() {
       learningIsClicked = true;
    
       if(projectIsClicked == true){
           projectIsClicked = false;
       }
       if(eventIsClicked == true){
           eventIsClicked = false;
       }
})
$(".add-project-button").click(function() {
       projectIsClicked = true;
    
       if(learningIsClicked == true){
           learningIsClicked = false;
       }
       if(eventIsClicked == true){
           eventIsClicked = false;
       }
})
$(".add-event-button").click(function() {
       eventIsClicked = true;
    
       if(learningIsClicked == true){
           learningIsClicked = false;
       }
       if(projectIsClicked == true){
           projectIsClicked = false;
       }
})
$(".calendar-td").click(function() {
    $("td").addClass("calendar-td");
    $(".selected-day-event").addClass("notSelected-event");
    $(".selected-day-project").addClass("notSelected-project");
    $(".selected-day-learning").addClass("notSelected-learning");
    
    $(".hasEvents").removeClass("selected-day");
    $(".hasEvents").removeClass("selected-day-event");
    $(".hasEvents").removeClass("selected-day-project");
    $(".hasEvents").removeClass("selected-day-learning");
    
       if(learningIsClicked == true){
            $(this).removeClass("calendar-td").removeClass("notSelected").addClass("selected-day").addClass("selected-day-learning").addClass("hasEvents");   
            $(this ).find(".calendar-day-footer").find("ul").append("<span class='calendar-events-items-icons sprite sprite-calendar-learning-small'></span>");           
            $(this ).find(".calendar-day-content")
                .find("ul")
                .append("<li class='calendar-events-items calendar-events-learning'><span class='sprite sprite-calendar-learning'></span>Cours de 3D</li>");           
            learningIsClicked = false;
       }
        if(projectIsClicked == true){
            $(this).addClass("notSelected-project").addClass("hasEvents");   
            $(this).addClass("test-project");   
       }
        if(eventIsClicked == true){
            $(this).addClass("notSelected-project").addClass("hasEvents");   
            $(this).addClass("test-event");   
       }
})

//$(".hasEvents").click(function() {
//    $(this).addClass("selected-day");
//    $(this).removeClass("notSelected");
//    $(".selected-day").removeClass("calendar-td");
//})
$(".hasEvents").click(function() {
    //Dé-sélectionne la journée sélectionné
    $(".selected-day").removeClass("selected-day");
    
    $(".notSelected-event").removeClass("selected-day-event");
    $(".notSelected-learning").removeClass("selected-day-learning");
    $(".notSelected-project").removeClass("selected-day-project");
    
    
    $("td").addClass("calendar-td");
    $(this).addClass("selected-day");
    $(".selected-day").removeClass("calendar-td");
})

$(".notSelected-event").click(function() {
    $(this).addClass("selected-day-event");
    $(this).addClass("selected-day");
    $(this).removeClass("notSelected-event");
    $(".notSelected-project").removeClass("selected-day-project");
})
$(".notSelected-project").click(function() {
    $(this).addClass("selected-day-project");
    $(this).addClass("selected-day");
    $(this).removeClass("notSelected-project");
})
$(".notSelected-learning").click(function() {
    $(this).addClass("selected-day-learning");
    $(this).addClass("selected-day");
    $(this).removeClass("notSelected-learning");
})



//$(".notSelected").click(function() {
//    $("td").addClass("calendar-td");
//    $(".hasEvents").removeClass("selected-day");
//    $(".hasEvents").removeClass("selected-day-event");
//    $(".hasEvents").removeClass("selected-day-project");
//    $(".hasEvents").removeClass("selected-day-learning");
//})