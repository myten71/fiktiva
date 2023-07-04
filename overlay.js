
 function overlay() {
    var overlay = document.getElementById("overlay");
    var navContainer = document.getElementById("navcontainer");
    var togglerIcon = document.querySelector(".navbar-toggler-icon");
  
    if (overlay.style.display === "block") {
      overlay.style.display = "none";
      navContainer.classList.remove("show");
    } else {
      overlay.style.display = "block";
      navContainer.classList.add("show");
    }
  }