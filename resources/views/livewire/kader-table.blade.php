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
                                            wire:model="search" placeholder="Cari berdasarkan nama kader">
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-responsive" style="display:table">
                                    <thead>
                                        <tr>
                                            <th style="width:
                                        10px">#</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>NIP</th>
                                            <th>No Telp</th>
                                            <th>Jabatan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($kader) !== 0)
                                            @foreach ($kader as $item)
                                                <tr>
                                                    <td>{{ ($kader->currentpage() - 1) * $kader->perpage() + $loop->index + 1 }}
                                                    </td>
                                                    <td class="text-nowrap">{{ $item->full_name }}</td>
                                                    <td class="text-nowrap">{{ $item->user->email }}</td>
                                                    <td class="text-nowrap">{{ $item->nip }}</td>
                                                    <td class="text-nowrap">{{ $item->phone }}</td>
                                                    <td class="text-nowrap">
                                                        {{ $item->position == null ? '-' : $item->position }}</td>
                                                    <td>
                                                        <div style="display: flex;">
                                                            <button wire:click="edit('{{ $item->id }}')"
                                                                class="btn btn-info" style="margin-right:2px">
                                                                <i class="fas fa-edit "></i>
                                                            </button>
                                                            <button
                                                                wire:click="deleteConfirmation('{{ $item->id }}')"
                                                                class="btn btn-danger"><i
                                                                    class="fas fa-trash-alt"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="12" align="center">Tidak ada data</td>
                                            </tr>
                                        @endif

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <div class="row justify-content-end">
                                <span>Total kader : {{ $kader->total() }}</span>
                            </div>
                            <ul class="pagination pagination-sm m-0 float-right">
                                @if (count($kader) != 0)
                                    {{ $kader->links() }}
                                @endif
                            </ul>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    @include('modals.kader-modal')
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
