document.addEventListener('alpine:init', () => {
    Alpine.data('jobs', () => ({
      list: [],
      filterType: "",
      filterCompany: "",
      filterLocation: "",
      filterMinSalary: "",

      async fetchJobs() {
        try {
          const response = await fetch('/data.json');
          if (!response.ok) throw new Error("Failed to load jobs");
          this.list = await response.json();
        } catch (error) {
          console.error("Error fetching jobs:", error);
        }
      },

      filteredJobs() {
        // Chain multiple .filter() calls:
        return this.list
          // 1) Filter by Type if set
          .filter(job => !this.filterType || job.type === this.filterType)
          // 2) Filter by Company substring match (case-insensitive)
          .filter(job => !this.filterCompany ||
            job.company.toLowerCase().includes(this.filterCompany.toLowerCase()))
          // 3) Filter by Location substring match
          .filter(job => !this.filterLocation ||
            job.location.toLowerCase().includes(this.filterLocation.toLowerCase()))
          // 4) Filter by Minimum Salary (compared to the salary from JSON)
          .filter(job => {
            if (!this.filterMinSalary) return true;
            const minSalary = Number(this.filterMinSalary);
            return Number(job.salary) >= minSalary;
          });
      }
    }));
});
