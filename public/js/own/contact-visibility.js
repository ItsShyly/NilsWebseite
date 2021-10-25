function ContactVisibility() {
    var x = document.getElementById("contact");
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


    var c = document.getElementById("imprimt");
    if (c.style.display === "block") {
        c.style.display = "none";



    }


}