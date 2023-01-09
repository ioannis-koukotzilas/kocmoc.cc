/*
Radio Player
*/

function radioPlayer() {
  const stream = new Audio('https://kocmoc1-gecko.radioca.st/stream');

  const station = document.querySelector('.station .track');

  function streamLoad() {
    stream.load();
    station.classList.add('load');
  }

  function streamPlay() {
    stream.play();
    station.classList.remove('load');
    station.classList.add('play');
  }

  function streamPause() {
    stream.pause();
    station.classList.remove('play');
  }

  function togglePlayer() {
    if (stream.paused) {
      streamLoad();
      setTimeout(streamPlay, 2000);
    } else {
      streamPause();
    }
  }

  station.addEventListener('click', () => {
    togglePlayer();
  });
}

radioPlayer();

/**
 * Sidebar
 */

function sidebar() {
  const sidebarBtn = document.getElementById('sidebar-btn');

  const sidebar = document.getElementById('sidebar');

  sidebarBtn.addEventListener('click', () => {
    sidebarBtn.classList.toggle('active');
    sidebar.classList.toggle('active');
  });

  const sidebarLinks = sidebar.querySelectorAll('a[href]');

  for (const sidebarLink of sidebarLinks) {
    sidebarLink.addEventListener('click', () => {
      sidebarBtn.classList.remove('active');
      sidebar.classList.remove('active');
    });
  }

  document.addEventListener('click', (e) => {
    if (e.target.closest('#sidebar-btn') || e.target.closest('#sidebar')) return;

    sidebarBtn.classList.remove('active');
    sidebar.classList.remove('active');
  });
}

sidebar();

/**
 * Centova
 */

(function () {
  var centovacast = window.centovacast || (window.centovacast = {});
  (centovacast.streaminfo || (centovacast.streaminfo = {})).config = { poll_limit: 28800, poll_frequency: 30000 };
})();

/**
 * Ajax
 */

const links = document.querySelectorAll('a[href]');

const cbk = function (e) {
  if (e.currentTarget.href === window.location.href) {
    e.preventDefault();
    e.stopPropagation();
  }
};

for (let i = 0; i < links.length; i++) {
  links[i].addEventListener('click', cbk);
}

barba.init({
  schema: { prefix: 'data-ajax' },
  views: [
    {
      namespace: 'home',
      afterEnter() {
        // fire swiper
      },
    },
    {
      namespace: 'schedule',
      afterEnter() {
        schedule();
      },
    },
  ],
});

barba.hooks.enter(() => {
  window.scrollTo(0, 0);
});
