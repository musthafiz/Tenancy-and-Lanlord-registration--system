@include('includes.header')
@include('includes.navbar')

    <div class="contact-clean" style="margin-top: 0px;">
        <form class="border rounded shadow" method="post" style="margin-top: 54px;">
            <h2 class="text-center">Contact us</h2>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
            <div class="form-group"><input class="form-control is-invalid" type="email" name="email" placeholder="Email"><small class="form-text text-danger">Please enter a correct email address.</small></div>
            <div class="form-group"><textarea class="form-control" name="message" placeholder="Message" rows="14"></textarea></div>
            <div class="form-group"><button class="btn btn-primary" type="submit">send </button></div>
        </form>
    </div>

@include('includes.footer')
@include('includes.modal')
@include('includes.scriptindex')