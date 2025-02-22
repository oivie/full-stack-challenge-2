<div class="flex flex-row flex-wrap gap-4">
    <!-- Filter by Type -->
    <div class="bg-sky-50 p-4 rounded">
        <label for="jobFilterType" class="block text-sm font-medium text-gray-700 mb-1">Filter by Type:</label>
        <select id="jobFilterType" x-model="filterType" aria-label="Filter by Type" class="block w-full sm:w-auto border-gray-300 rounded p-2">
            <option value="">All</option>
            <option value="Remote">Remote</option>
            <option value="In-Person">In-Person</option>
        </select>
    </div>

    <!-- Filter by Company -->
    <div class="bg-sky-50 p-4 rounded">
        <label for="jobFilterCompany" class="block text-sm font-medium text-gray-700 mb-1">Filter by Company:</label>
        <input id="jobFilterCompany" x-model="filterCompany" aria-label="Filter by Company" type="text" class="block w-full sm:w-auto border-gray-300 rounded p-2" placeholder="e.g. Ace Publishing" />
    </div>

    <!-- Filter by Location -->
    <div class="bg-sky-50 p-4 rounded">
        <label for="jobFilterLocation" class="block text-sm font-medium text-gray-700 mb-1">Filter by Location:</label>
        <input id="jobFilterLocation" x-model="filterLocation" aria-label="Filter by Location" type="text" class="block w-full sm:w-auto border-gray-300 rounded p-2" placeholder="e.g. Toronto" />
    </div>

    <!-- Filter by Minimum Salary -->
    <div class="bg-sky-50 p-4 rounded">
        <label for="jobFilterSalary" class="block text-sm font-medium text-gray-700 mb-1">Min Salary ($):</label>
        <input id="jobFilterSalary" x-model="filterMinSalary" aria-label="Minimum Salary" type="number" class="block w-full sm:w-auto border-gray-300 rounded p-2" placeholder="e.g. 80000" />
    </div>
</div>
