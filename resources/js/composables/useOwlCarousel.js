import { nextTick, onMounted, onUnmounted } from 'vue';

/**
 * Initialize a TemplateMo Owl Carousel after Vue has rendered the slides.
 * jQuery + owl-carousel.js must already be loaded from app.blade.php.
 */
export function useOwlCarousel(selector, options) {
    onMounted(async () => {
        await nextTick();

        const $ = window.jQuery;

        if (!$?.fn?.owlCarousel) {
            return;
        }

        $(selector).owlCarousel(options);
    });

    onUnmounted(() => {
        const $ = window.jQuery;

        if (!$?.fn?.owlCarousel) {
            return;
        }

        $(selector).trigger('destroy.owl.carousel');
    });
}
