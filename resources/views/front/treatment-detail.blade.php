@extends('front.layouts.main')
@push('seo_meta_tag')
  @include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <!-- Start Bredcrumb Area -->
  <section class="breadcumb-area pt-70 pb-70"
    style="background-image: url('{{ url('web/') }}/assets/img/breadcrumb.png')">
    <div class="container">
      <h2>Treatments</h2>
      <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li>Treatments</li>
        <li>{{ $treatment->treatment_name }}</li>
      </ul>
    </div>
  </section>
  <!-- End Bredcrumb Area -->

  <!-- Start Blog Details Section -->
  <section class="singlepage-area pt-120 pb-90">
    <div class="container">
      <div class="row">

        <div class="col-lg-8">
          <!-- Singlepage Content -->
          <div class="singlepage-content">
            <img class="details-singleimg" src="{{ asset($treatment->image_path) }}"
              alt="{{ $treatment->treatment_name }}">

            {!! $treatment->description !!}

          </div>
        </div>

        <!-- Sidebar Widgets -->
        <div class="col-lg-4 mb-30">
          <!-- Sidebar Widgets -->
          <div class="sidebar-widgets">

            @if ($treatments->count() > 0)
              <div class="sidebar-single-widget category-widget mb-30">
                <h5 class="pb-10">Treatments</h5>
                <ul>

                  @foreach ($treatments as $row)
                    <li>
                      <a href="{{ url($row->treatment_slug) }}">
                        <i class="fa-solid fa-caret-right"></i> M{{ $row->treatment_name }}
                      </a>
                    </li>
                  @endforeach

                </ul>
              </div>
            @endif

            @include('front.forms.sidebar-form')

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Blog Details Section -->
@endsection
