function lawn_care_open_tab(evt, cityName) {
    var lawn_care_i, lawn_care_tabcontent, lawn_care_tablinks;
    lawn_care_tabcontent = document.getElementsByClassName("tabcontent");
    for (lawn_care_i = 0; lawn_care_i < lawn_care_tabcontent.length; lawn_care_i++) {
        lawn_care_tabcontent[lawn_care_i].style.display = "none";
    }
    lawn_care_tablinks = document.getElementsByClassName("tablinks");
    for (lawn_care_i = 0; lawn_care_i < lawn_care_tablinks.length; lawn_care_i++) {
        lawn_care_tablinks[lawn_care_i].className = lawn_care_tablinks[lawn_care_i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

jQuery(document).ready(function () {
    jQuery( ".tab-sec .tablinks" ).first().addClass( "active" );
});