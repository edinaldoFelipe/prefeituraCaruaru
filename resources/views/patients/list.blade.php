<x-app-layout>
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         {{ __('Cadastrar Paciente') }}
      </h2>
   </x-slot>

   <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
      <div wire:id="k9Y3R146PcBQpw3eSK9H" class="md:grid md:grid-cols-3 md:gap-6">
         <div class="md:col-span-1 flex justify-between">
            <div class="px-4 sm:px-0">
               <h3 class="text-lg font-medium text-gray-900">Dados Pessoais</h3>

               <p class="mt-1 text-sm text-gray-600">
                  Preencha o máximo de dados possível.
               </p>
            </div>

            <div class="px-4 sm:px-0">

            </div>
         </div>

         <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="updateProfileInformation">
               <div class="px-4 py-5 bg-white sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                  <div class="grid grid-cols-6 gap-6">
                     <!-- Profile Photo -->

                     <!-- Name -->
                     <div class="col-span-6 sm:col-span-4">
                        <label class="block font-medium text-sm text-gray-700" for="name">
                           Nome Completo
                        </label>
                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="name" type="text" autocomplete="name">
                     </div>

                     <!-- CPF -->
                     <div class="col-span-6 sm:col-span-4">
                        <div class="flex">
                           <label style='width:50%' class="block font-medium text-sm text-gray-700" for="cpf">
                              CPF
                           </label>
                           <label class="block font-medium text-sm text-gray-700" for="rg">
                              RG
                           </label>
                        </div>
                        <div class="flex">
                           <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="cpf" type="text">
                           <input class="ml-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="rg" type="text">
                        </div>
                     </div>
                     <!-- SUS -->
                     <div class="col-span-6 sm:col-span-4">
                        <label class="block font-medium text-sm text-gray-700" for="sus">
                           Carteira do SUS
                        </label>
                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="sus" type="text">
                     </div>

                     <!-- Gênero -->
                     <div class="flex col-span-6 sm:col-span-4 justify-between">
                        <label class="block font-medium text-sm text-gray-700" for="genre">
                           Gênero
                        </label>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" value="M" id="genre-M" name='genre'>
                           <label class="form-check-label" for="genre-M"> Masculino</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" value="F" id="genre-F" name='genre'>
                           <label class="form-check-label" for="genre-F"> Feminino</label>
                        </div>
                     </div>

                     <!-- Data de Nascimento -->
                     <div class="col-span-6 sm:col-span-4">
                        <label class="block font-medium text-sm text-gray-700" for="birthday">
                           Data de Nascimento
                        </label>
                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="birthday" type="date" name='birthday'>
                     </div>

                     <!-- Telefone -->
                     <div class="col-span-6 sm:col-span-4">
                        <label class="block font-medium text-sm text-gray-700" for="phoneNumber">
                           Telefone
                        </label>
                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="phoneNumber" type="tel">
                     </div>

                     <!-- E-mail -->
                     <div class="col-span-6 sm:col-span-4">
                        <label class="block font-medium text-sm text-gray-700" for="email">
                           E-mail
                        </label>
                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="email" type="email">
                     </div>

                     <!-- Logradouro -->
                     <div class="col-span-6 sm:col-span-4">
                        <label class="block font-medium text-sm text-gray-700" for="street">
                           Logradouro
                        </label>
                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="street" type="text">
                     </div>

                     <!-- Número -->
                     <div class="col-span-6 sm:col-span-4">
                        <label class="block font-medium text-sm text-gray-700" for="number">
                           Número
                        </label>
                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="number" type="text">
                     </div>

                     <!-- Bairro -->
                     <div class="col-span-6 sm:col-span-4">
                        <label class="block font-medium text-sm text-gray-700" for="sector">
                           Bairro
                        </label>
                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="sector" type="text">
                     </div>

                     <!-- Cidade -->
                     <div class="col-span-6 sm:col-span-4">
                        <label class="block font-medium text-sm text-gray-700" for="city">
                           Cidade
                        </label>
                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="city" type="text">
                     </div>

                     <!-- Estado -->
                     <div class="col-span-6 sm:col-span-4">
                        <div class="flex">
                           <label style='width:50%' class="block font-medium text-sm text-gray-700" for="province">
                              Estado
                           </label>
                           <label class="block font-medium text-sm text-gray-700" for="zipcode">
                              CEP
                           </label>
                        </div>
                        <div class="flex">
                           <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="province" type="text">
                           <input class="ml-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full" id="zipcode" type="text">
                        </div>
                     </div>
                  </div>
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