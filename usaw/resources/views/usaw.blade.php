<!-- resources/views/usaw.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>USAW Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        input[type="checkbox"] {
            margin-right: 5px;
        }
        button {
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
   <h1>Welcome to the USAW page!</h1>
   <form action="/usaw" method="POST">
       @csrf
       <div class="form-group">
           <label for="name">Name:</label>
           <input type="text" id="name" name="name" required>
       </div>
       <button type="submit">Submit</button>
   </form>
</body>

</html>
