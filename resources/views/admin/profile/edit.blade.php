@php $user = Auth::user(); @endphp

@extends('admin.layouts.base')


@section('contents')
	<div class="container d-flex align-items-center justify-content-center mt-5 mb-5 p-5 rounded border">
		<h2 fs-3>
			Welcome {{ $user->name }}!
		</h2>
	</div>
	<div>
		<div class="mx-auto">
			<div class="p-4 shadow rounded mb-3">
				<div class="max-w-xl">
					@include('profile.partials.update-profile-information-form')
				</div>
			</div>

			<div class="p-4 shadow rounded mb-3">
				<div class="max-w-xl">
					@include('profile.partials.update-password-form')
				</div>
			</div>

			<div class="p-4 shadow rounded mb-3">
				<div class="max-w-xl">
					@include('profile.partials.delete-user-form')
				</div>
			</div>
		</div>
	</div>
	</div>
@endsection

{{-- <x-app-layout>
	<x-slot name="header">

	</x-slot>

	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
			<div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
				<div class="max-w-xl">
					@include('profile.partials.update-profile-information-form')
				</div>
			</div>

			<div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
				<div class="max-w-xl">
					@include('profile.partials.update-password-form')
				</div>
			</div>

			<div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
				<div class="max-w-xl">
					@include('profile.partials.delete-user-form')
				</div>
			</div>
		</div>
	</div>
</x-app-layout> --}}