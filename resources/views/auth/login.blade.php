<x-public.auth>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label for="email">Adresse e-mail</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required>
        @error('email') <p>{{ $message }}</p> @enderror

        <label for="password">Mot de passe</label>
        <input id="password" type="password" name="password" >

        <label><input type="checkbox" name="remember"> Se souvenir de moi</label>

        <button type="submit">Se connecter</button>
    </form>
</x-public.auth>
