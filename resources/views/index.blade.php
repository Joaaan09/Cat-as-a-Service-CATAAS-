<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cat as a Service</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container mt-4">
    <!-- Título de la galería -->
    <h1 class="text-center fw-bold text-primary mb-4">Galeria de gats</h1>

    @if($cats->count())
    <div class="row row-cols-1 row-cols-md-3 g-4">
      @foreach($cats as $cat)
      <div class="col">
        <div class="card h-100 d-flex flex-column">
          <div class="ratio ratio-1x1">
            <img src="https://cataas.com/cat/{{ $cat->_id }}" alt="Imagen de gato"
              class="card-img-top object-fit-cover">
          </div>
          <div class="p-4">
            <p class="text-gray-700 text-sm">Tags:{{ implode(', ', json_decode($cat->tags)) }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <!-- Barra de paginación -->
    <div class="d-flex justify-content-center mt-4">
      {{ $cats->links('pagination::bootstrap-5') }}
    </div>

    @else
    <p class="text-center fw-bold text-danger">No se encontraron imágenes.</p>
    @endif
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>