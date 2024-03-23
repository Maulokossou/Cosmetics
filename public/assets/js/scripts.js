$(document).ready(function(){

    // GETTING GEO POSITIONS....
    var options = {
        enableHighAccuracy: true,
        timeout: 10000,
        maximumAge: 10000,
    };
    
    function success(pos) {
        var crd = pos.coords;
        console.log(crd);
        console.log('Votre position actuelle est :');
        console.log(`Latitude : ${crd.latitude}`);
        console.log(`Longitude : ${crd.longitude}`);
        console.log(`La précision est de ${crd.accuracy} mètres.`);
        latitudeInput.value = crd.latitude;
        longitudeInput.value = crd.longitude;
        swal('Localisation éffectuée', "Les champs de coordonnées ont été mis à jour", 'success');
    }
    
    function error(err) {
        swal('Localisation impossible', "Veuillez activer l'àccès à votre navigateur", "error");
    }
    
    const latitudeInput = document.getElementById('latitude');
    const longitudeInput = document.getElementById('longitude');
    
    let getCurrentPositionButton = document.getElementById('get-current-position-button');
    
    getCurrentPositionButton.addEventListener('click', (evt) => {
        // evt.stopPropagation();
            swal('Getting position')
        navigator.permissions.query({name:'geolocation'}).then((result) => {
            if (result.state === 'granted' || result.state === 'prompt') {
                navigator.geolocation.getCurrentPosition(success, error, options);
            } else if (result.state === 'denied') {
                swal('Erreur', 'Accès à la localisation désactivée', 'error');
            }
            // Don't do anything if the permission was denied.
        });
    })
    
    // LEAFLET POSITION PICKER
    
    $('#pick-position-button').leafletLocationPicker({
        alwaysOpen: false,
        mapContainer: '#map-container',
        // position: center,
        location: [8.607690, 2.31584],
        map: {
            zoom: 7,
        },
        height: 500,
        layer: L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
            maxZoom: 20,
            subdomains:['mt0','mt1','mt2','mt3']
        }),
    }).on('show', function (e) {
        $('#map-container').removeClass('invisible');
        window.location.href="#map-container";
        swal('Sélectionner une localisation', 'Cliquez sur un point du Map pour choisir une localisation', 'info');
    }).on('changeLocation', (e) => {
        latitudeInput.value = e.latlng.lat;
        longitudeInput.value = e.latlng.lng;
    });
    
    $('.leaflet-control.leaflet-locpicker-close').on('click', function() {
        $('#map-container').addClass('invisible');
    }) 

})


