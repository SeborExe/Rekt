const domain = 'http://localhost/NewRekt';

window.onload = function(event) {
    let text = document.getElementById('text');
    let PhantomR = document.getElementById('phantomR');
    let PhantomL = document.getElementById('phantomL');
    let btn2 = document.getElementById('btn2');
    let rocks = document.getElementById('rocks');
    let water = document.getElementById('water');
    let header = document.getElementById('header');

    window.addEventListener('scroll', function() {
        let value = window.scrollY;

        text.style.top = 50 + value * -0.25 + '%';
        phantomL.style.top= value * -0.5 + 'px';
        phantomL.style.left = value * 2 + 'px';
        phantomR.style.top = value * -1.5 + 'px';
        phantomR.style.left = value * -5 + 'px';
        btn2.style.marginTop = value * 1.5 + 'px';
        rocks.style.top = value * -0.12 + 'px';
        header.style.top = value * 0.5 + 'px';
    });
};
