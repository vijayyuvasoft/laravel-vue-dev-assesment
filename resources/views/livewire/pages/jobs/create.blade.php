<div>
    <div class="container mx-auto py-4">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold">Create new job posting</h1>
        </div>
        

        <div>
            <!---->
            <form wire:submit.prevent="submit" >
                <div class="container mx-auto p-6">
                    <div class="grid grid-cols-3 gap-6">
                        <!-- Job Details Section -->
                        <div class="col-span-2 bg-white shadow-lg rounded-lg p-6">
                            <h2 class="text-lg font-bold mb-4">Job details</h2>
                            
                            <div class="mb-4">
                                <label class="block text-gray-700 font-medium">Title</label>
                                <input type="text" wire:model="title" class="w-full border-gray-300 rounded-md p-2" placeholder="Job posting title">
                                @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 font-medium">Description</label>
                                <textarea wire:model="description" class="w-full border-gray-300 rounded-md p-2" placeholder="Job posting description"></textarea>
                                @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-gray-700 font-medium">Experience</label>
                                    <input type="text" wire:model="experience" class="w-full border-gray-300 rounded-md p-2" placeholder="Eg. 1-3 Yrs">
                                    @error('experience') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-medium">Salary</label>
                                    <input type="text" wire:model="salary" class="w-full border-gray-300 rounded-md p-2" placeholder="Eg. 2.75-5 Lacs PA">
                                    @error('salary') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4 mt-4">
                                <div>
                                    <label class="block text-gray-700 font-medium">Location</label>
                                    <input type="text" wire:model="location" class="w-full border-gray-300 rounded-md p-2" placeholder="Eg. Remote / Pune">
                                    @error('location') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-medium">Extra Info</label>
                                    <input type="text" wire:model="extra_info" class="w-full border-gray-300 rounded-md p-2" placeholder="Eg. Full Time, Urgent / Part Time, Flexible">
                                    <p class="text-gray-500 text-sm mt-1">Please use comma-separated values</p>
                                    @error('extra_info') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>

                        <!-- Company Details & Skills -->
                        <div class="col-span-1 space-y-6">
                            <!-- Company Details Section -->
                            <div class="bg-white shadow-lg rounded-lg p-6">
                                <h2 class="text-lg font-bold mb-4">Company details</h2>
                                
                                <div class="mb-4">
                                    <label class="block text-gray-700 font-medium">Name</label>
                                    <input type="text" wire:model="company_name" class="w-full border-gray-300 rounded-md p-2" placeholder="Company Name">
                                    @error('company_name') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>

                                <div class="mb-4">
                                    <label class="block text-gray-700 font-medium">Logo</label>
                                    <input type="file" wire:model="logo" class="w-full border-gray-300 rounded-md p-2">
                                    @error('logo') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <!-- Skills Selection Section -->
                            <div class="bg-white shadow-lg rounded-lg p-6" x-data="{ selectedSkills: [] }">
                                <h2 class="text-lg font-bold mb-4">Skills</h2>
                                
                                <label class="block text-gray-700 font-medium">Name</label>
                                <select class="w-full border-gray-300 rounded-md p-2" multiple wire:model="skills" x-model="selectedSkills">
                                    @foreach($allSkills as $skill)
                                        <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-6">
                        <button class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition">Save</button>
                    </div>
                </div>
            </form>
            <!---->
        </div>

    </div>
</div>
