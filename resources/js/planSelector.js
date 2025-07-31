export function planSelector() {
    return {
        selectedPlan: window.defaultID,
        products: window.products,
        notifyPlanChange(id) {
            this.selectedPlan = id;
            const plan = this.products.find((p) => p.id === id);
            window.dispatchEvent(
                new CustomEvent("plan-changed", { detail: plan })
            );
        },
    };
}
