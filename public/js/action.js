$(document).ready(function () {
    $("#open").click(function (e) {
        e.preventDefault();
        $(".left_sidebar").addClass("show");
        $(".left_sidebar").removeClass("hide");
    });

    $("#close").click(function (e) {
        e.preventDefault();
        $(".left_sidebar").addClass("hide");
        $(".left_sidebar").removeClass("show");

    });

    $("#fouces").click(function (e) {
        e.preventDefault();
        // alert("hello")
    })
});