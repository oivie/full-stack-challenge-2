<!-- Container for Filters -->
<div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
  <!-- Filter by Type -->
  <div class="bg-white p-4 rounded-lg shadow space-y-2">
    <label for="jobFilterType" class="block text-sm font-medium text-gray-700">
      Filter by Type:
    </label>
    <select id="jobFilterType"
            x-model="filterType"
            aria-label="Filter by Type"
            class="w-full border border-gray-300 rounded py-2 px-3 focus:outline-none focus:ring-2 focus:ring-indigo-500">
      <option value="">All</option>
      <option value="Remote">Remote</option>
      <option value="In-Person">In-Person</option>
    </select>
  </div>

  <!-- Filter by Company -->
  <div class="bg-white p-4 rounded-lg shadow space-y-2">
    <label for="jobFilterCompany" class="block text-sm font-medium text-gray-700">
      Filter by Company:
    </label>
    <input id="jobFilterCompany"
           x-model="filterCompany"
           aria-label="Filter by Company"
           type="text"
           placeholder="e.g. Ace Publishing"
           class="w-full border border-gray-300 rounded py-2 px-3 focus:outline-none focus:ring-2 focus:ring-indigo-500" />
  </div>

  <!-- Filter by Location -->
  <div class="bg-white p-4 rounded-lg shadow space-y-2">
    <label for="jobFilterLocation" class="block text-sm font-medium text-gray-700">
      Filter by Location:
    </label>
    <input id="jobFilterLocation"
           x-model="filterLocation"
           aria-label="Filter by Location"
           type="text"
           placeholder="e.g. Toronto"
           class="w-full border border-gray-300 rounded py-2 px-3 focus:outline-none focus:ring-2 focus:ring-indigo-500" />
  </div>

  <!-- Filter by Minimum Salary -->
  <div class="bg-white p-4 rounded-lg shadow space-y-2">
    <label for="jobFilterSalary" class="block text-sm font-medium text-gray-700">
      Min Salary ($):
    </label>
    <input id="jobFilterSalary"
       x-model="filterMinSalary"
       type="number"
       placeholder="e.g. 80000"
       min="0"
       class="w-full border border-gray-300 rounded py-2 px-3 focus:outline-none focus:ring-2 focus:ring-indigo-500" />
  </div>
</div>
