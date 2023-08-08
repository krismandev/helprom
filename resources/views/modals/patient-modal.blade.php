    <!-- Modal Edit-->
    <div class="modal fade" id="modalEdit" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
        wire:ignore.self aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog modal-lg" role="document">
            <form role="form" wire:submit.prevent="update">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEditTitle">Edit Peserta</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            wire:click="empty()">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="identity">NIP/NIK/NIM</label>
                                    <input type="text" class="form-control @error('identity')is-invalid @enderror"
                                        id="identity" name="identity" wire:model.debounce.500ms="identity"
                                        placeholder="Nomor identitas">
                                    @error('identity')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="full_name">Nama Lengkap</label>
                                    <input type="text" class="form-control @error('full_name')is-invalid @enderror"
                                        id="full_name" name="full_name" wire:model.debounce.500ms="full_name"
                                        placeholder="">
                                    @error('full_name')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="date_of_birth">Tanggal Lahir</label>
                                    <input type="date"
                                        class="form-control @error('date_of_birth')is-invalid @enderror"
                                        id="date_of_birth" name="date_of_birth"
                                        wire:model.debounce.500ms="date_of_birth">
                                    @error('date_of_birth')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="gender">Jenis Kelamin</label>
                                    <select class="form-control @error('gender')is-invalid @enderror" id="gender"
                                        name="gender" wire:model.debounce.500ms="gender">
                                        <option value="">Pilih</option>
                                        <option value="laki-laki">Laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                    @error('gender')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="phone">Nomor Telepon</label>
                                    <input type="text" class="form-control @error('phone')is-invalid @enderror"
                                        id="phone" name="phone" wire:model.debounce.500ms="phone">
                                    @error('phone')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="marriage_status">Status Pernikahan</label>
                                    <select class="form-control @error('marriage_status')is-invalid @enderror"
                                        id="marriage_status" name="marriage_status"
                                        wire:model.debounce.500ms="marriage_status">
                                        <option value="">Pilih</option>
                                        <option value="kawin">Kawin</option>
                                        <option value="belum kawin">Belum Kawin</option>
                                        <option value="cerai hidup">Cerai Hidup</option>
                                        <option value="cerai mati">Cerai Mati</option>
                                    </select>
                                    @error('marriage_status')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="address">Alamat</label>
                                    <textarea name="address" id="address" class="form-control @error('address')is-invalid @enderror"
                                        wire:model.debounce.500ms="address"></textarea>
                                    @error('address')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="occupation">Pekerjaan</label>
                                    <input type="text"
                                        class="form-control @error('occupation')is-invalid @enderror" id="occupation"
                                        name="occupation" wire:model.debounce.500ms="occupation">
                                    @error('occupation')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="faculty">Fakultas</label>
                                    <input type="text" class="form-control @error('faculty')is-invalid @enderror"
                                        id="faculty" name="faculty" wire:model.debounce.500ms="faculty"
                                        placeholder="">
                                    @error('faculty')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="major">Program Studi</label>
                                    <input type="text" class="form-control @error('major')is-invalid @enderror"
                                        id="major" name="major" wire:model.debounce.500ms="major"
                                        placeholder="">
                                    @error('major')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="posbindu">Nama Posbindu</label>
                                    <input type="text" class="form-control @error('posbindu')is-invalid @enderror"
                                        id="posbindu" name="posbindu" wire:model.debounce.500ms="posbindu"
                                        placeholder="">
                                    @error('posbindu')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
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
    <!-- Modal Delete-->
    <div class="modal fade" id="modalDelete" data-backdrop="static" data-keyboard="false" tabindex="-1"
        role="dialog" wire:ignore.self aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header  bg-danger">
                    <h5 class="modal-title" id="modalEditTitle">Hapus Peserta</h5>
                    <button type="button" class="close" data-dismiss="modal" wire:click="empty()"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6>Apakah anda yakin ingin menghapus peserta ?</h6>
                    <p style="color: red; font-size: 14px">Catatan : Peserta tidak akan dapat dihapus apabila digunakan
                        didalam sistem. Hal ini bertujuan untuk mempertahankan integritas data !</p>
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
    <div class="modal fade" id="modalTambah" data-backdrop="static" data-keyboard="false" tabindex="-1"
        role="dialog" wire:ignore.self aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog modal-lg" role="document">
            <form role="form" wire:submit.prevent="save">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEditTitle">Tambah Peserta</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            wire:click="empty()">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="identity">NIP/NIK/NIM</label>
                                    <input type="text" class="form-control @error('identity')is-invalid @enderror"
                                        id="identity" name="identity" wire:model.debounce.500ms="identity"
                                        placeholder="Nomor identitas">
                                    @error('identity')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="full_name">Nama Lengkap</label>
                                    <input type="text"
                                        class="form-control @error('full_name')is-invalid @enderror" id="full_name"
                                        name="full_name" wire:model.debounce.500ms="full_name" placeholder="">
                                    @error('full_name')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="date_of_birth">Tanggal Lahir</label>
                                    <input type="date"
                                        class="form-control @error('date_of_birth')is-invalid @enderror"
                                        id="date_of_birth" name="date_of_birth"
                                        wire:model.debounce.500ms="date_of_birth">
                                    @error('date_of_birth')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="gender">Jenis Kelamin</label>
                                    <select class="form-control @error('gender')is-invalid @enderror" id="gender"
                                        name="gender" wire:model.debounce.500ms="gender">
                                        <option value="">Pilih</option>
                                        <option value="laki-laki">Laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                    @error('gender')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="phone">Nomor Telepon</label>
                                    <input type="text" class="form-control @error('phone')is-invalid @enderror"
                                        id="phone" name="phone" wire:model.debounce.500ms="phone">
                                    @error('phone')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="marriage_status">Status Pernikahan</label>
                                    <select class="form-control @error('marriage_status')is-invalid @enderror"
                                        id="marriage_status" name="marriage_status"
                                        wire:model.debounce.500ms="marriage_status">
                                        <option value="">Pilih</option>
                                        <option value="kawin">Kawin</option>
                                        <option value="belum kawin">Belum Kawin</option>
                                        <option value="cerai hidup">Cerai Hidup</option>
                                        <option value="cerai mati">Cerai Mati</option>
                                    </select>
                                    @error('marriage_status')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="address">Alamat</label>
                                    <textarea name="address" id="address" class="form-control @error('address')is-invalid @enderror"
                                        wire:model.debounce.500ms="address"></textarea>
                                    @error('address')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="occupation">Pekerjaan</label>
                                    <input type="text"
                                        class="form-control @error('occupation')is-invalid @enderror" id="occupation"
                                        name="occupation" wire:model.debounce.500ms="occupation">
                                    @error('occupation')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="faculty">Fakultas</label>
                                    <input type="text" class="form-control @error('faculty')is-invalid @enderror"
                                        id="faculty" name="faculty" wire:model.debounce.500ms="faculty"
                                        placeholder="">
                                    @error('faculty')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="major">Program Studi</label>
                                    <input type="text" class="form-control @error('major')is-invalid @enderror"
                                        id="major" name="major" wire:model.debounce.500ms="major"
                                        placeholder="">
                                    @error('major')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="posbindu">Nama Posbindu</label>
                                    <input type="text" class="form-control @error('posbindu')is-invalid @enderror"
                                        id="posbindu" name="posbindu" wire:model.debounce.500ms="posbindu"
                                        placeholder="">
                                    @error('posbindu')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
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
