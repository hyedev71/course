<div wire:poll.visible.2s class="mt-10 p-5 mx-auto w-5/6 shadow border-teal-500 border-t-2">

	<h2 class="text-left font-semibold text-2x text-gray-800 mb-5">
		User List 
		<span class="bg-indigo-100 text-indigo-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-indigo-900 dark:text-indigo-300">{{ number_format($user_count) }}</span>
	</h2>

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
