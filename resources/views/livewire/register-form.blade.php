<div class="mt-10 p-5 mx-auto sm:w-full sm:max-w-sm shadow border-teal-500 border-t-2">

	 <div class="flex">
		<h2 class="text-center font-semibold text-2x text-gray-800 mb-5">Create New Account</h2>
	</div>

	@if (session('success'))
		<div class="bg-green-100 border-t border-b border-teal-400 text-green-500 px-4 py-2 mb-2" role="alert">
			<p class="font-bold">System Message</p>
			<p class="text-sm">{{ session('success') }}</p>
		</div>
	@endif 

	<form wire:submit.prevent="create">
		<label for="name" class="block @error('name'){{'text-red-700'}}@else{{'text-gray-700'}}@enderror text-sm font-bold">Name <span class="text-red-500">*</span></label>
		<input wire:model="name" type="text" name="name" id="name" class="shadow appearance-none border @error('name'){{'border-red-500'}}@enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
		@error ('name')
			<span class="text-red-500 text-xs">{{ $message }}</span>
		@enderror

		<label for="email" class="block @error('email'){{'text-red-700'}}@else{{'text-gray-700'}}@enderror text-sm font-bold mt-2">Email <span class="text-red-500">*</span></label>
		<input wire:model="email" type="email" name="email" name="email" class="shadow appearance-none border @error('email'){{'border-red-500'}}@enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
		@error ('email')
			<span class="text-red-500 text-xs">{{ $message }}</span>
		@enderror

		<label for="password" class="block @error('password'){{'text-red-700'}}@else{{'text-gray-700'}}@enderror text-sm font-bold mt-2">Password <span class="text-red-500">*</span></label>
		<input wire:model="password" type="password" name="password" id="password" class="shadow appearance-none border @error('password'){{'border-red-500'}}@enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
		@error ('password')
			<span class="text-red-500 text-xs">{{ $message }}</span>
		@enderror

		<label for="image" class="block @error('image'){{'text-red-700'}}@else{{'text-gray-700'}}@enderror text-sm font-bold mt-2">Profile Picture</label>
		@if ($image)
			<div class="bg-cyan-300 mt-1 mb-1">
				<img src="{{ $image->temporaryUrl() }}" class="object-scale-down h-48 w-96 rounded-lg">
			</div>
		@endif
		<input wire:model="image" type="file" accept="image/png, image/jpeg" name="image" id="image" class="shadow appearance-none border @error('image'){{'border-red-500'}}@enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
		@error ('image')
			<span class="text-red-500 text-xs">{{ $message }}</span>
		@enderror
		<div wire:loading wire:target="image">
			<span class="text-green-500 text-xs">Uploading....</span>
		</div>

		<div class="flex items-center justify-between mt-3">
			<button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
				Create +
			</button>
		</div>
	</form>

</div>
