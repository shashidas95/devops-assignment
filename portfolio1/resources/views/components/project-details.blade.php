@extends('layouts.app')
@section('content')
    <div class="my-10 py-10">



        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-semibold text-center">Project Details</h1>
            <div class="items-center flex flex-wrap">

                <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                    <a href="{{ $selectedProject->previewLink }}">
                        <img src="{{ $selectedProject->thumbnailLink }}" alt="{{ $selectedProject->title }}" />
                    </a>
                </div>

                <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                    <div class="md:pr-12">
                        <div
                            class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300">
                            <i class="fas fa-rocket text-xl"></i>
                        </div>
                        <a href="{{ $selectedProject->previewLink }}">
                            <h3 class="text-3xl font-semibold">{{ $selectedProject->title }}</h3>
                        </a>
                        <p class="mt-4 text-lg leading-relaxed text-gray-600">
                            {{ $selectedProject->details }}
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
                        <div class="my-10">
                            <a href="{{ url('/projects') }}"
                                class="py-2.5 px-6 rounded-lg text-sm font-medium text-white bg-teal-600">Back to
                                Projects</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    </div>
@endsection
