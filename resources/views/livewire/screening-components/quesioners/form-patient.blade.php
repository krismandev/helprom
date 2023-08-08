<div class="form-group">
    <label for="patient">Peserta</label>
    <select class="form-control @error('patient')is-invalid @enderror" id="patient" name="patient" wire:model="patient">
        <option value="">Pilih</option>
        <option value="pasien-baru">Peserta Baru</option>
        @foreach ($patients as $item)
            <option value="{{ $item->id }}">{{ $item->full_name }}</option>
        @endforeach
    </select>
    @error('patient')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>
<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="identity">NIP/NIK/NIM</label>
            <input type="text" {{ ($patient == '' or $patient != 'pasien-baru') ? 'disabled' : '' }}
                class="form-control @error('identity')is-invalid @enderror" id="identity" name="identity"
                wire:model="identity" placeholder="Nomor identitas">
            @error('identity')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="full_name">Nama Lengkap</label>
            <input type="text" {{ ($patient == '' or $patient != 'pasien-baru') ? 'disabled' : '' }}
                class="form-control @error('full_name')is-invalid @enderror" id="full_name" name="full_name"
                wire:model="full_name" placeholder="">
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
            <input type="date" {{ ($patient == '' or $patient != 'pasien-baru') ? 'disabled' : '' }}
                class="form-control @error('date_of_birth')is-invalid @enderror" id="date_of_birth" name="date_of_birth"
                wire:model="date_of_birth">
            @error('date_of_birth')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-6">
        <div class="form-group">
            <label for="gender">Jenis Kelamin</label>
            <select class="form-control @error('gender')is-invalid @enderror"
                {{ ($patient == '' or $patient != 'pasien-baru') ? 'disabled' : '' }} id="gender" name="gender"
                wire:model="gender">
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
            <input type="text" {{ ($patient == '' or $patient != 'pasien-baru') ? 'disabled' : '' }}
                class="form-control @error('phone')is-invalid @enderror" id="phone" name="phone"
                wire:model="phone">
            @error('phone')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-6">
        <div class="form-group">
            <label for="marriage_status">Status Pernikahan</label>
            <select class="form-control @error('marriage_status')is-invalid @enderror" id="marriage_status"
                name="marriage_status" {{ ($patient == '' or $patient != 'pasien-baru') ? 'disabled' : '' }}
                wire:model="marriage_status">
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
            <textarea name="address" {{ ($patient == '' or $patient != 'pasien-baru') ? 'disabled' : '' }} id="address"
                class="form-control @error('address')is-invalid @enderror" wire:model="address"></textarea>
            @error('address')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="occupation">Pekerjaan</label>
            <input type="text" {{ ($patient == '' or $patient != 'pasien-baru') ? 'disabled' : '' }}
                class="form-control @error('occupation')is-invalid @enderror" id="occupation" name="occupation"
                wire:model="occupation">
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
            <input type="text" {{ ($patient == '' or $patient != 'pasien-baru') ? 'disabled' : '' }}
                class="form-control @error('faculty')is-invalid @enderror" id="faculty" name="faculty"
                wire:model="faculty" placeholder="">
            @error('faculty')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="major">Program Studi</label>
            <input type="text" {{ ($patient == '' or $patient != 'pasien-baru') ? 'disabled' : '' }}
                class="form-control @error('major')is-invalid @enderror" id="major" name="major"
                wire:model="major" placeholder="">
            @error('major')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
