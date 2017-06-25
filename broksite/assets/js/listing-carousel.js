

var tmpl;
if ($("#tmp_slider")[0]){
    var tmpl = $("#tmp_slider").html();
}

var thmb_tmpl;
if ($("#tmp_slider_thumb")[0]){
    var thmb_tmpl = $("#tmp_slider_thumb").html();
}


    // $.ajax({
    //     datatype: "json",
    //     url:"http://corbbingoldsmith.com/served-img/listings.json",
    //     xhrFields: {
    //         withCredentials: true
    //     },}).done(function(data){
    //     console.log(data[0].images)
    // })

var listing_data = [
	{
		"name" : "1231 Lago Vista Dr",
		"location" : "1231 Lago Vista Dr.Beverly Hills, California, 90210 United States",
		"realtor" : "Brok Butcher",
		"price" : "43,900,000",
		"form_subject" : "{{name}} is interested in {{listing}}",
		"description": "No expense was spared in designing this un-parralled 7-bedroom,11-bath residence at 1231 Lago Vista Dr. A stunning 6 ft Mooichandelier, 2 sets of floating staircases, & an original Andy Warhol greet guests at the entrance. The main level & all baths feature NanoGlass, a scratch & stainproof stone composite slab. All carpeting iscustom-sized & hand-knotted. The oversized elevator is fronted bycustom L’invisible bank vault doors, & even the air conditioning ventsare configure vertically for a sleek, seamless appearance. Over a milliondollars in furnishings by B&B Italia, Minotti, & Gandia Blasco are offsetby the latest in-home inspirations & technology, including 33 soaringfloor to ceiling Rimadesio Italian glass magnetic doors. Fully integratedCrestron automation & environment controls make adjustment of allhousehold systems as easy as the push of a button. Other highlightsinclude a 600-bottle floating backlit wine cellar that opens with a thumbprint & a state-of-the-art home theater. ",
		"city" : "LA",
		"beds" : 7,
		"baths" : 11,
		"size" : "12,000",
		"images" : ["http:corbbingoldsmith.com/served-img/s1.jpg","http:corbbingoldsmith.com/served-img/s2.jpg","http:corbbingoldsmith.com/served-img/s3.jpg","http:corbbingoldsmith.com/served-img/s4.jpg"],
	}
]

$.each(listing_data["images"],function(i,v){
    Mustache.render($("#tmp_slider_thumb"),{img:v})
})

if (tmpl){
    $("#thmb_container").children().each(function(i,e){
        var imgt = $(this).attr("data-img");
//         create a slider for the @{attr data-img}
        var html = Mustache.render(tmpl,{img:imgt});
        $("#carousel-items").append(html)
//         create a function to hold the index and 
//         slide to the image when clicked.
        function fn(){
            var tmp = i + 0; // copy @{int i}
            console.log(tmp)
            $("#carousel-1").carousel(tmp);
        }
        $(e).click(fn);
    })
    $($("#carousel-items").children()[0]).addClass("active")
}