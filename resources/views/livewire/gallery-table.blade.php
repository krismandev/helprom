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
                        @if (session()->has('error'))
                            <div class="alert alert-danger alert-dismissible mx-3 mt-2">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h5><i class="icon fas fa-ban"></i>Pesan</h5>
                                {{ session('error') }}
                            </div>
                        @endif

                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="search">Pencarian</label>
                                        <input type="text" class="form-control" id="search" name="search"
                                            wire:model="search" placeholder="Cari berdasarkan judul gallery">
                                    </div>
                                </div>
                            </div>
                            <table class="table table-bordered table-responsive" style="display:table">
                                <thead>
                                    <tr>
                                        <th style="width:
                                    10px">#</th>
                                        <th>Judul</th>
                                        <th>Gambar</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($galleries) !== 0)
                                        @foreach ($galleries as $item)
                                            <tr>
                                                <td>{{ ($galleries->currentpage() - 1) * $galleries->perpage() + $loop->index + 1 }}
                                                </td>
                                                <td>{{ $item->title }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/' . $item->image_path) }}"
                                                        alt="img.jpg" width="200">
                                                </td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>
                                                    <div style="display: flex;">
                                                        <button wire:click="edit('{{ $item->id }}')"
                                                            class="btn btn-info" style="margin-right:2px">
                                                            <i class="fas fa-edit "></i>
                                                        </button>
                                                        <button wire:click="deleteConfirmation('{{ $item->id }}')"
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
                                @if (count($galleries) != 0)
                                    {{ $galleries->links() }}
                                @endif
                            </ul>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    @include('modals.gallery-modal')
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
            window.addEventListener('show-delete-confirmation-modal', event => {
                $('#modalDelete').modal('show');
            });
        </script>
    @endsection
</div>
