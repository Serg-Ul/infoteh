document.addEventListener('DOMContentLoaded', () => {
    const datepickerEl = document.querySelector('.custom-datepicker');

    if (datepickerEl) {
        const datepicker = new Datepicker(datepickerEl, {
            minDate: new Date(),
            maxDate: new Date().setFullYear(new Date().getFullYear() + 1),
            defaultValue: new Date()
        });
        const datepickerElValue = datepickerEl.getAttribute('value');

        if (datepickerElValue) {
            const [day, month, year] = datepickerElValue.split('/');
            const defaultDate = new Date(year, month - 1, day);

            datepicker.setDate(Date.parse(defaultDate));
        }
    }
})
