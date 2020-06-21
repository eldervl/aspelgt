    /* Check if any part of the element is in the viewport */
    function isAnyPartOfElementInViewport(element) {
        const rect = element.getBoundingClientRect();
        const windowHeight = (window.innerHeight || document.documentElement.clientHeight);
        const windowWidth = (window.innerWidth || document.documentElement.clientWidth);

        const vertInView = (rect.top <= windowHeight) && ((rect.top + rect.height) >= 0);
        const horInView = (rect.left <= windowWidth) && ((rect.left + rect.width) >= 0);

        return (vertInView && horInView);
    }

    function scrollHandler() {
        document.querySelectorAll('.animar:not(.animado)').forEach((element) => {
            if (isAnyPartOfElementInViewport(element) && !element.classList.contains('animado')) {
                element.classList.add('animado');
            }
        })
    }

    window.addEventListener('scroll', scrollHandler);

    /* 
        Call the scroll handler function at first load to 
        show elements that is already in the viewport 
    */
    scrollHandler();