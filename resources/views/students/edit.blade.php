@extends('layouts.app')

@section('content')
    <h2>Edit Student</h2>

    <form action="{{ route('students.update', $student) }}" method="POST">
        @csrf
        @method('PUT')

        @include('students._form', [
            'student' => $student,
            'buttonText' => 'Update Student'
        ])
    </form>
@endsection