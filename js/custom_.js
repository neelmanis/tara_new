jQuery(document).ready(function($) {
								
     $(".menu li").hover(function() {
         /* Stuff to do when the mouse enters the element */
         $(this).addClass('active');
         //$(this).children('a').addClass('active');
         var main_category_id= $(this).data("cat");
         $(".menu_box").css("display","none");
         $("#"+main_category_id).css("display","block");
     }, function() {
         /* Stuff to do when the mouse leaves the element */
         $(this).removeClass('active');
         //$(this).children('a').removeClass('active');
         var main_category_id= $(this).data("cat");
         $("#"+main_category_id).css("display","none");
     });

     $(".sub_cat li").hover(function() {
         /* Stuff to do when the mouse enters the element */
         $(this).addClass('active');
         var main_category_id= $(this).data("cat");
         $(".sub_subcat").css("display","none");
         $("#"+main_category_id).css("display","block");
     }, function() {
         /* Stuff to do when the mouse leaves the element */
         $(this).removeClass('active');
         var main_category_id= $(this).data("cat");
         //$("#"+main_category_id).css("display","none");
     });

     $(".menu_box").hover(function() {
         /* Stuff to do when the mouse enters the element */
         var main_category_id = $(this).attr("id");
         $('.menu li').filter('[data-cat="'+main_category_id+'"]').children("a").addClass('active');
         // $($(".menu li").data('cat', main_category_id)).children('a').addClass('active');
         $(this).css("display","block");
     }, function() {
         /* Stuff to do when the mouse leaves the element */
         var main_category_id = $(this).attr("id");
         $('.menu li').filter('[data-cat="'+main_category_id+'"]').children("a").removeClass('active');
         $(this).css("display","none");
     });

     $(".sub_subcat").hover(function() {
         /* Stuff to do when the mouse enters the element */
         var sub_category_id = $(this).attr("id");
         $('.sub_cat li').filter('[data-cat="'+sub_category_id+'"]').addClass('active');
         // $($(".menu li").data('cat', main_category_id)).children('a').addClass('active');
         $(this).css("display","block");
     }, function() {
         /* Stuff to do when the mouse leaves the element */
         var sub_category_id = $(this).attr("id");
         $('.sub_cat li').filter('[data-cat="'+sub_category_id+'"]').removeClass('active');
         $(this).css("display","none");
     });

});
