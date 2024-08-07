<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(auth()->user()->getAttribute('receive_email_notifications'))
                        <form method="POST" action="{{ route('notifications.email.unsubscribe') }}">
                            @csrf
                            <x-primary-button class="mt-4">{{ __('Unsubscribe from notifications') }}</x-primary-button>
                        </form>
                    @else
                        <form method="POST" action="{{ route('notifications.email.subscribe') }}">
                            @csrf
                            <x-primary-button class="mt-4">{{ __('Subscribe to notifications') }}</x-primary-button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
