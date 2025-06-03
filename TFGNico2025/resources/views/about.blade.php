@extends('layouts.app') {{-- Si usas Blade y tienes el layout --}}
@section('home') {{-- Reemplaza esto por el yield correspondiente si no usas esta estructura --}}

<section class="py-5" style="background-color: #f8f9fa;">
  <div class="container">
    <div class="text-center mb-5">
      <h1 class="fw-bold text-danger">About E-Sneakers</h1>
      <p class="lead text-muted">Your ultimate destination for exclusive sneaker drops</p>
    </div>

    <div class="row align-items-center">
      <div class="col-md-6">
        <img src="{{ asset('home_asset/img/about-sneakers.jpg') }}" alt="About E-Sneakers" class="img-fluid rounded shadow">
      </div>
      <div class="col-md-6">
        <h2 class="fw-bold mb-3">Who We Are</h2>
        <p>
          E-Sneakers is an innovative e-commerce platform built with Laravel, focused exclusively on sneaker enthusiasts. 
          We combine sleek design, efficient tech, and a passion for kicks to deliver a premium shopping experience.
        </p>

        <h4 class="fw-semibold mt-4">Our Vision</h4>
        <p>
          We aim to connect buyers and sellers around the world through a clean, responsive, and secure web platform, 
          enabling access to the latest sneaker trends with just a few clicks.
        </p>

        <h4 class="fw-semibold mt-4">Why Choose Us?</h4>
        <ul class="list-unstyled">
          <li><i class="fas fa-check-circle text-danger me-2"></i> User-friendly interface built with Bootstrap</li>
          <li><i class="fas fa-check-circle text-danger me-2"></i> Real-time product search powered by Livewire</li>
          <li><i class="fas fa-check-circle text-danger me-2"></i> Secure authentication and role-based dashboards</li>
          <li><i class="fas fa-check-circle text-danger me-2"></i> Personalized storefronts for vendors</li>
        </ul>
      </div>
    </div>
  </div>
</section>

@endsection