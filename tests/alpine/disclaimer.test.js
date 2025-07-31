// @vitest-environment jsdom
import { describe, it, beforeEach, expect } from "vitest";
import Alpine from "alpinejs";

describe("disclaimer Alpine test", () => {
    beforeEach(() => {
        document.body.innerHTML = `
            <div x-data="{
                selectedPlanData: null,
                updatePlan(event) {
                    this.selectedPlanData = event.detail;
                }}" x-init="window.addEventListener('plan-changed', event => updatePlan(event));"
                    <span id="price" x-text="selectedPlanData ? ('€' + selectedPlanData.pricing.price.toFixed(2).replace('.', ',')) : '-'"></span>
            </div>`;

        Alpine.start();
    });

    it("updates price when event is dispatched", async () => {
        const priceSpan = document.getElementById("price");

        expect(priceSpan.textContent).toBe("-");

        // dispatching data with triggering
        window.dispatchEvent(
            new CustomEvent("plan-changed", {
                detail: { pricing: { price: 12.5 } },
            })
        );

        await Promise.resolve();

        expect(priceSpan.textContent).toBe("€12,50");
    });
});
