$(function () {
  $.ajax({
    type: "GET",
    url: "https://works.ioa.tw/weather/api/weathers/:id.json",
    dataType: "number",
    error: function (e) {
      console.log('oh no');
    },
    success: function (e) {
      var time = $(e).find('obsTime').text();
      var img = $(e).find('uri').text();
      $('h4').append(time);
      $('.img').append('<img src="'+img+'"/>');
    }
  });
});
