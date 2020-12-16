
//Content Link Variables
var appendCode;
var valPass;

function getVars() {
  // if (valPass == "display_current_date_time") {
  //   appendCode = '<iframe src="Display-Current-Time-and-Date.html" class="content-frame" frameborder="0"></iframe>';
  //   alert("Value: " + appendCode+"\n"+valPass);
  // } else if (valPass == 'demo') {
  //   appendCode = '<iframe src="demo.html" class="content-frame" frameborder=""></iframe>';
  // }else{
  // }
  switch (valPass) {
    case 'display_current_date_time':
      appendCode = '<iframe src="Display-Current-Time-and-Date.html" class="content-frame" frameborder="0"></iframe>';
      break;
    case 'demo':
      appendCode = '<iframe src="demo.html" class="content-frame" frameborder="0"></iframe>';
      break;
    default:
      appendCode = 'Could not get data';
      break;
  }
}

//End

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
$(".navigation-bar-login-div-Toggle").click(function () {
  $('#navigation-bar-login-div-function').slideToggle();
});
// login box show hide End

// Search box show hide start
$(".unervisal-search-button-Toggle").click(function () {
  $('#navigation-bar-search-div-function').slideToggle();
});
// Search box show hide end

// Full Search Filter Script Start
$("#uni-btn").click(function () {
  var filter = $('#uni-src-inp').val(),
    count = 0;
  $('.video-main-div').each(function () {
    if ($(this).text().search(new RegExp(filter, "i")) < 0) {
      $(this).fadeOut();
    } else {
      $(this).fadeIn('slow');
      count++;
    }
  });
  var resultVal = $("#res-val").val();
  document.getElementById("res-val").innerHTML = resultVal;

  if ($(window).width() <= 600) {
    $('.navigation-bar-search').fadeOut();
    $('.navigation-bar-login-div').fadeOut();
  }

  $('.clear-search-div').fadeIn();
  $('.search-one-result').fadeIn();
});

