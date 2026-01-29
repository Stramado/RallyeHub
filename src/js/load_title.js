async function writeTitleWatchVideo() {
    const embedUrl = document.querySelector('.video-player-container iframe').getAttribute('src');
    try {
        const titleElement = document.querySelector('.video-title');
        const data = await getYouTubeMeta(embedUrl);

        titleElement.textContent = data.title;
    } catch (err) {
        console.log('An error as occured : ', err)
    }
}

document.addEventListener('DOMContentLoaded', writeTitleWatchVideo);