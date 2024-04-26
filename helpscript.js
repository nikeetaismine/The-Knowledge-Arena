function submitForm() {
    // Collect form data
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;

    // Display form data (you can customize this part)
    console.log("Name: " + name);
    console.log("Email: " + email);
    console.log("Message: " + message);

    // Reset form after submission (optional)
    document.getElementById("contactForm").reset();
}
