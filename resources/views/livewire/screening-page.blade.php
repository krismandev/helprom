<div>
    @if ($add == false && $edit == false && $detail == false)
        @include('livewire.screening-components.table')
    @elseif ($edit == true)
        @include('livewire.screening-components.edit-form')
    @elseif ($detail == true)
        @include('livewire.screening-components.screening-detail')
    @else
        @include('livewire.screening-components.add-form')
    @endif
    <!-- Modal Hapus-->
    <div class="modal fade" id="modalDelete" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
        wire:ignore.self aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header  bg-danger">
                    <h5 class="modal-title" id="modalEditTitle">Hapus Screening</h5>
                    <button type="button" class="close" data-dismiss="modal" wire:click="empty()" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6>Apakah anda yakin ingin menghapus artikel ?</h6>
                    <p style="color: red; font-size: 14px">Catatan : Screening yang dihapus tidak dapat dikembalikan!
                    </p>
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
            window.addEventListener('to-top', (event) => {
                event.preventDefault();
                window.scrollTo(0, 0);
            });
            window.addEventListener('show-delete-confirmation-modal', event => {
                $('#modalDelete').modal('show');
            });
        </script>
    @endsection
</div>
