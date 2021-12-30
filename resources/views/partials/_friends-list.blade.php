<div class="bg-gray-200 border border-gray-300 rounded-lg py-4 px-6">
    <h3 class="font-bold text-xl mb-4">Following</h3>

    <ul>
        @foreach (auth()->user()->follows as $user)
            <li>
                <a href="{{ route('profile', $user) }}" class="flex items-center text-sm mb-4">
                    <img src="{{ $user->avatar }}"
                        alt=""
                        class="rounded-full mr-2">
                    {{ $user->name }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
