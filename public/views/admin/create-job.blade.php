<div class="max-w-4xl mx-auto p-8 bg-gradient-to-br from-white to-gray-100 rounded-lg shadow-xl" role="region" aria-label="Create Job Form">
  <h1 class="text-3xl font-semibold mb-6 text-gray-800">Create Job</h1>
  <form @submit.prevent="createJob">
    <div class="mb-5">
      <label class="block text-gray-700 font-medium mb-2" for="jobTitle">Title</label>
      <input id="jobTitle" type="text" x-model="newJob.title" aria-label="Job Title" class="w-full p-3 border rounded focus:outline-none focus:ring-2 focus:ring-blue-300">
    </div>
    <div class="mb-5">
      <label class="block text-gray-700 font-medium mb-2" for="jobCompany">Company</label>
      <input id="jobCompany" type="text" x-model="newJob.company" aria-label="Job Company" class="w-full p-3 border rounded focus:outline-none focus:ring-2 focus:ring-blue-300">
    </div>
    <div class="mb-5">
      <label class="block text-gray-700 font-medium mb-2" for="jobLocation">Location</label>
      <input id="jobLocation" type="text" x-model="newJob.location" aria-label="Job Location" class="w-full p-3 border rounded focus:outline-none focus:ring-2 focus:ring-blue-300">
    </div>
    <div class="mb-5">
      <label class="block text-gray-700 font-medium mb-2" for="jobSalary">Salary</label>
      <input id="jobSalary" type="number" x-model="newJob.salary" min="0" aria-label="Job Salary" class="w-full p-3 border rounded focus:outline-none focus:ring-2 focus:ring-blue-300">
    </div>
    <div class="mb-5">
      <label class="block text-gray-700 font-medium mb-2" for="jobType">Type</label>
      <input id="jobType" type="text" x-model="newJob.type" aria-label="Job Type" class="w-full p-3 border rounded focus:outline-none focus:ring-2 focus:ring-blue-300">
    </div>
    <div class="flex justify-end">
      <button type="submit" class="px-6 py-3 bg-blue-500 hover:bg-blue-600 text-white font-medium rounded shadow transition duration-200">Create</button>
    </div>
  </form>
</div>