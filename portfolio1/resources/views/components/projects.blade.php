<div>
    <h1>List of Projects</h1>

    @foreach ($projects as $project)
        <section class="relative py-20">
            <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
                style="height: 80px;">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="container mx-auto px-4">
                <div class="items-center flex flex-wrap">

                    <div class="w-full md:w-6/12 ml-auto mr-auto px-4">
                        <a href="{{ $project->previewLink }}">
                            <img src="{{ $project->thumbnailLink }}" alt="{{ $project->title }}" />
                        </a>
                    </div>

                    <div class="w-full md:w-6/12 ml-auto mr-auto px-4">
                        <div class="md:pr-12">
                            <div
                                class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300">
                                <i class="fas fa-rocket text-xl"></i>
                            </div>
                            <a href="{{ $project->previewLink }}">
                                <h3 class="text-3xl font-semibold">{{ $project->title }}</h3>
                            </a>
                            <p class="mt-4 text-lg leading-relaxed text-gray-600">
                                {{ $project->details }}
                            </p>
                            <ul class="list-none mt-6">
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span
                                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                    class="fas fa-fingerprint"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">
                                                Carefully crafted components
                                            </h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span
                                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                    class="fab fa-html5"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">Amazing page examples</h4>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="flex items-center">
                                        <div>
                                            <span
                                                class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                    class="far fa-paper-plane"></i></span>
                                        </div>
                                        <div>
                                            <h4 class="text-gray-600">Dynamic components</h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="flex gap-3 max-w-sm">
                                <a href="{{ $project->previewLink }}"
                                    class="py-2.5 px-6 rounded-lg text-sm font-medium bg-teal-200 text-teal-800">Preview</a>
                                <a href="{{ url('projects/' . $project->id) }}"
                                    class="py-2.5 px-6 rounded-lg text-sm font-medium text-white bg-teal-600">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    @endforeach
</div>
