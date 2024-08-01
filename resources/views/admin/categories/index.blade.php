    <!--------------- CSS & JavaScript ------------------>
    @extends('layouts.backend')
    <!--------------- Backend Sidebar ------------------>
    @include('include.backend.sidebar')
    <main class="dashboard-main">
        <!--------------- Backend Header ------------------>
        @include('include.backend.header')
        <!--------------- Backend Dashboard ------------------>
        <div class="dashboard-main-body">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
                <ul class="d-flex align-items-center gap-2" style="margin-left: auto">
                    <li class="fw-medium">
                        <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                            <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                            Dashboard
                        </a>
                    </li>
                    <li>-</li>
                    <li class="fw-medium">Table Categories</li>
                </ul>
            </div>

            <div class="row gy-4">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">Tables Categories</h5>
                            <a href="{{route('categories.create')}}" class="btn btn-sm btn-primary-600"><i class="ri-add-line"></i> Add Data</a>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table bordered-table mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $data)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <h6 class="text-md mb-0 fw-medium flex-grow-1">{{ $data->name }}</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <img src="{{ asset('/images/categories/' . $data->image) }}" alt="{{ $data->name }}" style="max-width: 100px;">
                                            </td>
                                            <td>
                                                <a href="{{ route('kategori.show', $data->id) }}" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                                                    <iconify-icon icon="iconamoon:eye-light"></iconify-icon>
                                                </a>
                                                <a href="{{ route('kategori.edit', $data->id) }}" class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center edit-category-btn" data-id="{{ $data->id }}" data-name="{{ $data->name }}" data-image="{{ asset('/images/categories/' . $data->image) }}" data-bs-toggle="modal" data-bs-target="#categoryModal">
                                                    <iconify-icon icon="lucide:edit"></iconify-icon>
                                                </a>
                                                <a href="{{ route('kategori.destroy', $data->id) }}" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center" onclick="event.preventDefault(); document.getElementById('destroy-form-{{ $data->id }}').submit();">
                                                    <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                                                </a>
                                                <form id="destroy-form-{{ $data->id }}" action="{{ route('categories.destroy', $data->id) }}" method="POST" class="d-none">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- card end -->
                </div>
            </div>
        </div>

        <!--------------- Backend Footer ------------------>
        @include('include.backend.footer')


        <!--------------- Sweet Alert ------------------>
        @include('sweetalert::alert')
    </main>
</body>

</html>
