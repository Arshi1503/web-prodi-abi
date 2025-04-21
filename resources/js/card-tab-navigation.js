document.addEventListener('DOMContentLoaded', () => {
    const tabButtons = document.querySelectorAll('.tab-button');

    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            const target = button.getAttribute('data-tab');

            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.add('tw-hidden');
            }); 

            tabButtons.forEach(button => {
                button.classList.remove('tw-text-[#BC8947]', 'tw-border-b-2', 'tw-border-[#BC8947]', 'tw-font-semibold');
                button.classList.add('tw-text-gray-600');
            });

            document.getElementById(target).classList.remove('tw-hidden');
            button.classList.remove('tw-text-gray-600');
            button.classList.add('tw-text-[#BC8947]', 'tw-border-b-2', 'tw-border-[#BC8947]', 'tw-font-semibold');
        });
    });
});