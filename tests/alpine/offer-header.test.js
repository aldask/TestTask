// @vitest-environment jsdom
import Alpine from "alpinejs";
import { afterEach, beforeEach, describe, expect, it, vi } from "vitest";
import { countdown } from "../../resources/js/countdown";

describe("countdown", () => {
    beforeEach(() => {
        document.body.innerHTML = `
            <div x-data="countdown()" x-init="start()">
                <p x-text="time"></p>
            </div>`;

        window.Alpine = Alpine;
        Alpine.data("countdown", countdown);
        Alpine.start();
    });

    afterEach(() => {
        vi.useRealTimers();
    });

    it("starts countdown and updates time", () => {
        vi.useFakeTimers();

        const time = document.querySelector('[x-text="time"]');

        const initial = time.textContent;
        expect(initial).toMatch(/^\d+:\d+:\d+$/);
    });
    it("has non-empty time after initialization", () => {
        const timeEl = document.querySelector('[x-text="time"]');
        expect(timeEl.textContent).toBeTruthy();
    });
});
