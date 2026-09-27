document.addEventListener('DOMContentLoaded', () => {

    const burger = document.querySelector('.burger');
    const navLinks = document.querySelector('.nav-links');

    if (!burger || !navLinks) {
        return;
    }

    /*
     * ハンバーガーメニューを開閉
     */
    burger.addEventListener('click', () => {

        navLinks.classList.toggle('active');

        const isOpen =
            navLinks.classList.contains('active');

        burger.setAttribute(
            'aria-expanded',
            isOpen
        );

        /*
         * 三本線 ⇔ ×
         */
        const icon = burger.querySelector('i');

        if (icon) {

            if (isOpen) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-xmark');
            } else {
                icon.classList.remove('fa-xmark');
                icon.classList.add('fa-bars');
            }

        }

    });

    /*
     * メニュー項目を押したら閉じる
     */
    navLinks
        .querySelectorAll('a')
        .forEach((link) => {

            link.addEventListener('click', () => {

                navLinks.classList.remove('active');

                burger.setAttribute(
                    'aria-expanded',
                    'false'
                );

                const icon = burger.querySelector('i');

                if (icon) {
                    icon.classList.remove('fa-xmark');
                    icon.classList.add('fa-bars');
                }

            });

        });

});