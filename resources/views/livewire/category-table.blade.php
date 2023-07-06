<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">Tambah</button>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($categories) !== 0)
                                        @foreach ($categories as $item)
                                            <tr>
                                                <td>{{ ($categories->currentpage() - 1) * $categories->perpage() + $loop->index + 1 }}
                                                </td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->description }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/' . $item->image) }}" alt="img.jpg"
                                                        width="200">
                                                </td>
                                                <td>
                                                    <div style="display: flex; justify-content:space-between; ">
                                                        <a href="" class="btn btn-info" style="margin-right:2px">
                                                            <i class="fas fa-edit "></i>
                                                        </a>
                                                        <a href="" class="btn btn-danger"><i
                                                                class="fas fa-trash-alt"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4" align="center">Tidak ada data</td>
                                        </tr>
                                    @endif

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                @if (count($categories) != 0)
                                    {{ $categories->links() }}
                                @endif
                            </ul>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    @include('modals.category-modal')
    @section('script')
        <script>
            window.addEventListener('close-input-modal', event => {
                $('#modalTambah').modal('hide');
            });
        </script>
    @endsection
</div>
