@csrf
<label>Student Number
<input name="student_number" value="{{ old('student_number', $student->student_number ?? '') }}" required>
</label>
@error('student_number') <p>{{ $message }}</p> @enderror
<br>
<label>First Name
<input name="first_name" value="{{ old('first_name', $student->first_name ?? '') }}" required>
</label>
@error('first_name') <p>{{ $message }}</p> @enderror
<br>
<label>Last Name
<input name="last_name" value="{{ old('last_name', $student->last_name ?? '') }}" required>
</label>
@error('last_name') <p>{{ $message }}</p> @enderror
<br>
<label>Course
<input name="course" value="{{ old('course', $student->course ?? '') }}" required>
</label>
@error('course') <p>{{ $message }}</p> @enderror
<br>
<button type="submit">{{ $buttonText }}</button>
