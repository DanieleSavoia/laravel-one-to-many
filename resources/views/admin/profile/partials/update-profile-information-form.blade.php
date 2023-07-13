<section>
	<header>
		<h2 class="text-lg font-medium text-gray-900">
			Profile Information
		</h2>

		<p class="mt-1 text-sm text-gray-600">
			Update your account's profile information and email address.
		</p>
	</header>

	<form id="send-verification" method="post" action="{{ route('verification.send') }}">
		@csrf
	</form>

	<form method="post" action="{{ route('admin.profile.update') }}" class="mt-6 space-y-6">
		@csrf
		@method('patch')

		<div class="mb-3">
			<label for="name" class="form-label">Name</label>
			<input id="name" name="name" type="text" class="form-control" value="{{ old('name', $user->name) }}"
				required autofocus autocomplete="name">
			@error('name')
				<p class="mt-2 text-danger">{{ $message }}</p>
			@enderror
		</div>

		<div class="mb-3">
			<label for="email" class="form-label">Email</label>
			<input id="email" name="email" type="email" class="form-control" value="{{ old('email', $user->email) }}"
				required autocomplete="email">
			@error('email')
				<p class="mt-2 text-danger">{{ $message }}</p>
			@enderror

			@if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
				<div>
					<p class="text-sm mt-2 text-gray-800">
						Your email address is unverified.
						<button form="send-verification" class="btn btn-link p-0 text-sm text-gray-600">Click here to re-send the
							verification email.</button>
					</p>
					@if (session('status') === 'verification-link-sent')
						<p class="mt-2 font-medium text-sm text-success">
							A new verification link has been sent to your email address.
						</p>
					@endif
				</div>
			@endif
		</div>

		<div class="mt-3">
			<button type="submit" class="btn btn-primary">Save</button>
			@if (session('status') === 'profile-updated')
				<p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">Saved.
				</p>
			@endif
		</div>
	</form>
</section>