<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>

    <table>
        <thead>
        <tr>
            <th> questionnaire id</th>
            <th> submission date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($submissions as $submission)
            <tr>
                <td> <a href="{{ route('submission', ['id' => $submission->id]) }}"> {{$submission->questionnaire_id}} </a> </td>
                <td> {{$submission->created_at}} </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>
