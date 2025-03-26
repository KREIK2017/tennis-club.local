const video = document.querySelector('.custom-player__video');
const playPauseBtn = document.querySelector('.play-pause');
const playBtnCenter = document.querySelector('.play-btn-center');
const progressBar = document.querySelector('.video-progress-bar');
const progress = document.querySelector('.video-progress');
const currentTimeEl = document.querySelector('.current-time');
const totalTimeEl = document.querySelector('.total-time');
const volumeControl = document.querySelector('.volume-control');  // Повзунок гучності

// Встановлення початкового значення гучності
volumeControl.value = 0.5;

playPauseBtn.addEventListener('click', () => {
  if (video.paused) {
    video.play();
    playPauseBtn.classList.remove('paused');
  } else {
    video.pause();
    playPauseBtn.classList.add('paused');
  }
});

video.addEventListener('loadedmetadata', () => {
  totalTimeEl.textContent = formatTime(video.duration);
});

playBtnCenter.addEventListener('click', () => {
  if (video.paused) {
    video.play();
    playBtnCenter.style.display = 'none';
  } else {
    video.pause();
    playBtnCenter.style.display = 'block';
  }
});

video.addEventListener('timeupdate', () => {
  const current = video.currentTime;
  const duration = video.duration;
  currentTimeEl.textContent = formatTime(current);

  progress.style.width = (current / duration) * 100 + '%';

  if (video.ended) {
    playBtnCenter.style.display = 'block';
  }
});

progressBar.addEventListener('click', (e) => {
  const barWidth = progressBar.clientWidth;
  const clickX = e.offsetX;
  const duration = video.duration;
  const newTime = (clickX / barWidth) * duration;
  video.currentTime = newTime;
});

function formatTime(timeInSeconds) {
  const minutes = Math.floor(timeInSeconds / 60);
  const seconds = Math.floor(timeInSeconds % 60);
  return `${minutes}:${seconds < 10 ? '0' + seconds : seconds}`;
}

// Керування гучністю через повзунок
volumeControl.addEventListener('input', () => {
  video.volume = volumeControl.value;  // Зміна гучності відео
  console.log(`Volume changed: ${video.volume}`); // Перевірка значення гучності
});

// Оновлення значення повзунка гучності при зміні гучності відео
video.addEventListener('volumechange', () => {
  console.log(`Video volume: ${video.volume}`); // Перевірка значення гучності відео
  volumeControl.value = video.volume;  // Синхронізація повзунка з гучністю відео
});
