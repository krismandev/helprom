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
                        <h5 style="font-weight: bold">Tambah Screening</h5>
                        <span>Data screening yang ditambahkan adalah screening bulan ini
                            <strong>{{ \Carbon\Carbon::now()->translatedFormat('F Y') }}</strong>
                        </span>
                        <form role="form" wire:submit.prevent="{{ $form == 11 ? 'save' : 'next' }}">
                            <div class="container padding-bottom-3x mb-1 mt-3">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div
                                            class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
                                            <div class="step completed">
                                                <div class="step-icon-wrap">
                                                    <div class="step-icon"><i class="fas fa-user"></i></div>
                                                </div>
                                                <h4 class="step-title">Pilih Peserta</h4>
                                            </div>
                                            <div
                                                class="step {{ ($form == 1 or $form == 2 or $form == 3 or $form == 4 or $form == 5 or $form == 6 or $form == 7 or $form == 8 or $form == 9 or $form == 10 or $form == 11) ? 'completed' : '' }}">
                                                <div class="step-icon-wrap">
                                                    <div class="step-icon"><i class="fas fa-user-friends"></i></div>
                                                </div>
                                                <h4 class="step-title">Riwayat Penyakit Keluarga</h4>
                                            </div>
                                            <div
                                                class="step {{ ($form == 2 or $form == 3 or $form == 4 or $form == 5 or $form == 6 or $form == 7 or $form == 8 or $form == 9 or $form == 10 or $form == 11) ? 'completed' : '' }} }}">
                                                <div class="step-icon-wrap">
                                                    <div class="step-icon"><i class="fas fa-user-injured"></i></div>
                                                </div>
                                                <h4 class="step-title">Riwayat Penyakit Pribadi</h4>
                                            </div>
                                            <div
                                                class="step {{ ($form == 3 or $form == 4 or $form == 5 or $form == 6 or $form == 7 or $form == 8 or $form == 9 or $form == 10 or $form == 11) ? 'completed' : '' }} }}">
                                                <div class="step-icon-wrap">
                                                    <div class="step-icon"><i class="fas fa-user-nurse"></i></div>
                                                </div>
                                                <h4 class="step-title">Faktor Risiko</h4>
                                            </div>
                                            <div
                                                class="step {{ ($form == 4 or $form == 5 or $form == 6 or $form == 7 or $form == 8 or $form == 9 or $form == 10 or $form == 11) ? 'completed' : '' }} }}">
                                                <div class="step-icon-wrap">
                                                    <div class="step-icon"><i class="fas fa-briefcase-medical"></i>
                                                    </div>
                                                </div>
                                                <h4 class="step-title">Pengukuran Antropometri</h4>
                                            </div>
                                            <div
                                                class="step {{ ($form == 5 or $form == 6 or $form == 7 or $form == 8 or $form == 9 or $form == 10 or $form == 11) ? 'completed' : '' }} }}">
                                                <div class="step-icon-wrap">
                                                    <div class="step-icon"><i class="fas fa-x-ray"></i></div>
                                                </div>
                                                <h4 class="step-title">Pengukuran Gula Darah</h4>
                                            </div>
                                            <div
                                                class="step {{ ($form == 6 or $form == 7 or $form == 8 or $form == 9 or $form == 10 or $form == 11) ? 'completed' : '' }} }}">
                                                <div class="step-icon-wrap">
                                                    <div class="step-icon"><i class="fas fa-heartbeat"></i></div>
                                                </div>
                                                <h4 class="step-title">Pengukuran Kolesterol Darah dan Asam Urat</h4>
                                            </div>
                                            <div
                                                class="step {{ ($form == 7 or $form == 8 or $form == 9 or $form == 10 or $form == 11) ? 'completed' : '' }} }}">
                                                <div class="step-icon-wrap">
                                                    <div class="step-icon"><i class="fas fa-eye"></i></div>
                                                </div>
                                                <h4 class="step-title">Pemeriksaan Mata</h4>
                                            </div>
                                            <div
                                                class="step {{ ($form == 8 or $form == 9 or $form == 10 or $form == 11) ? 'completed' : '' }} }}">
                                                <div class="step-icon-wrap">
                                                    <div class="step-icon"><i class="fas fa-volume-up"></i></div>
                                                </div>
                                                <h4 class="step-title">Pemeriksaan Telinga</h4>
                                            </div>
                                            <div
                                                class="step {{ ($form == 9 or $form == 10 or $form == 11) ? 'completed' : '' }} }}">
                                                <div class="step-icon-wrap">
                                                    <div class="step-icon"><i class="fas fa-volume-up"></i></div>
                                                </div>
                                                <h4 class="step-title">Pengukuran Kadar CO Paru</h4>
                                            </div>
                                            <div class="step {{ ($form == 10 or $form == 11) ? 'completed' : '' }} }}">
                                                <div class="step-icon-wrap">
                                                    <div class="step-icon"><i class="fas fa-volume-up"></i></div>
                                                </div>
                                                <h4 class="step-title">IVA Pengukuran</h4>
                                            </div>
                                            <div class="step {{ $form == 11 ? 'completed' : '' }} }}">
                                                <div class="step-icon-wrap">
                                                    <div class="step-icon"><i class="fas fa-volume-up"></i></div>
                                                </div>
                                                <h4 class="step-title">Screening Kejiwaan</h4>
                                            </div>
                                        </div>
                                        @if ($form >= 4)
                                            <span style="color:red; margin-bottom:3px">Jika tidak dilakukan pemeriksaan,
                                                klik
                                                selanjutnya</span>
                                        @endif
                                        {{-- FORM --}}
                                        @if ($form == 0)
                                            @include('livewire.screening-components.quesioners.form-patient')
                                        @else
                                            @include('livewire.screening-components.quesioners.form-questioners')
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                @if ($form != 0)
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                        wire:click="previous()">Sebelumnya</button>
                                @endif
                                @if ($form != 11)
                                    <button type="submit" class="btn btn-primary">Selanjutnya</button>
                                @else
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
</section>
