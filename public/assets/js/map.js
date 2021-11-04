$(document).ready(function(){
    StarMap();
})
function StarMap() {
    var mapOptions = {
                zoom: 14,
                center: new google.maps.LatLng(10.406402, -75.495291),
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                panControl: false,
                zoomControl: true,
                mapTypeControl: false,
                scaleControl: false,
                streetViewControl: false,
                overviewMapControl: false,
                draggable: true
            };
    var mapa = new google.maps.Map(document.getElementById('mapi'), mapOptions);
    mark = new google.maps.Marker({
      map: mapa,
      draggable: true,
      animation: google.maps.Animation.DROP,
      position: {lat: 10.406402, lng: -75.495291}

    });
    mark.addListener('click', toggleBounce);
    
    function toggleBounce() {
        if (mark.getAnimation() !== null) {
            mark.setAnimation(null);
        } else {
            var latitud = `${mark.position.lat()}` ;
            latitud=latitud.replace(".",",")
            var longitud = `${mark.position.lng()}`; 
            longitud=longitud.replace(".",",")
            $("#latitud").val(latitud);
            $("#longitud").val(longitud);
            console.log(latitud)
            mark.setAnimation(google.maps.Animation.BOUNCE);
           // $("#myModal").modal("hide");
        }
    }
    $("#radio").change(function(){
        $("#reportar").removeAttr("disabled")
    })
}