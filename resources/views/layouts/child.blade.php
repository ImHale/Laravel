<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hello </title>
  </head>
  <body>
    @if ($name == 'Hale')
      I'm Hale
    @elseif ($name == 'Mike')
      I'm Mike
      @else
        Who I am ?
    @endif
    <br>
    @if (in_array($name, $arr))
      true
    @else
      false
    @endif
    <br>
    {{ var_dump($arr) }}
    <br>
    @unless ($name == 'Hale')
      I' Hale
    @endunless
    <br>
    @for ($i=0; $i < 10; $i++)
      {{ $i }}
    @endfor
    <br>
    {{-- @foreach ($get as $get)
      {{ $get -> name }}
    @endforeach --}}
    {{-- <br> --}}
    @forelse ($null as $null)
      {{ $null -> sex}}
    @empty
      It's empty
    @endforelse
    <br>
    
  </body>
</html>
