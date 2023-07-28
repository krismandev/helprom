@extends('layouts.dashboard.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Artikel Unggulan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Artikel Unggulan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <livewire:featured-articles />
@endsection
@section('script')
    <script>
        window.addEventListener('show-delete-confirmation-modal', event => {
            $('#modalDelete').modal('show');
        });
        window.addEventListener('hide-add-modal', event => {
            $('#modalTambah').modal('hide');
        });
    </script>
@endsection
