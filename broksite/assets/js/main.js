function isMobile() {
  try{ document.createEvent("TouchEvent"); return true; }
  catch(e){ return false; }
}

if (!isMobile()){
    if (document.title == "Brok Butcher"){
        $('.covervid-video').coverVid(1920, 1080);
    }
}

$(function(){
    $("#searchmenu").slideUp({duration:0});
    $("#search-field").on("focus",function(){
        $("#searchmenu").slideDown();
    })
    $("#search-field").on("blur",function(){
        $("#searchmenu").slideUp();
    })
})
