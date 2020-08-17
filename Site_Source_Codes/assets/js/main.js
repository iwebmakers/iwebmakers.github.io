  // main left div list Search Filter Script Start
  function mysearchlistFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("src-inp");
    filter = input.value.toUpperCase();
    ul = document.getElementById("search-box-list");
    li = ul.getElementsByClassName("src-list");
    for (i = 0; i < li.length; i++) {
      a = li[i].getElementsByClassName("src-anc")[0];
      txtValue = a.textContent || a.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        li[i].style.display = "";
      } else {
        li[i].style.display = "none";
      }
    }
  }
  // main left div list Search Filter Script end

  // login box show hide start
  $(".navigation-bar-login-div-Toggle").click(function() {
    $('#navigation-bar-login-div-function').fadeToggle();
  });
  // login box show hide End

// Search box show hide start
  $(".unervisal-search-button-Toggle").click(function() {
    $('#navigation-bar-search-div-function').fadeToggle();
  });
  // Search box show hide end

  // Full Search Filter Script Start
      $("#uni-btn").click(function() {
        var filter = $('#uni-src-inp').val(),
        count = 0;
        $('.video-main-div').each(function() {
          if ($(this).text().search(new RegExp(filter, "i")) < 0) {
            $(this).fadeOut();
          } else {
            $(this).fadeIn('slow');
            count++;
          }
        });
      });

      $('#uni-src-inp').keypress(function(event){
  var keycode = (event.keyCode ? event.keyCode : event.which);
  if(keycode == '13')
  {
    var filter = $('#uni-src-inp').val(),
    count = 0;
    $('.video-main-div').each(function() {
      if ($(this).text().search(new RegExp(filter, "i")) < 0) {
        $(this).fadeOut();
      } else {
        $(this).fadeIn('slow');
        count++;
      }
    });
  }
  });
       // Full Search Filter Script End

       // search box show hide start
      function searchboxshowhidefunction() {
      var x = document.getElementById("navigation-bar-search-div-function");
      if (x.style.display === "none") {
      x.style.display = "block";
    } else {
        x.style.display = "none";
      }
    }
   // search box show hide start
