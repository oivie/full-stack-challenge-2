<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Jobs</title>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body>
  <h1>Job Listings</h1>
  <div x-data="jobs" x-init="fetchJobs()">
    <select x-model="filterType">
      <option value="">All</option>
      <option value="Remote">Remote</option>
      <option value="In-Person">In-Person</option>
    </select>
    
    <template x-for="job in filteredJobs()" :key="job.id">
        <div role="article" aria-label="Job listing">
            <h2 x-text="job.title" aria-label="Job Title"></h2>
            <p x-text="job.company" aria-label="Company"></p>
            <p x-text="job.location" aria-label="Location"></p>
            <p x-text="job.salary" aria-label="Salary"></p>
            <p x-text="job.type" aria-label="Job Type"></p>
        </div>
    </template>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('jobs', () => ({
            list: [],
            filterType: "",
            async fetchJobs() {
                try {
                // Absolute path
                const res = await fetch('/data.json');
                if (!res.ok) throw new Error("Failed to load jobs");
                this.list = await res.json();
                } catch (error) {
                console.error("Error fetching jobs:", error);
                }
            },
            filteredJobs() {
                return this.filterType
                ? this.list.filter(j => j.type === this.filterType)
                : this.list;
            }
            }));
        });
    </script>
</body>
</html>
