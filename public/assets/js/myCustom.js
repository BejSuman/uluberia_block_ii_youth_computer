


// $( document ).ready(function() {
//     var x;
//     x = $('#course').val();
//     if(x == 'dita'){
//         // $('#courseDetails').val() = 'this is cita course';
//         window.alert(5 + 6);
//     }

// });


$(document).ready(function () {
  const input = document.getElementById('course');
  const textElement = document.getElementById('demo');

  function updateValue(e) {
    textElement.textContent = e.target.value;
  }
  input.addEventListener('input', updateValue);




  $("#a, #b, #c").on("keyup", function (e) {
    var a = $("#a").val();
    var b = $("#b").val();
    var c = $("#c").val();

    if (typeof a === 'undefined') {
      a = 0;
    }
    if (typeof b === 'undefined') {
      b = 0;
    }
    if (typeof c === 'undefined') {
      c = 0;
    }
    a = parseInt(a);
    b = parseInt(b);
    c = parseInt(c);

    $("#d").val((a * b) + c);
  })
});