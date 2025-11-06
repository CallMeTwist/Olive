
// document.addEventListener('DOMContentLoaded', function() {
//     const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;
//     // FIX: Updated selector to match your actual HTML structure
//     const productGrid = document.querySelector('.shop-product-wrap .row .row');
//     const paginationArea = document.querySelector('.paginatoin-area');
//     const showingText = document.querySelector('.shop-show-product');
//     const loader = document.querySelector('.shop-filter-loader');
//
//     let currentFilters = {
//         category: 'all',
//         availability: null,
//         min_price: null,
//         max_price: null,
//         sort_by: null,
//         page: 1
//     };
//
//     // Show/hide loader
//     function toggleLoader(show) {
//         if (loader) {
//             loader.style.display = show ? 'block' : 'none';
//         }
//     }
//
//     // Fetch filtered products
//     async function fetchProducts() {
//         toggleLoader(true);
//
//         const params = new URLSearchParams();
//         Object.keys(currentFilters).forEach(key => {
//             if (currentFilters[key]) {
//                 params.append(key, currentFilters[key]);
//             }
//         });
//
//         try {
//             const response = await fetch(`/store?${params.toString()}`, {
//                 headers: {
//                     'X-Requested-With': 'XMLHttpRequest',
//                     'Accept': 'application/json'
//                 }
//             });
//
//             const data = await response.json();
//
//             if (data.success) {
//                 // Update product grid
//                 if (productGrid) {
//                     productGrid.innerHTML = data.html;
//                     console.log('Products updated successfully');
//                 }
//
//                 // Update pagination
//                 if (paginationArea) {
//                     paginationArea.innerHTML = data.pagination;
//                 }
//
//                 // Update showing text
//                 if (showingText) {
//                     const start = data.from || 0;
//                     const end = data.to || 0;
//                     showingText.textContent = `Showing ${start}-${end} of ${data.total} products`;
//                 }
//
//                 // Scroll to top of products
//                 const productsSection = document.querySelector('.shop-product-wrap');
//                 if (productsSection) {
//                     productsSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
//                 }
//             }
//         } catch (error) {
//             console.error('Error fetching products:', error);
//             alert('Failed to load products. Please try again.');
//         } finally {
//             toggleLoader(false);
//         }
//     }
//
//     // Category filter
//     document.querySelectorAll('.category-filter').forEach(link => {
//         link.addEventListener('click', function(e) {
//             e.preventDefault();
//
//             console.log('Category clicked:', this.dataset.category);
//
//             // Update active state
//             document.querySelectorAll('.category-filter').forEach(l => {
//                 l.classList.remove('dominant-color');
//                 l.classList.add('body-dominant-color');
//             });
//             this.classList.remove('body-dominant-color');
//             this.classList.add('dominant-color');
//
//             currentFilters.category = this.dataset.category;
//             currentFilters.page = 1;
//             fetchProducts();
//         });
//     });
//
//     // Pagination
//     document.addEventListener('click', function(e) {
//         if (e.target.closest('.page-link') && e.target.closest('.page-link').dataset.page) {
//             e.preventDefault();
//             const page = e.target.closest('.page-link').dataset.page;
//
//             if (page && !e.target.closest('.disabled')) {
//                 currentFilters.page = page;
//                 fetchProducts();
//             }
//         }
//     });
//
//     // Sorting
//     const sortLinks = document.querySelectorAll('#select-wrap a');
//     sortLinks.forEach(link => {
//         link.addEventListener('click', function(e) {
//             e.preventDefault();
//
//             // Update active state
//             sortLinks.forEach(l => l.closest('li').classList.remove('selected'));
//             this.closest('li').classList.add('selected');
//
//             // Update sort title
//             const sortTitle = document.querySelector('.sort-title');
//             if (sortTitle) {
//                 sortTitle.textContent = this.textContent;
//             }
//
//             currentFilters.sort_by = this.dataset.value;
//             currentFilters.page = 1;
//             fetchProducts();
//         });
//     });
// });



