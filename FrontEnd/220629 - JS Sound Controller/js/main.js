let audio = document.getElementById('audio'),
    btnPlayPause = document.getElementById('btn-play-pause'),
    audioStatus = document.querySelector('.audio-status'),
    checkStaus = 0;

function playPause() {
    if(checkStaus == 0) {
        checkStaus = 1;
        audio.play();
        btnPlayPause.innerHTML = 'Pause<i class="fa fa-pause"></i>';
        audioStatus.classList.add('active');
    }
    else {
        checkStaus = 0;
        audio.pause();
        btnPlayPause.innerHTML = 'Play<i class="fa fa-play"></i>';
        audioStatus.classList.remove('active');
    }
    console.log(checkStaus)
}
function stop() {
        playPause();
        audio.pause();
        audio.currentTime = 0;
        btnPlayPause.innerHTML = 'Play<i class="fa fa-play"></i>';
        audioStatus.classList.remove('active');
}

