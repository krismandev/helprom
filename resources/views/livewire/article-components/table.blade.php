<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary" wire:click='add()' data-toggle="modal">Tambah</button>
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
                                        wire:model="search" placeholder="Cari berdasarkan judul artikel">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="search">Filter Kategori</label>
                                    <select name="category" class="form-control" id="category" wire:model="category">
                                        <option value="">Semua</option>
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered table-responsive" style="display:table">
                            <thead>
                                <tr>
                                    <th style="width:
                          10px">#</th>
                                    <th>Judul</th>
                                    {{-- <th>Konten</th> --}}
                                    <th>Gambar</th>
                                    <th>Kategori</th>
                                    <th>Unggulan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($articles) !== 0)
                                    @foreach ($articles as $item)
                                        <tr>
                                            <td>{{ ($articles->currentpage() - 1) * $articles->perpage() + $loop->index + 1 }}
                                            </td>
                                            <td>{{ $item->title }}</td>
                                            {{-- <td>
                                                {!! $item->content !!}
                                            </td> --}}
                                            <td>
                                                <img src="{{ asset('storage/' . $item->image_path) }}" alt="img.jpg"
                                                    width="200">
                                            </td>
                                            <td>{{ $item->category->name }}</td>
                                            <td>{{ $item->featured == true ? 'Ya' : 'Tidak' }}</td>
                                            <td>
                                                <div style="display: flex;">
                                                    <button wire:click="change('{{ $item->slug }}')"
                                                        class="btn btn-info" style="margin-right:2px">
                                                        <i class="fas fa-edit "></i>
                                                    </button>
                                                    <button wire:click="deleteConfirmation('{{ $item->slug }}')"
                                                        class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6" align="center">Tidak ada data</td>
                                    </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            @if (count($articles) != 0)
                                {{ $articles->links() }}
                            @endif
                        </ul>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
