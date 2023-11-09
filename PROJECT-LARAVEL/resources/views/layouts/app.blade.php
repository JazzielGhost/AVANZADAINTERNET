@extends('name') //extender todo la cascara de otro archivo

@included('name') //incluye una parte de otro archivo

@section('container')
        //aqui iria el codigo
@endsection

@yield('container') //ira en el archivo de app