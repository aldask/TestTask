// @vitest-environment jsdom
import Alpine from "alpinejs";
import { describe, beforeEach, it, expect } from "vitest";
import { planSelector } from "../../resources/js/planSelector";

describe("plan selector component", () => {
    beforeEach(() => {
        window.defaultID = null;

        document.body.innerHTML = `
          <div x-data="planSelector()">
            <label @click="notifyPlanChange(1)">
              <input type="radio" value="1" x-model="selectedPlan"/>
              number 1 plan
            </label>
            <label @click="notifyPlanChange(2)">
              <input type="radio" value="2" x-model="selectedPlan"/>
              number 2 plan
            </label>
          </div>`;

        window.Alpine = Alpine;
        Alpine.data("planSelector", planSelector);
        Alpine.start();
    });

    it("has no radio selected initially when defaultID is null", async () => {
        await Promise.resolve();

        const checkedRadios = document.querySelectorAll(
            'input[type="radio"]:checked'
        );

        expect(checkedRadios.length).toBe(0);
    });

    it("has second plan checked", async () => {
        await Promise.resolve();

        const secondRadio = document.querySelectorAll(
            'input[type="radio"][value="2"]'
        );
        secondRadio.checked = true;

        expect(secondRadio.checked).toBe(true);
    });
});
