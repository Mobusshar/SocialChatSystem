$(document).ready(function(){
          $('.output').load('chatshow.php');
          refresh();

      });


      function refresh()
      {
           setTimeout(function(){
           $('.output').load('chatshow.php');
             refresh();

           } , 100 );


      }

      
      




//$(document).ready(function(){

//  $('.output').scrollTo(50,0);



//});
    
      //var yourDiv = document.getElementById('.output');  
        //yourDiv.scrollTop = yourDiv.scrollHeight;



//$(document).ready(function(){
    //$('.output').scrollDown(0);
//});



//$(document).ready(function(){
//
  //      alert("YOU ARE ONLINE");
//
    //});
  //    setinterval(function(){
//
          // $('#outputmain').load("chatshow.php").fadeIn("slow");
      //},1000);


