<x-jet-dialog-modal wire:model="viewingModal" maxWidth="screen" bg="bg-21gray">
    <x-slot name="title">
        <div class="text-gray-200">
            {{ __('Orange Pill Book Case') }}
        </div>
    </x-slot>

    <x-slot name="content">
        <div class="space-y-4 mt-16 flex flex-col justify-center min-h-[600px]">

            <div class="my-4">
                <div class="border-b border-gray-200 pb-5">
                    <h3 class="text-lg font-medium leading-6 text-gray-200">{{ __('So far here were') }}</h3>
                </div>
                <ul role="list" class="divide-y divide-gray-200">
                    @foreach($currentModal?->orangePills ?? [] as $orangePill)
                        <li class="flex py-4">
                            <img class="h-10 w-10 rounded-full" src="{{ $orangePill->user->profile_photo_url }}" alt="">
                            <div class="ml-3">
                                <p class="text-sm text-gray-200">
                                    {{ __('On :asDateTime :name has added :amount Bitcoin books.', ['asDateTime' => $orangePill->date->asDateTime(), 'name' => $orangePill->user->name, 'amount' => $orangePill->amount]) }}
                                </p>
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-input
                    min="1"
                    type="number"
                    wire:model.debounce="orangepill.amount"
                    label="{{ __('Number of books') }}"
                    placeholder="{{ __('Number of books') }}"
                    corner-hint="{{ __('How many bitcoin books have you put in?') }}"
                />
            </div>
            <div class="col-span-6 sm:col-span-4">
                <x-datetime-picker
                    label="{{ __('Date') }}"
                    placeholder="{{ __('Date') }}"
                    display-format="DD.MM.YYYY"
                    wire:model.defer="orangepill.date"
                    without-time
                    corner-hint="{{ __('When did you put bitcoin books in?') }}"
                />
            </div>
            <div class="col-span-6 sm:col-span-4">
                <x-textarea wire:model.defer="orangepill.comment" label="{{ __('Comment') }}" placeholder="{{ __('Comment') }}"
                            corner-hint="{{ __('For example, what books you put in.') }}"/>
            </div>
        </div>
    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="resetModal" wire:loading.attr="disabled">
            @lang('Close')
        </x-jet-secondary-button>
        <x-jet-secondary-button wire:click="submit" wire:loading.attr="disabled">
            💊 @lang('Orange Pill Now')
        </x-jet-secondary-button>
    </x-slot>
</x-jet-dialog-modal>
