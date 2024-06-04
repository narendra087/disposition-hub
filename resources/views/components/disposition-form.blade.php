<form>
    <div class="space-y-12 max-w-3xl mx-auto p-6 bg-white rounded-lg">

        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Data Pemohon</h2>
            <p class="mt-1 text-xs leading-6 text-gray-600">Tanda <span class="text-red-500">*</span> wajib
            </p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="col-span-full">
                    <label for="nama-pemohon" class="block text-sm font-medium leading-6 text-gray-900">
                        Nama Pemohon <span class="text-red-500">*</span></label>
                    <div class="mt-2">
                        <input type="text" name="nama-pemohon" id="nama-pemohon" autocomplete="nama-pemohon"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="nomor-identitas" class="block text-sm font-medium leading-6 text-gray-900">NIP/NUP/NIM
                        <span class="text-red-500">*</span></label>
                    <div class="mt-2">
                        <input type="text" name="nomor-identitas" id="nomor-identitas" autocomplete="NIP/NUP/NIM"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="nomor-telepon" class="block text-sm font-medium leading-6 text-gray-900">Nomor
                        WhatsApp <span class="text-red-500">*</span></label>
                    <div class="mt-2">
                        <input type="text" name="nomor-telepon" id="nomor-telepon" autocomplete="+62"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="jabatan" class="block text-sm font-medium leading-6 text-gray-900">Jabatan <span
                            class="text-red-500">*</span></label>
                    <div class="mt-2">
                        <input type="text" name="jabatan" id="jabatan" autocomplete="jabatan"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="program-studi" class="block text-sm font-medium leading-6 text-gray-900">Program
                        Studi <span class="text-red-500">*</span></label>
                    <div class="mt-2">
                        <input type="text" name="program-studi" id="program-studi" autocomplete="program-studi"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="nama-organisasi" class="block text-sm font-medium leading-6 text-gray-900">Nama
                        Organisasi</label>
                    <div class="mt-2">
                        <input type="text" name="nama-organisasi" id="nama-organisasi" autocomplete="nama-organisasi"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
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
                    <label for="judul-pemohon" class="block text-sm font-medium leading-6 text-gray-900">
                        Judul Permohonan <span class="text-red-500">*</span></label>
                    <div class="mt-2">
                        <input type="text" name="judul-pemohon" id="judul-pemohon" autocomplete="judul-pemohon"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="tanggal-mulai" class="block text-sm font-medium leading-6 text-gray-900">Tanggal
                        Mulai Kegiatan <span class="text-red-500">*</span></label>
                    <div class="mt-2">
                        <input type="text" name="tanggal-mulai" id="tanggal-mulai" autocomplete="tanggal-mulai"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="tanggal-akhir" class="block text-sm font-medium leading-6 text-gray-900">Tanggal
                        Akhir Kegiatan <span class="text-red-500">*</span></label>
                    <div class="mt-2">
                        <input type="text" name="tanggal-akhir" id="tanggal-akhir" autocomplete="tanggal-akhir"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="peserta-kegiatan" class="block text-sm font-medium leading-6 text-gray-900">Peserta
                        Kegiatan</label>
                    <div class="mt-2">
                        <input type="text" name="peserta-kegiatan" id="peserta-kegiatan"
                            autocomplete="peserta-kegiatan"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="jumlah-peserta" class="block text-sm font-medium leading-6 text-gray-900">Jumlah
                        Peserta</label>
                    <div class="mt-2">
                        <input type="text" name="jumlah-peserta" id="jumlah-peserta"
                            autocomplete="jumlah-peserta"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="tempat-kegiatan" class="block text-sm font-medium leading-6 text-gray-900">Tempat
                        Kegiatan</label>
                    <div class="mt-2">
                        <input type="text" name="tempat-kegiatan" id="tempat-kegiatan"
                            autocomplete="tempat-kegiatan"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-full">
                    <label for="permohonan-proposal" class="block text-sm font-medium leading-6 text-gray-900">Surat
                        Permohonan / Proposal
                        Kegiatan <span class="text-red-500">*</span></label>
                    <div class="mt-2">
                        <input type="file" name="permohonan-proposal" id="permohonan-proposal"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-md cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                    </div>
                </div>

                <div class="sm:col-span-full">
                    <label for="tanda-tangan" class="block text-sm font-medium leading-6 text-gray-900">Tanda Tangan
                        Pemohon <span class="text-red-500">*</span></label>
                    <div class="mt-2">
                        <input type="file" name="tanda-tangan" id="tanda-tangan"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-md cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                    </div>
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
