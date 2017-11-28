var currentDot;

// window.addEventListener("load", startup, false);
$(function (){
  selectedColour = document.querySelector("#selectedColour");
  selectedColour.addEventListener("input",selectingColour,false)
  selectedColour.select();

  $(".block").on("click", function() {
    currentDot = $(this);
    $('#selectedColour')[0].click();
  });
});

function selectingColour(event){
  currentDot.css("background-color", event.target.value);
}
function sendUpdate(event) {
  alert("hello World")
}
