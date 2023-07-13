<section class="space-y-6">
	<header>
		<h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">Delete Account</h2>

		<p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
			Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your
			account, please download any data or information that you wish to retain.
		</p>
	</header>

	<button type="button" class="btn btn-danger" x-data=""
		x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">
		Delete Account
	</button>

	<x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
		<form method="post" action="{{ route('admin.profile.destroy') }}" class="p-6">
			@csrf
			@method('delete')

			<h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
				Are you sure you want to delete your account?
			</h2>

			<p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
				Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password
				to confirm you would like to permanently delete your account.
			</p>

			<div class="mt-6">
				<label for="password" class="form-label sr-only">Password</label>
				<input id="password" name="password" type="password" class="form-control mt-1 block w-3/4" placeholder="Password">

				<x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
			</div>

			<div class="mt-6 d-flex justify-content-end">
				<button type="button" class="btn btn-secondary" x-on:click="$dispatch('close')">
					Cancel
				</button>

				<button type="submit" class="btn btn-danger ml-3">
					Delete Account
				</button>
			</div>
		</form>
	</x-modal>
</section>