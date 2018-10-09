    var Lo, La;
	Lo = document.getElementById("Lo");
    La = document.getElementById("La");
    function init_map() {
        /*地圖參數相關設定 Start*/
        var Options = {
            zoom: 14, /*縮放比例*/
            center: new google.maps.LatLng(Lo,La) /*所查詢位置的經緯度位置*/
        };
        
        map = new google.maps.Map(document.getElementById("gmap_canvas"), Options);
        /*地圖參數相關設定 End*/
        
        /*自行設定圖標 Start*/
        var image = {
            url: 'https://goo.gl/images/WgrRgR', /*自定圖標檔案位置或網址*/
            // This marker is 20 pixels wide by 32 pixels high.
            size: new google.maps.Size(20, 32), /*自定圖標大小*/
            // The origin for this image is (0, 0).
            origin: new google.maps.Point(0, 0),
            // The anchor for this image is the base of the flagpole at (0, 32).
            anchor: new google.maps.Point(0, 32)
          };
        
          marker = new google.maps.Marker({
            map: map,
            position: new google.maps.LatLng(Lo,La), /*圖標經緯度位置*/
            icon: image
        });
        /*自行設定圖標 End*/
        
        /*所查詢位置詳細資料 Start*/
        infowindow = new google.maps.InfoWindow({content:"蜂箱所在位置"});
        infowindow.open(map, marker);
        /*所查詢位置詳細資料 End*/
    }
    google.maps.event.addDomListener(window, 'load', init_map);