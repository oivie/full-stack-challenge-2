<div role="article" aria-label="Job listing" class="bg-white rounded-lg shadow p-4 sm:p-6 m-2">
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
</div>
