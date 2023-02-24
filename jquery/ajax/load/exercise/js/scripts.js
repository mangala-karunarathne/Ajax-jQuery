$(document).ready(function () {
  // Loading the contents of the home page
  $("main").load("content.php #home");

  // checking id of the link clicked
  $("a").click(function(){

    // Add Loading Spinner
    $("main").html('<div class="loading"><img src="img/Spinner-3.gif" alt="loading"></div>');

// This is an alternative way to use loading spinner
//     var spinner = $('<img src="img/Spinner-3.gif" alt="loading">');
//   spinner.on('load', function() {
//     $("main").html('<div class="loading"></div>').find('.loading').append(spinner);
//   });

    // removing active class from all links
    $('a').removeClass('active');
    $(this).addClass('active');
    var clickedLink = $(this).attr('id');
    // alert("You are now re directing to " + clickedLink + " Page");
    $("main").load("content.php #" + clickedLink);

  });
});
