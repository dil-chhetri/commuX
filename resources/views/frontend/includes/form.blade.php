{!!Form::open([
    'url' => url('/create-group'),
    'method'=> 'post',
    'id' => 'groupCreate',
    'role' => 'form',
    'class' => 'position-fixed z-3 border border-dark top-50 start-50 translate-middle p-4 col-md-4 bg-white d-none'
])!!}
<h5 class="mt-5 text-center">Create</h5>
<hr>
<div class="form-group">
    {!!Form::text('groupname','',[
        'id' => 'groupName',
        'required'=> 'required',
        'placeholder'=>'Group Name',
        'class' => 'form-control mt-5 '
    ])!!}
</div>
{!!Form::submit('Create',[
    'class' => 'btn btn-dark mt-5 col-md-12'
])!!}
{!!Form::close()!!}


{!!Form::open([
    'url' => url('/join-group'),
    'method'=> 'post',
    'id' => 'groupJoin',
    'role' => 'form',
    'class' => 'position-fixed z-3 border border-dark top-50 start-50 translate-middle p-4 col-md-4 bg-white d-none'
])!!}
<h5 class="mt-5 text-center">Join</h5>
<hr>
<div class="form-group">
    {!!Form::text('Code','',[
        'id' => 'groupCode',
        'required'=> 'required',
        'placeholder'=>'Group Code',
        'class' => 'form-control mt-5 '
    ])!!}
</div>
{!!Form::submit('Join',[
    'class' => 'btn btn-dark mt-5 col-md-12'
])!!}
{!!Form::close()!!}