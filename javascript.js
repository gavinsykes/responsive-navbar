document.addEventListener("DOMContentLoaded",() => {
    document.getElementById('nav-open').onclick = (e) => {
        document.getElementsByTagName('nav')[0].classList.toggle('open');
    }
});
