<div class="max-w-4xl mx-auto">
  <template x-if="currentJob">
    <div class="bg-white p-4 rounded shadow">
      <h2 class="text-lg font-semibold" x-text="currentJob.title"></h2>
      <p class="text-gray-600" x-text="currentJob.location"></p>
      <p class="text-green-600" x-text="currentJob.salary"></p>
      <p class="text-blue-600" x-text="currentJob.type"></p>

      <div class="mt-2 space-x-2">
        <button @click="updateJob(currentJob)" class="px-3 py-1 bg-yellow-500 text-white rounded">Update</button>
        <button @click="deleteJob(currentJob)" class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
      </div>
    </div>
  </template>

  <!-- Notification -->
  <?php include __DIR__ . '/notification.blade.php'; ?>