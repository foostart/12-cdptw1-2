$(document).ready(function () {
    $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
                $(this).toggleClass('open');
            }
    );
    $("#yearsPicker").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years"
    });
    $("#datePicker").datepicker();

    $("#nameOnCard").prop('maxLength', 20);
    $("#blAddress").prop('maxLength', 20);
});