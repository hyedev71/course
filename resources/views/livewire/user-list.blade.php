<div wire:poll.visible.2s class="mt-5 p-5 mx-auto w-2/5 shadow border-teal-500 border-t-2">
	<h1 class="text-left font-semibold text-base text-teal-600 mb-5">
		User List 
		<span class="animate-pulse bg-indigo-200 dark:bg-indigo-700 text-indigo-700 dark:text-indigo-900 text-sm font-medium mr-2 px-2 py-1 rounded-full text-center">{{ number_format($user_count) }}</span>
	</h1>

	<div class="flex flex-wrap">
		<div class="w-full mb-3">
			<input wire:model.live.debounce.100ms="search" type="text" name="search" id="search" placeholder="search ..." class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
		</div>

		<div class="w-full">
			<div role="status" class="max-w-md p-4 space-y-4 border border-gray-200 divide-y divide-gray-200 rounded shadow dark:divide-gray-700 md:p-6 dark:border-gray-700 text-xs">
				@if (!empty($users))
					@foreach ($users as $user)
						<div class="flex items-center justify-between @if(!$loop->first){{ 'pt-4' }}@endif">
							<div>
								<div class="h-2.5 rounded-full w-100 mb-2.5">{{ $user->name }}</div>
								<div class="w-100 h-2 rounded-full">{{ $user->email }}</div>
							</div>
							<div class="h-2.5 rounded-full w-12 mr-2">
								<button class="bg-blue-600 hover:bg-blue-800 dark:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">View</button>
							</div>
						</div>
					@endforeach
				@endif
			</div>
		</div>

		@if (!empty($users->links()))
			<div class="w-full p-2 mt-3 overflow-auto whitespace-normal text-center border border-gray-200 rounded shadow">
				{{ $users->links() }}
			</div>
		@endif
	</div>
</div>

{{--
<div wire:poll.visible.2s class="mt-5 p-5 mx-auto w-2/5 shadow border-teal-500 border-t-2">
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
--}}
