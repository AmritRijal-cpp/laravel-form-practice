<x-layout>
    <x-slot:title>Form</x-slot:title>
  <x-slot:heading>
    Form
  </x-slot:heading>
  @if (session('success'))
    <div>{{ session('success') }}</div>
  @endif
  <form action="/form" method="POST">
    @csrf
    <div class="container">
      <x-formField></x-formField>
      <div class="row">
        <div class="col mt-4">
          <button type="submit" class="form-control btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </form>
    <a href="{{ route('record') }}">Records</a>
</x-layout>