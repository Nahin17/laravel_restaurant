<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Restaurant Website</title>
 
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/style.css')}}" />
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
	  <!-- navbar -->
      @include('home.header')
      @include('home.search')
     
      
 




	   <!-- social  -->
	 
     @include('home.footer')



</body>
</html>