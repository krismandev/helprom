    <!-- Modal Edit-->
    <div class="modal fade" id="modalEdit" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
        wire:ignore.self aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog" role="document">
            <form role="form" wire:submit.prevent="update">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEditTitle">Edit Gallery</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            wire:click="empty()">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Judul</label>
                            <input type="text"
                                class="form-control @error('title')
                is-invalid
            @enderror"
                                id="title" name="title" wire:model="title" placeholder="judul">
                            @error('title')
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
                                    <label class="custom-file-label" for="image">
                                        {{ $image == null ? 'Pilih' : $image->getClientOriginalName() }}
                                    </label>
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
                            @if ($existImage != null && $image == null)
                                <div class="row">
                                    <div class="col-3 card me-1 mb-1">
                                        <img src="{{ asset('storage/' . $existImage) }}">
                                    </div>
                                </div>
                            @elseif($image !== null)
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
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            wire:click="empty()">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Modal Edit-->
    <div class="modal fade" id="modalDelete" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
        wire:ignore.self aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header  bg-danger">
                    <h5 class="modal-title" id="modalEditTitle">Hapus Gallery</h5>
                    <button type="button" class="close" data-dismiss="modal" wire:click="empty()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6>Apakah anda yakin ingin menghapus kategori ?</h6>
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
    <!-- Modal Tambah-->
    <div class="modal fade" id="modalTambah" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
        wire:ignore.self aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog" role="document">
            <form role="form" wire:submit.prevent="save">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEditTitle">Tambah Gallery</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            wire:click="empty()">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title">Judul</label>
                            <input type="text"
                                class="form-control @error('title')
                    is-invalid
                @enderror"
                                id="title" name="title" wire:model="title" placeholder="Judul">
                            @error('title')
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
