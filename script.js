$(document).ready(function () {
    // Handle form submission
    $("#registrationForm").submit(function (event) {
        event.preventDefault();  // Prevent default form submission behavior (page reload)

        // Get form input values
        var name = $("#name").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var dob = $("#dob").val();

        // Display the submitted data in the result section
        $("#displayName").text(name);
        $("#displayEmail").text(email);
        $("#displayPhone").text(phone);
        $("#displayDob").text(dob);

        // Show the result section
        $("#result").show();

        // Optionally, reset the form
        $("#registrationForm")[0].reset();
    });
});
