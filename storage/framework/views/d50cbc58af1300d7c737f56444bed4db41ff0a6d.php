<?php
$currentRouteName = Route::currentRouteName();
?>
<nav class="navbar navbar-expand-lg " style="background-color: rgb(197, 224, 225)">
    <div class="container-fluid">
        <a href="<?php echo e(route('home')); ?>" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Aquatic Shop</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo e(route('home')); ?>"
            class="nav-link active">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo e(route('profile')); ?>"
            class="nav-link active">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo e(route('employees.index')); ?>"
            class="nav-link active">Products</a>
          </li>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
      <ul class="navbar-nav ms-auto">

    </div>
  </nav>
</div>
</div>
</nav>
<?php /**PATH C:\Users\EKKY DEA\modul6\resources\views/layouts/nav.blade.php ENDPATH**/ ?>