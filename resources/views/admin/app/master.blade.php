<!DOCTYPE html>
<html lang="en">
{{-- Header Start --}}
@include('admin.app.header')
{{-- Header End --}}
    <section>
        <div class="container-fluid content_part_full">
            <div class="row">
                {{-- Sidebar Start --}}
                @include('admin.app.sidebar')
                {{-- Sidebar End --}}

                {{-- Content Start --}}
                @yield('content')
                {{-- Content End --}}

            </div>
        </div>
    </section>

    {{-- Footer Start --}}
@include('admin.app.footer')
    {{-- Footer End --}}

</html>
