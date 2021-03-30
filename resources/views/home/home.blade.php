@extends('base')
@section('title') Inicio @endsection
@section('content')
    <main class="container-fluid">

        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">ABM de Tareas</h1>
            <p class="lead">Ejercicio práctico de un ABM completo de un modelo de tarea y categoría.</p>
            <p class="lead">Programación Web: Laravel.</p>
            <p class="lead">Profesor: Ing. Alberto J Urbaez R.</p>
            <p class="lead">Alumno: Luis Zelarráyan.</p>
            <p class="lead">Email: Luiszelarráyan@hotmail.com</p>
            <h5>Prueba de Api contactos</h5>
            <h6>Ingrese datos aqui en el formulario, envie y confirme en el menu contacto la información </h6>
            <div>
                    <form action="http://localhost:8000/api/contact/create" method="post">
                        <label>
                            Name
                            <input type="text" name="name">
                        </label>

                        <label>
                            Email
                            <input type="email" name="email">
                        </label>

                        <label>
                            Phone
                            <input type="text" name="phone">
                        </label>
                        <br>
                        <label>
                            Message
                            <textarea name="message" cols="30" rows="5"></textarea>
                        </label>
                        <br>
                        <button type="submit">Send</button>
                    </form>
                </div>

            </section>

        </div>
    </main>
@endsection
