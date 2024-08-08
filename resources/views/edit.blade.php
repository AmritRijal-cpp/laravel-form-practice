<x-layout>
    <x-slot:title>Edit</x-slot:title>
    <x-slot:heading>Edit</x-slot:heading>
    <form action="{{ route('edit', $data->id)}}" method="post">
        <div class="container">
            @csrf

            @method('PUT')
            <x-formField :data="$data"></x-formField>
            <button type="submit" class="form-control btn btn-primary mt-4">Submit</button>


        </div>
    </form>
</x-layout>