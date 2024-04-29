async function sendLog(message, name) {
    console.log(message);
    fetch('api/post_log.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            'name': name,
            'message': message
        })
    })
    .catch(error => console.error('Error:', error));
}