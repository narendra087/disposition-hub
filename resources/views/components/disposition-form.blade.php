<form action="/" method="POST" enctype="multipart/form-data" novalidate>
    @csrf
    <div class="mx-auto max-w-3xl space-y-12 rounded-lg bg-white p-6">

        {{-- @dump($errors) --}}
        @if (session('success'))
            <div class="mb-4 flex rounded-lg bg-green-50 p-4 text-sm text-green-800 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                <svg class="me-3 mt-[2px] inline h-4 w-4 flex-shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Sukses</span>
                <div>
                    <span class="font-medium">Permohonan berhasil dikirim!</span>
                    <span class="block">{{ session('success') }}</span>
                </div>
            </div>
        @endif

        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Data Pemohon</h2>
            <p class="mt-1 text-xs leading-6 text-gray-600">Tanda <span class="text-red-500">*</span> wajib
            </p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="nama_pemohon" class="block text-sm font-medium leading-6 text-gray-900">
                        Nama Pemohon <span class="text-red-500">*</span></label>
                    <div class="mt-2">
                        <input type="text" name="nama_pemohon" id="nama_pemohon" autocomplete="nama_pemohon"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('nama_pemohon')
                        <label class="mt-1 block text-xs capitalize text-red-600">{{ $message }}</label>
                    @enderror
                </div>

                <div class="sm:col-span-3">
                    <label for="id_pemohon" class="block text-sm font-medium leading-6 text-gray-900">NIP/NUP/NIM
                        <span class="text-red-500">*</span></label>
                    <div class="mt-2">
                        <input type="text" name="id_pemohon" id="id_pemohon" autocomplete="NIP/NUP/NIM"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('id_pemohon')
                        <label
                            class="mt-1 block text-xs capitalize text-red-600">{{ Str::replace('id pemohon', 'NIP/NUP/NIM', $message) }}</label>
                    @enderror
                </div>

                <div class="sm:col-span-3">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Alamat Email <span
                            class="text-red-500">*</span></label>
                    <div class="mt-2">
                        <input type="email" name="email" id="email" autocomplete="email"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('email')
                        <label class="mt-1 block text-xs capitalize text-red-600">{{ $message }}</label>
                    @enderror
                </div>

                <div class="sm:col-span-3">
                    <label for="no_wa" class="block text-sm font-medium leading-6 text-gray-900">Nomor
                        WhatsApp <span class="text-red-500">*</span></label>
                    <div class="mt-2">
                        <input type="text" name="no_wa" id="no_wa" autocomplete="+62"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('no_wa')
                        <label
                            class="mt-1 block text-xs capitalize text-red-600">{{ Str::replace('no wa', 'nomor whatsapp', $message) }}</label>
                    @enderror
                </div>

                <div class="sm:col-span-3">
                    <label for="jabatan" class="block text-sm font-medium leading-6 text-gray-900">Jabatan <span
                            class="text-red-500">*</span></label>
                    <div class="mt-2">
                        <input type="text" name="jabatan" id="jabatan" autocomplete="jabatan"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('jabatan')
                        <label class="mt-1 block text-xs capitalize text-red-600">{{ $message }}</label>
                    @enderror
                </div>

                <div class="sm:col-span-3">
                    <label for="program_studi" class="block text-sm font-medium leading-6 text-gray-900">Program
                        Studi <span class="text-red-500">*</span></label>
                    <div class="mt-2">
                        <input type="text" name="program_studi" id="program_studi" autocomplete="program_studi"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('program_studi')
                        <label class="mt-1 block text-xs capitalize text-red-600">{{ $message }}</label>
                    @enderror
                </div>

                <div class="col-span-full">
                    <label for="organisasi" class="block text-sm font-medium leading-6 text-gray-900">Nama
                        Organisasi</label>
                    <div class="mt-2">
                        <input type="text" name="organisasi" id="organisasi" autocomplete="organisasi"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('organisasi')
                        <label class="mt-1 block text-xs capitalize text-red-600">{{ $message }}</label>
                    @enderror
                </div>

            </div>
        </div>

        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Data Permohonan</h2>
            <p class="mt-1 text-xs leading-6 text-gray-600">Tanda <span class="text-red-500">*</span>
                wajib
            </p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="col-span-full">
                    <label for="judul" class="block text-sm font-medium leading-6 text-gray-900">
                        Judul Permohonan <span class="text-red-500">*</span></label>
                    <div class="mt-2">
                        <input type="text" name="judul" id="judul" autocomplete="judul"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('judul')
                        <label class="mt-1 block text-xs capitalize text-red-600">{{ $message }}</label>
                    @enderror
                </div>
                <div class="sm:col-span-3">
                    <label for="tgl_mulai" class="block text-sm font-medium leading-6 text-gray-900">Tanggal
                        Mulai Kegiatan <span class="text-red-500">*</span></label>
                    <div class="mt-2">
                        <input type="date" name="tgl_mulai" id="tgl_mulai" autocomplete="tgl_mulai"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('tgl_mulai')
                        <label class="mt-1 block text-xs capitalize text-red-600">{{ $message }}</label>
                    @enderror
                </div>

                <div class="sm:col-span-3">
                    <label for="tgl_akhir" class="block text-sm font-medium leading-6 text-gray-900">Tanggal
                        Akhir Kegiatan <span class="text-red-500">*</span></label>
                    <div class="mt-2">
                        <input type="date" name="tgl_akhir" id="tgl_akhir" autocomplete="tgl_akhir"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('tgl_akhir')
                        <label class="mt-1 block text-xs capitalize text-red-600">{{ $message }}</label>
                    @enderror
                </div>

                <div class="sm:col-span-3">
                    <label for="peserta" class="block text-sm font-medium leading-6 text-gray-900">Peserta
                        Kegiatan</label>
                    <div class="mt-2">
                        <input type="text" name="peserta" id="peserta" autocomplete="peserta"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('peserta')
                        <label class="mt-1 block text-xs capitalize text-red-600">{{ $message }}</label>
                    @enderror
                </div>

                <div class="sm:col-span-3">
                    <label for="jumlah_peserta" class="block text-sm font-medium leading-6 text-gray-900">Jumlah
                        Peserta</label>
                    <div class="mt-2">
                        <input type="number" name="jumlah_peserta" id="jumlah_peserta"
                            autocomplete="jumlah_peserta"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('jumlah_peserta')
                        <label class="mt-1 block text-xs capitalize text-red-600">{{ $message }}</label>
                    @enderror
                </div>

                <div class="sm:col-span-3">
                    <label for="tempat_kegiatan" class="block text-sm font-medium leading-6 text-gray-900">Tempat
                        Kegiatan</label>
                    <div class="mt-2">
                        <input type="text" name="tempat_kegiatan" id="tempat_kegiatan"
                            autocomplete="tempat_kegiatan"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('tempat_kegiatan')
                        <label class="mt-1 block text-xs capitalize text-red-600">{{ $message }}</label>
                    @enderror
                </div>

                <div class="sm:col-span-full">
                    <label for="surat_permohonan" class="block text-sm font-medium leading-6 text-gray-900">Surat
                        Permohonan / Proposal
                        Kegiatan <span class="text-red-500">*</span></label>
                    <div class="mt-2">
                        <input type="file" accept="application/pdf" name="surat_permohonan" id="surat_permohonan"
                            class="block w-full cursor-pointer rounded-md border border-gray-300 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400">
                    </div>
                    @error('surat_permohonan')
                        <label class="mt-1 block text-xs capitalize text-red-600">{{ $message }}</label>
                    @enderror
                </div>

                <div class="sm:col-span-full">
                    <label for="ttd_pemohon" class="block text-sm font-medium leading-6 text-gray-900">Tanda Tangan
                        Pemohon <span class="text-red-500">*</span></label>
                    <div class="mt-2">
                        <input type="file" accept="image/png, image/jpeg, image/jpg" name="ttd_pemohon"
                            id="ttd_pemohon"
                            class="block w-full cursor-pointer rounded-md border border-gray-300 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400">
                    </div>
                    @error('ttd_pemohon')
                        <label
                            class="mt-1 block text-xs capitalize text-red-600">{{ Str::replace('ttd', 'tanda tangan', $message) }}</label>
                    @enderror
                </div>
            </div>

        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Clear</button>
            <button type="submit"
                class="rounded-md bg-primary-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Submit</button>
        </div>
    </div>

</form>
