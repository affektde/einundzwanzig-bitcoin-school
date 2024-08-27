<div class="py-6 bg-gray-900 w-full">
    <div class="px-10 mx-auto max-w-7xl">
        <div class="flex flex-col items-center md:flex-row md:justify-between">
            <a href="/">
                <img src="{{ asset('img/einundzwanzig-horizontal-inverted.svg') }}"
                     class="text-white fill-current" alt="">
            </a>

            <div class="flex flex-row justify-center mb-4 -ml-4 -mr-4">
                <a
                    target="_blank"
                    href="https://einundzwanzig.space/kontakt/"
                    class="p-4 text-gray-700 hover:text-gray-400">
                    {{ __('Contact') }}
                </a>
                <a
                    target="_blank" href="https://einundzwanzig.space/datenschutz/"
                    class="p-4 text-gray-700 hover:text-gray-400">
                    {{ __('Datenschutz') }}
                </a>
                <a href="#" class="p-4 text-gray-700 hover:text-gray-400">

                </a>
            </div>
        </div>
        <div class="flex flex-col space-y-6 sm:space-y-0 justify-between text-center md:flex-row">
            <p class="order-last text-sm leading-tight text-gray-500 md:order-first">
                {{ __('Built with ❤️ by our team.') }}
            </p>
            <ul class="flex flex-col space-y-2 sm:space-y-0 sm:flex-row justify-center pb-3 -ml-4 -mr-4 text-sm">
                <li>
                    <a href="https://gitworkshop.dev/r/naddr1qq2x26tww4hxg7nhv9h856t894cx7un5v9kqzrthwden5te0dehhxtnvdakqygq2man5whxvtjj9dlfsytjx7h2jd6c27c5yh7z5jnqd67z870jsxvpsgqqqw7vs969w83" target="_blank"
                       class="px-4 text-gray-500 hover:text-white">
                        <i class="fa fab fa-github mr-1"></i>
                        {{ __('Git/Contribution') }}
                    </a>
                </li>
                <li>
                    <a href="https://gitworkshop.dev/r/naddr1qq2x26tww4hxg7nhv9h856t894cx7un5v9kqzrthwden5te0dehhxtnvdakqygq2man5whxvtjj9dlfsytjx7h2jd6c27c5yh7z5jnqd67z870jsxvpsgqqqw7vs969w83/proposals" target="_blank"
                       class="px-4 text-gray-500 hover:text-white">
                        <i class="fa fa-thin fa-thought-bubble mr-1"></i>
                        {{ __('Proposals') }}
                    </a>
                </li>
                <li>
                    <a href="/languages/{{ $language->language }}/translations" target="_blank"
                       class="px-4 text-gray-500 hover:text-white">
                        <i class="fa fa-thin fa-language mr-1"></i>
                        {{ __('Translate (:lang :percent%)', ['lang' => $language->name ? $language->name : $language->language, 'percent' => $percentTranslated]) }}
                    </a>
                </li>
                {{--                <li><a href="#_" class="px-4 text-gray-500 hover:text-white">FAQ's</a></li>--}}
                {{--                <li><a href="#_" class="px-4 text-gray-500 hover:text-white">Terms</a></li>--}}
            </ul>
        </div>
    </div>
</div>
