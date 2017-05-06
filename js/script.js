var slide = function () {
  var myIndex = 0;

  window.onload = function() { // this will be run when the whole page is loaded
      carousel();
  };


  function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      var array = [1,2,3]
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}
      x[myIndex-1].style.display = "block";
      setTimeout(carousel, 4000); // Change image every 2 seconds
  }
}()
