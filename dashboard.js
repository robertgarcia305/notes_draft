document.addEventListener("DOMContentLoaded", ready); 

function ready() {

    // JavaScript code for displaying the user's name using async/await
    async function fetchUserName() {
        try {
            // Fetch the user's name from the server
            const response = await fetch('get_user_name.php');
            const data = await response.json();

            // Display the user's name in the container
            const userNameContainer = document.getElementById("user-name-container");
            userNameContainer.innerText = `Welcome, ${data.name}!`;
        } catch (error) {
            console.error('Error fetching user name:', error);
            // Handle error, display error message, etc.
        }
    }

    // Call the fetchUserName function when the page loads
    fetchUserName();

}
  