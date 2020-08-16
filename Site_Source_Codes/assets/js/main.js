$("#uni-btn").click(function fullSearch() {
// $("#uni-src-inp").keyup(function() {
  // Retrieve the input field text and reset the count to zero

  var filter = $('#uni-src-inp').val(),
  count = 0;


  // Loop through the comment list
  $('.video-main-div').each(function() {



    // If the list item does not contain the text phrase fade it out
    if ($(this).text().search(new RegExp(filter, "i")) < 0) {
      $(this).fadeOut();  // MY CHANGE


      // Show the list item if the phrase matches and increase the count by 1
    } else {
      $(this).fadeIn(); // MY CHANGE
      count++;


    }
  });




});

// $("#uni-btn").click(function fullSearch2() {
//
//   var allHidden = true;
//   $('.video-main-div').each(function() {
//   if($(this).is(':visible'))
//   {
//    allHidden = false;
//
//     return false;//break out of each looping function as soon as first visible div is found
//   }
// });
// if(allHidden)
//  $('.search-no-result').css('display','block');
// else
//  $('.search-no-result').css('display','none');
// });
