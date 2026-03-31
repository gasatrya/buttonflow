/**
 * ButtonFlow Frontend Logic
 */
(() => {
	'use strict';

	document.addEventListener('DOMContentLoaded', () => {
		const bar = document.getElementById('buttonflow-bar');
		if (!bar) {
			return;
		}

		// Double check for mobile (already handled by CSS media query)
		const isMobile = () => window.matchMedia('(max-width: 767px)').matches;

		if (!isMobile()) {
			return;
		}

		const delay = (typeof buttonflowSettings !== 'undefined' && buttonflowSettings.delay) ? buttonflowSettings.delay : 3000;

		let showTimeout;
		const triggerShow = () => {
			if (showTimeout) {
				clearTimeout(showTimeout);
			}
			showTimeout = setTimeout(() => {
				// Check again if we're still on mobile after the delay (in case window was resized)
				if (isMobile() && !bar.classList.contains('is-visible')) {
					bar.classList.add('is-visible');
				}
			}, delay);
		};

		triggerShow();
		window.addEventListener('resize', triggerShow);
	});
})();
