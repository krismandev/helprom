<div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            @if (session()->has('message'))
                                <div class="alert alert-success alert-dismissible mt-2">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">×</button>
                                    <h5><i class="icon fas fa-check"></i>Pesan</h5>
                                    {{ session('message') }}
                                </div>
                            @endif

                            <h5 style="font-weight: bold">Edit Konten</h5>
                            <form role="form" wire:submit.prevent="update">
                                <div class="form-group" wire:ignore>
                                    <label for="homepage">Halaman dinamis homepage</label>
                                    <textarea name="homepage" id="summernote" class="form-control">{{ $homepage }}</textarea>
                                </div>
                                @error('homepage')
                                    <span style="color:red; font-size:12px">{{ $message }}</span>
                                @enderror
                                <div class="form-group" wire:ignore>
                                    <label for="about">Halaman dinamis tentang HPU</label>
                                    <textarea name="about" id="summernote2" class="form-control ">
                                        {{ $about }}
                                    </textarea>
                                </div>
                                @error('about')
                                    <span style="color:red; font-size:12px">{{ $message }}</span>
                                @enderror
                                <div class="form-group" wire:ignore>
                                    <label for="member">Halaman dinamis pengurus HPU</label>
                                    <textarea name="member" id="summernote3" class="form-control ">{{ $member }}</textarea>
                                </div>
                                @error('member')
                                    <span style="color:red; font-size:12px">{{ $message }}</span>
                                @enderror

                                <div class="form-group" wire:ignore>
                                    <label for="contact">Halaman dinamis kontak</label>
                                    <textarea name="contact" id="summernote4" class="form-control ">{{ $contact }}</textarea>
                                </div>
                                @error('contact')
                                    <span style="color:red; font-size:12px">{{ $message }}</span>
                                @enderror
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>
    @section('script')
        <script>
            // JAVASCRIPT
            $('#summernote').summernote({
                tabsize: 2,
                height: 500,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture']],
                    ['view', ['fullscreen', 'help']]
                ],
                callbacks: {
                    onChange: function(contents, $editable) {
                        @this.set('homepage', contents);
                    }
                }
            });

            // SUMMERNOTE 2
            $('#summernote2').summernote({
                tabsize: 2,
                height: 500,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture']],
                    ['view', ['fullscreen', 'help']]
                ],
                callbacks: {
                    onChange: function(contents, $editable) {
                        @this.set('about', contents);
                    }
                }
            });

            // SUMMERNOTE 3
            $('#summernote3').summernote({
                tabsize: 2,
                height: 500,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture']],
                    ['view', ['fullscreen', 'help']]
                ],
                callbacks: {
                    onChange: function(contents, $editable) {
                        @this.set('member', contents);
                    }
                }
            });

            // SUMMERNOTE 4
            $('#summernote4').summernote({
                tabsize: 2,
                height: 500,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture']],
                    ['view', ['fullscreen', 'help']]
                ],
                callbacks: {
                    onChange: function(contents, $editable) {
                        @this.set('contact', contents);
                    }
                }
            });

            window.addEventListener('to-top', (event) => {
                event.preventDefault();
                window.scrollTo(0, 0);
            });
            // window.addEventListener('close-input-modal', event => {
            //     $('#modalTambah').modal('hide');
            // });
            // window.addEventListener('show-edit-modal', event => {
            //     $('#modalEdit').modal('show');
            // });
            // window.addEventListener('close-edit-modal', event => {
            //     $('#modalEdit').modal('hide');
            // });
            window.addEventListener('show-delete-confirmation-modal', event => {
                $('#modalDelete').modal('show');
            });
        </script>
    @endsection
</div>
