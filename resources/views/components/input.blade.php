@if($type == "textarea")
  <textarea name="{{$name}}" id="{{$name}}" cols="30" rows="10" placeholder="{{$placeholder}}">
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