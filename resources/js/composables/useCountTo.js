import { nextTick, onMounted } from 'vue';

/**
 * Start TemplateMo countTo timers after Vue has rendered the fun-facts numbers.
 * jQuery + counter.js must already be loaded from app.blade.php.
 */
export function useCountTo(selector = '.fun-facts .timer') {
    onMounted(async () => {
        await nextTick();

        const $ = window.jQuery;

        if (!$?.fn?.countTo) {
            return;
        }

        $('.fun-facts .count-number').data('countToOptions', {
            formatter(value, options) {
                return value
                    .toFixed(options.decimals)
                    .replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
            },
        });

        $(selector).each(function startCount() {
            const $this = $(this);
            $this.countTo($this.data('countToOptions') || {});
        });
    });
}
