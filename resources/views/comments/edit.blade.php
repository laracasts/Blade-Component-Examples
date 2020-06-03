<x-layout>
    <x-section>
        <x-form
            method="PATCH"
            action="/comments/{{ $comment->id }}"
        >
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="body"
                >
                    Body
                </label>

                <textarea class="border border-gray-400 p-2 w-full"
                          name="body"
                          id="body"
                          required
                >{{ $comment->body }}</textarea>

                @error('body')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit"
                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                >
                    Submit
                </button>
            </div>
        </x-form>

        <x-form-button method="DELETE" action="/comments/{{ $comment->id }}">
            Delete
        </x-form-button>
    </x-section>
</x-layout>
