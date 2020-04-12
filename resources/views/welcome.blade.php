@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Nuestro Blog</h1>
        <img src="data:image/jpeg;base64,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" class="img-fluid" alt="Responsive image">
        <div class="row">
            <article class="col-md-4">
                <div class="imagen">
                    <img src="img/blog1.jpg" alt="Entrada de blog">
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Terraza en el techo de tu casa</h4>
                    </a>
                    <p>Escrito el: <span> 20/10/2019 </span> por: <span> Admin </span></p>
                    <p>Consejos para construir una terraza en el techo de tu casa, con los mejores materiales y
                        ahorrando dinero</p>
                </div>
            </article>

            <article class="col-md-4">
                <div class="imagen">
                    <img src="img/blog2.jpg" alt="Entrada de blog">
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Construye una alberca en tu hogar</h4>
                    </a>
                    <p>Escrito el: <span> 20/10/2019 </span> por: <span> Admin </span></p>
                    <p>Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle
                        vida a tu espacio</p>
                </div>
            </article>

            <article class="col-md-4">
                <div class="imagen">
                    <img src="img/blog3.jpg" alt="Entrada de blog">
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Guía para la decoración de tu hogar</h4>
                    </a>
                    <p>Escrito el: <span> 20/10/2019 </span> por: <span> Admin </span></p>
                    <p>Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle
                        vida a tu espacio</p>
                </div>
            </article>

            <article class="col-md-4">
                <div class="imagen">
                    <img src="img/blog4.jpg" alt="Entrada de blog">
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Guía para la decoración de tu habitación</h4>
                    </a>
                    <p>Escrito el: <span> 20/10/2019 </span> por: <span> Admin </span></p>
                    <p>Maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle
                        vida a tu espacio</p>
                </div>
            </article>
            <div>
            </div>
@endsection
