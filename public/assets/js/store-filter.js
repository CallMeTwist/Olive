document.addEventListener('DOMContentLoaded', function() {
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;
    const productGrid = document.querySelector('.shop-product-wrap .row');
    const paginationArea = document.querySelector('.paginatoin-area nav');
    const showingText = document.querySelector('.shop-show-product');
    const loader = document.querySelector('.shop-filter-loader');

    let currentFilters = {
        category: 'all',
        availability: null,
        min_price: null,
        max_price: null,
        sort_by: null,
        page: 1
    };

    // Show/hide loader
    function toggleLoader(show) {
        if (loader) {
            loader.style.display = show ? 'block' : 'none';
        }
    }

    // Fetch filtered products
    async function fetchProducts() {
        toggleLoader(true);

        const params = new URLSearchParams();
        Object.keys(currentFilters).forEach(key => {
            if (currentFilters[key]) {
                params.append(key, currentFilters[key]);
            }
        });

        try {
            const response = await fetch(`/store?${params.toString()}`, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                }
            });

            const data = await response.json();

            if (data.success) {
                // Update product grid
                productGrid.innerHTML = data.html;

                // Update pagination
                if (paginationArea) {
                    paginationArea.innerHTML = data.pagination;
                }

                // Update showing text
                if (showingText) {
                    const start = data.total > 0 ? ((data.current_page - 1) * 12) + 1 : 0;
                    const end = Math.min(data.current_page * 12, data.total);
                    showingText.textContent = `Showing ${start}-${end} of ${data.total} products`;
                }

                // Scroll to top of products
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        } catch (error) {
            console.error('Error fetching products:', error);
            alert('Failed to load products. Please try again.');
        } finally {
            toggleLoader(false);
        }
    }

    // Category filter
    document.querySelectorAll('.category-filter').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            // Update active state
            document.querySelectorAll('.category-filter').forEach(l => {
                l.classList.remove('dominant-color');
                l.classList.add('body-dominant-color');
            });
            this.classList.remove('body-dominant-color');
            this.classList.add('dominant-color');

            currentFilters.category = this.dataset.category;
            currentFilters.page = 1;
            fetchProducts();
        });
    });

    // Pagination
    document.addEventListener('click', function(e) {
        if (e.target.closest('.page-link') && e.target.closest('.page-link').dataset.page) {
            e.preventDefault();
            const page = e.target.closest('.page-link').dataset.page;

            if (page && !e.target.closest('.disabled')) {
                currentFilters.page = page;
                fetchProducts();
            }
        }
    });

    // Sorting
    const sortLinks = document.querySelectorAll('#select-wrap a');
    sortLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            // Update active state
            sortLinks.forEach(l => l.closest('li').classList.remove('selected'));
            this.closest('li').classList.add('selected');

            // Update sort title
            const sortTitle = document.querySelector('.sort-title');
            if (sortTitle) {
                sortTitle.textContent = this.textContent;
            }

            currentFilters.sort_by = this.dataset.value;
            currentFilters.page = 1;
            fetchProducts();
        });
    });
});
