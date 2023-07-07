<div>
    @if ($add == false && $edit == false)
        @include('livewire.article-components.table')
    @elseif ($edit == true)
        @include('livewire.article-components.edit-form')
    @else
        @include('livewire.article-components.add-form')
    @endif
    <!-- Modal Hapus-->
    <div class="modal fade" id="modalDelete" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
        wire:ignore.self aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header  bg-danger">
                    <h5 class="modal-title" id="modalEditTitle">Hapus Artikel</h5>
                    <button type="button" class="close" data-dismiss="modal" wire:click="empty()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6>Apakah anda yakin ingin menghapus artikel ?</h6>
                    <p style="color: red; font-size: 14px">Catatan : Artikel tidak akan dapat dikembalikan apabila telah
                        dihapus! </p>
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
            window.addEventListener('to-top', (event) => {
                event.preventDefault();
                window.scrollTo(0, 0);
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
