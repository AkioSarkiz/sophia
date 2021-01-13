$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
$('#sidebar-wrapper a[href="' + window.location.pathname + '"]').addClass("active");

// window.addEventListener('click', function(e) {
//     if (document.getElementById('page-content-wrapper').contains(e.target)) {
//         if (window.innerWidth < 990 && $("#wrapper").hasClass("toggled")) {
//             $("#wrapper").removeClass("toggled");
//         }
//     } 
// });
$("#page-content-wrapper").click(function() {
    if (window.innerWidth < 990 && $("#wrapper").hasClass("toggled")) $("#wrapper").removeClass("toggled");
});