document.addEventListener('DOMContentLoaded', function() {
    const productGrid = document.querySelector('.shop-product-wrap .row .row');
    const paginationArea = document.querySelector('.paginatoin-area');
    const showingText = document.querySelector('.shop-show-product');
    const loader = document.querySelector('.shop-filter-loader');
    const filterList = document.querySelector('.shop-filter-ul');
    const clearAllBtn = document.querySelector('.shop-filter-ul button[type="submit"]');

    let currentFilters = {
        category: 'all',
        availability: null,
        min_price: null,
        max_price: null,
        sort_by: null,
        page: 1
    };

    let activeFilters = []; // Track active filters for display

    // Show/hide loader
    function toggleLoader(show) {
        if (loader) {
            loader.style.display = show ? 'block' : 'none';
        }
    }

    // Update active filters display
    function updateActiveFilters() {
        if (!filterList) return;

        // Clear existing filter tags (except clear all button)
        const filterItems = filterList.querySelectorAll('.shop-filter-li:not(:last-child)');
        filterItems.forEach(item => item.remove());

        // Add category filter if not "all"
        if (currentFilters.category && currentFilters.category !== 'all') {
            const categoryElement = document.querySelector(`.category-filter[data-category="${currentFilters.category}"] span`);
            const categoryName = categoryElement ? categoryElement.textContent : 'Category';
            addFilterTag('category', categoryName);
        }

        // Add availability filter
        if (currentFilters.availability) {
            const availabilityName = currentFilters.availability === 'in-stock' ? 'In stock' : 'Out of stock';
            addFilterTag('availability', availabilityName);
        }

        // Add price range filter
        if (currentFilters.min_price || currentFilters.max_price) {
            const priceRange = `₦${currentFilters.min_price || 0} - ₦${currentFilters.max_price || '∞'}`;
            addFilterTag('price', priceRange);
        }

        // Show/hide clear all button
        if (clearAllBtn) {
            const hasFilters = currentFilters.category !== 'all' ||
                currentFilters.availability ||
                currentFilters.min_price ||
                currentFilters.max_price;
            clearAllBtn.closest('.shop-filter-li').style.display = hasFilters ? 'block' : 'none';
        }
    }

    // Add filter tag to UI
    function addFilterTag(type, name) {
        if (!filterList) return;

        const li = document.createElement('li');
        li.className = 'shop-filter-li';
        li.innerHTML = `
            <a href="javascript:void(0)"
               class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-6 plr-15 border-radius"
               data-filter-type="${type}">
                ${name}
                <i class="ri-close-large-line"></i>
            </a>
        `;

        // Insert before clear all button
        const clearAllLi = clearAllBtn?.closest('.shop-filter-li');
        if (clearAllLi) {
            filterList.insertBefore(li, clearAllLi);
        } else {
            filterList.appendChild(li);
        }

        // Add click event to remove filter
        li.querySelector('a').addEventListener('click', function() {
            removeFilter(type);
        });
    }

    // Remove specific filter
    function removeFilter(type) {
        switch(type) {
            case 'category':
                currentFilters.category = 'all';
                // Reset category active state
                document.querySelectorAll('.category-filter').forEach(l => {
                    l.classList.remove('dominant-color');
                    l.classList.add('body-dominant-color');
                });
                document.querySelector('.category-filter[data-category="all"]')?.classList.add('dominant-color');
                break;
            case 'availability':
                currentFilters.availability = null;
                break;
            case 'price':
                currentFilters.min_price = null;
                currentFilters.max_price = null;
                break;
        }
        currentFilters.page = 1;
        fetchProducts();
    }

    // Clear all filters
    if (clearAllBtn) {
        clearAllBtn.addEventListener('click', function(e) {
            e.preventDefault();
            currentFilters = {
                category: 'all',
                availability: null,
                min_price: null,
                max_price: null,
                sort_by: currentFilters.sort_by, // Keep sort
                page: 1
            };

            // Reset category UI
            document.querySelectorAll('.category-filter').forEach(l => {
                l.classList.remove('dominant-color');
                l.classList.add('body-dominant-color');
            });
            document.querySelector('.category-filter[data-category="all"]')?.classList.add('dominant-color');

            fetchProducts();
        });
    }

    // Trigger animations properly for dynamically loaded content
    function triggerAnimations() {
        const animatedElements = productGrid.querySelectorAll('[data-animate]');

        animatedElements.forEach((el, index) => {
            const animationClass = el.getAttribute('data-animate');

            // Remove animation class first
            el.classList.remove(animationClass);
            el.style.opacity = '0';

            // Use setTimeout to stagger animations
            setTimeout(() => {
                el.style.opacity = '1';
                el.classList.add(animationClass);
            }, index * 50); // 50ms delay between each item
        });
    }

    // Fetch filtered products
    async function fetchProducts() {
        toggleLoader(true);

        const params = new URLSearchParams();
        Object.keys(currentFilters).forEach(key => {
            if (currentFilters[key] && currentFilters[key] !== 'all') {
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

            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }

            const data = await response.json();

            if (data.success) {
                // Update product grid
                if (productGrid) {
                    productGrid.innerHTML = data.html;
                    console.log('Products updated successfully');

                    // Trigger animations after content is in DOM
                    requestAnimationFrame(() => {
                        triggerAnimations();
                    });
                }

                // Update pagination
                if (paginationArea) {
                    paginationArea.innerHTML = data.pagination;
                }

                // Update showing text
                if (showingText) {
                    const start = data.from || 0;
                    const end = data.to || 0;
                    showingText.textContent = `Showing ${start}-${end} of ${data.total} products`;
                }

                // Update active filters display
                updateActiveFilters();

                // Smooth scroll to products
                const productsSection = document.querySelector('.shop-product-wrap');
                if (productsSection) {
                    productsSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            } else {
                console.error('Server returned success: false');
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
            e.stopPropagation();

            const category = this.dataset.category;
            console.log('Category clicked:', category);

            // Update active state
            document.querySelectorAll('.category-filter').forEach(l => {
                l.classList.remove('dominant-color');
                l.classList.add('body-dominant-color');
            });
            this.classList.remove('body-dominant-color');
            this.classList.add('dominant-color');

            currentFilters.category = category;
            currentFilters.page = 1;

            fetchProducts();
        });
    });

    // Pagination - use event delegation
    document.addEventListener('click', function(e) {
        const pageLink = e.target.closest('.page-link');

        if (pageLink && pageLink.dataset.page) {
            e.preventDefault();
            const page = pageLink.dataset.page;

            if (page && !pageLink.closest('.disabled')) {
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

    // Handle mobile select for sorting
    const sortSelect = document.getElementById('sortby');
    if (sortSelect) {
        sortSelect.addEventListener('change', function() {
            currentFilters.sort_by = this.value;
            currentFilters.page = 1;
            fetchProducts();
        });
    }

    // Initialize filter display
    updateActiveFilters();
});
