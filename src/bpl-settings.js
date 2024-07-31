import { createRoot } from "react-dom/client";
import BPLSettings from "./BPLSettings";

import './bpl-settings.scss';

document.addEventListener('DOMContentLoaded', () => {
	const bPlSettingsEl = document.getElementById('bPlSettings');
	const options = JSON.parse(bPlSettingsEl.dataset.options);
	const nonce = bPlSettingsEl.dataset.nonce;

	createRoot(bPlSettingsEl).render(<BPLSettings options={options} nonce={nonce} />);
});