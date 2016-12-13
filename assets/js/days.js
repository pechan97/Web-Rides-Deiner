$(document).ready(function() {

    $('.daysquery').click(function(){
       debugger
      var id = $(this).attr('id');
      alert(id);
    var daysRide = id;
     var splitD = daysRide.split("-");
  var day = $('.check');
  alert(day);
        for (var i = 0; i < day.length; i++) {
            for (var j = 0; j < splitD.length; j++) {
                if (day[i].value == splitD[j]) {
                    day[i].checked = true;

                    break;
                }
            }
        }

    });

});