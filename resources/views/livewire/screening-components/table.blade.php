<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary" wire:click='add()' data-toggle="modal">Tambah</button>
                        <button class="btn btn-success" wire:click='export()'>Export</button>
                    </div>
                    @if (session()->has('message'))
                        <div class="alert alert-success alert-dismissible mx-3 mt-2">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h5><i class="icon fas fa-check"></i>Pesan</h5>
                            {{ session('message') }}
                        </div>
                    @endif
                    @if (session()->has('error'))
                        <div class="alert alert-success alert-dismissible mx-3 mt-2">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h5><i class="icon fas fa-ban"></i>Pesan</h5>
                            {{ session('message') }}
                        </div>
                    @endif

                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="search">Pencarian</label>
                                    <input type="text" class="form-control" id="search" name="search"
                                        wire:model="search" placeholder="Cari berdasarkan nama peserta">
                                </div>
                            </div>
                            @php
                                $yearMin = '2023';
                            @endphp
                            <div class="col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="search">Tahun</label>
                                    <select class="form-control" id="filterYear" name="filterYear"
                                        wire:model='filterYear'>
                                        @for ($i = $yearMin; $i < date('Y'); $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                        <option value="{{ date('Y') }}"
                                            {{ date('Y') === date('Y') ? 'selected' : '' }}>
                                            {{ date('Y') }}
                                        </option>
                                        <option value="{{ date('Y') + 1 }}">
                                            {{ date('Y') + 1 }}
                                        </option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="filterMonth">Bulan</label>
                                    <select class="form-control" id="filterMonth" name="filterMonth"
                                        wire:model='filterMonth'>
                                        <option value="01">Januari</option>
                                        <option value="02">Februari</option>
                                        <option value="03">Maret</option>
                                        <option value="04">April</option>
                                        <option value="05">Mei</option>
                                        <option value="06">Juni</option>
                                        <option value="07">Juli</option>
                                        <option value="08">Agustus</option>
                                        <option value="09">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered table-responsive" style="display:table">
                            <thead>
                                <tr>
                                    <th style="width:
                        10px">#</th>
                                    <th>Peserta</th>
                                    <th>NIP/NIK/NIM</th>
                                    <th>Tanggal Screening</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($screenings) !== 0)
                                    @foreach ($screenings as $item)
                                        <tr>
                                            <td>{{ ($screenings->currentpage() - 1) * $screenings->perpage() + $loop->index + 1 }}
                                            </td>
                                            <td>{{ $item->patient->full_name }}</td>
                                            <td>{{ $item->patient->identity }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>
                                                <div style="display: flex;">
                                                    <button wire:click="detailScreening('{{ $item->id }}')"
                                                        class="btn btn-info" style="margin-right:2px">
                                                        <i class="fas fa-eye "></i>
                                                    </button>
                                                    <button wire:click="deleteConfirmation('{{ $item->id }}')"
                                                        class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
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
                            @if (count($screenings) != 0)
                                {{ $screenings->links() }}
                            @endif
                        </ul>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
