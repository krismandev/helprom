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

    <!-- Modal Tambah-->
    <div class="modal fade" id="modalTambah" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
        wire:ignore.self aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog" role="document">
            <form role="form" wire:submit.prevent="save">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEditTitle">Tambah Kategori</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="kategori">Nama Kategori</label>
                            <input type="text"
                                class="form-control @error('nama')
                            is-invalid
                        @enderror"
                                id="kategori" name="nama" wire:model="nama" placeholder="Kategori">
                            @error('nama')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <textarea name="description" id="description"
                                class="form-control @error('description')
                            is-invalid
                        @enderror"
                                wire:model="description"></textarea>
                            @error('description')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="image">Gambar</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" accept=".jpg,.png,.jpeg,.gif,.svg"
                                        class="custom-file-input @error('image')
                                    is-invalid
                                @enderror"
                                        id="image" wire:model='image'>
                                    <label class="custom-file-label"
                                        for="image">{{ $image == null ? 'Pilih' : $image->getClientOriginalName() }}</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="">Upload</span>
                                </div>
                            </div>
                            @error('image')
                                <span class="invalid-feedback" style="display:block">{{ $message }}</span>
                            @enderror
                        </div>
                        <div wire:loading>
                            Mohon tunggu sebentar...
                            <br>
                        </div>
                        <div>

                            Photo Preview:
                            @if ($image != null)
                                <div class="row">
                                    <div class="col-3 card me-1 mb-1">
                                        <img src="{{ $image->temporaryUrl() }}">
                                    </div>
                                </div>
                            @else
                                <div class="row">
                                    <div class="col-3 card me-1 mb-1">
                                        <img
                                            src="https://www.gme.net.au/app/plugins/wp-media-folder/assets/images/default.png">
                                    </div>
                                </div>
                            @endif
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @section('script')
        <script>
            window.addEventListener('close-input-modal', event => {
                $('#modalTambah').modal('hide');
            });
        </script>
    @endsection
</div>
