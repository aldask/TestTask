<div x-data="{
        selectedPlanData: null,
        updatePlan(event) {
            this.selectedPlanData = event.detail;
        }
    }"
    x-init="
        window.addEventListener('plan-changed', event => updatePlan(event));
        selectedPlanData = {{ collect($products)->firstWhere('default', true) ? json_encode(collect($products)->firstWhere('default', true)) : 'null' }}">
    <p class="text-xs leading-[18px] text-[#949494]">
        By clicking Get my plan, I agree to pay
        <span
            x-text="selectedPlanData ? ('€' + selectedPlanData.pricing.price.toFixed(2).replace('.', ',')) : '—'"></span>
        for my plan and that if I do not cancel before the end of the
        4-week introductory plan, Happyo will automatically charge my payment method the regular price
        <span
            x-text="selectedPlanData ? ('€' + selectedPlanData.pricing.original_price.toFixed(2).replace('.', ',')) : '—'"></span>
        every 4 weeks thereafter until I cancel. I can cancel by contacting
        <a class="underline text-[#3A5BA9]" href="mailto:support@gethappyo.co">support@gethappyo.co</a>
    </p>
</div>