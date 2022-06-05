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
    document.getElementById("statistics").style.display="none";
  
  }
  function medShow() {
    document.getElementById("allInfo").style.display = "none";
    document.getElementById("Medical").style.display = "block";
    document.getElementById("addDoctor").style.display = "none";
    document.getElementById("addNurse").style.display = "none";
    document.getElementById("statistics").style.display="none";
  
  }
  function docShow() {
    document.getElementById("allInfo").style.display = "none";
    document.getElementById("Medical").style.display = "none";
    document.getElementById("addDoctor").style.display = "block";
    document.getElementById("addNurse").style.display = "none";
    document.getElementById("statistics").style.display="none";
  
  }
  function nurShow() {
    document.getElementById("allInfo").style.display = "none";
    document.getElementById("Medical").style.display = "none";
    document.getElementById("addDoctor").style.display = "none";
    document.getElementById("addNurse").style.display = "block";
    document.getElementById("statistics").style.display="none";
  
  }
  function statShow(){
    document.getElementById("allInfo").style.display = "none";
    document.getElementById("Medical").style.display = "none";
    document.getElementById("addDoctor").style.display = "none";
    document.getElementById("addNurse").style.display = "none";
    document.getElementById("statistics").style.display="block";
  }
  