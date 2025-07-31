import "./bootstrap";
import Alpine from "alpinejs";
import { countdown } from "./countdown";
import { planSelector } from "./planSelector";

window.Alpine = Alpine;
window.countdown = countdown;
window.planSelector = planSelector;

Alpine.start();
