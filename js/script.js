const searching = document.getElementById('search');
searching.addEventListener('change', event => {
    // what to do
});

let data;

fetch('www.kemendikbud.com?univ=all')
    .then(res => {
        data = JSON.parse(res);
    });