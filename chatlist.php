<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <style>
    .chat-list {
  width: 300px;
  height: 400px;
  overflow-y: auto;
  padding: 10px;
  border: 1px solid #ccc;
}

.chat-list ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.chat-list li {
  padding: 10px;
  border-bottom: 1px solid #ccc;
  cursor: pointer;
}

.chat-list li:hover {
  background-color: #f0f0f0;
}

.chat-avatar {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  overflow: hidden;
  margin-right: 10px;
}

.chat-avatar img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.chat-info {
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.chat-info h4 {
  font-weight: bold;
  margin-bottom: 5px;
}

.chat-info p {
  font-size: 14px;
  color: #666;
}

.chat-info span {
  font-size: 12px;
  color: #999;
}
  </style>
</head>
<body>

<div class="chat-list">
  <ul>
    <li>
      <div class="chat-avatar">
        <img src="https://via.placeholder.com/50" alt="User Avatar">
      </div>
      <div class="chat-info">
        <h4>User Name</h4>
        <p>Last Message</p>
        <span>10:45 AM</span>
      </div>
    </li>
    <li>
      <div class="chat-avatar">
        <img src="https://via.placeholder.com/50" alt="User Avatar">
      </div>
      <div class="chat-info">
        <h4>User Name</h4>
        <p>Last Message</p>
        <span>10:45 AM</span>
      </div>
    </li>
    <!-- Add more list items for each chat -->
  </ul>
</div>
</body>
</html>