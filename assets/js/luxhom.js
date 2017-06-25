// var views = $(".lh-listing");
var views = document.querySelectorAll(".lh-listing");

for (var i = 0; i < views.length; i++){
    var img = $(views[i]).attr("lx-img");
    console.log(views[i]);
    views[i].style.backgroundImage = "url("+img+")";
    views[i].style.backgroundRepeat = "no-repeat";
    views[i].style.backgroundSize = "cover";
    views[i].style.backgroundPosition = "center";
}