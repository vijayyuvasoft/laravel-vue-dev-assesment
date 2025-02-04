<div>
    <div class="container mx-auto py-4">

        <div class="container mx-auto p-6">
            <h2 class="text-2xl font-bold">Skills</h2>
            <div class="flex space-x-4">
                <div class="w-2/3 bg-white shadow-md p-4">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($skills as $skill)
                                <tr class="border-t">
                                    <td class="px-4 py-2">{{ $skill->name }}</td>
                                    <td class="px-4 py-2 flex space-x-2">
                                        <button wire:click="edit({{ $skill->id }})" class="text-blue-500">Edit</button>
                                        <button wire:click="delete({{ $skill->id }})" class="text-red-500">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="w-1/3 bg-white shadow-md p-4">
                    <h3 class="text-lg font-bold">{{ $skill_id ? 'Edit Skill' : 'Add New Skill' }}</h3>
                    <input type="text" wire:model="name" class="border rounded p-2 w-full" placeholder="Skill Name">
                    <button wire:click="{{ $skill_id ? 'update' : 'save' }}" class="bg-blue-500 text-white px-4 py-2 mt-2">
                        {{ $skill_id ? 'Update' : 'Save' }}
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>
