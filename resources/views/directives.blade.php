@extends('layout')
@section('content')

<h2>Conditional Statements</h2>
<h4>IF ELSE</h4>
    @php
        $i = 6;
    @endphp
    @if ($i == 2)
        i is equal 2
    @else
        i is not equal 2
    @endif
<h4>Isset</h4>
    @isset($i)
        <p>$i is set</p>
    @endisset

<h4>Unless</h4>
    @unless ($i == 2)
        <p>$i is not 2</p>
    @endunless

<h2>LOOP</h2>   
<h4>For Loop</h4>
    @for ($i = 0; $i<10; $i++)
        <span>{{$i}}</span>
    @endfor

<h4>While Loop</h4>
    @php
        $i = 20;
    @endphp
    @while ($i>=0)
        {{$i}}
        @php
            $i--;
        @endphp
    @endwhile

<h4>For each</h4>
    @php
        $names = ["hari", 'ram', 'shyam', 'gita', 'sita'];
    @endphp
    @foreach ($names as $n)
        <span>{{$n}}</span>
    @endforeach

<h4>Break</h4>
    @foreach ($names as $n)
    @if ($n == "shyam")
    @break
    @endif
    <span>{{$n}}</span>
    @endforeach

<h4>Continue</h4>
    @foreach ($names as $n)
    @if ($n == "shyam")
    @continue
    @endif
    <span>{{$n}}</span>
    @endforeach
@endsection