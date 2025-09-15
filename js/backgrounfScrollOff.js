let scrollY = 0;
function lockScroll() {
scrollY = window.scrollY || document.documentElement.scrollTop;
document.body.style.position = 'fixed';
document.body.style.top = `-${scrollY}px`;
document.body.style.width = '100%';
}
function unlockScroll() {
const y = document.body.style.top;
document.body.style.position = '';
document.body.style.top = '';
document.body.style.width = '';
window.scrollTo(0, y ? -parseInt(y, 10) : 0);
}
// Attach once to all modals
document.querySelectorAll('.modal').forEach(function (m) {
m.addEventListener('show.bs.modal', lockScroll);
m.addEventListener('hidden.bs.modal', unlockScroll);
});
