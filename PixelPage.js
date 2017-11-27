var currentDot;

window.addEventListener("load", startup, false);
function startup(){
  selectedColour = document.querySelector("#selectedColour");
  selectedColour.addEventListener("change", sendUpdate, false);
  selectedColour.select();
}

$(".block").on("click", function() {
  currentDot = $(this);
  $('#selectedColour')[0].click();
});

$('#selectedColour').on('input', function(event) {
    currentDot.css("background-color", event.delegateTarget.value);
});

function sendUpdate(event) {
  alert("hello World")
}
