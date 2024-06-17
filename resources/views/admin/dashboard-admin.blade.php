@php
    $tableHeader = ['Tanggal', 'Pemohon', 'Program Studi', 'Judul', 'Tanggal Mulai', 'Tanggal Akhir', 'Status'];
@endphp

<x-app-layout>
    <div class="min-h-[calc(100vh-8rem)]">
        <h2 class="mb-3 text-xl font-bold tracking-tight text-gray-900">List Permohonan</h2>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
                <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        @foreach ($tableHeader as $th)
                            <th scope="col" class="px-6 py-3">
                                {{ $th }}
                            </th>
                        @endforeach
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Action</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($applications as $app)
                        <tr
                            class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                {{ $app['created_at']->format('Y-m-d') }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $app['nama_pemohon'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $app['program_studi'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $app['judul'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $app['tgl_mulai'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $app['tgl_akhir'] }}
                            </td>
                            <td class="px-6 py-4">
                                @switch($app['status'])
                                    @case(-1)
                                        <span
                                            class="me-2 rounded bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-800 dark:bg-red-900 dark:text-red-300">Ditolak</span>
                                    @break

                                    @case(1)
                                        <span
                                            class="me-2 rounded bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300">Dalam
                                            Proses</span>
                                    @break

                                    @case(2)
                                        <span
                                            class="me-2 rounded bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-800 dark:bg-red-900 dark:text-red-300">Selesai</span>
                                    @break

                                    @default
                                        <span
                                            class="me-2 rounded bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800 dark:bg-blue-900 dark:text-blue-300">Permohonan
                                            Baru</span>
                                @endswitch
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button onclick="saveDispositionData({{ json_encode($app) }})"
                                    data-modal-target="disposition-detail" data-modal-toggle="disposition-detail"
                                    class="block rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    type="button">
                                    Lihat
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Modal --}}
    <div id="disposition-detail" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-hidden md:inset-0">
        <div class="relative max-h-full w-full max-w-4xl p-4">
            <!-- Modal content -->
            <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between rounded-t border-b p-4 dark:border-gray-600 md:p-5">
                    <h3 id="mdl-judul" class="text-xl font-semibold text-gray-900 dark:text-white"></h3>
                    <button type="button"
                        class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="disposition-detail">
                        <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="h-full max-h-[calc(100vh-15rem)] space-y-4 overflow-y-auto p-4 md:p-5">
                    <h2 class="text-lg font-medium">Data Pemohon:</h2>
                    <div>
                        <p class="text-base font-medium text-gray-900 dark:text-white">Nama:
                            <span id="mdl-nama-pemohon" class="font-normal text-gray-500 dark:text-gray-400"></span>
                        </p>

                        <p class="text-base font-medium text-gray-900 dark:text-white">NIP/NUP/NIM:
                            <span id="mdl-id-pemohon" class="font-normal text-gray-500 dark:text-gray-400"></span>
                        </p>

                        <p class="text-base font-medium text-gray-900 dark:text-white">Nomor Whatsapp:
                            <span id="mdl-no-wa" class="font-normal text-gray-500 dark:text-gray-400"></span>
                        </p>

                        <p class="text-base font-medium text-gray-900 dark:text-white">Email:
                            <span id="mdl-email" class="font-normal text-gray-500 dark:text-gray-400"></span>
                        </p>

                        <p class="text-base font-medium text-gray-900 dark:text-white">Jabatan:
                            <span id="mdl-jabatan" class="font-normal text-gray-500 dark:text-gray-400"></span>
                        </p>

                        <p class="text-base font-medium text-gray-900 dark:text-white">Program Studi:
                            <span id="mdl-program-studi" class="font-normal text-gray-500 dark:text-gray-400"></span>
                        </p>

                        <p class="text-base font-medium text-gray-900 dark:text-white">Organisasi:
                            <span id="mdl-organisasi" class="font-normal text-gray-500 dark:text-gray-400"></span>
                        </p>
                    </div>

                    <h2 class="text-lg font-medium">Data Permohonan:</h2>
                    <div>
                        <p class="text-base font-medium text-gray-900 dark:text-white">Tanggal Mulai:
                            <span id="mdl-tgl-mulai" class="font-normal text-gray-500 dark:text-gray-400"></span>
                        </p>

                        <p class="text-base font-medium text-gray-900 dark:text-white">Tanggal Selesai:
                            <span id="mdl-tgl-akhir" class="font-normal text-gray-500 dark:text-gray-400"></span>
                        </p>

                        <p class="text-base font-medium text-gray-900 dark:text-white">Peserta:
                            <span id="mdl-peserta" class="font-normal text-gray-500 dark:text-gray-400"></span>
                        </p>

                        <p class="text-base font-medium text-gray-900 dark:text-white">Jumlah Peserta:
                            <span id="mdl-jumlah-peserta" class="font-normal text-gray-500 dark:text-gray-400"></span>
                        </p>

                        <p class="text-base font-medium text-gray-900 dark:text-white">Tempat Kegiatan:
                            <span id="mdl-tempat-kegiatan" class="font-normal text-gray-500 dark:text-gray-400"></span>
                        </p>

                        <p class="text-base font-medium text-gray-900 dark:text-white">Surat Permohonan / Proposal:
                            <span id="mdl-proposal"
                                class="cursor-pointer font-normal text-gray-500 underline dark:text-gray-400"></span>
                        </p>

                        <p id="mdl-ttd" class="w-max text-base font-medium text-gray-900 dark:text-white">Tanda
                            Tangan:
                        </p>
                    </div>
                </div>
                <!-- Modal footer -->
                <div id="mdl-footer"
                    class="flex items-center justify-between gap-2 rounded-b border-t border-gray-200 p-4 dark:border-gray-600 md:p-5">
                    <div class="flex items-center gap-2">
                        <button data-modal-hide="disposition-detail" type="button"
                            class="rounded-lg bg-red-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Tolak
                            Permohonan</button>

                        <button data-modal-hide="disposition-detail" type="button"
                            class="rounded-lg bg-yellow-400 px-5 py-2.5 text-sm font-medium text-white hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 dark:focus:ring-yellow-900">Tanpa
                            Disposisi</button>
                    </div>

                    <form id="kirim-disposisi" method="POST">
                        <div class="flex items-center gap-2">
                            @csrf
                            <input required placeholder="Kode" type="text" name="kode" id="kode"
                                autocomplete="kode"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm sm:leading-6">
                            <button type="submit"
                                class="w-full rounded-lg bg-green-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Kirim
                                Disposisi</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script type="module">
    const publicPath = '{{ asset('') }}';
    let selectedApp = null;


    window.saveDispositionData = (data) => {
        selectedApp = data
        $("#mdl-nama-pemohon").text(data.nama_pemohon);
        $("#mdl-id-pemohon").text(data.id_pemohon);
        $("#mdl-no-wa").text(data.no_wa);
        $("#mdl-email").text(data.email);
        $("#mdl-jabatan").text(data.jabatan);
        $("#mdl-program-studi").text(data.program_studi);
        $("#mdl-organisasi").text(data.organisasi ? data.organisasi : '-');
        $("#mdl-judul").text(data.judul);
        $("#mdl-tgl-mulai").text(data.tgl_mulai);
        $("#mdl-tgl-akhir").text(data.tgl_akhir);
        $("#mdl-peserta").text(data.peserta ? data.peserta : '-');
        $("#mdl-jumlah-peserta").text(data.jumlah_peserta ? data.jumlah_peserta : '-');
        $("#mdl-tempat-kegiatan").text(data.tempat_kegiatan ? data.tempat_kegiatan : '-');
        $("#mdl-proposal").text(data.surat_permohonan);

        // Remove old signature image
        const oldImage = document.getElementById('ttd-image');
        if (oldImage) {
            oldImage.remove();
        }
        // Add signature image
        let img = document.createElement('img')
        img.id = 'ttd-image'
        img.src = publicPath + 'uploads/' + data.ttd_pemohon
        img.alt = 'Tanda Tangan Pemohon'
        img.style.width = '100%'
        img.style.maxWidth = '300px'
        $("#mdl-ttd").append(img)

        if (data.status) {
            $("#mdl-footer").hide();
        } else {
            $("#mdl-footer").show();
        }
    }

    $('#mdl-proposal').click(() => {
        window.open(publicPath + 'uploads/' + selectedApp.surat_permohonan, '_blank')
    })

    $('#mdl-ttd').click(() => {
        window.open(publicPath + 'uploads/' + selectedApp.ttd_pemohon, '_blank')
    })

    // Send Disposition Function
    $(document).ready(function() {
        $('#kirim-disposisi').on('submit', function(e) {
            e.preventDefault()

            if (selectedApp.status) {
                alert('Permohonan sudah pernah diproses!')
                return
            }

            const data = {
                _token: "{{ csrf_token() }}",
                application_id: selectedApp.id,
                kode: $('#kode').val(),
            }

            $.ajax({
                url: '{{ route('admin.send_disposition') }}',
                method: 'POST',
                data,
                success: function(response) {
                    alert('Disposisi berhasil dikirim!');
                    setTimeout(() => {
                        window.location.reload();
                    }, 500);
                },
                error: function(xhr) {
                    alert('Terjadi kesalahan: ' + xhr.status + ' ' + xhr.statusText);
                }
            })
        })
    })
</script>
