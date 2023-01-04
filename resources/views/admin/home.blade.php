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
             </style>
             
            
       
</head>
<body>
    @include('admin.header')
    
</body>
</html>