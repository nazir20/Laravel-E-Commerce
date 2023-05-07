<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>{{$order->name}} Bill</title>
</head>
<body>
    <div class="text-center">
        <h1>CyberMart</h1>
    </div>
    <div class="container mt-5">
        <p>Customer Name: {{$order->name}}</p>
        <p>Customer Email: {{$order->email}}</p>
        <p>Customer Phone: {{$order->phone}}</p>
        <p>Customer Address: {{$order->address}}</p>
    </div>
    <div class="container text-center pt-4">
        <img style="width: 30%" src="products_images/{{$order->image}}" alt="product_image">
        <p>Product Tracking ID: {{$order->tracking_id}}</p>
        <p>Quantity: {{$order->quantity}}</p>
        <p>Price: {{$order->price}}</p>
    </div>
</body>
</html>