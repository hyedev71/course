<div>
	<div class="py-3 lg:py-6 px-4 mx-auto max-w-screen-md">
		<h2 class="mb-4 text-3xl tracking-light font-extrabold text-center text-gray-900 dark:text-gray-800">
			Contact Us 
		</h2>

		<p class="mb-3 lg:mb-6 font-light text-center text-gray-700 dark:text-gray-900 sm:text-lg">
			Got a technical issues? Want to send feedback about a beta feature? Need details about our Bussiness plan? Let us know.	
		</p>

		@if (session('success'))
			<div class="text-sm bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-3" role="alert">
				<strong class="font-bold">Alert!</strong>
				<span class="block sm:inline">{{ session('success') }}</span>
				<span class="absolute top-0 bottom-0 right-0 px-4 py-3 text-xs">
					<svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
				</span>
			</div>
		@endif

		<form wire:submit="submitForm" action="#" class="space-y-3">
			<div>
				<label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-800">
					Your Email
				</label>
				<input wire:model="form.email" type="email" id="email" class="shadow-sm bg-gray-50 w-full border @error('form.email'){{ 'border-red-500' }}@else{{ 'border-gray-700' }}@enderror text-gray-900 text-sm rounded px-3 py-1">
				@error ('form.email')
					<span class="text-red-500 text-xs">{{ $message }}</span>
				@enderror
			</div>

			<div>
				<label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-800">
					Subject
				</label>
				<input wire:model="form.subject" type="text" id="subject" class="shadow-sm bg-gray-50 w-full border @error('form.subject'){{ 'border-red-500' }}@else{{ 'border-gray-700' }}@enderror text-gray-900 text-sm rounded px-3 py-1">
				@error ('form.subject')
					<span class="text-red-500 text-xs">{{ $message }}</span>
				@enderror
			</div>

			<div class="sm:col-span-2">
				<label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-800">
					Your Message
				</label>
				<textarea wire:model="form.message" id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 border @error('form.message'){{ 'border-red-500' }}@else{{ 'border-gray-700' }}@enderror rounded-lg shadow-sm px-3 py-1">
				</textarea>
				@error ('form.message')
					<span class="text-red-500 text-xs">{{ $message }}</span>
				@enderror
			</div>

			<div>
				<button wire:loading.attr="disabled" wire:loading.class="bg-teal-500" wire:loading.class.remove="bg-teal-700 hover:bg-teal-900" type="submit" class="py-2 text-sm font-medium text-center text-white rounded-lg bg-teal-700 hover:bg-teal-900 px-3 relative">
					<span> Send Message </span>
					<svg wire:loading class="animate-spin h-5 w-5 ml-3" viewBox="0 0 24 24">
						<circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
						<path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.96 7.96 0 014 12H0c0 6.627 5.373 12 12 12v-4a7.963 7.963 0 01-6-2.709z"></path>
					</svg> 
				</button>
			</div>
		</form>
	</div>
</div>
