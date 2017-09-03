
function ModalWindow() {
    var darkLayer = document.createElement('div'),
        fadeInBox = document.getElementById('popup'),
        closeBtn = document.getElementById('close');
    darkLayer.id = 'fade';
    document.body.appendChild(darkLayer);
    console.log(fadeInBox);

    function init() {
        fadeInBox.style.display = 'block';


        darkLayer.onclick = function() {
            removeDarkLayer();
            fadeInBox.style.display = 'none';
            return false;
        }

        if (closeBtn) {
            closeBtn.onclick = function() {
                removeDarkLayer();
                fadeInBox.style.display = 'none';
                return false;
            }
        }
    }

    function removeDarkLayer() {
        darkLayer.parentNode.removeChild(darkLayer);
    }

    init();
}

