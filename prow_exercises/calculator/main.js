function showResult() {
    var v1 = document.getElementById('first_value').value;
    var v2 = document.getElementById('second_value').value;
    
    if (v1 != "" || v2 != "") {
        var paragraph = document.getElementById('p_resp');
        paragraph.classList.remove('hide');
        localStorage.setItem('resultVisible', 'true');
    }
}

window.addEventListener('load', function() {
    var resultVisible = localStorage.getItem('resultVisible');
    var isPageRefreshed = performance.navigation.type === 1;

    if (resultVisible === 'true' && !isPageRefreshed) {
        var paragraph = document.getElementById('p_resp');
        paragraph.classList.remove('hide');
    } else {
        localStorage.removeItem('resultVisible');
    }
});