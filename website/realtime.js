function getRealTime() {
    var domicecreamtypes = document.getElementById("icecreamtypecount");
    var domicecreams = document.getElementById("icecreamcount");
    var domlistprice = document.getElementById("listpricetotal");

    var request = new XMLHttpRequest();
    request.open("GET", "realtime.php", true);
    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            var xmldoc = request.responseXML;

            var xmlicecreamtypes = xmldoc.getElementsByTagName("icecreamtypes")[0];
            var icecreamtypes = xmlicecreamtypes.childNodes[0].nodeValue;

            var xmlicecreams = xmldoc.getElementsByTagName("icecreams")[0];
            var icecreams = xmlicecreams.childNodes[0].nodeValue;

            var xmllistprice = xmldoc.getElementsByTagName("listprice")[0];
            var listprice = xmllistprice.childNodes[0].nodeValue;

            domicecreamtypes.innerHTML = icecreamtypes;
            domicecreams.innerHTML = icecreams;
            domlistprice.innerHTML = listprice;
        }
    };
    request.send();
}