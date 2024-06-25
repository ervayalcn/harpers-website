<div x-data="{ imageSize: window.innerWidth <= 992 ? 'small' : 'large' }" x-init="() => { 
    window.addEventListener('resize', () => {
        imageSize = window.innerWidth <= 992 ? 'small' : 'large';
    });
}">
    <img class="imgad" :src="imageSize === 'small' ? 'images/320x100.png' : 'images/970x250.png'" alt="Resim">
</div>
