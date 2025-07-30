import "./bootstrap";
import Alpine from "alpinejs";
import { countdown } from "./countdown";

window.Alpine = Alpine;
window.countdown = countdown;

Alpine.start();
