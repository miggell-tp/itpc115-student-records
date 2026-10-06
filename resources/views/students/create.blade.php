@extends('layouts.app')

@section('content')
    <h2>Add Student</h2>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        @include('students._form', [
            'buttonText' => 'Save Student'
        ])
    </form>
@endsection