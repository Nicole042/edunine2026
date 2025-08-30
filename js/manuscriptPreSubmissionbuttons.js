document.addEventListener('DOMContentLoaded', function() {
    
    function toggleContent(contentId, buttonElement) {
        // Hide all content containers
        const allContents = document.querySelectorAll('.content-container');
        allContents.forEach(content => {
            content.classList.remove('show');
        });

        // Remove active class from all buttons
        const allButtons = document.querySelectorAll('.manuscript-button');
        allButtons.forEach(button => {
            button.classList.remove('active');
        });

        // Show selected content and mark button as active
        const targetContent = document.getElementById(contentId);
        if (targetContent && targetContent.classList.contains('show')) {
            targetContent.classList.remove('show');
            buttonElement.classList.remove('active');
        } else if (targetContent) {
            targetContent.classList.add('show');
            buttonElement.classList.add('active');
        }
    }

    // Add event listeners to buttons
    document.querySelectorAll('.manuscript-button').forEach(button => {
        button.addEventListener('click', function() {
            const contentId = this.getAttribute('data-content');
            toggleContent(contentId, this);
        });
    });
     const defaultButton = document.querySelector('.manuscript-button[data-content="callForPapers"]');
    if (defaultButton) {
        toggleContent('callForPapers', defaultButton);
    }
    
});