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
                        <option value="">Select..</option>
                        <option value="Policymaker" {{ old('role') == 'Policymaker' ? 'selected' : '' }}>Goverment/Regulator</option>
                        <option value="Private Sector" {{ old('role') == 'Competition Authority' ? 'selected' : '' }}>Private Sector</option>
                        <option value="Academic" {{ old('role') == 'Academic' ? 'selected' : '' }}>Academia/Researcher</option>
                        <option value="Industry Player" {{ old('role') == 'Industry Player' ? 'selected' : '' }}>Legal Practicioner</option>
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
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition">
                        SUBMIT REGISTRATION
                    </button>
                </div>

                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
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
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const email = document.querySelector('input[name="email"]');

    email.addEventListener('blur', function() {
        if (this.value && !this.value.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
            this.classList.add('border-red-500');
        } else {
            this.classList.remove('border-red-500');
        }
    });
});
</script>
