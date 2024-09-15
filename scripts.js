const messageInput = document.getElementById('message-input');
const sendButton = document.getElementById('send-button');
const messagePage = document.querySelector('.message-page ul');

sendButton.addEventListener('click', () => {
  const message = messageInput.value;
  if (message !== '') {
    const messageHTML = `
      <li>
        <span>${message}</span>
        <span>10:45 AM</span>
      </li>
    `;
    messagePage.innerHTML += messageHTML;
    messageInput.value = '';
  }
});