<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Admin</title>
  <style>
    /* Reset and base */
    * {
      box-sizing: border-box;
    }
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f0f2f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    form {
      background: white;
      padding: 2.5rem 3rem;
      border-radius: 10px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 380px;
      display: flex;
      flex-direction: column;
      gap: 1.25rem;
    }
    input[type="email"],
    input[type="password"] {
      padding: 0.75rem 1rem;
      font-size: 1rem;
      border: 1.5px solid #ccc;
      border-radius: 6px;
      transition: border-color 0.3s ease;
      outline-offset: 2px;
    }
    input[type="email"]:focus,
    input[type="password"]:focus {
      border-color: #007bff;
      outline: none;
    }
    button {
      background-color: #007bff;
      color: white;
      padding: 0.75rem 1rem;
      border: none;
      border-radius: 6px;
      font-weight: 600;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    button:hover {
      background-color: #0056b3;
    }
    button:active {
      background-color: #004494;
    }
  </style>
</head>
<body>
<form action="{{ route("user.login") }}" method="POST">
    @csrf
    @method('POST')
    <input type="email" name="email" placeholder="Email" required />
    <input type="password" name="password" placeholder="Password" required />
    <button type="submit">Login</button>
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
