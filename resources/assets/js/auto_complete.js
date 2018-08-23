function disableAutoCompleteAll() {
    setTimeout(function () {
        var disabledAutoFills = document.querySelectorAll("[data-disable-auto-complete='true']");

        disabledAutoFills.forEach(function (e) {
            e.setAttribute('value', '');
            e.value = '';
        })
    }, 100)
}

module.exports = disableAutoCompleteAll;
