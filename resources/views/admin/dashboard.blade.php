@php
    $tableHeader = ['Tanggal', 'Pemohon', 'Program Studi', 'Judul', 'Tanggal Mulai', 'Tanggal Akhir'];

    $tableData = [
        [
            'tanggal' => '2022-01-01',
            'pemohon' => 'Pemohon 1',
            'prodi' => 'S1 Teknik Informatika',
            'judul' => 'Judul 1',
            'tgl_mulai' => '2022-01-01',
            'tgl_akhir' => '2022-01-01',
        ],
        [
            'tanggal' => '2022-01-01',
            'pemohon' => 'Pemohon 2',
            'prodi' => 'S1 Teknik Informatika',
            'judul' => 'Judul 2',
            'tgl_mulai' => '2022-01-01',
            'tgl_akhir' => '2022-01-01',
        ],
        [
            'tanggal' => '2022-01-01',
            'pemohon' => 'Pemohon 3',
            'prodi' => 'S1 Teknik Informatika',
            'judul' => 'Judul 3',
            'tgl_mulai' => '2022-01-01',
            'tgl_akhir' => '2022-01-01',
        ],
    ];
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
                    @foreach ($tableData as $td)
                        <tr
                            class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                {{ $td['tanggal'] }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $td['pemohon'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $td['prodi'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $td['judul'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $td['tgl_mulai'] }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $td['tgl_akhir'] }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button onclick="saveDispositionData({{ json_encode($td) }})"
                                    data-modal-target="disposition-detail" data-modal-toggle="disposition-detail"
                                    class="block rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    type="button">
                                    View
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
        class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
        <div class="relative max-h-full w-full max-w-4xl p-4">
            <!-- Modal content -->
            <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between rounded-t border-b p-4 dark:border-gray-600 md:p-5">
                    <h3 id="mdl-judul" class="text-xl font-semibold text-gray-900 dark:text-white">
                        Judul Permohonan
                    </h3>
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
                <div class="space-y-4 p-4 md:p-5">
                    <h2>Data Pemohon</h2>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        With less than a month to go before the European Union enacts new consumer privacy laws for its
                        citizens, companies around the world are updating their terms of service agreements to comply.
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25
                        and is
                        meant to ensure a common set of data rights in the European Union. It requires organizations to
                        notify users as soon as possible of high-risk data breaches that could personally affect them.
                    </p>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center rounded-b border-t border-gray-200 p-4 dark:border-gray-600 md:p-5">
                    <button data-modal-hide="disposition-detail" type="button"
                        class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
                        accept</button>
                    <button data-modal-hide="disposition-detail" type="button"
                        class="ms-3 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">Decline</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script type="module">
    window.saveDispositionData = (data) => {
        console.log(data)
        $("#mdl-judul").text(data.judul);
    }
</script>
