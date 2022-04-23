@if($type == "textarea")
  <textarea name="{{$name}}" id="{{$name}}"  >
    {{old($name)}}
  </textarea>
  <br>
      @error($name)
        <small>{{$message}}</small> 
      @enderror<br><br>
@else
  <input type="{{$type}}" name="{{$name}}" id="{{$name}}" placeholder="{{$placeholder}}" value="{{old($name)}}">
  <br>
      @error($name)
        <small>{{$message}}</small> 
      @enderror<br><br>
@endif