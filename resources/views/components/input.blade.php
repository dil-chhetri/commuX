<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    <div  class="mt-2 p-2">
        <input type="{{$type}}" name="{{$name}}" placeholder="{{$placeholder}}" class="form-control" onclick="{{$onclick}}" />
        <span class="text-danger">
          @error($name)
            {{$message}}
          @enderror
        </span>
      </div>
</div>