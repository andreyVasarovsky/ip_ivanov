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


    document.getElementById("clear-filters").addEventListener("click", clearFilters);
    function clearFilters(e) {
        console.log(e);
        Object.values(e.target.closest('form').querySelectorAll('input[type="text"]')).map(input => {
            input.value = '';
        });


        // let submitBtnList = e.target.closest('form').querySelectorAll('[type="submit"]');
        if(typeof submitBtnList[0] !== "undefined"){
            submitBtnList[0].click();
        }
    }
};
