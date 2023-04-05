function burger_flyout() 
{
    var x = document.getElementById("mobile_links");
    if (x.style.display === "block") {
      x.style.display = "none";
    } 
    else {
      x.style.display = "block";
    }
}