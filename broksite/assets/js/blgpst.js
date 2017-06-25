var posts = $(".blg-post>div");

for (var i = 0; i < posts.length; i++){
    var img = $(posts[i]).attr("data-img");
    posts[i].style.backgroundImage = "url("+img+")";
    posts[i].style.backgroundRepeat = "no-repeat";
    posts[i].style.backgroundSize = "cover";
    posts[i].style.backgroundPosition = "center";

}