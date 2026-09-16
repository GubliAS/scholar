import { nextTick, onMounted, onUnmounted } from 'vue';

/**
 * Initialize TemplateMo Isotope masonry + filter after Vue has rendered course cards.
 * isotope.min.js must already be loaded from app.blade.php.
 */
export function useIsotope(boxSelector = '.event_box', filterSelector = '.event_filter') {
    let isotope = null;
    let filtersElem = null;

    function isAnchor(target) {
        if (typeof window.matchesSelector === 'function') {
            return window.matchesSelector(target, 'a');
        }

        return target.matches?.('a');
    }

    function onFilterClick(event) {
        if (!isAnchor(event.target) || !isotope) {
            return;
        }

        const filterValue = event.target.getAttribute('data-filter');
        isotope.arrange({
            filter: filterValue,
        });
        filtersElem.querySelector('.is_active')?.classList.remove('is_active');
        event.target.classList.add('is_active');
        event.preventDefault();
    }

    onMounted(async () => {
        await nextTick();

        const elem = document.querySelector(boxSelector);
        filtersElem = document.querySelector(filterSelector);

        if (!elem || typeof window.Isotope !== 'function') {
            return;
        }

        isotope = new window.Isotope(elem, {
            itemSelector: '.event_outer',
            layoutMode: 'masonry',
        });

        if (filtersElem) {
            filtersElem.addEventListener('click', onFilterClick);
        }
    });

    onUnmounted(() => {
        filtersElem?.removeEventListener('click', onFilterClick);
        isotope?.destroy();
        isotope = null;
        filtersElem = null;
    });
}
