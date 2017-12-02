var currentDot;
var currentId;
var server;
// var source = new EventSource("demo_sse.php");

window.addEventListener("load", startup, false);
function startup(){
  selectedColour = document.querySelector("#selectedColour");
  selectedColour.addEventListener("change", sendUpdate, false);
  selectedColour.addEventListener("input",selectingColour,false)
  selectedColour.select();
};
// Figure out how to work it
// source.onmessage = function(event) {
//     document.getElementById("result").innerHTML += event.data + "<br>";
// }; 

$(".dot").on("click", function() {
  currentDot = $(this);
  currentId = $(this).attr('id')
  $('#selectedColour')[0].click();
});

function selectingColour(event){
  currentDot.css("background-color", event.target.value);
}
function sendUpdate(event){
  var color = document.getElementById("selectedColour");
//   GET Request
  var xhr = new XMLHttpRequest();
  var url = server + encodeURIComponent(JSON.stringify({"id": currentId, "color": color.value}));
  xhr.open("GET", url, true);
  xhr.setRequestHeader("Content-type", "application/json");
  xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
          var json = JSON.parse(xhr.responseText);
          console.log(json.id + ", " + json.color);
      }
  };
  xhr.send();
}