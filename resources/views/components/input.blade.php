@if($type == "textarea")
  <textarea name="{{$name}}" id="{{$name}}"  >
    {{ old($name) ?? $current }}
  </textarea>
  <br>
      @error($name)
        <small>{{$message}}</small> 
      @enderror<br><br>
@else
  <input type="{{$type}}" name="{{$name}}" id="{{$name}}" placeholder="{{$placeholder}}" value="{{old($name)  ?? $current }}">
  <br>
      @error($name)
        <small>{{$message}}</small> 
      @enderror<br><br>
@endif