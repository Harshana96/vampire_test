// src/App.jsx

import { BrowserRouter as Router, Routes, Route, Link } from 'react-router-dom';
import './App.css';
import Login from './pages/auth/login';
import Register from './pages/auth/register';

function App() {
  return (
    <Router>
      <div style={{ textAlign: 'center', margin: '50px' }}>
        <h1>Welcome to Product List</h1>
        <p>Please choose an option below:</p>

        <nav>
          <Link to="/register" style={{ marginRight: '15px' }}>
            <button>Register</button>
          </Link>
          <Link to="/login">
            <button>Login</button>
          </Link>
        </nav>

        <Routes>
          <Route path="/register" element={<Register />} />
          <Route path="/login" element={<Login />} />
        </Routes>
      </div>
    </Router>
  );
}

export default App;
