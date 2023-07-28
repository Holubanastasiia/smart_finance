<section>
    <div class="text-lg font-medium text-gray-900 dark:text-gray-100">
        {{ __("Choose the default currency") }}
        <form id="default-currency" action="{{ route('currency.choose') }}" method="post">
            @csrf
            @method('post')
            <select name="currency" class="form-select">
                @foreach ($currencies as $currency)
                    <option value="{{$currency->id}}"
                            name="{{$currency->currency_name}}">{{ $currency->currency_name }}
                    </option>
                @endforeach
            </select>
            <div class="flex items-center gap-4" style="margin-top: 20px;">
                <x-primary-button>{{ __('Save') }}</x-primary-button>

                @if (session('status') === 'default-currency-updated')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600 dark:text-gray-400"
                    >{{ __('Saved.') }}</p>
                @endif
            </div>
        </form>
    </div>
</section>
