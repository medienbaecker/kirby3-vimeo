const classname = document.getElementsByClassName('vimeo-hint-button');

Array.from(classname).forEach(function (element) {
    element.addEventListener('click', function () {

        const vimeoContainer = element.closest('.vimeo-container');
        vimeoContainer.classList.remove('disabled');

        const img = vimeoContainer.getElementsByTagName('img')[0];
        img.style.display = 'none';

        const embed = vimeoContainer.getElementsByClassName('embed-container')[0];
        embed.style.display = 'block';

        console.log(embed);

        const frame = embed.children[0];
        frame.src = frame.dataset.src;
    });
});