// https://w3schoolweb.com/how-to-create-a-calendar-in-html-and-css/
// base code ^
var curDate = new Date().getDate();
var curMonth = new Date().getMonth();
var curYear = new Date().getFullYear();
var startDay = new Date(curYear, curMonth, 1).getDay();
var months = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December"
];
var noofdays = [
  "31",
  "28",
  "31",
  "30",
  "31",
  "30",
  "31",
  "31",
  "30",
  "31",
  "30",
  "31"
];
var prevMonth = noofdays[curMonth - 1];
if (curMonth == 11) {
  prevMonth = noofdays[0];
} else if (curMonth == 0) {
  prevMonth = noofdays[11];
}
var totalDays = noofdays[curMonth];
var counter = 0;
var precounter = prevMonth - (startDay - 1);
var rightbox = 6;
var flag = true;
 
jQuery(".curr-month b").text(months[curMonth]);
for (var i = 0; i < 42; i++) {
  if (i >= startDay) {
    counter++;
    if (counter > totalDays) {
      counter = 1;
      flag = false;
    }
    if (flag == true) {
      jQuery(".all-date ul").append(
        '<li class="monthdate">' + counter + "</li>"
      );
    } else {
      jQuery(".all-date ul").append(
        '<li style="opacity:.8">' + counter + "</li>"
      );
    }
  } else {
    jQuery(".all-date ul").append(
      '<li style="opacity:.8">' + precounter + "</li>"
    );
    precounter++;
  }
 
  if (i == rightbox) {
    jQuery(jQuery(".all-date ul li")[rightbox]).addClass("b-right");
    rightbox = rightbox + 7;
  }
 
  if (i > 34) {
    jQuery(jQuery(".all-date ul li")[i]).addClass("b-bottom");
  }
 
  if (
    jQuery(jQuery(".all-date ul li")[i]).text() == curDate &&
    jQuery(jQuery(".all-date ul li")[i]).css("opacity") == 1
  ) {
    jQuery(jQuery(".all-date ul li")[i]).css({
      "background-color": "#AE7CFA",
      color: "#fff"
    });
  }
}

function pageMonth(direction) {
  var months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December"
  ];
  var currentMonth = document.getElementById("month-box").innerHTML;
  var curDate = new Date().getDate();
  var curYear = new Date().getFullYear();

  if(direction == "left") {
    if (currentMonth == "January"){
      return;
    }
    var curMonth = months.indexOf(currentMonth) - 1;
  }

  if(direction == "right") {
    if(currentMonth == "December"){
      return;
    }
    var curMonth = months.indexOf(currentMonth) + 1;
  }

  var startDay = new Date(curYear, curMonth, 1).getDay();


  var noofdays = [
    "31",
    "28",
    "31",
    "30",
    "31",
    "30",
    "31",
    "31",
    "30",
    "31",
    "30",
    "31"
  ];
  var prevMonth = noofdays[curMonth - 1];
  if (curMonth == 11) {
    prevMonth = noofdays[0];
  } else if (curMonth == 0) {
    prevMonth = noofdays[11];
  }
  var totalDays = noofdays[curMonth];
  var counter = 0;
  var precounter = prevMonth - (startDay - 1);
  var rightbox = 6;
  var flag = true;
   
  jQuery(".all-date ul").children().remove();

  jQuery(".curr-month b").text(months[curMonth]);
  for (var i = 0; i < 42; i++) {
    if (i >= startDay) {
      counter++;
      if (counter > totalDays) {
        counter = 1;
        flag = false;
      }
      if (flag == true) {
        jQuery(".all-date ul").append(
          '<li class="monthdate">' + counter + "</li>"
        );
      } else {
        jQuery(".all-date ul").append(
          '<li style="opacity:.8">' + counter + "</li>"
        );
      }
    } else {
      jQuery(".all-date ul").append(
        '<li style="opacity:.8">' + precounter + "</li>"
      );
      precounter++;
    }
   
    if (i == rightbox) {
      jQuery(jQuery(".all-date ul li")[rightbox]).addClass("b-right");
      rightbox = rightbox + 7;
    }
   
    if (i > 34) {
      jQuery(jQuery(".all-date ul li")[i]).addClass("b-bottom");
    }
   
    if (
      jQuery(jQuery(".all-date ul li")[i]).text() == curDate &&
      jQuery(jQuery(".all-date ul li")[i]).css("opacity") == 1
    ) {
      jQuery(jQuery(".all-date ul li")[i]).css({
        "background-color": "#AE7CFA",
        color: "#fff"
      });
    }
  }
}
