<!-- Filter by Type -->
<div>
  <label for="jobFilterType" class="block text-sm font-medium text-gray-700 mb-1">Filter by Type:</label>
  <select id="jobFilterType" x-model="filterType" class="block w-full sm:w-auto border-gray-300 rounded p-2">
    <option value="">All</option>
    <option value="Remote">Remote</option>
    <option value="In-Person">In-Person</option>
  </select>
</div>

<!-- Filter by Company -->
<div>
  <label for="jobFilterCompany" class="block text-sm font-medium text-gray-700 mb-1">Filter by Company:</label>
  <input id="jobFilterCompany" x-model="filterCompany" type="text" class="block w-full sm:w-auto border-gray-300 rounded p-2" placeholder="e.g. Ace Publishing" />
</div>

<!-- Filter by Location -->
<div>
  <label for="jobFilterLocation" class="block text-sm font-medium text-gray-700 mb-1">Filter by Location:</label>
  <input id="jobFilterLocation" x-model="filterLocation" type="text" class="block w-full sm:w-auto border-gray-300 rounded p-2" placeholder="e.g. Toronto" />
</div>

<!-- Filter by Minimum Salary -->
<div>
  <label for="jobFilterSalary" class="block text-sm font-medium text-gray-700 mb-1">Min Salary ($):</label>
  <input id="jobFilterSalary" x-model="filterMinSalary" type="number" class="block w-full sm:w-auto border-gray-300 rounded p-2" placeholder="e.g. 80000" />
</div>
