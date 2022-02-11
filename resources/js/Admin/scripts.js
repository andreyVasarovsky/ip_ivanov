window.onload = function () {
    $('input[id="agreement_date"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format('YYYY'), 10),
        locale: {
            format: 'YYYY-MM-DD'
        }
    });
    $('input[id="agreement_date_from_filter"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format('YYYY'), 10),
        locale: {
            format: 'YYYY-MM-DD'
        }
    });
    $('input[id="agreement_date_till_filter"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format('YYYY'), 10),
        locale: {
            format: 'YYYY-MM-DD'
        }
    });

    let clearFilterBtn = document.getElementById("clear-filters");
    if (clearFilterBtn !== null) {
        clearFilterBtn.addEventListener("click", clearFilters);

        function clearFilters(e) {
            Object.values(e.target.closest('form').querySelectorAll('input[type="text"]')).map(input => {
                input.value = '';
            });
            Object.values(e.target.closest('form').querySelectorAll('input[type="number"]')).map(input => {
                input.value = '';
            });
            $(e.target.closest('form').querySelectorAll('select')).find('option').map((index, option) => {
                if (index === 0)
                    option.selected = true;
                else
                    option.selected = false;
            });

            //Reset multiple select
            $(e.target.closest('form').getElementsByClassName('selectpicker')[0]).val('default');
            $(e.target.closest('form').getElementsByClassName('selectpicker')[0]).selectpicker('refresh');


            let submitBtnList = e.target.closest('form').querySelectorAll('[type="submit"]');
            if(typeof submitBtnList[0] !== "undefined"){
                submitBtnList[0].click();
            }
        }
    }
};

