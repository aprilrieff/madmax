const map = L.map('map').setView([41.97151090509655, -91.65723725767275], 17);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

const greenIcon = L.icon({
    iconUrl: '../img/squaremax.png',
    // shadowUrl: 'img/leafletjs/leaf-shadow.png',

    iconSize: [50, 50], // size of the icon
    // shadowSize:   [50, 64], // size of the shadow
    iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
    // shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor: [-3, -100] // point from which the popup should open relative to the iconAnchor
});

const marker = L.marker([41.97151090509655, -91.65723725767275], {icon: greenIcon}).addTo(map);

// var circle = L.circle([41.911206, -91.650797], {
//     color: 'red',
//     fillColor: '#f03',
//     fillOpacity: 0.5,
//     radius: 50
// }).addTo(map);
//
// var polygon = L.polygon([
//     [41.91219106604928, -91.64905213071386],
//     [41.90916225806021, -91.64901091597706],
//     [41.908732845802426, -91.65103043807989]
// ],{
//     color: '#ededed',
//     fillColor: '#008f2b',
//     fillOpacity: 0.5
// }).addTo(map);

marker.bindPopup("<b>Mad Max</b>").openPopup();
// circle.bindPopup("I am a circle.");
// polygon.bindPopup("I am a polygon.");