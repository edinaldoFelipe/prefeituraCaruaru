<x-app-layout>
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         {{ __('Cadastrar Usuário') }}
      </h2>
   </x-slot>

   <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
      <div wire:id="k9Y3R146PcBQpw3eSK9H" class="md:grid md:grid-cols-3 md:gap-6">
         <div class="md:col-span-1 flex justify-between">
            <div class="px-4 sm:px-0">
               <h3 class="text-lg font-medium text-gray-900">Dados do Usuário</h3>

               <p class="mt-1 text-sm text-gray-600">
                  Preencha o todos os dados.<br/>
                  Atenção ao nível de acesso selecionado!
               </p>
            </div>

            <div class="px-4 sm:px-0">

            </div>
         </div>

         <div class="mt-5 md:mt-0 md:col-span-2">
            <form method="POST" action="{{ route('register') }}">
               <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                  @csrf

                  <div>
                     <x-jet-label for="name" value="{{ __('Nome Completo') }}" />
                     <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                  </div>

                  <div class="mt-4">
                     <x-jet-label for="email" value="{{ __('E-mail') }}" />
                     <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                  </div>

                  <div class="mt-4">
                     <x-jet-label for="level" value="{{ __('Nível de Acesso') }}" />
                     <select id="level" class="block mt-1 w-full" name="level">
                        <option selected value="0" {{ old('level') == '0' ? 'selected' : '' }}>
                           Paciente
                        </option>
                        <option value="1" {{ old('level') == '1' ? 'selected' : '' }}>
                           Profissional de Saúde
                        </option>
                        <option value="2" {{ old('level') == '2' ? 'selected' : '' }}>
                           Supervisor
                        </option>
                     </select>
                  </div>

                  <div class="mt-4">
                     <x-jet-label for="password" value="{{ __('Senha') }}" />
                     <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                  </div>

                  <div class="mt-4">
                     <x-jet-label for="password_confirmation" value="{{ __('Confirmar Senha') }}" />
                     <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                  </div>

                  @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                  <div class="mt-4">
                     <x-jet-label for="terms">
                        <div class="flex items-center">
                           <x-jet-checkbox name="terms" id="terms" />

                           <div class="ml-2">
                              {!! __('I agree to the :terms_of_service and :privacy_policy', [
                              'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                              'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                              ]) !!}
                           </div>
                        </div>
                     </x-jet-label>
                  </div>
                  @endif

               </div>

               <div class="flex items-center justify-between px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                  <div x-data="{ shown: false, timeout: null }" x-init="window.livewire.find('k9Y3R146PcBQpw3eSK9H').on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })" x-show.transition.out.opacity.duration.1500ms="shown" x-transition:leave.opacity.duration.1500ms="" style="display: none;" class="text-sm text-gray-600 mr-3">
                     Salvo com sucesso!
                  </div>
                  <button type="button" class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition" wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                     Excluir
                  </button>
                  <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                     Salvar
                  </button>
               </div>

            </form>
         </div>
      </div>
   </div>
</x-app-layout>