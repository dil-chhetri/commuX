@extends('frontend.layouts.main')
@push('title')
<title>Index</title>
@endpush

@include('frontend.includes.navbar')
@section('main-section')
@include('frontend.includes.form')
@include('frontend.includes.overlay')
<div class="row   d-flex ">
    @foreach($groups as $item)
    <div class="col-md-4 mt-2 ">
        <div class="card p-4">
        <a  class="text-decoration-none text-dark" href="{{route('group.chat',['id'=>$item->group_id])}}">
            <div class="card-body">
                <h5 class="text-center fw-bold">{{$item->group_name}}</h5>
                <hr>
                <p class="text-center text-secondary fw-bold" style="font-size: 0.8em">Code:{{$item->code}}</p>
                <div class="action d-flex justify-content-end mt-5">
                    @if(session('user_id')==$item->user_id)
                       <a href="{{route('group.delete',['id'=>$item->group_id])}}">
                        <i class="fa-solid fa-trash " style="color:#24385c;cursor:pointer;" aria-hidden="true" ></i>
                       </a>
                       
                    @else
                   <a href="{{route('group.leave',['id'=>$item->group_id])}}">
                    <i class="fa fa-sign-out "  style="color:#24385c;cursor:pointer;" aria-hidden="true" ></i>
                   </a>
                    @endif
                </div>
                <span class="text-secondary fw-bold" style="font-size: 0.8em;">Created on: {{$item->created_at}}</span> 

            </div>
         </a>

        </div>   
    </div>
    @endforeach
    
       
</div>

@endsection