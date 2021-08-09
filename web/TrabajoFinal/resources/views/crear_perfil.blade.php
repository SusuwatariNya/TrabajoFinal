@extends('layouts.master')

@section("contenido")



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/stylelogin.css')}}">
  </head>
  <body>
    <section class="form-login">
      <h5>Formulario Login</h5>
      <input class="controls" type="text" name="usuario" value="" placeholder="Usuario">
      <input class="controls" type="password" name="contrasena" value="" placeholder="Contraseña">
      <input class="buttons" type="submit" name="" value="Ingresar">
      <p><a href="#">¿Olvidastes tu Contraseña?</a></p>

    </section>

  </body>
</html>

@endsection

