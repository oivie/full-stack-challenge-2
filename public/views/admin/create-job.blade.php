<div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md">
  <h1 class="text-2xl font-bold mb-4">Create Job</h1>
  <form @submit.prevent="createJob">
    <div class="mb-4">
      <label class="block text-gray-700">Title</label>
      <input type="text" x-model="newJob.title" class="w-full p-2 border rounded">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700">Company</label>
      <input type="text" x-model="newJob.company" class="w-full p-2 border rounded">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700">Location</label>
      <input type="text" x-model="newJob.location" class="w-full p-2 border rounded">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700">Salary</label>
      <input type="number" x-model="newJob.salary" class="w-full p-2 border rounded">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700">Type</label>
      <input type="text" x-model="newJob.type" class="w-full p-2 border rounded">
    </div>
    <div class="flex justify-end">
      <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Create</button>
    </div>
  </form>
</div>