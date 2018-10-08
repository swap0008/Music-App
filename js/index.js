$('.menu').click(function () {
    $('#player').toggleClass('show');
});



document.querySelector('ol').addEventListener('click', function (event) {
    var id, xhr, audio = document.querySelector('audio');

    id = event.target.href.split('#');
    xhr = new XMLHttpRequest();

    xhr.onload = function () {
        const data = JSON.parse(this.responseText);
        document.querySelector('#title').textContent = data.title;
        document.querySelector('#artist').textContent = data.artist;
        document.querySelector('#main').style.backgroundImage = `url(${data.url})`;
        document.querySelector('source').src = 'Music/' + data.song + '.mp3';
        audio.load();
        audio.play();
    };

    xhr.onerror = function () {

    };

    xhr.open('GET', `getsong.php?id=${id[1]}`);
    xhr.send();

});
