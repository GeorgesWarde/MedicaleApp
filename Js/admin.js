function showMenu() {
  $(".dash").toggleClass(" fa-plus  fa-minus");
}
function showMenu2() {
  $(".med").toggleClass(" fa-plus  fa-minus");
}
function infoShow() {
  document.getElementById("allInfo").style.display = "block";
  document.getElementById("Medical").style.display = "none";
  document.getElementById("addDoctor").style.display = "none";
  document.getElementById("addNurse").style.display = "none";
  document.getElementById("statistics").style.display = "none";
  document.getElementById("blood").style.display = "none";
  document.getElementById("dexa").style.display = "none";
}
function medShow() {
  document.getElementById("allInfo").style.display = "none";
  document.getElementById("Medical").style.display = "block";
  document.getElementById("addDoctor").style.display = "none";
  document.getElementById("addNurse").style.display = "none";
  document.getElementById("statistics").style.display = "none";
  document.getElementById("blood").style.display = "none";
  document.getElementById("dexa").style.display = "none";
}
function docShow() {
  document.getElementById("allInfo").style.display = "none";
  document.getElementById("Medical").style.display = "none";
  document.getElementById("addDoctor").style.display = "block";
  document.getElementById("addNurse").style.display = "none";
  document.getElementById("statistics").style.display = "none";
  document.getElementById("blood").style.display = "none";
  document.getElementById("dexa").style.display = "none";
}
function nurShow() {
  document.getElementById("allInfo").style.display = "none";
  document.getElementById("Medical").style.display = "none";
  document.getElementById("addDoctor").style.display = "none";
  document.getElementById("addNurse").style.display = "block";
  document.getElementById("statistics").style.display = "none";
  document.getElementById("blood").style.display = "none";
  document.getElementById("dexa").style.display = "none";
}
function statShow() {
  document.getElementById("allInfo").style.display = "none";
  document.getElementById("Medical").style.display = "none";
  document.getElementById("addDoctor").style.display = "none";
  document.getElementById("addNurse").style.display = "none";
  document.getElementById("statistics").style.display = "block";
  document.getElementById("blood").style.display = "none";
  document.getElementById("dexa").style.display = "none";
}
function bloodshow() {
  document.getElementById("allInfo").style.display = "none";
  document.getElementById("Medical").style.display = "none";
  document.getElementById("addDoctor").style.display = "none";
  document.getElementById("addNurse").style.display = "none";
  document.getElementById("statistics").style.display = "none";
  document.getElementById("blood").style.display = "block";
  document.getElementById("dexa").style.display = "none";
}
function dexashow() {
  document.getElementById("allInfo").style.display = "none";
  document.getElementById("Medical").style.display = "none";
  document.getElementById("addDoctor").style.display = "none";
  document.getElementById("addNurse").style.display = "none";
  document.getElementById("statistics").style.display = "none";
  document.getElementById("blood").style.display = "none";
  document.getElementById("dexa").style.display = "block";
}
