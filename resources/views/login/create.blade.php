<x-layouts.auth>
    <form method="post" class="space-y-4 w-100 mx-auto">
        @csrf
        <x-input id="email" label=" البريد الالكتروني" icon="icon-[tabler--mail]" type="email" />
        <x-input id="password" label="كلمة المرور" icon="icon-[tabler--lock]" type="password" />

        <button type="submit" class="btn btn-primary w-full mt-8 text-white">تسجيل دخول</button>
        <span class="text-white">
            ما عندك حساب؟
            <a href="/register" class="link link-animated text-white ">انشئ حساب</a>
        </span>
    </form>
</x-layouts.auth>
