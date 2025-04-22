document.addEventListener('DOMContentLoaded', () => {
    const tabButtons = document.querySelectorAll('.tab-button');

    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            const target = button.getAttribute('data-tab');

            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.add('tw-hidden');
            }); 

            tabButtons.forEach(button => {
                button.classList.remove('tw-tab-nav-active');
                button.classList.add('tw-tab-nav-deactive');
            });

            document.getElementById(target).classList.remove('tw-hidden');
            button.classList.remove('tw-tab-nav-deactive');
            button.classList.add('tw-tab-nav-active');
        });
    });
});