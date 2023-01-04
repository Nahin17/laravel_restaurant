<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style >
       
        .navbar{
        
            background-color: teal;
        
            display: flex; /*div ke column e pashapashi ana hoise */
        
            justify-content: flex-end; /*div ke right side e ana hoise */
           
        }
        
        .navbar a{
        
            color : lightgoldenrodyellow;
        
            font-size: 1rem;
        
            text-decoration: none;
         
           
        
            padding: 20px;
        }
        
        
        .navbar a:hover{
            background-color: dimgrey;
        }
        
        
        
         .nom{
        
            float: left;
        
           
        
            font-size: 1.5rem;
        
            font-weight: bold;
        
            padding: 15px; 
        
            font-style: italic;  
           
        }
        
        /* CSS for Social */
        
        .social ul{
            list-style-type: none;
        
        }
        
        .social ul li{
            display: inline;
            padding: 1%;
        
        }
        .div_center{
            text-align: center;
            padding-top: 1%

        }
        .div_design{
            padding-bottom: 15px;

        }
             
             lable{
                display: inline-block;
                width: 200px;
             }
            </style>
            
        
</head>
<body>
    @include('admin.header')
    <div class="div_center">
    

    <form action="{{url('/add_food')}}" method="POST" encytype="multipart/form-data">
    @csrf
    <fieldset>
    <div class="div_design">
      
    <label> Food Title:</label>
    <input class="" type="text" name="title" placeholder="Write a title" required="" >
</div>
<div class="div_design">
    <label> Food Description: </label>
    <input class="" type="text" name="description" placeholder="description" required=""> </div>
    
    <div class="div_design">
    <label> Food Price: </label>
    <input class="" type="number" name="price" placeholder="price" required="" > </div>
    <div class="div_design">
    <label class="div_design"> Food Quantity</label>
    <input class="" type="number" name="quantity" placeholder="Quantity" required="" > </div>

    <div class="div_design">
        <label class="div_design"> Food image</label>
        <input class="" type="file" name="image" placeholder="image" min="0"  > </div>

        <div class="div_design">
           
            <input class="" type="submit" value="Add Food"> </div>
    
    
    
</fieldset>
    </form>


</div>

</body>
</html>