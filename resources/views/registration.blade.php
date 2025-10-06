@extends('layouts.app')

@section('title', 'Registration - JICF 2025')

@section('content')
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-md p-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-6">Conference Registration</h1>

            <p class="text-gray-600 mb-8">
                Please complete the form below. Once confirmed, you will receive a confirmation email with practical
                information. Fields marked <span class="text-red-500">*</span> are required.
            </p>

            @if(session('success'))
                <div class="bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg mb-6">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="bg-red-50 border border-red-200 text-red-800 px-4 py-3 rounded-lg mb-6">
                    <ul class="list-disc list-inside">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('registration.store') }}" method="POST" class="space-y-6">
                @csrf

                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            First Name <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="first_name" value="{{ old('first_name') }}" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Last Name <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="last_name" value="{{ old('last_name') }}" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            E-mail <span class="text-red-500">*</span>
                        </label>
                        <input type="email" name="email" value="{{ old('email') }}" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Phone <span class="text-red-500">*</span>
                        </label>
                        <input type="tel" name="phone" value="{{ old('phone') }}" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Organization <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="organization" value="{{ old('organization') }}" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Country <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="country" value="{{ old('country') }}" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Role <span class="text-red-500">*</span>
                    </label>
                    <select name="role" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="">Select...</option>
                        <option value="Government/Regulator" {{ old('role') == 'Government/Regulator' ? 'selected' : '' }}>Government/Regulator</option>
                        <option value="Private Sector" {{ old('role') == 'Private Sector' ? 'selected' : '' }}>Private Sector</option>
                        <option value="Academia/Researcher" {{ old('role') == 'Academia/Researcher' ? 'selected' : '' }}>Academia/Researcher</option>
                        <option value="Legal Practitioner" {{ old('role') == 'Legal Practitioner' ? 'selected' : '' }}>Legal Practitioner</option>
                        <option value="International Organization" {{ old('role') == 'International Organization' ? 'selected' : '' }}>International Organization</option>
                        <option value="Competition Authority" {{ old('role') == 'Competition Authority' ? 'selected' : '' }}>Competition Authority</option>
                        <option value="Media" {{ old('role') == 'Media' ? 'selected' : '' }}>Media</option>
                    </select>
                </div>

                <div class="flex items-start">
                    <input type="checkbox" name="consent" id="consent" value="1" required
                        class="mt-1 h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                    <label for="consent" class="ml-2 text-sm text-gray-700">
                        I consent to my data being used for event administration
                    </label>
                </div>

                <div>
                    <button type="submit"
                        class="w-full text-white font-semibold py-3 px-6 rounded-lg transition bg-gradient-to-r from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-800">
                        SUBMIT REGISTRATION
                    </button>
                </div>

                <div class="rounded-lg p-4 bg-gradient-to-r from-blue-50 to-indigo-50">
                    <p class="text-sm text-blue-800">
                        <strong>Note:</strong> After submitting, you will receive an auto-reply email confirming your registration.
                        If you need more assistance, you will receive a QR code with your registration number.
                    </p>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

<script>
document.addEventListener('DocumentLoaded', function() {
    const form = document.querySelector('form');
    const submitButton = form.querySelector('button[type="submit"]');

    form.addEventListener('submit', function(event) {
        event.preventDefault();
        submitButton.disabled = true;
        submitButton.textContent = 'Submitting...';

        // Perform form validation
        const requiredFields = form.querySelectorAll('[required]');
        let isValid = true;

        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                isValid = false;
                field.classList.add('border-red-500');
            } else {
                field.classList.remove('border-red-500');
            }
        });

        if (!isValid) {
            submitButton.disabled = false;
            submitButton.textContent = 'SUBMIT REGISTRATION';
            return;
        }

        // If validation passes, submit the form
        fetch(form.action, {
            method: 'POST',
            body: new FormData(form),
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Redirect to success page or show success message
                window.location.href = '/registration-success';
            } else {
                // Show error message
                alert('Registration failed. Please try again.');
                submitButton.disabled = false;
                submitButton.textContent = 'SUBMIT REGISTRATION';
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred. Please try again later.');
            submitButton.disabled = false;
            submitButton.textContent = 'SUBMIT REGISTRATION';
        });
    });
});
</script>
