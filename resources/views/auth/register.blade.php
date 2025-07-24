<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Registration</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f7f7f7;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    form {
      background: white;
      padding: 2rem 2.5rem;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      width: 320px;
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }
    h2 {
      margin-bottom: 1rem;
      text-align: center;
      color: #333;
    }
    input[type="text"],
    input[type="email"],
    input[type="password"] {
      padding: 0.7rem 1rem;
      border: 1.5px solid #ccc;
      border-radius: 5px;
      font-size: 1rem;
      outline-offset: 2px;
      transition: border-color 0.25s ease;
    }
    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus {
      border-color: #007bff;
      outline: none;
    }
    button {
      padding: 0.8rem;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 6px;
      font-weight: bold;
      cursor: pointer;
      font-size: 1rem;
      transition: background-color 0.3s ease;
    }
    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <form action="{{ route("user.register") }}" method="POST">
    <h2>Create Account</h2>
    @csrf
    @method('POST')
    <input type="text" name="name" placeholder="Full Name" required />
    <input type="email" name="email" placeholder="Email Address" required />
    <input type="text" name="phone" placeholder="Phone" required>
    <input type="text" name="avatar" placeholder="Avatar URL">
    <input type="text" name="student_id" placeholder="Student ID" required>
    <input type="password" name="password" placeholder="Password" required />
    <input type="password" name="password_confirmation" placeholder="Confirm Password" required />
    <button type="submit">Register</button>
  </form>
  @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>
