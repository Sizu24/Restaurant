function maps() {
  // Initialize and add the map
  function initMap() {

    const locations = [
      {
        place: 'reno',
        lat: 39.529,
        lng: -119.814,
      },
      {
        place: 'sd',
        lat: 32.715,
        lng: -117.161,
      },
      {
        place: 'sj',
        lat: 37.338,
        lng: -121.885,
      }
    ];

    // Loop through locations array to create maps and markers
    locations.forEach((location) => {
      const coords = {lat: location.lat, lng: location.lng};

      // New map instance with coords
      const map = new google.maps.Map(document.querySelector(`.map-${location.place}-js`),{
        zoom: 15,
        center: coords,
      });

      // The marker, positioned at each location
      const marker = new google.maps.Marker({
        position: coords,
        map: map,
      });
    });
  }

  window.initMap = initMap;
}

export default maps;
