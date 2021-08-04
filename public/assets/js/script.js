$(document).ready(function() {
    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();
    $('#sports').select2(
        {
            placeholder: "selcet sports"
        }
    );
    $('#cities').select2();
});

