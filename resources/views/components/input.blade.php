<input type="{{$type}}" name="{{$name}}" id="{{$name}}" placeholder="{{$placeholder}}" value="{{old($name)}}">{{$demo}}
<br>
    @error($name)
      <small>{{$message}}</small> 
    @enderror<br><br> 