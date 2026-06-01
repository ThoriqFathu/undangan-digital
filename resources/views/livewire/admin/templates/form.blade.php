<div class="max-w-4xl p-6 mx-auto">
    <div class="mb-6">
        <h1 class="text-2xl font-bold">
            {{ $template ? 'Edit Template' : 'Create Template' }}
        </h1>
    </div>

    <form wire:submit="save">
        <div class="bg-white rounded-xl shadow p-6 space-y-6">

            <div>
                <label class="block mb-2 text-sm font-medium">
                    Name
                </label>

                <input
                    type="text"
                    wire:model="name"
                    class="w-full border rounded-lg px-3 py-2"
                >

                @error('name')
                    <p class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium">
                    Slug
                </label>

                <input
                    type="text"
                    wire:model="slug"
                    class="w-full border rounded-lg px-3 py-2"
                >
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium">
                    View Name
                </label>

                <input
                    type="text"
                    wire:model="view_name"
                    class="w-full border rounded-lg px-3 py-2"
                    placeholder="minimalist-white"
                >
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium">
                    Category
                </label>

                <input
                    type="text"
                    wire:model="category"
                    class="w-full border rounded-lg px-3 py-2"
                >
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium">
                    Price
                </label>

                <input
                    type="number"
                    wire:model="price"
                    class="w-full border rounded-lg px-3 py-2"
                >
            </div>

            <div>
                <label class="flex items-center gap-2">
                    <input
                        type="checkbox"
                        wire:model="is_active"
                    >

                    <span>Active</span>
                </label>
            </div>

            <div class="flex justify-end gap-3">
                <a
                    href="{{ route('templates.index') }}"
                    class="px-4 py-2 border rounded-lg"
                >
                    Cancel
                </a>

                <button
                    type="submit"
                    class="px-4 py-2 bg-blue-600 text-white rounded-lg"
                >
                    Save
                </button>
            </div>
        </div>
    </form>
</div>