<div class="row justify-content-center mt-5 pt-4">
	<div class="col-md-5">
		<div class="card shadow">
			<div class="card-header bg-light text-center">
				<h2 class="text-secondary fw-bold">Create New Account</h2>
			</div>

			<div class="card-body">
				@if (session('success'))
					<span class="text-success">{{ session('success') }}</span>
				@endif

				<form wire:submit.prevent="create">
					<div class="mt-2">
						<label class="form-label text-secondary fw-bold">Name</label>
						<input wire:model="name" type="text" id="name" class="form-control">
						@error ('name')
							<small class="text-danger text-nowrap">{{ $message }}</small>
						@enderror
					</div>

					<div class="mt-2">
						<label class="form-label text-secondary fw-bold">Email</label>
						<input wire:model="email" type="email" id="email" class="form-control">
						@error ('email')
							<small class="text-danger text-nowrap">{{ $message }}</small>
						@enderror
					</div>

					<div class="mt-2">
						<label class="form-label text-secondary fw-bold">Password</label>
						<input wire:model="password" type="password" id="password" class="form-control">
						@error ('password')
							<small class="text-danger text-nowrap">{{ $message }}</small>
						@enderror
					</div>

					<div class="mt-2">
						<label class="form-label text-secondary fw-bold">Profile Picture</label>
						<input wire:model="image" type="file" id="image" accept="image/png, image/jpeg" class="form-control">
						@error ('image')
							<small class="text-danger text-nowrap">{{ $message }}</small>
						@enderror
					</div>

					@if ($image)
						<div class="card shadow mt-2 mb-2">
							<div class="card-body">
								<img class="img-fluid img-thumbnail" style="height:150px" src="{{ $image->temporaryUrl() }}">
							</div>
						</div>
					@endif

					<div class="mt-3 d-grid gap-2 col-6 mx-auto">
						<button class="btn btn-primary fw-bold">Create +</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>
