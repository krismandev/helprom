<div>
    @if ($add == false)
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
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">×</button>
                                    <h5><i class="icon fas fa-check"></i>Pesan</h5>
                                    {{ session('message') }}
                                </div>
                            @endif
                            @if (session()->has('error'))
                                <div class="alert alert-success alert-dismissible mx-3 mt-2">
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">×</button>
                                    <h5><i class="icon fas fa-ban"></i>Pesan</h5>
                                    {{ session('message') }}
                                </div>
                            @endif

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered table-responsive" style="display:table">
                                    <thead>
                                        <tr>
                                            <th style="width:
                                    10px">#</th>
                                            <th>Judul</th>
                                            <th>Konten</th>
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
                                                    <td>
                                                        {!! $item->content !!}
                                                        {{ $item->content }}</td>
                                                    <td>
                                                        <img src="{{ asset('storage/' . $item->image_path) }}"
                                                            alt="img.jpg" width="200">
                                                    </td>
                                                    <td>{{ $item->category->name }}</td>
                                                    <td>
                                                        <div style="display: flex;">
                                                            <button wire:click="edit('{{ $item->slug }}')"
                                                                class="btn btn-info" style="margin-right:2px">
                                                                <i class="fas fa-edit "></i>
                                                            </button>
                                                            <button
                                                                wire:click="deleteConfirmation('{{ $item->slug }}')"
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
    @else
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
                                <form role="form" wire:submit.prevent="save">
                                    <div class="form-group">
                                        <label for="title">Judul</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            id="title" name="title" wire:model="title"
                                            placeholder="Judul artikel">
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
                                                    class="custom-file-input @error('image')is-invalid @enderror"
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
    @endif

    {{-- @include('modals.articles-modal') --}}
    @section('script')
        <script>
            // JAVASCRIPT
            $('#summernote').summernote({
                tabsize: 2,
                height: 100,
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
                        @this.set('content', contents);
                    }
                }
            });
            window.addEventListener('refresh-summernote', event => {
                console.log("Masuk Nih");
                $('#summernote').summernote({
                    tabsize: 2,
                    height: 300,
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
                            @this.set('content', contents);
                        }
                    }
                });
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
