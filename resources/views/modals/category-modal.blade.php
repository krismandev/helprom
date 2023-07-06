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
                    <div wire:loading wire:target="image">
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
