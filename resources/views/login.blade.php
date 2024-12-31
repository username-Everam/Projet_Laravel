
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center text-blue-600">Connexion</h2>
        <p class="text-center text-gray-500">Veuillez entrer vos identifiants pour vous connecter.</p>
        <form class="space-y-6" method="POST" action="{{ route('loginAttempt') }}">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Adresse Email</label>
                <input id="email" name="email" type="email" required class="w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-blue-500">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                <input id="password" name="password" type="password" required class="w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-blue-500">
            </div>
            <div>
                <button type="submit" class="w-full px-4 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none">Se Connecter</button>
            </div>
        </form>
    </div>
</div>
