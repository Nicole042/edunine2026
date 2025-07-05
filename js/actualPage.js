/* 
 * script actual active page
 */
const currloc = location.href;
const menuItem = document.querySelectorAll("a");
const menuLen = menuItem.length;
for (let i = 0; i < menuLen; i++) {
    if (menuItem[i].href === currloc) {
        const nuevo = menuItem[i].className + " active";
        menuItem[i].className = nuevo;
    }
};

