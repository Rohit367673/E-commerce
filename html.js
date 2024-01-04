// this code is for image slider
var mover=1

    setInterval( function() {
      document.getElementById("radio"+ mover).checked=true;
      mover++;
      if( mover>4){
        mover=1;
      }
       
        
    }, 5000);
    setInterval();
