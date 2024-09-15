<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		.chat-box {
  width: 300px;
  height: 400px;
  border: 1px solid #ccc;
  padding: 10px;
}

.message-header {
  background-color: #f0f0f0;
  padding: 10px;
  border-bottom: 1px solid #ccc;
}

.message-page {
  padding: 10px;
}

.message-page ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.message-page li {
  margin-bottom: 10px;
}

.message-bottom {
  padding: 10px;
  background-color: #f0f0f0;
  border-top: 1px solid #ccc;
}

#message-input {
  width: 80%;
  padding: 10px;
  border: 1px solid #ccc;
}

#send-button {
  width: 20%;
  padding: 10px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}
	</style>
</head>
<body>
		<div class="chat-box">
  <div class="message-header">
    <h4>User Name</h4>
    <p>Last seen: 10 minutes ago</p>
  </div>
  <div class="message-page">
    <ul>
      <!-- incoming and outgoing messages will be displayed here -->
    </ul>
  </div>
  <div class="message-bottom">
    <input type="text" id="message-input" placeholder="Type a message...">
    <button id="send-button">Send</button>
  </div>
</div>
</body>
</html>