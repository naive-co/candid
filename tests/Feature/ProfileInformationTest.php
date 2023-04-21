<?php

use App\Models\User;
use Laravel\Jetstream\Http\Livewire\UpdateProfileInformationForm;
use Livewire\Livewire;

test('current profile information is available', function () {
    $this->actingAs($user = User::factory()->create());

    $component = Livewire::test(UpdateProfileInformationForm::class);

    expect($component->state['firstname'])->toEqual($user->firstname);
    expect($component->state['lastname'])->toEqual($user->lastname);
    expect($component->state['email'])->toEqual($user->email);
});

test('profile information can be updated', function () {
    $this->actingAs($user = User::factory()->create());

    Livewire::test(UpdateProfileInformationForm::class)
        ->set('state', ['firstname' => 'Phil', 'lastname' => 'Test', 'email' => 'phil@test.com'])
        ->call('updateProfileInformation');

    expect($user->fresh())
        ->firstname->toEqual('Phil')
        ->lastname->toEqual('Test')
        ->email->toEqual('phil@test.com');
});
