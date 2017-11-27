var currentDot;

window.addEventListener("load", startup, false);
function startup(){
  selectedColour = document.querySelector("#selectedColour");
  selectedColour.addEventListener("change", sendUpdate, false);
  selectedColour.addEventListener("input",selectingColour,false)
  selectedColour.select();
}

$(".dot").on("click", function() {
  currentDot = $(this);
  $('#selectedColour')[0].click();
});

function selectingColour(event){
  currentDot.css("background-color", event.target.value);
}
function sendUpdate(event) {
  alert("hello World")
}
