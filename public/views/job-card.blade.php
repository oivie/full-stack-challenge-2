<div x-data="{ showDescription: false }" role="article" aria-label="Job listing" class="bg-white rounded-lg shadow p-4 sm:p-6 m-2">
    <div class="flex flex-col md:flex-row">
        <!-- Left column: Job details -->
        <div class="flex-grow">
            <h2 x-text="job.title" aria-label="Job Title" class="text-xl sm:text-2xl font-bold text-gray-900 mb-2"></h2>
            <p x-text="job.company" aria-label="Company" class="text-base sm:text-lg text-gray-700 mb-2"></p>
            <p x-text="job.location" aria-label="Location" class="text-sm sm:text-base text-gray-600 mb-2"></p>
            <p x-text="job.salary" aria-label="Salary" class="text-sm sm:text-base text-green-600 mb-2"></p>
            <p x-text="job.type" 
               aria-label="Job Type"
               x-bind:class="{
                   'text-violet-600': job.type.toLowerCase() === 'remote',
                   'text-blue-600': job.type.toLowerCase() === 'in-person'
               }" 
               class="text-sm sm:text-base">
            </p>
            <button type="button" 
                    class="mt-2 px-4 py-2 rounded-md text-sm"
                    :class="showDescription ? 'bg-pink-400 text-white' : 'bg-violet-500 text-white'"
                    @click="showDescription = !showDescription"
                    :aria-expanded="showDescription"
                    aria-controls="job-description">
                <span x-text="showDescription ? 'Hide Description' : 'Show Description'"></span>
            </button>
            <div id="job-description"
                x-show="showDescription"
                x-transition:enter="transition-opacity duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="mt-4 text-gray-700" 
                x-cloak>
                <p x-text="job.description"></p>
            </div>

        </div>

        <!-- Right column: Skills cloud -->
        <div class="mt-4 md:mt-0 md:ml-6">
            <h3 id="skills-heading" class="text-lg font-bold mb-2">Skills</h3>
            <div role="list" aria-labelledby="skills-heading" class="flex flex-wrap gap-2">
                <template x-for="skill in job.skills" :key="skill">
                    <span role="listitem" x-text="skill" class="px-3 py-1 rounded-full text-sm bg-blue-200 text-blue-800"></span>
                </template>
            </div>
        </div>
    </div>
</div>
