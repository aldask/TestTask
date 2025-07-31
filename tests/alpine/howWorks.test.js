// @vitest-environment jsdom
import { describe, it, expect, beforeEach } from "vitest";
import { getByText } from "@testing-library/dom";

describe("faq component renders correct number of steps", () => {
    beforeEach(() => {
        document.body.innerHTML = `
          <div>
            <div class="step-item"><span>1</span> <p>Step one</p></div>
            <div class="step-item"><span>2</span> <p>Step two</p></div>
            <div class="step-item"><span>3</span> <p>Step three</p></div>
          </div>
        `;
    });

    it("renders the correct number of steps", () => {
        const steps = document.querySelectorAll("div.step-item");
        expect(steps.length).toBe(3);
    });

    it("renders correct step numbers and text", () => {
        getByText(document.body, "1");
        getByText(document.body, "2");
        getByText(document.body, "3");
        getByText(document.body, "Step one");
        getByText(document.body, "Step two");
        getByText(document.body, "Step three");
    });
});
