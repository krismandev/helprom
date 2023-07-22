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
                            <div class="table-responsive">
                                <table class="table table-bordered table-responsive" style="display:table">
                                    <thead>
                                        <tr>
                                            <th style="width:
                                        10px">#</th>
                                            <th>NIP/NIK/NIM</th>
                                            <th>Nama</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>No Telp</th>
                                            <th>Status Pernikahan</th>
                                            <th style="width: 25%">Alamat
                                            </th>
                                            <th>Pekerjaan</th>
                                            <th>Fakultas</th>
                                            <th>Prodi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($patients) !== 0)
                                            @foreach ($patients as $item)
                                                <tr>
                                                    <td>{{ ($patients->currentpage() - 1) * $patients->perpage() + $loop->index + 1 }}
                                                    </td>
                                                    <td class="text-nowrap">{{ $item->identity }}</td>
                                                    <td class="text-nowrap">{{ $item->full_name }}</td>
                                                    <td class="text-nowrap">{{ $item->date_of_birth }}</td>
                                                    <td class="text-nowrap">{{ $item->gender }}</td>
                                                    <td class="text-nowrap">{{ $item->phone }}</td>
                                                    <td class="text-nowrap">{{ $item->marriage_status }}</td>
                                                    <td>{{ $item->address }}</td>
                                                    <td class="text-nowrap">{{ $item->occupation }}</td>
                                                    <td class="text-nowrap">{{ $item->faculty }}</td>
                                                    <td class="text-nowrap">{{ $item->major }}</td>
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
                                <span>Total data : {{ $patients->total() }}</span>
                            </div>
                            <ul class="pagination pagination-sm m-0 float-right">
                                {{-- @if (count($patients) != 0)
                                    {{ $patients->links() }}
                                @endif --}}
                            </ul>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    @include('modals.patient-modal')
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
