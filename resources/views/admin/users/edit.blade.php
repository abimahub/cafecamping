<x-layout>
    <x-setting :heading="'Edit User: ' . $user->username">
        <form method="POST" action="/admin/users/{{ $user->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="username" :value="old('username', $user->username)" required />
            <x-form.input name="email" :value="old('email', $user->email)" required />
            <x-form.input name="name" required>{{ old('name', $user->name) }}</x-form.input>

            <div class="flex mt-6">
                <div class="flex-1">
                    <x-form.input name="avatar" type="file" :value="old('avatar', $user->avatar)" />
                </div>
                <img src="{{ asset('storage/' . $user->avatar) }}" alt="" class="rounded-xl ml-6" width="100">
               </div>  
            <x-form.button>Update</x-form.button>
        </form>
    </x-setting>
</x-layout>
