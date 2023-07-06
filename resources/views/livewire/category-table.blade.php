<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">Tambah</button>
                        </div>
                        @if (session()->has('message'))
                            <div class="alert alert-success alert-dismissible mx-3 mt-2">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h5><i class="icon fas fa-check"></i>Pesan</h5>
                                {{ session('message') }}
                            </div>
                        @endif

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-responsive" style="display:table">
                                <thead>
                                    <tr>
                                        <th style="width:
                                    10px">#</th>
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
                                                        <button wire:click="edit('{{ $item->slug }}')"
                                                            class="btn btn-info" style="margin-right:2px">
                                                            <i class="fas fa-edit "></i>
                                                        </button>
                                                        <button wire:click="deleteConfirmation('{{ $item->slug }}')"
                                                            class="btn btn-danger"><i
                                                                class="fas fa-trash-alt"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5" align="center">Tidak ada data</td>
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

            window.addEventListener('show-edit-modal', event => {
                $('#modalEdit').modal('show');
            });
            window.addEventListener('close-edit-modal', event => {
                $('#modalEdit').modal('hide');
            });
        </script>
    @endsection
</div>
