@include('includes.header')
@include('includes.navbar')
<div class="team-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Meet Our Team</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
            </div>
            <div class="row people">

            @include('includes.team')
            @include('includes.team')
            @include('includes.team')
            @include('includes.team')

          </div>
        </div>
    </div>

@include('includes.footer')
@include('includes.modal')
@include('includes.scriptindex')