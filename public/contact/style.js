document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("sendLetter").addEventListener("click", function() {
        document.querySelector(".wrapper").classList.add("sent");

        // Create and show the notification
        const notification = document.createElement("div");
        notification.className = "notification";
        notification.textContent = "Message sent!";
        document.body.appendChild(notification);

        // Hide the notification after 3 seconds
        setTimeout(function() {
            notification.style.opacity = "0";
            setTimeout(function() {
                document.body.removeChild(notification);
            }, 1000);
        }, 3000);
    });
});

document.getElementById('sendLetter').addEventListener('click', function(event) {
    const email = document.getElementById('email').value;
    const emailError = document.getElementById('email-error');

    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!emailPattern.test(email)) {
        emailError.style.display = 'block';
        event.preventDefault();
    } else {
        emailError.style.display = 'none';
    }
});
  