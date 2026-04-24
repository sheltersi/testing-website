<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
    <title>Contact SportAbility | Race Timing Quotes Southern Africa</title>
    <meta name="description" content="Get a quote for race timing services across Southern Africa. We serve events in South Africa, Namibia, Botswana, Zimbabwe, Zambia, Mozambique, Lesotho, Eswatini, and Malawi. Contact us for chip timing, online registration and live tracking.">
    @push('styles')
        <style>
            .faq-answer {
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.3s ease, padding 0.3s ease;
            }

            .faq-answer.open {
                max-height: 300px;
                padding-top: 0.5rem;
                padding-bottom: 1rem;
            }

            .faq-icon {
                transition: transform 0.3s ease;
            }

            .faq-icon.rotated {
                transform: rotate(180deg);
            }

            #services {
                display: none !important;
            }

            .ts-wrapper {
                width: 100% !important;
            }

            .ts-control {
                width: 100% !important;
            }

            .ts-control > input {
                width: 100% !important;
            }

            .ts-placeholder {
                padding: 10px 12px !important;
                color: #9ca3af !important;
            }

            .ts-control {
                display: flex !important;
                flex-wrap: wrap !important;
                flex-direction: row !important;
                align-items: center !important;
            }

            .ts-control .item {
                display: inline-flex !important;
                flex-direction: row !important;
                margin: 2px !important;
                background: #FEE2E2 !important;
                color: #9A0D07 !important;
                padding: 4px 8px !important;
                border-radius: 6px !important;
                font-size: 14px !important;
                font-weight: 500 !important;
                border: 1px solid #FECACA !important;
            }

            .ts-control .item .remove {
                color: #9A0D07 !important;
                opacity: 0.8 !important;
                margin-left: 4px !important;
                padding: 0 2px !important;
            }

            .ts-control .item .remove:hover {
                opacity: 1 !important;
                color: #7F1D1D !important;
            }

            .ts-control .remove {
                border: none !important;
            }

            .ts-dropdown {
                border: 1px solid #E5E7EB !important;
                border-radius: 12px !important;
                box-shadow: 0 10px 25px rgba(0,0,0,0.1) !important;
                padding: 6px !important;
            }

            .ts-dropdown .option {
                padding: 10px 12px !important;
                border-radius: 8px !important;
                margin: 2px 0 !important;
                font-size: 14px !important;
            }

            .ts-dropdown .option:hover,
            .ts-dropdown .active {
                background: #FEE2E2 !important;
                color: #9A0D07 !important;
            }

            .ts-dropdown .option.selected {
                background: #9A0D07 !important;
                color: white !important;
            }

            .ts-empty-options {
                padding: 16px !important;
                text-align: center !important;
                color: #9CA3AF !important;
            }
        </style>
    @endpush

