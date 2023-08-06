document.addEventListener('DOMContentLoaded', function() {
    // Get the URL query parameters
    const urlParams = new URLSearchParams(window.location.search);
    const showAll = urlParams.get('show_all');

    // Check if the "show_all" parameter is present and truthy
    if (showAll && showAll.toLowerCase() === 'true') {
        // Show all students (example: remove pagination or any filtering)
        const table = document.querySelector('.table');
        const rows = table.getElementsByTagName('tr');
        for (let i = 1; i < rows.length; i++) {
            rows[i].style.display = ''; // Show the row
        }
    }
});
