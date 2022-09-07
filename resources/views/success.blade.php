@include('includes.register.header')
@include('includes.navbar')
    <div class="contact-clean" style="margin-top: 50px;">
        <form method="post">
            <h2 class="text-center">Success&nbsp;</h2>
            <p style="font-size: 20px; text-align:center">Thanks for your Application.</br>After verification we will email/text you.</br>If your informations are incorrect your application will be rejected.</br>If u have any questions then </br><a href="contact"
                    style="color: rgb(68,134,200);">Contact Us</a></p>
            <div class="form-row">
                <div class="col text-center"><a class="btn btn-primary btn-sm" role="button" style="border-radius: 60px;" href="index">BACK to home</a></div>
            </div>
        </form>
    </div>
    
    <script type="text/javascript">
        $(document).ready(function() {
            window.history.pushState(null, "", window.location.href);        
            window.onpopstate = function() {
                window.history.pushState(null, "", window.location.href);
            };
        });
      </script>
@include('includes.register.scripts')

</html>