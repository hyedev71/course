<div wire:poll.visible.2s class="mt-10 p-5 mx-auto w-5/6 shadow border-teal-500 border-t-2">

	<h1 class="text-left font-semibold text-2x text-gray-800 mb-5">
		User List 
		<span class="bg-indigo-100 text-indigo-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-indigo-900 dark:text-indigo-300">{{ number_format($user_count) }}</span>
	</h1>

	<div class="flex justify-end">
		<div class="md:flex md:items-center mb-3">
			<div class="md:w-3/3">
				<input wire:model.live.debounce.100ms="search" type="text" name="search" id="search" placeholder="search ..." class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
			</div>
		</div>
	</div>

	<table class="min-w-full table-auto border">
		<thead>
			<tr>
				<th class="border px-4 py-2">NAME</th>
				<th class="border px-4 py-2">EMAIL</th>
				<th class="border px-4 py-2">JOINED AT</th>
			</tr>
		</thead>
		<tbody>
			@if (!$users->isEmpty())
				@foreach ($users as $user)
					<tr>
						<td class="border px-4 py-2">{{ $user->name }}</td>
						<td class="border px-4 py-2">{{ $user->email }}</td>
						<td class="border px-4 py-2">{{ $user->created_at }}</td>
					</tr>
				@endforeach
			@else
				<tr>
					<td class="border px-4 py-2 text-center" colspan="3"> No Records ... </td> 
				</tr>
			@endif
		</tbody>
	</table>

	<div class="pt-2">
		{{ $users->links() }}
	</div>

</div>
