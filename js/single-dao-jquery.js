$(document).ready(function(){
  $(".feat-list").click(function(){
    $(this).toggleClass("expand");
    $(this).find("ul").toggleClass("expand");
  });
});
