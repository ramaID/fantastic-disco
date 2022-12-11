<x-app>
    <!-- Tabs -->
    <div class="lg:hidden">
        <label for="selected-tab" class="sr-only">Select a tab</label>
        <select id="selected-tab" name="selected-tab"
            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm rounded-md">
            <option selected>General</option>

            <option>Password</option>

            <option>Notifications</option>

            <option>Plan</option>

            <option>Billing</option>

            <option>Team Members</option>
        </select>
    </div>
    <div class="hidden lg:block">
        <div class="border-b border-gray-200">
            <nav class="-mb-px flex space-x-8">
                <!-- Current: "border-red-500 text-red-600", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                <a href="#"
                    class="border-red-500 text-red-600 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                    General
                </a>

                <a href="#"
                    class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                    Password
                </a>

                <a href="#"
                    class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                    Notifications
                </a>

                <a href="#"
                    class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                    Plan
                </a>

                <a href="#"
                    class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                    Billing
                </a>

                <a href="#"
                    class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                    Team Members
                </a>
            </nav>
        </div>
    </div>

    <!-- Description list with inline editing -->
    <div class="mt-10 divide-y divide-gray-200">
        <div class="space-y-1">
            <h3 class="text-lg leading-6 font-medium text-gray-900">Profile</h3>
            <p class="max-w-2xl text-sm text-gray-500">
                This information will be displayed publicly so be careful what you
                share.
            </p>
        </div>
        <div class="mt-6">
            <dl class="divide-y divide-gray-200">
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                    <dt class="text-sm font-medium text-gray-500">Name</dt>
                    <dd class="mt-1 flex text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <span class="flex-grow">Chelsea Hagon</span>
                        <span class="ml-4 flex-shrink-0">
                            <button type="button"
                                class="bg-white rounded-md font-medium text-red-600 hover:text-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Update</button>
                        </span>
                    </dd>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                    <dt class="text-sm font-medium text-gray-500">Photo</dt>
                    <dd class="mt-1 flex text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <span class="flex-grow">
                            <img class="h-8 w-8 rounded-full"
                                src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                        </span>
                        <span class="ml-4 flex-shrink-0 flex items-start space-x-4">
                            <button type="button"
                                class="bg-white rounded-md font-medium text-red-600 hover:text-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Update</button>
                            <span class="text-gray-300" aria-hidden="true">|</span>
                            <button type="button"
                                class="bg-white rounded-md font-medium text-red-600 hover:text-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Remove</button>
                        </span>
                    </dd>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                    <dt class="text-sm font-medium text-gray-500">Email</dt>
                    <dd class="mt-1 flex text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <span class="flex-grow">chelsea.hagon@example.com</span>
                        <span class="ml-4 flex-shrink-0">
                            <button type="button"
                                class="bg-white rounded-md font-medium text-red-600 hover:text-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Update</button>
                        </span>
                    </dd>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-b sm:border-gray-200">
                    <dt class="text-sm font-medium text-gray-500">Job title</dt>
                    <dd class="mt-1 flex text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <span class="flex-grow">Human Resources Manager</span>
                        <span class="ml-4 flex-shrink-0">
                            <button type="button"
                                class="bg-white rounded-md font-medium text-red-600 hover:text-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Update</button>
                        </span>
                    </dd>
                </div>
            </dl>
        </div>
    </div>

    <div class="mt-10 divide-y divide-gray-200">
        <div class="space-y-1">
            <h3 class="text-lg leading-6 font-medium text-gray-900">Account</h3>
            <p class="max-w-2xl text-sm text-gray-500">Manage how information is
                displayed on your account.</p>
        </div>
        <div class="mt-6">
            <dl class="divide-y divide-gray-200">
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
                    <dt class="text-sm font-medium text-gray-500">Language</dt>
                    <dd class="mt-1 flex text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <span class="flex-grow">English</span>
                        <span class="ml-4 flex-shrink-0">
                            <button type="button"
                                class="bg-white rounded-md font-medium text-red-600 hover:text-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Update</button>
                        </span>
                    </dd>
                </div>
                <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                    <dt class="text-sm font-medium text-gray-500">Date format</dt>
                    <dd class="mt-1 flex text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <span class="flex-grow">DD-MM-YYYY</span>
                        <span class="ml-4 flex-shrink-0 flex items-start space-x-4">
                            <button type="button"
                                class="bg-white rounded-md font-medium text-red-600 hover:text-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Update</button>
                            <span class="text-gray-300" aria-hidden="true">|</span>
                            <button type="button"
                                class="bg-white rounded-md font-medium text-red-600 hover:text-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Remove</button>
                        </span>
                    </dd>
                </div>
                <div x-data="{ on: true }" class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:pt-5">
                    <dt class="text-sm font-medium text-gray-500" id="timezone-option-label">
                        Automatic timezone
                    </dt>
                    <dd class="mt-1 flex text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <!-- Enabled: "bg-red-600", Not Enabled: "bg-gray-200" -->
                        <button @click="on = !on" x-ref="switch" x-state:on="Enabled" x-state:off="Not Enabled"
                            :class="{ 'bg-red-600': on, 'bg-gray-200': !(on) }" :aria-checked="on.toString()"
                            type="button" role="switch"
                            class="bg-gray-200 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-auto"
                            role="switch" aria-checked="true" aria-labelledby="timezone-option-label">
                            <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                            <span x-state:on="Enabled" x-state:off="Not Enabled"
                                :class="{ 'translate-x-5': on, 'translate-x-0': !(on) }" aria-hidden="true"
                                class="translate-x-0 inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"></span>
                        </button>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</x-app>
