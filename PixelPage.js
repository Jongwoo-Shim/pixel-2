var currentDot;
var currentId;
var server;
var xmlhttp = new XMLHttpRequest();

window.addEventListener("load", startup, false);
function startup(){
  selectedColour = document.querySelector("#selectedColour");
  selectedColour.addEventListener("change", sendUpdate, false);
  selectedColour.addEventListener("input",selectingColour,false)
  selectedColour.select();
};

xmlhttp.onreadystatechange = function(){
  if(this.readyState == 4 && this.status == 200){
    var myObj = JSON.parse(this.responseText)
    $(".myObj.id").css("background-color", myObj.color)
  }
}

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