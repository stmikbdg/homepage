@extends('template.layout')

@section('content')
@include('components.title')
  <style>
    .magazine-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      justify-items: center;
    }

    .magazine-item {
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .magazine-item img {
      width: 100%;
      max-width: 250px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }

    .magazine-item:hover img {
      transform: scale(1.05);
    }

    .magazine-item:hover {
      transform: translateY(-5px);
    }

    .magazine-title {
      margin-top: 10px;
      font-style: italic;
      color: #444;
    }
  </style>

  <div class="container">

    <div class="magazine-grid">
      <div class="magazine-item">
        <a href="{{ asset('pdf/emagazine-11-2025.pdf') }}" target="_blank">
            <img src="{{ asset('cover/cover1.png') }}" alt="Magazine 11-2025">
            <div class="magazine-title">EMAGAZINE 11-2025</div>
        </a>
      </div>
      {{-- <div class="magazine-item">
        <img src="https://via.placeholder.com/250x350?text=Karsa" alt="Magazine 07-2021">
        <div class="magazine-title">EMAGAZINE 07-2021</div>
      </div>
      <div class="magazine-item">
        <img src="https://via.placeholder.com/250x350?text=New+Life" alt="Magazine 06-2020">
        <div class="magazine-title">EMAGAZINE 06-2020</div>
      </div>
      <div class="magazine-item">
        <img src="https://via.placeholder.com/250x350?text=Raih+Harapan" alt="Magazine 05-2019">
        <div class="magazine-title">EMAGAZINE 05-2019</div>
      </div> --}}
    </div>
  </div>
@endsection
