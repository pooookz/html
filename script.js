document.querySelectorAll('td').forEach(box => {
    box.addEventListener('click', () => {
        const pngImage = document.getElementById('png-image');
        const table = document.querySelector('table');
        const tableRect = table.getBoundingClientRect();
        const tableLeft = tableRect.left;
        const tableTop = tableRect.top;
        const x = box.offsetLeft + tableLeft;
        const y = box.offsetTop + tableTop;
        pngImage.style.left = `${x}px`;
        pngImage.style.top = `${y}px`;
        pngImage.style.display = 'block';
    });
});