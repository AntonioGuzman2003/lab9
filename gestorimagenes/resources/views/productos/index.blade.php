<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <style>
                    table {
                        border: 1px solid #000;
                        border-collapse: collapse;
                        width: 100%;
                    }

                    th,
                    td {
                        border: 1px solid #000;
                        padding: 8px;
                    }

                    tbody tr:nth-child(even) {
                        background-color: #f2f2f2;
                    }
                </style>

                <table >
                    <thead>
                        <tr>
                            <th>Song</th>
                            <th>Artist</th>
                            <th>Year</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                            <td>Malcolm Lockyer</td>
                            <td>1961</td>
                        </tr>
                        <tr>
                            <td>Witchy Woman</td>
                            <td>The Eagles</td>
                            <td>1972</td>
                        </tr>
                        <tr>
                            <td>Shining Star</td>
                            <td>Earth, Wind, and Fire</td>
                            <td>1975</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>