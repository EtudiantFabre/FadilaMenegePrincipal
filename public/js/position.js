const findMyState = () => {
    const status = document.querySelector(".status");
    const positionRetrouver = document.querySelector(".positionRetrouver");

    const success = (position) => {
        //status.textContent = position.coords;
        //console.log(position);
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;
        //console.log(latitude + ' ' + longitude);

        const geoApiUrl = `https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=${latitude}&longitude=${longitude}&localityLanguageRequested=fr`
        
        fetch(geoApiUrl)
        .then(res => res.json())
        .then(data => {
            //console.log(data);<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63053.34551892141!2d1.1100477192737033!3d8.987409426963854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10294dc366c5cb3b%3A0x221133ef84b9b035!2zU29rb2TDqQ!5e0!3m2!1sfr!2stg!4v1664639371225!5m2!1sfr!2stg" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
            status.textContent = status.innerHTML + data.city +  " : " +data.principalSubdivision;
            positionRetrouver.value = data.city;
            document.querySelector(".retPosition").disabled = true;
            document.getElementById("continuer").disabled = false;
        })
    };

    const error = () => {
        status.textContent =
            "Erreur : Nous n'avons pas réussit votre localisation";
    };

    navigator.geolocation.getCurrentPosition(success, error);
};

document.querySelector(".retPosition").addEventListener("click", findMyState);
document.querySelector(".retPosition1").addEventListener("click", findMyState);
document.querySelector(".retPosition2").addEventListener("click", findMyState);
document.querySelector(".retPosition3").addEventListener("click", findMyState);


/*

const findMyState = () => {
    const status = document.querySelector(".status");
    //const map = document.getElementById("map");

    const success = (position) => {
        //status.textContent = position.coords;
        //console.log(position);
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;
        //console.log(latitude + ' ' + longitude);

        
        
        let options = {
            zoom : 8,
            center : new google.maps.LatLng(latitude, longitude),
            mapTypeId : google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById("map"), options);

        //google.maps.event.addEventListener('window', 'load', loadMap(latitude, longitude));

        const geoApiUrl = `https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=${latitude}&longitude=${longitude}&localityLanguageRequested=fr`;

        fetch(geoApiUrl)
            .then((res) => res.json())
            .then((data) => {
                //console.log(data);<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63053.34551892141!2d1.1100477192737033!3d8.987409426963854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10294dc366c5cb3b%3A0x221133ef84b9b035!2zU29rb2TDqQ!5e0!3m2!1sfr!2stg!4v1664639371225!5m2!1sfr!2stg" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                let iframe =
                    "<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d77256.76840274093!2d1.1100477192737033!3d8.987409426963854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10294dc366c5cb3b%3A0x221133ef84b9b035!2zU29rb2TDqQ!5e1!3m2!1sfr!2stg!4v1664487984640!5m2!1sfr!2stg' width='400' height='300' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>";
                status.innerHTML = iframe + "<br>";
                status.textContent =
                    status.innerHTML +
                    data.city +
                    " : " +
                    data.principalSubdivision;
            });
    };
    function loadMap(lat, long){
        let options = {
            zoom : 8,
            center : new google.maps.LatLng(lat, long),
            mapTypeId : google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById("map"), options);
    }

    /*const error = () => {
        status.textContent =
            "Erreur : Nous n'avons pas réussit votre localisation";
    };

    function erreurGeo(erreur) {
        let mag;
        switch (erreur.code) {
            case erreur.TIMEOUT:
                mag = "Le temps de la requète à expiré";
                break;

            case erreur.UNKNOWN_ERROR:
                mag = "Une erreur inconnu s'est produite";
                break;

            case erreur.POSITION_UNAVAILABLE:
                mag = "eRREUR TECHNIQUE";
                break;

            case erreur.PERMISSION_DENIED:
                mag = "Vous avez réfusé la géolocalisation";
                break;
        }
        status.innerHTML = mag;
    }

    navigator.geolocation.getCurrentPosition(success, erreurGeo, { maximumAge: 120000});
};

//document.querySelector(".retPosition").addEventListener('click', 'load', loadMap(latitude, longitude));
document.querySelector(".retPosition").addEventListener("click", findMyState);
*/