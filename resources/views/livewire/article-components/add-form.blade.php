<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-warning" wire:click='back()' data-toggle="modal">Kembali</button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <h5 style="font-weight: bold">Tambah Artikel</h5>
                        <form role="form" wire:submit.prevent="save">
                            <div class="form-group">
                                <label for="title">Judul</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    id="title" name="title" wire:model="title" placeholder="Judul artikel">
                                @error('title')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select
                                    class="form-control @error('category_id')
                                        is-invalid
                                      @enderror"
                                    id="category_id" name="category_id" wire:model="category_id">
                                    <option value="">Pilih</option>
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group" wire:ignore>
                                <label for="content">Konten</label>
                                <textarea name="content" id="summernote"
                                    class="form-control @error('content')
                                        is-invalid
                                      @enderror">{{ $content }}</textarea>
                            </div>
                            @error('content')
                                <span style="color:red; font-size:12px">{{ $message }}</span>
                            @enderror
                            <div class="form-group">
                                <label for="image">Gambar</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" accept=".jpg,.png,.jpeg,.gif,.svg"
                                            class="custom-file-input @error('image')is-invalid @enderror" id="image"
                                            wire:model='image'>
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
                            <div wire:loading wire:target="image">
                                Mohon tunggu sebentar...
                                <br>
                            </div>
                            <div>
                                Image Preview:
                                @if ($image != null)
                                    <div class="row mx-1">
                                        <div class="col-3 card me-1">
                                            <img src="{{ $image->temporaryUrl() }}">
                                        </div>
                                    </div>
                                @else
                                    <div class="row mx-1">
                                        <div class="col-3 card me-1">
                                            <img
                                                src="https://www.gme.net.au/app/plugins/wp-media-folder/assets/images/default.png">
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                    wire:click="back()">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
</section>
