<!Doctype html>
<html>
  <p>array</p>
    @if(count($array) == 0)
        <p>Error! Array is empty</p>
    @elseif(count($array) == 5)
        <p> Array is 5 elements long </p>
    @endif

    @foreach ($array as $element)
        <p> {{$element}} </p>
    @endforeach 
</html>
