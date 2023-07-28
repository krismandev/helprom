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
                        <form role="form">
                            <div class="container padding-bottom-3x mb-1">
                                <div class="row">
                                    <h5 style="font-weight: bold">Detail Screening</h5>
                                </div>
                                <div class="div">
                                    <div class="form-group">
                                        <label for="tgl">Tanggal Screening</label>
                                        <input type="text" disabled class="form-control"
                                            value="{{ $screening->created_at }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="identity">NIP/NIK/NIM</label>
                                            <input type="text" disabled class="form-control"
                                                value="{{ $screening->patient->identity }}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="full_name">Nama Lengkap</label>
                                            <input type="text" disabled class="form-control"
                                                value="{{ $screening->patient->full_name }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="date_of_birth">Tanggal Lahir</label>
                                            <input type="date" disabled class="form-control"
                                                value="{{ $screening->patient->date_of_birth }}">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="gender">Jenis Kelamin</label>
                                            <input type="text" disabled class="form-control"
                                                value="{{ ucfirst($screening->patient->gender) }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="phone">Nomor Telepon</label>
                                            <input type="text" disabled class="form-control"
                                                value="{{ $screening->patient->phone }}">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="marriage_status">Status Pernikahan</label>
                                            <input type="text" disabled class="form-control"
                                                value="{{ $screening->patient->marriage_status }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="address">Alamat</label>
                                            <textarea name="address" disabled id="address" class="form-control">{{ $screening->patient->address }}</textarea>

                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="occupation">Pekerjaan</label>
                                            <input type="text" disabled class="form-control"
                                                value="{{ $screening->patient->occupation }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="faculty">Fakultas</label>
                                            <input type="text" disabled class="form-control"
                                                value="{{ $screening->patient->faculty }}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="major">Program Studi</label>
                                            <input type="text" disabled class="form-control"
                                                value="{{ $screening->patient->major }}">
                                        </div>
                                    </div>
                                </div>
                                @foreach ($screening->screeningAnswers as $item)
                                    <div class="div">
                                        <div class="form-group">
                                            <label for="tgl">{{ $item->question->question }}</label>
                                            <input type="text" disabled class="form-control"
                                                value="{{ $item->answer }}">
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-warning" wire:click='back()' data-toggle="modal">Kembali</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
</section>
