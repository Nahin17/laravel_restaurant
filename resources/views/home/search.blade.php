<!DOCTYPE html>
<html lang="en">
<head>
    
   
    <title>Document</title>
    <style>
   
.food-search{
	background-image: url("image/food4.jpg");
	padding: 8% ; 
/*	border: 2px solid cyan;  */
	width: 100% ;
	height: 100%;
	margin: 0 auto;
	/* width- 76% ; background-position: center; padding r width komaye baraye ek sathe adjust kora jay */
	
}
.food-search input[type="search"]{
	width: 90%;
	padding: 20%; /* padding diye height control kora jay maybe */
	font-size: 7rem;
	border-color: #55efc4;
	border-radius: 19px;
}
.food-search input[type="search"]{
	width: 50%;
	padding: 1%; /* padding diye height control kora jay maybe */
	font-size: 1rem;
	border-color: #55efc4;
	border-radius: 10px;
}
.searchbtn{
	padding: 1%;
	font-size: 1rem;
    color: whitesmoke;
    border-radius: 5px;


}
.btn-primary{
	background-color: #ff7675;
	cursor: pointer;
}
.btn-primary:hover{
	background-color: #e17055;
}


.text-center{
	text-align: center;

}


        
    </style>
</head>
<body>
 
    <div class="food-search text-center container"> 
        <form action="{{url('search_allproduct')}}" method="GET">
           @csrf
    <input class="" type="search" name="search" size="60%" width="60px" placeholder="Search for something">
           <input class="searchbtn btn-primary" type="submit" value="Search "> 
    
            
             
         
        </form>
     </div>
    
    
</body>
</html>





