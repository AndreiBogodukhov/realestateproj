const $btn = window['dark-mode-toggle'];

const bodyClassList = document.body.classList;
const storageKey = 'isDarkModeEnabled';

let isEnabled = localStorage.getItem(storageKey);

const update = () => {
	bodyClassList.toggle('dark-mode', isEnabled);
};

const save = () => {
	if (isEnabled) localStorage.setItem(storageKey, true);
	else localStorage.removeItem(storageKey);
};

const toggle = () => {
	isEnabled = !isEnabled;

	update();
	save();
};

update();

$btn.addEventListener('click', toggle);
                                