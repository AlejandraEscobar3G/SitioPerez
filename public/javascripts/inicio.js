$(function() {
  $('#home-tab').hover(function () {
    $("#home").show();
  }, function () {
    $("#home").hide();
  });

  $('#profile-tab').hover(function () {
    $("#profile").show();
  }, function () {
    $("#profile").hide();
  });

  $('#messages-tab').hover(function () {
    $("#messages").show();
  }, function () {
    $("#messages").hide();
  });

  $('#settings-tab').hover(function () {
    $("#settings").show();
  }, function () {
    $("#settings").hide();
  });
});