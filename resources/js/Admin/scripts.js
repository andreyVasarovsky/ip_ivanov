window.onload = function() {
    $('input[id="agreement_date"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format('YYYY'),10),
        locale: {
            format: 'YYYY-MM-DD'
        }
    });
};
