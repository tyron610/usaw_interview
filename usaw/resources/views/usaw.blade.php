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
   <form action="" method="POST">
       @csrf
       <div class="form-group">
           <label for="name">Name:</label>
           <input type="text" id="name" name="name" required>
       </div>
       <div class="form-group">
           <label for="color">Favorite Color:</label>
           <select id="color" name="color" required>
               <option value="">Select a color</option>
               <option value="red">Red</option>
               <option value="green">Green</option>
               <option value="blue">Blue</option>
               <option value="yellow">Yellow</option>
               <option value="black">Black</option>
               <option value="white">White</option>
               <option value="purple">Purple</option>
               <option value="orange">Orange</option>
               <option value="brown">Brown</option>
           </select>
       </div>
       <div class="form-group">
           <label>
               <input type="checkbox" id="consent" name="consent" required>
               I acknowledge I am submitting this for Tyron Everett's USAW Interview Project.
           </label>
       </div>
       <button type="submit">Submit</button>
   </form>
</body>