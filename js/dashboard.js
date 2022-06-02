$("#c_driver, #c_trips, #c_events, #c_vehicles, #row").hide();
$(document).ready(function(){
       $("#c_driver").fadeIn(4000,"linear");
       $("#c_trips").fadeIn(7000,"linear");
       $("#c_events").fadeIn(9000,"linear");
       $("#c_vehicles").fadeIn(1000,"linear");
       $(document).scroll(function () { 
           $("#row").slideDown(3000);
       });
    // $("#c_driver").animate({right: '250px'});
    // $("#c_trips").animate({right: '500px'});
    // $("#c_events").animate({right: '750px'});
    // $(document).scroll(function () { 
    //     $("#c_driver").animate({left: '0px'});
    //     $("#c_trips").animate({left: '0px'});
    //     $("#c_events").animate({left: '0px'});
    // });
    // $("#c_row").mouseenter(function () { 
    //     $("#c_driver").animate({right: '250px'});
    // $("#c_trips").animate({right: '500px'});
    // $("#c_events").animate({right: '750px'});
    // });
 
 });