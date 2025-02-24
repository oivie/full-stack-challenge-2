document.addEventListener("alpine:init", () => {
    Alpine.data("jobs", () => ({
        list: [],
        filterType: "",
        filterCompany: "",
        filterLocation: "",
        filterMinSalary: "",
        page: 1,
        pageSize: 6,
        isLoading: false,
        hasMore: true,

        async fetchJobs() {
            if (this.isLoading || !this.hasMore) return;
            this.isLoading = true;
            try {
                const response = await fetch(`/data.json?page=${this.page}&pageSize=${this.pageSize}`);
                if (!response.ok) throw new Error("Failed to load jobs");
                const newJobs = await response.json();
                if (newJobs.length < this.pageSize) {
                    this.hasMore = false;
                }
                this.list = [...this.list, ...newJobs];
                localStorage.setItem('jobs', JSON.stringify(this.list));
                this.page++;
            } catch (error) {
                console.error("Error fetching jobs:", error);
            } finally {
                this.isLoading = false;
            }
        },

        filteredJobs() {
            return (
                this.list
                // Exclude jobs with negative salary
                .filter((job) => Number(job.salary) >= 0)
                // 1) Filter by Type if set
                .filter((job) => !this.filterType || job.type === this.filterType)
                // 2) Filter by Company substring match (case-insensitive)
                .filter(
                    (job) =>
                    !this.filterCompany ||
                    job.company
                        .toLowerCase()
                        .includes(this.filterCompany.toLowerCase())
                )
                // 3) Filter by Location substring match (case-insensitive)
                .filter(
                    (job) =>
                    !this.filterLocation ||
                    job.location
                        .toLowerCase()
                        .includes(this.filterLocation.toLowerCase())
                )
                // 4) Filter by Minimum Salary (compared to the salary from JSON)
                .filter((job) => {
                    if (!this.filterMinSalary) return true;
                    const minSalary = Number(this.filterMinSalary);
                    return Number(job.salary) >= minSalary;
                })
            );
        },
    }));
});