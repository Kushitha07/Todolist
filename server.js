const express = require('express');
const bodyParser = require('body-parser');

const app = express();
const PORT = process.env.PORT || 3000;

app.use(bodyParser.json());

let users = [];
let tasks = [];

// API endpoint to add a new user
app.post('/api/users', (req, res) => {
  const newUser = req.body;
  users.push(newUser);
  res.json(newUser);
});

// API endpoint to get all users
app.get('/api/users', (req, res) => {
  res.json(users);
});

// API endpoint to add a new task
app.post('/api/tasks', (req, res) => {
  const newTask = req.body;
  tasks.push(newTask);
  res.json(newTask);
});

// API endpoint to get all tasks
app.get('/api/tasks', (req, res) => {
  res.json(tasks);
});

app.listen(PORT, () => {
  console.log(`Server is running on port ${PORT}`);
});
