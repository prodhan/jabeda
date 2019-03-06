@if(Session::has('success'))
    <div class="col-md-12">
        <div class="alert alert-info" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {!! Session::get('success')!!}
        </div>
    </div>

    @elseif(Session::has('error'))
    <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {!! Session::get('error')!!}
        </div>
    </div>

    @elseif(Session::has('info'))
    <div class="col-md-12">
        <div class="alert alert-dark" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {!! Session::get('info')!!}
        </div>
    </div>
    @endif




    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(300, function(){
                $(this).remove();
            });
        }, 4000);
    </script>