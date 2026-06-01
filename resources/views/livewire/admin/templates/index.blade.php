<div class="p-6">
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-2xl font-bold">Templates</h1>
            <p class="text-sm text-gray-500">
                Kelola template undangan
            </p>
        </div>

        <a
            href="{{ route('templates.create') }}"
            class="px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700"
        >
            + Template
        </a>
    </div>

    <div class="overflow-hidden bg-white rounded-xl shadow">
        <table class="min-w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left text-sm font-medium">
                        Name
                    </th>

                    <th class="px-4 py-3 text-left text-sm font-medium">
                        Slug
                    </th>

                    <th class="px-4 py-3 text-left text-sm font-medium">
                        View
                    </th>

                    <th class="px-4 py-3 text-left text-sm font-medium">
                        Price
                    </th>

                    <th class="px-4 py-3 text-left text-sm font-medium">
                        Status
                    </th>

                    <th class="px-4 py-3 text-right text-sm font-medium">
                        Action
                    </th>
                </tr>
            </thead>

            <tbody class="divide-y">
                @forelse($templates as $template)
                    <tr>
                        <td class="px-4 py-3">
                            {{ $template->name }}
                        </td>

                        <td class="px-4 py-3">
                            {{ $template->slug }}
                        </td>

                        <td class="px-4 py-3">
                            {{ $template->view_name }}
                        </td>

                        <td class="px-4 py-3">
                            Rp {{ number_format($template->price, 0, ',', '.') }}
                        </td>

                        <td class="px-4 py-3">
                            @if($template->is_active)
                                <span class="px-2 py-1 text-xs bg-green-100 text-green-700 rounded">
                                    Active
                                </span>
                            @else
                                <span class="px-2 py-1 text-xs bg-red-100 text-red-700 rounded">
                                    Inactive
                                </span>
                            @endif
                        </td>

                        <td class="px-4 py-3 text-right">
                            <div class="flex justify-end gap-2">
                                <a
                                    href="{{ route('templates.edit', $template) }}"
                                    class="px-3 py-1 rounded bg-yellow-500 text-white"
                                >
                                    Edit
                                </a>

                                <button
                                    wire:click="delete({{ $template->id }})"
                                    wire:confirm="Hapus template ini?"
                                    class="px-3 py-1 rounded bg-red-600 text-white"
                                >
                                    Delete
                                </button>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center py-8 text-gray-500">
                            Belum ada template
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>