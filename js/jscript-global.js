$(document).ready(function (){

  /* top menubar submenu script */
      $('#user-nav-submenu').click(function () {
       $(this).parent().parent().find('ul').toggle();
       $(this).toggleClass("active");
         return false; 
      });

      $('#wrap-body').click(function (){

        $('#sec-lvl-menu').hide();
        $('#user-nav-submenu').removeClass("active");
      });
/*end*/

/**************************for tabs***************************************************/
      $(".tab-content").hide();
      $(".tab-content:first").show();
      $("ul.tabs li:first").addClass("actve-tab");

      $("ul.tabs li").click(function() {
        $("ul.tabs li").removeClass("actve-tab");
          $(".tab-content").hide();
          $(this).addClass("actve-tab");
          var activeTab = $(this).find("a").attr("href");
          $(activeTab).fadeIn();

        return false;  
      });

/****************************modal for add announcement********************************/

        $('.modal').live('click',function(e) {
        //Cancel the link behavior
           
        e.preventDefault();

        //Get the A tag

        var windwheight = $('.window').height();

        

        var id = $(this).attr('rel');

        //Get the screen height and width

        var docheight = $(document).height();
        var containerH = $(id).height()/2*1.5 ;

        var totalh = docheight + containerH ; 

        var maskWidth = $(window).width();

        //Set heigth and width to mask to fill up the whole screen
        $('#mask').css({'width':maskWidth,'height':totalh});

        //transition effect   

        $('#mask').fadeIn(1000);  

        $('#mask').fadeTo("slow",0.8);  

        //Get the window height and width 512

        var winH = $(window).height();

        var winW = $(window).width();

        var height =($(id).height()/2)/2;

        

        //Set the popup window to center

        $(id).css('top',  height);

        $(id).css('left', winW/2-$(id).width()/2);

        //transition effect

        $(id).fadeIn(1000); 

  });

  
  //if close button is clicked

      $('.window .close').click(function (e) {

        //Cancel the link behavior

        e.preventDefault();

        $('#mask').hide();

        $('.window').hide();

      });   

  //if mask is clicked

      $('#mask').click(function () {

        $(this).hide();

        $('.window').hide();

      });
/***********************************************end tab script**********************************************/

/****************************modal for loading********************************/

        $('.modal2').live('click',function(e) {
        //Cancel the link behavior
           
        e.preventDefault();

        //Get the A tag

        var windwheight = $('#loading-window').height();

        

        var id = $(this).attr('rel');

        //Get the screen height and width

        var docheight = $(document).height();
        var containerH = $(id).height()/2 ;

        var totalh = docheight + containerH ; 

        var maskWidth = $(window).width();

        //Set heigth and width to mask to fill up the whole screen
        $('#mask2').css({'width':maskWidth,'height':totalh});

        //transition effect   

        $('#mask2').fadeIn(1000);  

        $('#mask2').fadeTo("slow",0.8);  

        //Get the window height and width 512

        var winH = $(window).height();

        var winW = $(window).width();

        var height =($(id).height()/2) * 10;

        

        //Set the popup window to center

        $(id).css('top',  height);

        $(id).css('left', winW/2-$(id).width()/2);

        //transition effect

        $(id).fadeIn(500); 

  });
/***********************************************end modal for loading**********************************************/


/************************************************load gif function**************************************************/
 



/*************************************************end load gif*********************************************/



/*****Scrollbar ********/


      /*announcements*/
        var elem_height = $('#announcements').height();  

        var height = $(this).height();

        $('#anncmnts-content').slimScroll({
          height:elem_height,
          start: 'top',
          wheelStep: 10,
          railVisible: true,
        }).css({ paddingRight: '10px' });
      /*end announcements*/  


      /*updates*/
        var elem_height = $('#updates-wrap').height();  

        var height = $(this).height();

        $('#updates-content').slimScroll({
          height:elem_height,
          start: 'top',
          wheelStep: 10,
          railVisible: true,
        }).css({ paddingRight: '10px' });
      /*end updates*/

       /*evaluate*/
        var elem_height = $('#evaluate-wrap').height();  

        var height = $(this).height();

        $('#evaluate-content').slimScroll({
          height:elem_height,
          start: 'top',
          wheelStep: 10,
          railVisible: true,
        }).css({ paddingRight: '10px' });
      /*end evaluate*/

      /*sent-updates*/
        var elem_height = $('#sent-updates-wrap').height();  

        var height = $(this).height();

        $('#sent-updates-content').slimScroll({
          height:elem_height,
          start: 'top',
          wheelStep: 10,
          railVisible: true,
        }).css({ paddingRight: '10px' });
      /*end sent-updates*/

      /*approval*/
        var elem_height = $('#approval-wrap').height();  

        var height = $(this).height();

        $('#approval-content').slimScroll({
          height:elem_height,
          start: 'top',
          wheelStep: 10,
          railVisible: true,
        }).css({ paddingRight: '10px' });
      /*end approval*/

      /*advisories*/
        var elem_height = $('#advisory-wrap').height();  

        var height = $(this).height();

        $('#advisory-list-content').slimScroll({
          height:elem_height,
          start: 'top',
          wheelStep: 10,
          railVisible: true,
        }).css({ paddingRight: '10px' });
      /*end advisories*/

      /*sections list */
        var elem_height = $('#subjects-wrap').height();  

        var height = $(this).height();

        $('#subjects-list-content').slimScroll({
          height:elem_height,
          start: 'top',
          wheelStep: 10,
          railVisible: true,
        }).css({ paddingRight: '10px' });
      /*end */

      /*sections list */
        var elem_height = $('#sections-wrap').height();  

        var height = $(this).height();

        $('#section-list-content').slimScroll({
          height:elem_height,
          start: 'top',
          wheelStep: 10,
          railVisible: true,
        }).css({ paddingRight: '10px' });
      /*end */

       /*subjects you handle div*/
        var elem_height = $('#subjcthandle-wrap').height();  

        var height = $(this).height();

        $('#subject-list-content').slimScroll({
          height:elem_height,
          start: 'top',
          wheelStep: 10,
          railVisible: true,
        }).css({ paddingRight: '10px' });
      /*subjects you handle div*/

/*sections-list of registrar you handle div*/
        var elem_height = $('#class-wrap').height();  

        var height = $(this).height();

        $('#class-list-content').slimScroll({
          height:elem_height,
          start: 'top',
          wheelStep: 10,
          railVisible: true,
        }).css({ paddingRight: '10px' });
      /*sections-list of registrar you handle div end*/

      /*faculty incharge div*/
        var elem_height = $('#teaher-handle-wrap').height();  

        var height = $(this).height();

        $('#teacher-handler-list-content').slimScroll({
          height:elem_height,
          start: 'top',
          wheelStep: 10,
          railVisible: true,
        }).css({ paddingRight: '10px' });
      /*sections-list of registrar you handle div end*/
/**********end scroll script*************/

/*faculty incharge div*/
        var elem_height = $('#assigned-faculty-subject-wrap').height();  

        var height = $(this).height();

        $('#assigned-faculty-list-content').slimScroll({
          height:elem_height,
          start: 'top',
          wheelStep: 10,
          railVisible: true,
        }).css({ paddingRight: '10px' });
      /*sections-list of registrar you handle div end*/


       var elem_height = $('#school-wrap').height();  

        var height = $(this).height();

        $('#school-sections-content').slimScroll({
          height:elem_height,
          start: 'top',
          wheelStep: 10,
          railVisible: true,
        }).css({ paddingRight: '10px' });


           var elem_height = $('#search-school-wrap').height();  

        var height = $(this).height();

        $('#search-school-content').slimScroll({
          height:elem_height,
          start: 'top',
          wheelStep: 10,
          railVisible: true,
        }).css({ paddingRight: '10px' });
/**********end scroll script*************/


/*****************letters only regex*********************/
    $('.letters-only').live('keyup',function() {
         
         
    var RegExpression = /^[a-zA-Z\s]*$/; 

    if (RegExpression.test($(this).val())) {

    } 
    else {
        $(this).val("");
    }
});

/**********************end letters only*****************/

/*****************numbers only regex*********************/
    $('.numbers-only').live('keyup',function() {
         
         
    var RegExpression = /^[0-9]+$/; 

    if (RegExpression.test($(this).val())) {

    } 
    else {
        $(this).val("");
    }
});

/**********************end numbers only*****************/

/*****************numbers only regex*********************/
     $('.grades-val').live('blur',function() {


       
                      
          if ($(this).val() > 100 || $(this).val() < 60 ) {
              $(this).val("");

              alert("The Value You Enter Is Invalid")
           }
            
           else {
               
            }
 });

/**********************end numbers only*****************/



   }); 