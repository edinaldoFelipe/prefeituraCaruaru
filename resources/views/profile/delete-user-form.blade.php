<x-jet-action-section>
    <x-slot name="title">
        {{ __('Deletar Conta') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Sua conta será deletada permanentemente.') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('Se a sua conta for deletada, todos os seus dados serão permanentemente apagados. Antes de deletar sua conta, salve todas as informações importante em local seguro.') }}
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('Deletar Conta') }}
            </x-jet-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-jet-dialog-modal wire:model="confirmingUserDeletion">
            <x-slot name="title">
                {{ __('Deletar Conta') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Tem certeza que quer apagar a sua conta? Depois de apagada, todas as suas informações sera permanentemente perdidas. Digite a sua senha para confirmar a exclusão definitiva da sua conta.') }}

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-jet-input type="password" class="mt-1 block w-3/4"
                                placeholder="{{ __('Senha') }}"
                                x-ref="password"
                                wire:model.defer="password"
                                wire:keydown.enter="deleteUser" />

                    <x-jet-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    {{ __('Cancelar') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-3" wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('Deletar Conta') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>
</x-jet-action-section>