$('#uni-src-inp').keypress(function (event) {
  var keycode = (event.keyCode ? event.keyCode : event.which);
  if (keycode == '13') {
    var filter = $('#uni-src-inp').val(),
      count = 0;
    $('.video-main-div').each(function () {
      if ($(this).text().search(new RegExp(filter, "i")) < 0) {
        $(this).fadeOut();
      } else {
        $(this).fadeIn('slow');
        count++;
      }
    });
    var resultVal = $("#result-val").val();
    $("result-val").text(resultVal);

    if ($(window).width() <= 600) {
      $('.navigation-bar-search').fadeOut();
      $('.navigation-bar-login-div').fadeOut();
    }
    $('.clear-search-div').fadeIn();
    $('.search-one-result').fadeIn();
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

//clear search
// var blanktxt = $.trim( $('.unervisal-search-input').val() )
var blanktxt = "";
$('.clear-search-div').click(function () {
  $('.unervisal-search-input').val(blanktxt);
  $('.clear-search-div').fadeOut();
  $('.search-one-result').fadeOut();
  $('.video-main-div').fadeIn();
});

//Button pointer click
$(function () {

  //creating a style object for the ripple effect
  function RippleStyle(width, height, posX, posY) {
    this.width = (width <= height) ? height : width;
    this.height = (width <= height) ? height : width;
    this.top = posY - (this.height * 0.5);
    this.left = posX - (this.width * 0.5);
  }

  $('.button-animation').on('mousedown', function (e) {
    //appending an element with a class name "btn-ripple"
    var rippleEl = $('<span class="btn-ripple"></span>').appendTo(this);

    //getting the button's offset position
    var pos = $(this).offset();

    //get the button's width and height
    var width = $(this).outerWidth();
    var height = $(this).outerHeight();

    //get the cursor's x and y position within the button
    var posX = e.pageX - pos.left;
    var posY = e.pageY - pos.top;

    //adding a css style to the ripple effect
    var rippleStyle = new RippleStyle(width, height, posX, posY);
    rippleEl.css(rippleStyle);
  });

  //this event listener will be triggered once the ripple animation is done
  $('.button-animation').on('animationend webkitAnimationEnd oanimationend MSAnimationEnd', '.button-animation-ripple', function () {
    $(this).remove();
  });
});

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

//Tooltip Script Start
$(document).ready(function () {
  $('[data-toggle="tooltip"]').tooltip();
});
//tooltip script end

// login box show hide start
$(".navigation-bar-login-div-Toggle").click(function () {
  $('#navigation-bar-login-div-function').slideToggle();
});
// login box show hide End

// Search box show hide start
$(".unervisal-search-button-Toggle").click(function () {
  $('#navigation-bar-search-div-function').slideToggle();
});
// Search box show hide end

// Full Search Filter Script Start
$("#uni-btn").click(function () {
  var filter = $('#uni-src-inp').val(),
    count = 0;
  $('.video-main-div').each(function () {
    if ($(this).text().search(new RegExp(filter, "i")) < 0) {
      $(this).fadeOut();
    } else {
      $(this).fadeIn('slow');
      count++;
    }
  });
  var resultVal = $("#res-val").val();
  document.getElementById("res-val").innerHTML = resultVal;

  if ($(window).width() <= 600) {
    $('.navigation-bar-search').fadeOut();
    $('.navigation-bar-login-div').fadeOut();
  }

  $('.clear-search-div').fadeIn();
  $('.search-one-result').fadeIn();
});

$('#uni-src-inp').keypress(function (event) {
  var keycode = (event.keyCode ? event.keyCode : event.which);
  if (keycode == '13') {
    var filter = $('#uni-src-inp').val(),
      count = 0;
    $('.video-main-div').each(function () {
      if ($(this).text().search(new RegExp(filter, "i")) < 0) {
        $(this).fadeOut();
      } else {
        $(this).fadeIn('slow');
        count++;
      }
    });
    var resultVal = $("#result-val").val();
    $("result-val").text(resultVal);

    if ($(window).width() <= 600) {
      $('.navigation-bar-search').fadeOut();
      $('.navigation-bar-login-div').fadeOut();
    }
    $('.clear-search-div').fadeIn();
    $('.search-one-result').fadeIn();
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

//clear search
// var blanktxt = $.trim( $('.unervisal-search-input').val() )
var blanktxt = "";
$('.clear-search-div').click(function () {
  $('.unervisal-search-input').val(blanktxt);
  $('.clear-search-div').fadeOut();
  $('.search-one-result').fadeOut();
  $('.video-main-div').fadeIn();
});

//Button pointer click
$(function () {

  //creating a style object for the ripple effect
  function RippleStyle(width, height, posX, posY) {
    this.width = (width <= height) ? height : width;
    this.height = (width <= height) ? height : width;
    this.top = posY - (this.height * 0.5);
    this.left = posX - (this.width * 0.5);
  }

  $('.button-animation').on('mousedown', function (e) {
    //appending an element with a class name "btn-ripple"
    var rippleEl = $('<span class="btn-ripple"></span>').appendTo(this);

    //getting the button's offset position
    var pos = $(this).offset();

    //get the button's width and height
    var width = $(this).outerWidth();
    var height = $(this).outerHeight();

    //get the cursor's x and y position within the button
    var posX = e.pageX - pos.left;
    var posY = e.pageY - pos.top;

    //adding a css style to the ripple effect
    var rippleStyle = new RippleStyle(width, height, posX, posY);
    rippleEl.css(rippleStyle);
  });

  //this event listener will be triggered once the ripple animation is done
  $('.button-animation').on('animationend webkitAnimationEnd oanimationend MSAnimationEnd', '.button-animation-ripple', function () {
    $(this).remove();
  });
});

function iframeView(link) {
  $('.right-main-div').append(link);
}

function delCurrentView() {
  $('.temp_div').remove();
  event.preventDefault();
}

function replyClick(clickedId) {
  valPass = clickedId;
  //alert(clickedId)
};

$(document).ready(function () {
  $('.video-main-div .frm-content').click(function () {
    replyClick(this.id);
    alert("Value: " + valPass);
    getVars();
    delCurrentView();
    iframeView(appendCode);
  });
});
