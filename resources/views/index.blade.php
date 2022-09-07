@include('includes.header')
@include('includes.navbar')
@include('includes.jumbotron')   
@include('includes.sidebyside')
@include('includes.indextuts')
@include('includes.footer')
@include('includes.modal')

<script> 
 window.onload=show(); 
function show(){
    var navitem=document.getElementsByClassName('nav-item');
    navitem[0].classList.add("active");
}
 </script>
@include('includes.scriptindex')

