@extends('base.index')

@section('content')
    <section class="container pt-4 pb-2">
        <div class="text-right">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                Create new product
            </button>
        </div>
        @include('layouts.parts.alert')
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Title</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody id="products-table-body"></tbody>
        </table>
    </section>

    @include('layouts.dashboard.parts.modal', ['id' => 'editModal', 'name' => 'Edit product', 'formName' => 'edit-form', 'method' => 'PUT'])
    @include('layouts.dashboard.parts.modal', ['id' => 'createModal', 'name' => 'Create product', 'formName' => 'create-form', 'method' => 'POST'])
    @include('layouts.dashboard.script')
@endsection
