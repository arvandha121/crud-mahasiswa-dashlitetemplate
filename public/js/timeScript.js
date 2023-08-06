
$(document).ready(function() {
    $("#tanggal_lahir").datepicker({
        dateFormat: "yy-mm-dd", // Format tanggal yang ditampilkan
        changeMonth: true,
        changeYear: true
    });

    // Function to update date and time every second
    function updateDateTime() {
        var currentDate = new Date();
        var dateTimeString = currentDate.toLocaleString();
        // Get the current day and append it to the dateTimeString
        var day = currentDate.toLocaleDateString(undefined, {
            weekday: 'long'
        });
        dateTimeString = day + ', ' + dateTimeString;
        $("#currentDateTime").text(dateTimeString);
    }

    // Call updateDateTime initially
    updateDateTime();
    
    // Call updateDateTime every second using setInterval
    setInterval(updateDateTime, 1000);
});