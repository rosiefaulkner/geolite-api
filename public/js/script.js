/**
 * script.js
 *
 * Creates IP identification functionality
 * for the user to output IP information
 * for thier current client
 *
 */
 function getClientIP() {
    fetch("https://checkip.amazonaws.com/").then(res => res.text())
    .then(data => console.log(data))
  }