<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Todos</title>
</head>
<body>
    <div class="text-center">
    <h1 class="text-2xl">What next you need to-DO</h1>
   <form action="/todos/create"method="post"class="py-5">
    @csrf
   <input type="text"name="title" class="py-2 px-2 border rounded"/>
   <input type="submit"value="create"class="p-2 border rounded">
</form> 
  
    </div>
   
   
</body>
</html>