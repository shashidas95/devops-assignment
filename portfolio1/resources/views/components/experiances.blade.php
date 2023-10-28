<div class="container mx-auto bg-gray-100 p-10 mt-10 ">
    <div class="border-1 shadow-lg shadow-gray-700 rounded-lg">
        <!-- top content -->
        {{-- <div class="flex rounded-t-lg bg-top-color sm:px-2 w-full">
                <div class="h-40 w-40 overflow-hidden sm:rounded-full sm:relative sm:p-0 top-10 left-5 p-3">
                    <img
                        src="https://media.licdn.com/dms/image/C4D03AQH8qidO0nb_Ng/profile-displayphoto-shrink_800_800/0/1615696897070?e=2147483647&v=beta&t=ia3wfE2J7kVLdBy9ttkgUDAA_ul29fymykhQo0lABDo" />
                </div>
                <div class="w-2/3 sm:text-center pl-5 mt-10 text-start">
                    <p class="font-poppins font-bold text-heading sm:text-4xl text-2xl">
                        {{ $developer->name }}
                    </p>
                    <p class="text-heading">{{ $developer->title }}</p>
                </div>

            </div> --}}


        {{-- </div> --}}
        <div class="flex flex-col mx-auto p-10 mt-10">

            <!-- About me -->
            <div class="py-3">
                <h2 class="text-xl font-poppins font-bold text-top-color">About Me</h2>
                <div class="border-2 w-20 border-top-color my-3"></div>
                <p>To get a career opportunity which would help me to utilize my academic background
                    to assist
                    me to gain experience, employ my excellent skills, and enable me to make
                    positive
                    contribution.</p>
            </div>

            <!-- Professional Experience -->
            <div class="py-3">
                <h2 class="text-xl font-poppins font-bold text-top-color">Professional Experience
                </h2>
                <div class="border-2 w-20 border-top-color my-3"></div>

                <div class="flex flex-col">
                    @foreach ($developer->experiences as $experience)
                        <div class="flex flex-col">
                            <p class="text-lg font-bold text-gray-700">{{ $experience->company }} |
                                {{ $experience->position }}
                            </p>
                            <p class="font-semibold text-lg text-gray-700">{{ $experience->duration }}</p>
                            <p class="font-semibold text-lg text-gray-700 mt-2 mb-1">Key Responsibilities</p>
                            <ul class="text-lg list-disc pl-4 space-y-1">
                                @foreach ($experience->responsibilities as $responsibility)
                                    <li class="text-lg font-semibold text-gray-700">{{ $responsibility }}</li>
                            </ul>
                    @endforeach
                </div>
                @endforeach
            </div>

        </div>

        <!-- Projects -->
        <div class="py-3">
            <h2 class="text-lg font-poppins font-bold text-top-color">Projects</h2>
            <div class="border-2 w-20 border-top-color my-3"></div>

            <div class="flex flex-col">

                <div class="flex flex-col">
                    <p class="text-lg font-semibold text-gray-700">Used Books mobile app</p>
                    <p class="font-normal text-sm text-gray-700 mb-1 pl-2">A platform to sell
                        as well as to
                        buy used books only for PCCoE College due to this reuse of books will be
                        there
                        beneficial for environment also indirectly helps increase communication
                        between
                        juniors and seniors.</p>
                </div>
                <div class="flex flex-col">
                    <p class="text-lg font-semibold text-gray-700">Parking Automation System
                    </p>
                    <p class="font-normal text-sm text-gray-700 mb-1 pl-2">it’s a web
                        application which
                        helps you to book your slot for your car just like booking a movie
                        ticket from home.
                    </p>
                </div>

            </div>

        </div>

    </div>
</div>

</div>

</div>

</div>
