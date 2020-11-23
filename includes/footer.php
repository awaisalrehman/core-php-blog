<script src="static/js/jquery-3.5.1.min.js"></script>
<script src="static/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip(); 
    });
    
    
    
    
    
    var acc = document.getElementsByClassName("accordion");
    var i;
    
    for (i = 0; i < acc.length; i++) {
     acc[i].onclick = function() {
       this.classList.toggle("active");
       var panel = this.nextElementSibling;
       if (panel.style.maxHeight){
         panel.style.maxHeight = null;
       } else {
         panel.style.maxHeight = panel.scrollHeight + "px";
       } 
     }
    }
</script>
</body>
</html>