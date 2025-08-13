let map;
let marker;

const iecLocation = { lat: 49.054534, lng: 2.0398485 };


function initMap() {
    try {
        map = new google.maps.Map(document.getElementById("map"), {
            zoom: 17,
            center: iecLocation,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: [
                {
                    featureType: "all",
                    elementType: "geometry.fill",
                    stylers: [{ weight: "2.00" }]
                },
                {
                    featureType: "all",
                    elementType: "geometry.stroke",
                    stylers: [{ color: "#9c9c9c" }]
                },
                {
                    featureType: "all",
                    elementType: "labels.text",
                    stylers: [{ visibility: "on" }]
                }
            ]
        });

        const navyMarkerIcon = {
            path: "M12,2C8.13,2 5,5.13 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9C19,5.13 15.87,2 12,2M12,7A2,2 0 0,1 14,9A2,2 0 0,1 12,11A2,2 0 0,1 10,9A2,2 0 0,1 12,7Z",
            fillColor: '#1e3a8a', // Navy blue color
            fillOpacity: 1,
            strokeColor: '#ffffff',
            strokeWeight: 2,
            scale: 1.5,
            anchor: new google.maps.Point(12, 22) 
        };

        marker = new google.maps.Marker({
            position: iecLocation,
            map: map,
            title: "IEC TELECOM EUROPE",
            icon: navyMarkerIcon,
            animation: google.maps.Animation.DROP
        });

        const infoWindow = new google.maps.InfoWindow({
            content: `
                <div style="padding: 10px; max-width: 250px;">
                    <h3 style="margin: 0 0 10px 0; color: #1e3a8a; font-size: 16px;" class="main-heading-map">IEC TELECOM EUROPE</h3>
                    <p style="margin: 0; font-size: 14px; color: #374151;">
                        <strong>Address:</strong><br>
                        47 Avenue des Genottes<br>
                        95800 Cergy, France
                    </p>
                    <p style="margin: 10px 0 0 0; font-size: 12px; color: #6b7280;">
                        Leading satellite communication provider
                    </p>
                </div>
            `
        });

        marker.addListener("click", () => {
            infoWindow.open(map, marker);
        });

        setTimeout(() => {
            infoWindow.open(map, marker);
        }, 1000);

    } catch (error) {
        console.error('Error initializing map:', error);
        document.getElementById('map').innerHTML = '<div class="error">Error loading map. Please check your internet connection and try again.</div>';
    }
}

window.initMap = initMap;

window.gm_authFailure = function() {
    document.getElementById('map').innerHTML = '<div class="error">Google Maps authentication failed. Please check your API key.</div>';
};