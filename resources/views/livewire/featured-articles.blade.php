<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-primary" wire:click='add()' data-toggle="modal"
                                data-target="#modalTambah">Tambah</button>
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
                                {{-- <div class="col-lg-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="search">Filter Kategori</label>
                                        <select name="category" class="form-control" id="category"
                                            wire:model="category">
                                            <option value="">Semua</option>
                                            @foreach ($categories as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> --}}
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
                                                    <img src="{{ asset('storage/' . $item->image_path) }}"
                                                        alt="img.jpg" width="200">
                                                </td>
                                                <td>{{ $item->category->name }}</td>
                                                <td>
                                                    <div style="display: flex;">
                                                        <button wire:click="deleteConfirmation('{{ $item->slug }}')"
                                                            class="btn btn-danger"><i
                                                                class="fas fa-trash-alt"></i></button>
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

    {{-- MODAL TAMBAH --}}
    <div class="modal fade" id="modalTambah" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
        wire:ignore.self aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <form role="form" wire:submit.prevent="saveFeatured">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEditTitle">Tambah Artikel Unggulan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            wire:click="empty()">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label for="search2">Pencarian</label>
                                    <input type="text" class="form-control" id="search2" name="search2"
                                        wire:model="search2" placeholder="Cari berdasarkan judul artikel">
                                </div>
                            </div>
                        </div>
                        @error('featured')
                            <div class="row mb-3">
                                <div class="col-12">
                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                </div>
                            </div>
                        @enderror
                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table table-bordered" width='100%'>
                                    <thead>
                                        <tr>
                                            <th style="width:
                                  10px">#</th>
                                            <th>Judul</th>
                                            <th>Tambah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($nonFeatured) !== 0)
                                            @foreach ($nonFeatured as $item)
                                                <tr>
                                                    <td>{{ ($nonFeatured->currentpage() - 1) * $nonFeatured->perpage() + $loop->index + 1 }}
                                                    </td>
                                                    <td>{{ $item->title }}</td>
                                                    <td align="center"><input type="checkbox" wire:model="featured"
                                                            value="{{ $item->id }}">
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="3" align="center">Tidak ada data</td>
                                            </tr>
                                        @endif

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <ul class="pagination pagination-sm m-0 float-right">
                            @if (count($nonFeatured) != 0)
                                {{ $nonFeatured->links() }}
                            @endif
                        </ul>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            wire:click="empty()">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- MODAL DELETE --}}
    <div class="modal fade" id="modalDelete" data-backdrop="static" data-keyboard="false" tabindex="-1"
        role="dialog" wire:ignore.self aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header  bg-danger">
                    <h5 class="modal-title" id="modalEditTitle">Hapus ARtikel Dari Daftar Unggulan</h5>
                    <button type="button" class="close" data-dismiss="modal" wire:click="empty()"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6>Apakah anda yakin ingin menghapus artikel dari daftar artikel unggulan ?</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="empty()"
                        data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" data-dismiss="modal"
                        wire:click="deleteData()">Hapus</button>
                </div>
            </div>
        </div>
    </div>
</div>
