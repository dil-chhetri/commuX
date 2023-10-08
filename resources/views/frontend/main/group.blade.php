@extends('frontend.layouts.main')
@push('title')
<title>Index</title>
@endpush

@include('frontend.includes.navbar')
@section('main-section')
@include('frontend.includes.form')
@include('frontend.includes.overlay')
<div class="col-md-12 d-flex flex-row " style="height:90vh;overflow:hidden;" >
    <div class="groups col-md-3 border d-flex flex-column p-2 bg-light" style="max-height: 90vh;overflow:auto;">
        <h6 class="text-center fw-bold">Groups</h6>
        @foreach($groups as $item)
        <a  class="text-decoration-none text-dark" href="{{route('group.chat',['id'=>$item->group_id])}}">
        <div class="mt-2 bg-white p-2" >
   
            <h6 class="fw-bold text-center" style="font-size:0.9em;">{{$item->group_name}}</h6>
            <p class="text-center text-secondary fw-bold" style="font-size:0.7em;">Tap to open</p>
         
        </div>
        </a>
        @endforeach
    </div>
    <div class="col-md-9 border position-relative " style="height:90vh;">
    
        <div class="messages p-3" style="max-height:75vh;overflow:auto;" id="messageContainer" >

          
            


            
           
        </div>
        {!!Form::open([
    'url' => url('/message-sent'),
    'method'=> 'post',
    'id' => 'messageSent',
    'role' => 'form',
    'class' => 'action position-absolute bottom-0 start-0 w-100 d-flex justify-content-center border p-3'
    ])!!}
        {{-- Hidden input field for group_id --}}
    {!! Form::hidden('group_id', request('id')) !!}
    {!! Form::text('message', null, ['class' => 'form-control w-75 d-inline', 'placeholder' => 'Type message...', 'style' => 'height: 50px']) !!}
    {!! Form::button('+', ['class' => 'btn btn-dark fw-bold', 'style' => 'height: 50px; font-size: 1.5em; margin-left: 20px']) !!}
    {!! Form::submit('Send', ['class' => 'btn btn-primary d-inline col-md-2', 'style' => 'height: 50px; margin-left: 20px']) !!}

    {!!Form::close()!!}
   
    </div>   
    <i class="fa-sharp fa-solid fa-bars position-absolute mt-1 menu-open" onclick="showMenu()" style="right:35px;z-index:10;"></i>
    <i class="fa-sharp fa-solid fa-xmark position-absolute mt-1 menu-close d-none" onclick="hideMenu()" style="right:35px;z-index:10;"></i>
    <div class="col-md-3 position-absolute border bg-light d-none members-list" style="height: 90vh;overflow:auto;right:24px;">
        <h6 class="text-center mt-2 fw-bold">Members</h6>
        @foreach($members as $member)
            <div class="member mt-2">
               
               <li style="margin-left:20px;"><p class="fw-bold d-inline">{{$member->name}}</p></li> 
               <p style="margin-left:35px;font-size:0.7em;">{{$member->email}}</p>
            </div>
        @endforeach
    </div>
</div>

@endsection