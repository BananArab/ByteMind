<x-layouts.auth>
    <form method="post" enctype="multipart/form-data" class="space-y-4 w-100 mx-auto">
        @csrf

        <div class=" input-floating">
            <input type="file" accept="image/*" required class="input" id="avatar" name="avatar" />
            <label class="input-floating-label" for="avatar">صورة الحساب </label>
            @error('avatar')
                <span class="text-error text-sm block ">
                    <i class="icon-[tabler--alert-circle] align-middle"></i>
                    <span class="align-middle">{{ $message }}</span>
                </span>
            @enderror
        </div>
        <x-input id="name" minLength="3" label="اسم المستخدم" icon="icon-[tabler--user]" />

        <x-input id="email" label="البريد الالكتروني" icon="icon-[tabler--mail]" type="email" />

        <x-input id="password" minLength="8" label="كلمة المرور" icon="icon-[tabler--lock]" type="password" />

        <x-input id="password_confirmation" minLength="8" label="تأكيد كلمة المرور" icon="icon-[tabler--lock-check]"
            type="password" />

        <button type="submit" class="btn btn-primary w-full mt-8 text-white">انشاء الحساب</button>
        <span class="text-white">
            عندك حساب؟
            <a href="/Login" class="link link-animated text-white">سجل دخول</a>
        </span>
    </form>
</x-layouts.auth>