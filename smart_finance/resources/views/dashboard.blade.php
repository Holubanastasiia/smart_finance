<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 text-gray-900 dark:text-gray-100">--}}
{{--                    {{ __("Choose the default currency") }}--}}
{{--                    <form action="">--}}
{{--                        <select class="form-select" aria-label="Default select example">--}}
{{--                            @foreach ($currencies as $currency)--}}
{{--                                <option name="{{$currency->currency_name}}">{{ $currency->currency_name }}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                        <div style="margin-top: 20px; display: flex; justify-content: flex-end;">--}}
{{--                            <button type="submit" class="btn btn-primary">Save</button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</x-app-layout>
