function ImprimtVisibility() {
    const x = document.getElementById("imprimt");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }


    const y = document.getElementById('chartdiv');
    if (y.style.height === '20vh') {
        y.style.height = '100vh';
    } else {
        y.style.height = '100vh';
    }


    var c = document.getElementById("contact");
    if (c.style.display === "block") {
        c.style.display = "none";

    }

    // var c = document.getElementById("imprimt");
    // if (c.style.display === "none") {
    //     var c = document.getElementById("contact");
    //     (c.style.display === "none") {
    //
    // y.style.height = '100vh';
}