@section('content')
    <!-- Page Header -->
    <section class="relative overflow-hidden min-h-[55vh] flex items-center py-16 text-white">
        <!-- Video Background -->
        <div class="absolute inset-0 z-0">
            <video class="w-full h-full object-cover" autoplay muted loop playsinline>
                <source src="/racing-videos/marathon.mp4" type="video/mp4">

                <div class="absolute inset-0 bg-gradient-to-br from-slate-900/80 via-slate-900/60 to-slate-900/70"></div>
        </div>

        <div
            class="absolute -top-40 -left-40 w-[500px] h-[500px] bg-primary/20 blur-3xl rounded-full z-10 pointer-events-none">
        </div>
        <div
            class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-pink-500/20 blur-3xl rounded-full z-10 pointer-events-none">
        </div>

        <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="animate-fade-in-up">
                <nav class="text-sm text-white/70 mb-4">
                    <a href="{{ route('home') }}" class="hover:text-white transition">Home</a>
                    <span class="mx-2">/</span>
                    <span class="text-white">Contact Us</span>
                </nav>
                <h1 class="text-5xl md:text-6xl font-extrabold text-white leading-tight mb-4">Get in <span
                        class="text-primary">Touch</span></h1>
                <p class="text-gray-300 mt-4 max-w-2xl">We're here to help make your next event a success</p>
            </div>
        </div>

        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-20">
            <svg class="relative block w-full h-[80px]" viewBox="0 0 1440 120" preserveAspectRatio="none">
                <path fill="#ffffff" d="M0,0 C480,120 960,120 1440,0 L1440,120 L0,120 Z"></path>
            </svg>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="relative py-24 bg-white overflow-hidden" id="contact-form-section">
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[800px] bg-primary/[0.02] rounded-full blur-3xl pointer-events-none">
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-5 gap-12">
                <!-- Contact Form (Left - Larger) -->
                <div class="lg:col-span-3 animate-fade-in-up">
                    <div
                        class="inline-flex items-center gap-2 px-5 py-2.5 bg-primary/10 text-primary rounded-full text-sm font-semibold mb-6 tracking-wide uppercase">
                        <i class="fas fa-paper-plane"></i>
                        <span data-i18n="Get in Touch">{{ __('Get in Touch') }}</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-accent mb-4 leading-tight">
                        <span data-i18n="Let's Discuss Your">{{ __('Let\'s Discuss Your') }}</span>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-red-600"
                            data-i18n="Next Event">{{ __('Next Event') }}</span>
                    </h2>
                    <p class="text-text mb-10 leading-relaxed"
                        data-i18n="Fill out the form below and our team will get back to you within 24 hours.">
                        {{ __('Fill out the form below and our team will get back to you within 24 hours.') }}</p>

                    {{-- form code --}}
                    <form id="contact-form" class="space-y-6" action="{{ route('contact.submit') }}" method="POST"
                        novalidate>
                        @csrf

                        <!-- Alert Messages -->
                        <div id="form-alert" class="hidden rounded-xl p-4 text-sm"></div>

                        <!-- Personal Information -->
                        <div class="bg-gray-50 rounded-xl p-6">
                            <h3
                                class="text-sm font-semibold text-accent uppercase tracking-wide mb-4 flex items-center gap-2">
                                <i class="fas fa-user text-primary"></i>
                                <span data-i18n="Personal Information">{{ __('Personal Information') }}</span>
                            </h3>
                            <div class="grid md:grid-cols-2 gap-5">
                                <div>
                                    <label for="first_name" class="block text-sm font-semibold text-accent mb-2"><span
                                            data-i18n="First Name">{{ __('First Name') }}</span>
                                        <span data-i18n="*">{{ __('*') }}</span></label>
                                    <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}"
                                        required
                                        class="w-full px-4 py-3.5 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white transition duration-300 @error('first_name') border-red-400 @enderror"
                                        placeholder="John">
                                    @error('first_name')
                                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="last_name" class="block text-sm font-semibold text-accent mb-2"><span
                                            data-i18n="Last Name">{{ __('Last Name') }}</span>
                                        <span data-i18n="*">{{ __('*') }}</span></label>
                                    <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}"
                                        required
                                        class="w-full px-4 py-3.5 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white transition duration-300 @error('last_name') border-red-400 @enderror"
                                        placeholder="Doe">
                                    @error('last_name')
                                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="grid md:grid-cols-2 gap-5 mt-5">
                                <div>
                                    <label for="venue_country" class="block text-sm font-semibold text-accent mb-2"
                                        data-i18n="Country">{{ __('Country') }}</label>
                                    <select id="venue_country" name="venue_country" required
                                        class="w-full px-4 py-3.5 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white transition duration-300 text-sm @error('venue_country') border-red-400 @enderror">
                                        <option value="" data-i18n="Select Country">{{ __('Select Country') }}
                                        </option>
                                        <option value="Botswana"
                                            {{ old('venue_country') == 'Botswana' ? 'selected' : '' }}>
                                            🇧🇼 {{ __('Botswana') }}</option>
                                        <option value="Eswatini"
                                            {{ old('venue_country') == 'Eswatini' ? 'selected' : '' }}>
                                            🇸🇿 {{ __('Eswatini') }}</option>
                                        <option value="Lesotho" {{ old('venue_country') == 'Lesotho' ? 'selected' : '' }}>
                                            🇱🇸 {{ __('Lesotho') }}</option>
                                        <option value="Malawi" {{ old('venue_country') == 'Malawi' ? 'selected' : '' }}>
                                            🇲🇼
                                            {{ __('Malawi') }}</option>
                                        <option value="Mozambique"
                                            {{ old('venue_country') == 'Mozambique' ? 'selected' : '' }}>🇲🇿
                                            {{ __('Mozambique') }}
                                        </option>
                                        <option value="Namibia" {{ old('venue_country') == 'Namibia' ? 'selected' : '' }}>
                                            🇳🇦 {{ __('Namibia') }}</option>
                                        <option value="South Africa"
                                            {{ old('venue_country', 'South Africa') == 'South Africa' ? 'selected' : '' }}>
                                            🇿🇦 {{ __('South Africa') }}</option>
                                        <option value="Zambia" {{ old('venue_country') == 'Zambia' ? 'selected' : '' }}>
                                            🇿🇲 {{ __('Zambia') }}</option>
                                        <option value="Zimbabwe"
                                            {{ old('venue_country') == 'Zimbabwe' ? 'selected' : '' }}>🇿🇼
                                            {{ __('Zimbabwe') }}
                                        </option>
                                    </select>
                                    @error('venue_country')
                                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="phone" class="block text-sm font-semibold text-accent mb-2"
                                        data-i18n="Phone Number">{{ __('Phone Number') }}</label>
                                    <div class="flex">
                                        <select id="phone_country_code" name="phone_country_code"
                                            class="px-3 py-3.5 border border-r-0 border-gray-200 rounded-l-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white transition duration-300 text-sm">
                                            <option value="+27"
                                                {{ old('phone_country_code', '+27') == '+27' ? 'selected' : '' }}>🇿🇦 +27
                                            </option>
                                            <option value="+267"
                                                {{ old('phone_country_code') == '+267' ? 'selected' : '' }}>🇧🇼 +267
                                            </option>
                                            <option value="+268"
                                                {{ old('phone_country_code') == '+268' ? 'selected' : '' }}>🇸🇿 +268
                                            </option>
                                            <option value="+266"
                                                {{ old('phone_country_code') == '+266' ? 'selected' : '' }}>🇱🇸 +266
                                            </option>
                                            <option value="+265"
                                                {{ old('phone_country_code') == '+265' ? 'selected' : '' }}>🇲🇼 +265
                                            </option>
                                            <option value="+258"
                                                {{ old('phone_country_code') == '+258' ? 'selected' : '' }}>🇲🇿 +258
                                            </option>
                                            <option value="+264"
                                                {{ old('phone_country_code') == '+264' ? 'selected' : '' }}>🇳🇦 +264
                                           </option>
                                            <option value="+260"
                                                {{ old('phone_country_code') == '+260' ? 'selected' : '' }}>🇿🇲 +260
                                            </option>
                                            <option value="+263"
                                                {{ old('phone_country_code') == '+263' ? 'selected' : '' }}>🇿🇼 +263
                                            </option>
                                        </select>
                                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                                            class="w-full px-4 py-3.5 border border-gray-200 rounded-r-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white transition duration-300"
                                            placeholder="XX XXX XXXX">
                                    </div>
                                    <p id="phone-error" class="hidden mt-1 text-xs text-red-500"></p>
                                    @error('phone')
                                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-5 grid grid-cols-2 gap-4">
                                <div class="">
                                    <label for="email" class="block text-sm font-semibold text-accent mb-2"><span
                                            data-i18n="Email Address">{{ __('Email Address') }}</span>
                                        <span data-i18n="*">{{ __('*') }}</span></label>
                                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                                        required
                                        class="w-full px-4 py-3.5 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white transition duration-300 @error('email') border-red-400 @enderror"
                                        placeholder="john@example.com">
                                    @error('email')
                                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="job_title" class="block text-sm font-semibold text-accent mb-2"
                                        data-i18n="Job Title">{{ __('Job Title') }}</label>
                                    <input type="text" id="job_title" name="job_title"
                                        value="{{ old('job_title') }}"
                                        class="w-full px-4 py-3.5 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white transition duration-300"
                                        placeholder="{{ __('e.g. Event Organizer, Race Director') }}">
                                </div>
                            </div>
                        </div>

                        <!-- Event Details -->
                        <div class="bg-gray-50 rounded-xl p-6">
                            <h3
                                class="text-sm font-semibold text-accent uppercase tracking-wide mb-4 flex items-center gap-2">
                                <i class="fas fa-flag-checkered text-primary"></i>
                                <span data-i18n="Event Details">{{ __('Event Details') }}</span>
                            </h3>
                            <div class="grid md:grid-cols-2 gap-5 mt-5">
                                <div>
                                    <label for="race_type" class="block text-sm font-semibold text-accent mb-2"><span
                                            data-i18n="Race Type">{{ __('Race Type') }}</span>
                                        <span data-i18n="*">{{ __('*') }}</span></label>
                                    <select id="race_type" name="race_type" required
                                        class="w-full px-4 py-3.5 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white transition duration-300 @error('race_type') border-red-400 @enderror">
                                        <option value="" data-i18n="Select race type">{{ __('Select race type') }}
                                        </option>
                                        <option value="run" {{ old('race_type') == 'run' ? 'selected' : '' }}
                                            data-i18n="Run">{{ __('Run') }}
                                        </option>
                                        <option value="trail" {{ old('race_type') == 'trail' ? 'selected' : '' }}
                                            data-i18n="Trail">{{ __('Trail') }}
                                        </option>
                                        <option value="cycle" {{ old('race_type') == 'cycle' ? 'selected' : '' }}
                                            data-i18n="Cycle">{{ __('Cycle') }}
                                        </option>
                                        <option value="motor_cross"
                                            {{ old('race_type') == 'motor_cross' ? 'selected' : '' }}
                                            data-i18n="Motocross">{{ __('Motocross') }}</option>
                                    {{-- Fitness Races --}}
                                     <option value="Fitness Races"
                                            {{ old('race_type') == 'fitness_races' ? 'selected' : '' }}
                                            data-i18n="Fitness Races">{{ __('Fitness Races') }}</option>
                                        </select>
                                    @error('race_type')
                                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="expected_capacity" class="block text-sm font-semibold text-accent mb-2"
                                        data-i18n="Expected Participants">{{ __('Expected Participants') }}</label>
                                    <select id="expected_capacity" name="expected_capacity"
                                        class="w-full px-4 py-3.5 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white transition duration-300">
                                        <option value="" data-i18n="Select range">{{ __('Select range') }}</option>
                                        <option value="1-50" {{ old('expected_capacity') == '1-50' ? 'selected' : '' }}>
                                            {{ __('1 - 50') }}</option>
                                        <option value="51-200"
                                            {{ old('expected_capacity') == '51-200' ? 'selected' : '' }}>
                                            {{ __('51 - 200') }}</option>
                                        <option value="201-500"
                                            {{ old('expected_capacity') == '201-500' ? 'selected' : '' }}>
                                            {{ __('201 - 500') }}
                                        </option>
                                        <option value="501-1000"
                                            {{ old('expected_capacity') == '501-1000' ? 'selected' : '' }}>
                                            {{ __('501 - 1,000') }}
                                        </option>
                                        <option value="1001-5000"
                                            {{ old('expected_capacity') == '1001-5000' ? 'selected' : '' }}>
                                            {{ __('1,001 - 5,000') }}
                                        </option>
                                        <option value="5000+"
                                            {{ old('expected_capacity') == '5000+' ? 'selected' : '' }}>
                                            {{ __('5,000+') }}</option>
                                    </select>
                                    @error('expected_capacity')
                                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="grid md:grid-cols-2 gap-5 mt-5">
                                <div>
                                    <label for="race_date" class="block text-sm font-semibold text-accent mb-2"
                                        data-i18n="Race Date">{{ __('Race Date') }}</label>
                                    <input type="date" id="race_date" name="race_date"
                                        value="{{ old('race_date') }}"
                                        class="w-full px-4 py-3.5 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white transition duration-300">
                                    @error('race_date')
                                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="venue_location" class="block text-sm font-semibold text-accent mb-2"
                                        data-i18n="Venue / Location">{{ __('Venue / Location') }}</label>
                                    <input type="text" id="venue_location" name="venue_location"
                                        value="{{ old('venue_location') }}"
                                        class="w-full px-4 py-3.5 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white transition duration-300"
                                        placeholder="{{ __('Stadium, Park...') }}">
                                    @error('venue_location')
                                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-5">
                                <label for="venue_city" class="block text-sm font-semibold text-accent mb-2"
                                    data-i18n="City">{{ __('City') }}</label>
                                <input type="text" id="venue_city" name="venue_city" value="{{ old('venue_city') }}"
                                    class="w-full px-4 py-3.5 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white transition duration-300"
                                    placeholder="{{ __('Johannesburg') }}">
                                @error('venue_city')
                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Inquiry Details -->
                        <div class="bg-gray-50 rounded-xl p-6">
                            <h3
                                class="text-sm font-semibold text-accent uppercase tracking-wide mb-4 flex items-center gap-2">
                                <i class="fas fa-comment-dots text-primary"></i>
                                <span data-i18n="Services Needed">{{ __('Services Needed') }}</span>
                            </h3>

                            <div class="mb-5">
                                <label for="services" class="block text-sm font-semibold text-accent mb-2"><span
                                        data-i18n="Select Services">{{ __('Select Services') }}</span>
                                    <span data-i18n="*">{{ __('*') }}</span></label>

                                <select id="services" name="services[]" multiple autocomplete="off"
                                    class="js-services-select"
                                    placeholder="{{ __('Select services...') }}" style="display: none;">

                                    @foreach ($services as $service)
                                        <option value="{{ $service->id }}"
                                            {{ collect(old('services'))->contains($service->id) ? 'selected' : '' }}>
                                            {{ $service->title }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('services')
                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-semibold text-accent mb-2"><span
                                        data-i18n="Message">{{ __('Message') }}</span>
                                    <span data-i18n="*">{{ __('*') }}</span></label>
                                <textarea id="message" name="message" rows="6" required
                                    class="w-full px-4 py-3.5 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary bg-white transition duration-300 resize-none @error('message') border-red-400 @enderror"
                                    placeholder="{{ __('Tell us about your event, expected participants, or any questions you have...') }}">{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" id="submit-btn"
                            class="w-full px-8 py-4 bg-gradient-to-r from-primary to-red-600 text-white rounded-xl font-semibold text-lg hover:shadow-lg hover:shadow-primary/25 transition-all duration-300 flex items-center justify-center gap-2 group disabled:opacity-60 disabled:cursor-not-allowed">
                            <i id="submit-icon"
                                class="fas fa-paper-plane group-hover:translate-x-1 transition-transform duration-300"></i>
                            <span id="submit-text" data-i18n="Send Message">{{ __('Send Message') }}</span>
                            <svg id="submit-spinner" class="hidden animate-spin h-5 w-5 text-white"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                    stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                </path>
                            </svg>
                        </button>
                    </form>

                    <!-- Success Message (Hidden by default) -->
                    <div id="form-success" class="hidden bg-green-50 border border-green-200 rounded-xl p-8 text-center">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-check text-green-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-green-800 mb-2" data-i18n="Message Sent!">
                            {{ __('Message Sent!') }}</h3>
                        <p class="text-green-700"
                            data-i18n="Thank you for contacting us. We'll respond to your inquiry within 24 hours.">
                            {{ __('Thank you for contacting us. We\'ll respond to your inquiry within 24 hours.') }}</p>
                    </div>
                </div>

                <!-- Right Sidebar -->
                <div class="lg:col-span-2 space-y-8 animate-fade-in-up delay-200" id="contact-sidebar">
                    <!-- Quick Contact -->
                    <div class="bg-gradient-to-br from-accent to-slate-800 rounded-2xl p-6 text-white">
                        <h3 class="text-lg font-bold mb-4" data-i18n="Prefer to Reach Out Directly?">
                            {{ __('Prefer to Reach Out Directly?') }}</h3>
                        <div class="space-y-4">
                            <!-- <a href="tel:+27813030000"
                                class="flex items-center gap-4 p-4 bg-white/10 rounded-xl hover:bg-white/20 transition duration-300">
                                <div
                                    class="w-10 h-10 rounded-lg bg-primary flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-phone text-white"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-white/60" data-i18n="Call Us">{{ __('Call Us') }}</p>
                                    <p class="font-semibold"></p>
                                </div>
                            </a> -->
                            <a href="mailto:info@sportability.co.za.co.za"
                                class="flex items-center gap-4 p-4 bg-white/10 rounded-xl hover:bg-white/20 transition duration-300">
                                <div
                                    class="w-10 h-10 rounded-lg bg-primary flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-envelope text-white"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-white/60" data-i18n="Email Us">{{ __('Email Us') }}</p>
                                    <p class="font-semibold text-sm">info@sportability.co.za.co.za</p>
                                </div>
                            </a>
                            <!-- <a href="https://wa.me/27813030000"
                                class="flex items-center gap-4 p-4 bg-white/10 rounded-xl hover:bg-white/20 transition duration-300">
                                <div
                                    class="w-10 h-10 rounded-lg bg-primary flex items-center justify-center flex-shrink-0">
                                    <i class="fab fa-whatsapp text-white"></i>
                                </div>
                                <div>
                                    <p class="text-xs text-white/60" data-i18n="WhatsApp">{{ __('WhatsApp') }}</p>
                                    <p class="font-semibold"></p>
                                </div>
                            </a> -->
                        </div>
                    </div>

                    <!-- Office Hours -->
                    <div class="bg-white rounded-2xl p-6 shadow-[0_4px_24px_rgba(14,35,51,0.06)] border border-gray-100">
                        <h3 class="text-lg font-bold text-accent mb-4 flex items-center gap-2">
                            <i class="fas fa-clock text-primary"></i>
                            <span data-i18n="Office Hours">{{ __('Office Hours') }}</span>
                        </h3>
                        <ul class="space-y-3">
                            <li class="flex justify-between items-center">
                                <span class="text-text" data-i18n="Monday - Friday">{{ __('Monday - Friday') }}</span>
                                <span class="font-semibold text-accent"
                                    data-i18n="08:00 - 17:00">{{ __('08:00 - 17:00') }}</span>
                            </li>
                            <li class="flex justify-between items-center">
                                <span class="text-text" data-i18n="Saturday">{{ __('Saturday') }}</span>
                                <span class="font-semibold text-accent"
                                    data-i18n="Event Days Only">{{ __('Event Days Only') }}</span>
                            </li>
                            <li class="flex justify-between items-center">
                                <span class="text-text" data-i18n="Sunday">{{ __('Sunday') }}</span>
                                <span class="font-semibold text-accent"
                                    data-i18n="Event Days Only">{{ __('Event Days Only') }}</span>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Emergency Contact Banner -->
    <!-- <section class="relative py-16 bg-gray-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative animate-fade-in-up">
                <div class="absolute -inset-1 bg-gradient-to-r from-primary/10 to-red-500/10 rounded-2xl blur-lg"></div>
                <div
                    class="relative bg-gradient-to-r from-accent to-slate-800 rounded-2xl p-6 lg:p-8 flex flex-col md:flex-row items-center gap-6">
                    <div class="w-16 h-16 rounded-xl bg-primary flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-phone-volume text-white text-2xl"></i>
                    </div>
                    <div class="text-center md:text-left flex-1">
                        <h3 class="text-xl font-bold text-white mb-1">Race Day Emergency Contact</h3>
                        <p class="text-white/70 text-sm">For urgent issues on event day, call our dedicated race day line
                        </p>
                    </div>
                    <a href="tel:+27813030000"
                        class="flex items-center gap-3 px-6 py-3 bg-primary hover:bg-red-800 rounded-xl text-white font-semibold transition duration-300 flex-shrink-0">
                        <i class="fas fa-phone"></i>
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </section> -->

    <!-- FAQ Section -->
    <section class="relative py-24 bg-white overflow-hidden">
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-primary/[0.02] rounded-full blur-3xl pointer-events-none">
        </div>

        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16 animate-fade-in-up">
                <div
                    class="inline-flex items-center gap-2 px-5 py-2.5 bg-primary/10 text-primary rounded-full text-sm font-semibold mb-6 tracking-wide uppercase">
                    <i class="fas fa-circle-question"></i>
                    FAQ
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-accent mb-6 leading-tight">
                    Frequently Asked
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-red-600">Questions</span>
                </h2>
                <p class="text-text text-lg max-w-2xl mx-auto leading-relaxed">Quick answers to common questions about our
                    services</p>
                <div class="mt-8 w-24 h-1 bg-gradient-to-r from-primary to-red-500 mx-auto rounded-full"></div>
            </div>

            <div class="space-y-4">
                @foreach ([
            ['q' => 'How do I register for an event?', 'a' => 'You can register for events directly through our events page. Simply browse upcoming events, select the one you want to join, and click the registration button.'],
            ['q' => 'How do I access my race results?', 'a' => 'Race results are typically available within minutes of the event ending. Use the results search feature on our homepage or visit the results page and enter your BIB number.'],
            ['q' => 'What timing technology do you use?', 'a' => 'We use state-of-the-art RFID chip timing technology partnered with RaceResult systems. This ensures accurate, reliable timing for all participants.'],
            ['q' => 'Do you provide equipment rental?', 'a' => 'Yes, we offer rental of timing equipment, barriers, signage, and other event infrastructure. Contact us for a custom quote.'],
            ['q' => 'Can you handle large-scale events?', 'a' => 'Absolutely! We have experience managing events with over 25,000 participants. Our systems are designed to scale for any event size.'],
        ] as $index => $faq)
                    <div
                        class="bg-white rounded-xl shadow-[0_4px_24px_rgba(14,35,51,0.06)] border border-gray-100 overflow-hidden animate-fade-in-up {{ $index > 0 ? 'delay-' . $index * 100 : '' }}">
                        <button
                            class="faq-toggle w-full px-6 py-5 text-left font-semibold text-accent flex justify-between items-center hover:bg-gray-50 transition"
                            onclick="toggleFaq(this)">
                            <span>{{ $faq['q'] }}</span>
                            <i class="fas fa-chevron-down text-primary faq-icon"></i>
                        </button>
                        <div class="faq-answer px-6 text-text">
                            {{ $faq['a'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @vite('resources/js/app.js')
    <script>
        // Translation data for client-side switching
        const translations = {
            en: {
                "Get in Touch": "Get in Touch",
                "Let's Discuss Your": "Let's Discuss Your",
                "Next Event": "Next Event",
                "Fill out the form below and our team will get back to you within 24 hours.": "Fill out the form below and our team will get back to you within 24 hours.",
                "Personal Information": "Personal Information",
                "First Name": "First Name",
                "Last Name": "Last Name",
                "Country": "Country",
                "Select Country": "Select Country",
                "Phone Number": "Phone Number",
                "Email Address": "Email Address",
                "Job Title": "Job Title",
                "Event Details": "Event Details",
                "Race Type": "Race Type",
                "Select race type": "Select race type",
                "Expected Participants": "Expected Participants",
                "Select range": "Select range",
                "Race Date": "Race Date",
                "Venue / Location": "Venue / Location",
                "City": "City",
                "Services Needed": "Services Needed",
                "Select Services": "Select Services",
                "Message": "Message",
                "Send Message": "Send Message",
                "Sending...": "Sending...",
                "Prefer to Reach Out Directly?": "Prefer to Reach Out Directly?",
                "Call Us": "Call Us",
                "Email Us": "Email Us",
                "WhatsApp": "WhatsApp",
                "Office Hours": "Office Hours",
                "Monday - Friday": "Monday - Friday",
                "Saturday": "Saturday",
                "Sunday": "Sunday",
                "08:00 - 17:00": "08:00 - 17:00",
                "Event Days Only": "Event Days Only",
                "Closed": "Closed",
                "Message Sent!": "Message Sent!",
                "Thank you for contacting us. We'll respond to your inquiry within 24 hours.": "Thank you for contacting us. We'll respond to your inquiry within 24 hours.",
                "Sent!": "Sent!",
                "*": "*",
                "Run": "Run",
                "Trail": "Trail",
                "Cycle": "Cycle",
                "Motocross": "Motocross",
                "1 - 50": "1 - 50",
                "51 - 200": "51 - 200",
                "201 - 500": "201 - 500",
                "501 - 1,000": "501 - 1,000",
                "1,001 - 5,000": "1,001 - 5,000",
                "5,000+": "5,000+",
                "e.g. Event Organizer, Race Director": "e.g. Event Organizer, Race Director",
                "Stadium, Park...": "Stadium, Park...",
                "Johannesburg": "Johannesburg",
                "Tell us about your event, expected participants, or any questions you have...": "Tell us about your event, expected participants, or any questions you have...",
                "Select services...": "Select services..."
            },
            pt: {
                "Get in Touch": "Entre em Contato",
                "Let's Discuss Your": "Vamos Discutir o Seu",
                "Next Event": "Próximo Evento",
                "Fill out the form below and our team will get back to you within 24 hours.": "Preencha o formulário abaixo e a nossa equipa entrará em contato consigo dentro de 24 horas.",
                "Personal Information": "Informações Pessoais",
                "First Name": "Primeiro Nome",
                "Last Name": "Apelido",
                "Country": "País",
                "Select Country": "Selecione o País",
                "Phone Number": "Número de Telefone",
                "Email Address": "Endereço de E-mail",
                "Job Title": "Cargo",
                "Event Details": "Detalhes do Evento",
                "Race Type": "Tipo de Corrida",
                "Select race type": "Selecione o tipo de corrida",
                "Expected Participants": "Participantes Esperados",
                "Select range": "Selecione a faixa",
                "Race Date": "Data da Corrida",
                "Venue / Location": "Local / Palco",
                "City": "Cidade",
                "Services Needed": "Serviços Necessários",
                "Select Services": "Selecione os Serviços",
                "Message": "Mensagem",
                "Send Message": "Enviar Mensagem",
                "Sending...": "Enviando...",
                "Prefer to Reach Out Directly?": "Prefere Contactar Diretamente?",
                "Call Us": "Ligue-nos",
                "Email Us": "Envie-nos um E-mail",
                "WhatsApp": "WhatsApp",
                "Office Hours": "Horário de Expediente",
                "Monday - Friday": "Segunda - Sexta",
                "Saturday": "Sábado",
                "Sunday": "Domingo",
                "08:00 - 17:00": "08:00 - 17:00",
                "Event Days Only": "Apenas Dias de Evento",
                "Closed": "Fechado",
                "Message Sent!": "Mensagem Enviada!",
                "Thank you for contacting us. We'll respond to your inquiry within 24 hours.": "Obrigado por nos contactar. Responderemos ao seu pedido dentro de 24 horas.",
                "Sent!": "Enviado!",
                "*": "*",
                "Run": "Corrida",
                "Trail": "Trail",
                "Cycle": "Ciclismo",
                "Motocross": "Motocross",
                "1 - 50": "1 - 50",
                "51 - 200": "51 - 200",
                "201 - 500": "201 - 500",
                "501 - 1,000": "501 - 1.000",
                "1,001 - 5,000": "1.001 - 5.000",
                "5,000+": "5.000+",
                "e.g. Event Organizer, Race Director": "Ex: Organizador de Eventos, Diretor de Corrida",
                "Stadium, Park...": "Estádio, Parque...",
                "Johannesburg": "Joanesburgo",
                "Tell us about your event, expected participants, or any questions you have...": "Conte-nos sobre o seu evento, participantes esperados ou quaisquer questões que tenha...",
                "Select services...": "Selecione os serviços..."
            }
        };

        // Current language state
        let currentLanguage = 'en';

        // Function to switch language - only affects form and sidebar sections
        function switchLanguage(lang) {
            currentLanguage = lang;
            const t = translations[lang];

            // Get the form section and sidebar elements
            const formSection = document.getElementById('contact-form-section');
            const sidebarSection = document.getElementById('contact-sidebar');

            // Update only elements within form section
            if (formSection) {
                formSection.querySelectorAll('[data-i18n]').forEach(el => {
                    const key = el.getAttribute('data-i18n');
                    if (t[key]) {
                        // For input placeholders
                        if (el.tagName === 'INPUT' && el.placeholder) {
                            el.placeholder = t[key];
                        } else {
                            el.textContent = t[key];
                        }
                    }
                });
            }

            // Update only elements within sidebar section
            if (sidebarSection) {
                sidebarSection.querySelectorAll('[data-i18n]').forEach(el => {
                    const key = el.getAttribute('data-i18n');
                    if (t[key]) {
                        if (el.tagName === 'INPUT' && el.placeholder) {
                            el.placeholder = t[key];
                        } else {
                            el.textContent = t[key];
                        }
                    }
                });
            }

            // Update select option text (preserve flags) - only for elements within form section
            updateSelectOptions();
        }

        // Function to update select option text
        function updateSelectOptions() {
            const t = translations[currentLanguage];
            const raceTypeSelect = document.getElementById('race_type');
            if (raceTypeSelect) {
                raceTypeSelect.querySelectorAll('option').forEach(opt => {
                    const key = opt.getAttribute('data-i18n');
                    if (key && t[key] && opt.value !== '') {
                        opt.textContent = t[key];
                    }
                });
                // Update placeholder option
                const placeholderOpt = raceTypeSelect.querySelector('option[value=""]');
                if (placeholderOpt && t["Select race type"]) {
                    placeholderOpt.textContent = t["Select race type"];
                }
            }

            // Update country select
            const countrySelect = document.getElementById('venue_country');
            if (countrySelect) {
                countrySelect.querySelectorAll('option').forEach(opt => {
                    if (opt.value !== '') {
                        const countryName = opt.value;
                        if (currentLanguage === 'pt') {
                            // Keep flags, update country names to Portuguese
                            const ptCountryNames = {
                                'Botswana': 'Botswana',
                                'Eswatini': 'Eswatini',
                                'Lesotho': 'Lesoto',
                                'Malawi': 'Maláui',
                                'Mozambique': 'Moçambique',
                                'Namibia': 'Namíbia',
                                'South Africa': 'África do Sul',
                                'Zambia': 'Zâmbia',
                                'Zimbabwe': 'Zimbabué'
                            };
                            const flag = opt.textContent.split(' ')[0];
                            opt.textContent = flag + ' ' + (ptCountryNames[countryName] || countryName);
                        } else {
                            // English - use original names
                            const flag = opt.textContent.split(' ')[0];
                            opt.textContent = flag + ' ' + countryName;
                        }
                    }
                });
                // Update placeholder option
                const placeholderOpt = countrySelect.querySelector('option[value=""]');
                if (placeholderOpt) {
                    placeholderOpt.textContent = t["Select Country"];
                }
            }

            // Update expected capacity select
            const capacitySelect = document.getElementById('expected_capacity');
            if (capacitySelect) {
                capacitySelect.querySelectorAll('option').forEach(opt => {
                    const key = opt.getAttribute('data-i18n');
                    if (key && t[key] && opt.value !== '') {
                        opt.textContent = t[key];
                    }
                });
                // Update placeholder option
                const placeholderOpt = capacitySelect.querySelector('option[value=""]');
                if (placeholderOpt && t["Select range"]) {
                    placeholderOpt.textContent = t["Select range"];
                }
            }
        }

        document.addEventListener("DOMContentLoaded", function() {

            // --- 1. FAQ TOGGLE LOGIC ---
            window.toggleFaq = function(button) {
                const answer = button.nextElementSibling;
                const icon = button.querySelector('.faq-icon');
                const isOpen = answer.classList.contains('open');

                document.querySelectorAll('.faq-answer').forEach(a => a.classList.remove('open'));
                document.querySelectorAll('.faq-icon').forEach(i => i.classList.remove('rotated'));

                if (!isOpen) {
                    answer.classList.add('open');
                    icon.classList.add('rotated');
                }
            };

            // --- 2. TOM SELECT INITIALIZATION ---
            let tsInstance = null;
            if (document.getElementById('services')) {
                tsInstance = new TomSelect("#services", {
                    plugins: {
                        remove_button: {
                            title: 'Remove item'
                        }
                    },
                    persist: false,
                    create: false,
                    maxOptions: null,
                    onInitialize: function() {
                        this.control.classList.add('w-full', 'px-4', 'py-3.5', 'rounded-xl', 'border',
                            'border-gray-200', 'min-h-[50px]', 'bg-white', 'transition', 'duration-300');
                    }
                });
            }

            // --- 3. PHONE VALIDATION LOGIC ---
            const countryToCode = {
                'Botswana': '+267',
                'Eswatini': '+268',
                'Lesotho': '+266',
                'Malawi': '+265',
                'Mozambique': '+258',
                'Namibia': '+264',
                'South Africa': '+27',
                'Zambia': '+260',
                'Zimbabwe': '+263'
            };

            const phonePatterns = {
                '+27': {
                    regex: /^([6-8]\d{8}|[1-9]\d{7,8})$/,
                    placeholder: 'XX XXX XXXX'
                },
                '+267': {
                    regex: /^([2-7]\d{6})$/,
                    placeholder: 'XX XXX XX'
                },
                '+268': {
                    regex: /^([27]\d{7})$/,
                    placeholder: 'XXXX XXXX'
                },
                '+266': {
                    regex: /^([25]\d{7})$/,
                    placeholder: 'XXXX XXXX'
                },
                '+265': {
                    regex: /^([1789]\d{8})$/,
                    placeholder: 'X XXX XXXXX'
                },
                '+258': {
                    regex: /^([28]\d{8})$/,
                    placeholder: 'XX XXX XXXX'
                },
                '+264': {
                    regex: /^([68]\d{7,8})$/,
                    placeholder: 'XX XXX XXXX'
                },
                '+260': {
                    regex: /^([279]\d{8})$/,
                    placeholder: 'XX XXX XXXX'
                },
                '+263': {
                    regex: /^([27]\d{8,9})$/,
                    placeholder: 'XX XXX XXXX'
                }
            };

            const venueCountryEl = document.getElementById('venue_country');
            const phoneCountryCode = document.getElementById('phone_country_code');
            const phoneInput = document.getElementById('phone');
            const phoneError = document.getElementById('phone-error');

            function updatePhonePlaceholder() {
                const code = phoneCountryCode.value;
                const pattern = phonePatterns[code];
                if (pattern && phoneInput) phoneInput.placeholder = pattern.placeholder;
            }

            function validatePhone() {
                const code = phoneCountryCode.value;
                const digits = phoneInput.value.replace(/\D/g, '');
                const pattern = phonePatterns[code];

                if (!digits) return true; // Optional field

                if (pattern && !pattern.regex.test(digits)) {
                    phoneInput.classList.add('border-red-400');
                    if (phoneError) {
                        phoneError.textContent = 'Invalid format for ' + code;
                        phoneError.classList.remove('hidden');
                    }
                    return false;
                }
                phoneInput.classList.remove('border-red-400');
                if (phoneError) phoneError.classList.add('hidden');
                return true;
            }

            if (venueCountryEl) {
                venueCountryEl.addEventListener('change', function() {
                    // Update phone code
                    if (countryToCode[this.value]) {
                        phoneCountryCode.value = countryToCode[this.value];
                        updatePhonePlaceholder();
                    }

                    // --- LANGUAGE SWITCHING BASED ON COUNTRY ---
                    if (this.value === 'Mozambique') {
                        switchLanguage('pt');
                    } else {
                        switchLanguage('en');
                    }
                });
            }

            if (phoneInput) {
                phoneInput.addEventListener('blur', validatePhone);
                updatePhonePlaceholder();
            }

            // --- 4. AJAX FORM SUBMISSION ---
            const form = document.getElementById('contact-form');
            const submitBtn = document.getElementById('submit-btn');
            const formAlert = document.getElementById('form-alert');
            const formSuccess = document.getElementById('form-success');

            if (form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();

                    // Validation
                    if (!validatePhone()) {
                        phoneInput.focus();
                        return;
                    }

                    // UI Loading State
                    submitBtn.disabled = true;
                    document.getElementById('submit-icon').classList.add('hidden');
                    document.getElementById('submit-spinner').classList.remove('hidden');
                    document.getElementById('submit-text').textContent = translations[currentLanguage][
                        'Sending...'
                    ] || 'Sending...';
                    formAlert.classList.add('hidden');

                    const formData = new FormData(form);

                    fetch(form.action, {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                    .getAttribute('content'),
                                'X-Requested-With': 'XMLHttpRequest',
                                'Accept': 'application/json',
                            },
                        })
                        .then(async response => {
                            const data = await response.json();
                            if (!response.ok) {
                                if (response.status === 422) {
                                    // Collect first validation error message
                                    throw new Error(Object.values(data.errors).flat()[0]);
                                }
                                throw new Error(data.message || 'Server error occurred.');
                            }
                            return data;
                        })
                        .then(data => {
                            // Success UI
                            form.classList.add('hidden');
                            formSuccess.classList.remove('hidden');
                            formSuccess.scrollIntoView({
                                behavior: 'smooth',
                                block: 'center'
                            });

                            // Optional: Use SweetAlert if installed
                            if (typeof Swal !== 'undefined') {
                                const t = translations[currentLanguage];
                                Swal.fire({
                                    icon: 'success',
                                    title: t['Sent!'] || 'Sent!',
                                    text: data.message
                                });
                            }
                        })
                        .catch(error => {
                            // Error UI
                            formAlert.textContent = error.message;
                            formAlert.classList.remove('hidden');
                            formAlert.classList.add('bg-red-50', 'text-red-700', 'border-red-200',
                                'p-4', 'mb-6', 'border', 'rounded-xl');
                            formAlert.scrollIntoView({
                                behavior: 'smooth',
                                block: 'center'
                            });
                        })
                        .finally(() => {
                            // Reset Loading State
                            submitBtn.disabled = false;
                            document.getElementById('submit-icon').classList.remove('hidden');
                            document.getElementById('submit-spinner').classList.add('hidden');
                            const t = translations[currentLanguage];
                            document.getElementById('submit-text').textContent = t['Send Message'] ||
                                'Send Message';
                        });
                });
            }

            // Check if Mozambique was previously selected (on page load with old values)
            if (venueCountryEl && venueCountryEl.value === 'Mozambique') {
                switchLanguage('pt');
            }
        });
    </script>
</body>
</html>
