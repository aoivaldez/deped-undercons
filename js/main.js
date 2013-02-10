$(document).ready(function (){

    /*script for arrow down*/
      $('#user-nav-submenu').click(function () {
       $(this).parent().parent().find('ul').toggle();

         return false; 
      });

      $('#wrap-body').click(function (){

        $('#sec-lvl-menu').hide();
      });

    /*end*/
    
    /*for tabs*/
      $(".tab-content").hide();
      $(".tab-content:first").show();

      $("ul.tabs li").click(function() {

          $(".tab-content").hide();
          var activeTab = $(this).find("a").attr("href");
          $(activeTab).fadeIn();
        return false;  
      });
    /*end*/  

    /*modal for add announcement*/

        $('.modal').click(function(e) {
        //Cancel the link behavior
           
        e.preventDefault();

        

        //Get the A tag

        var id = $(this).attr('rel');

      

        //Get the screen height and width

        var maskHeight = $(document).height();

        var maskWidth = $(window).width();

      

        //Set heigth and width to mask to fill up the whole screen

        $('#mask').css({'width':maskWidth,'height':maskHeight});

        

        //transition effect   

        $('#mask').fadeIn(1000);  

        $('#mask').fadeTo("slow",0.8);  

      

        //Get the window height and width 512

        var winH = $(window).height();

        var winW = $(window).width();

                  

        //Set the popup window to center

        $(id).css('top',  winH/2-$(id).height()/2);

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

         
      

   }); 