const searching = document.getElementById('search');
searching.addEventListener('change', event => {
    // what to do
});

let data;
fetch('www.kemendikbud.com?univ=all')
    .then(res => {
        data = JSON.parse(res);
    })
    .catch(res => {
        alert(res);
    });
for(data of dt) {
    console.log(dt);
}

let mhs;
fetch('www.kemendikbud.com?mhs=all')
    .then(res => {
        data = JSON.parse(res);
    })
    .catch(res => {
        alert(res);
    });
for(mhs of dt) {
    console.log(dt);
}