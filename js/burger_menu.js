function burger_flyout() 
{
    var x = document.getElementById("mobile_links");
    if (x.style.display === "grid") {
      x.style.display = "none";
    } 
    else {
      x.style.display = "grid";
    }
}