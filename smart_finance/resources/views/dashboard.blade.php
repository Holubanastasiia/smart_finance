<x-app-layout>
    <div>
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          Hello, {{ Auth::user()->name }} !
        </h2>

        <p>
            Your default currency is
        </p>

        <p>
            Account list
        </p>
    </div>
{{--    В личном кабинете нужно вывести данные пользователя, основные его настройки, список счетов, и общий баланс в той--}}
{{--    валюте, которую пользователь выберет как валюту по умолчанию.--}}

</x-app-layout>
