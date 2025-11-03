
// document.addEventListener('DOMContentLoaded', function () {
//     console.log('✅ Cart JS loaded with SweetAlert2 + live quantity updates');
//
//     // =========================
//     // SweetAlert2 Helpers
//     // =========================
//     const showToast = (title, icon = 'success') => {
//         Swal.fire({
//             title,
//             icon,
//             toast: true,
//             position: 'top-end',
//             showConfirmButton: false,
//             timer: 1600,
//             timerProgressBar: true,
//         });
//     };
//
//     const confirmAction = async (title, text = 'You won’t be able to undo this!') => {
//         const result = await Swal.fire({
//             title,
//             text,
//             icon: 'warning',
//             showCancelButton: true,
//             confirmButtonText: 'Yes!',
//             cancelButtonText: 'Cancel'
//         });
//         return result.isConfirmed;
//     };
//
//     const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;
//
//     // =========================
//     // Update Totals Helper
//     // =========================
//     const updateTotals = (data) => {
//         document.querySelectorAll('.cart-counter').forEach(el => el.textContent = data.cart_count);
//
//         const subtotalEl = document.querySelector('.cart-subtotal');
//         const totalEl = document.querySelector('.cart-total');
//
//         if (subtotalEl) subtotalEl.textContent = `₦${Number(data.subtotal).toLocaleString()}`;
//         if (totalEl) totalEl.textContent = `₦${Number(data.total).toLocaleString()}`;
//     };
//
//     // =========================
//     // Debounce Helper
//     // =========================
//     let debounceTimer;
//     const debounce = (func, delay = 400) => {
//         clearTimeout(debounceTimer);
//         debounceTimer = setTimeout(func, delay);
//     };
//
//     // =========================
//     // ADD TO CART (Product Detail Page)
//     // =========================
//     const addBtn = document.getElementById('add-to-cart-btn');
//     const addForm = document.getElementById('add-to-cart-form');
//
//     if (addBtn && addForm) {
//         addBtn.addEventListener('click', async function (e) {
//             e.preventDefault();
//
//             const productId = addForm.dataset.productId;
//             const quantityInput = addForm.querySelector('input[name="quantity"]');
//             const sizeInput = addForm.querySelector('input[name="size"]:checked');
//             const quantity = quantityInput ? quantityInput.value : 1;
//             const size = sizeInput ? sizeInput.value : null;
//
//             if (!size) return Swal.fire('Please select a size.', '', 'warning');
//
//             addBtn.disabled = true;
//             const originalText = addBtn.innerHTML;
//             addBtn.innerHTML = '<i class="ri-loader-4-line"></i> Adding...';
//
//             try {
//                 const response = await fetch(`/cart/add/${productId}`, {
//                     method: 'POST',
//                     headers: {
//                         'Content-Type': 'application/json',
//                         'X-CSRF-TOKEN': csrfToken,
//                         'X-Requested-With': 'XMLHttpRequest',
//                         'Accept': 'application/json'
//                     },
//                     body: JSON.stringify({ quantity: parseInt(quantity), size })
//                 });
//
//                 const result = await response.json();
//                 if (response.ok && result.success) {
//                     document.querySelectorAll('.cart-counter').forEach(el => el.textContent = result.cart_count);
//                     showToast('✅ Added to cart!');
//                     addBtn.innerHTML = '<i class="ri-check-line"></i> Added!';
//                     addBtn.classList.add('btn-success');
//
//                     setTimeout(() => {
//                         addBtn.innerHTML = originalText;
//                         addBtn.disabled = false;
//                         addBtn.classList.remove('btn-success');
//                     }, 1500);
//                 } else throw new Error(result.message || 'Failed to add to cart');
//             } catch (err) {
//                 Swal.fire('Error', err.message, 'error');
//                 addBtn.innerHTML = originalText;
//                 addBtn.disabled = false;
//             }
//         });
//     }
//
//     // =========================
//     // CLEAR CART
//     // =========================
//     const clearCartBtn = document.querySelector('.clear-cart-btn');
//     if (clearCartBtn) {
//         clearCartBtn.addEventListener('click', async (e) => {
//             e.preventDefault();
//             const confirmed = await confirmAction('Clear your cart?', 'This will remove all items.');
//             if (!confirmed) return;
//
//             try {
//                 const res = await fetch('/cart/clear', {
//                     method: 'POST',
//                     headers: {
//                         'X-CSRF-TOKEN': csrfToken,
//                         'X-Requested-With': 'XMLHttpRequest',
//                         'Accept': 'application/json'
//                     }
//                 });
//                 const data = await res.json();
//                 if (data.success) {
//                     showToast('🧹 Cart cleared!');
//                     updateTotals(data);
//                     document.querySelector('.cart-table-data').innerHTML = `
//                         <div class="text-center py-5">
//                             <p>Your cart is empty 🛒</p>
//                         </div>`;
//                 }
//             } catch (err) {
//                 Swal.fire('Error', err.message, 'error');
//             }
//         });
//     }
//
//     // =========================
//     // REMOVE CART ITEM
//     // =========================
//     document.querySelectorAll('.cart-remove').forEach(btn => {
//         btn.addEventListener('click', async function () {
//             const confirmed = await confirmAction('Remove this item?');
//             if (!confirmed) return;
//
//             const cartItemId = this.dataset.cartItemId;
//
//             try {
//                 const res = await fetch(`/cart/remove/${cartItemId}`, {
//                     method: 'DELETE',
//                     headers: {
//                         'X-CSRF-TOKEN': csrfToken,
//                         'X-Requested-With': 'XMLHttpRequest',
//                         'Accept': 'application/json'
//                     }
//                 });
//                 const data = await res.json();
//
//                 if (data.success) {
//                     showToast('🗑️ Item removed');
//                     this.closest('.cart-table-info').remove();
//                     updateTotals(data);
//
//                     if (data.cart_count === 0) {
//                         document.querySelector('.cart-table-data').innerHTML = `
//                             <div class="text-center py-5">
//                                 <p>Your cart is empty 🛒</p>
//                             </div>`;
//                     }
//                 }
//             } catch (err) {
//                 Swal.fire('Error', err.message, 'error');
//             }
//         });
//     });
//
//     // =========================
//     // QUANTITY UPDATES (+, −, input)
//     // =========================
//     document.querySelectorAll('.cart-qty-input').forEach(input => {
//         const itemId = input.dataset.cartItemId;
//
//         const updateItem = async (qty) => {
//             try {
//                 const res = await fetch(`/cart/update/${itemId}`, {
//                     method: 'PATCH',
//                     headers: {
//                         'Content-Type': 'application/json',
//                         'X-CSRF-TOKEN': csrfToken,
//                         'X-Requested-With': 'XMLHttpRequest',
//                         'Accept': 'application/json'
//                     },
//                     body: JSON.stringify({ quantity: qty })
//                 });
//
//                 const data = await res.json();
//                 if (data.success) {
//                     showToast('🛍️ Cart updated');
//                     updateTotals(data);
//
//                     const row = input.closest('.cart-table-info');
//                     const subtotalEl = row.querySelector('.cart-total-price');
//                     if (subtotalEl) subtotalEl.textContent = `₦${Number(data.item_subtotal).toLocaleString()}`;
//                 }
//             } catch (err) {
//                 Swal.fire('Error updating quantity', err.message, 'error');
//             }
//         };
//
//         // Manual input
//         input.addEventListener('input', () => {
//             const qty = parseInt(input.value);
//             debounce(() => updateItem(qty));
//         });
//
//         // Plus / Minus buttons
//         const plus = input.closest('.js-qty-wrap')?.querySelector('.js-qty-adjust-plus');
//         const minus = input.closest('.js-qty-wrap')?.querySelector('.js-qty-adjust-minus');
//
//         if (plus) {
//             plus.addEventListener('click', () => {
//                 input.value = parseInt(input.value) + 1;
//                 debounce(() => updateItem(parseInt(input.value)));
//             });
//         }
//
//         if (minus) {
//             minus.addEventListener('click', () => {
//                 input.value = Math.max(1, parseInt(input.value) - 1);
//                 debounce(() => updateItem(parseInt(input.value)));
//             });
//         }
//     });
// });


document.addEventListener('DOMContentLoaded', function () {
    console.log('Cart JS loaded with SweetAlert2 + live quantity updates');

    // =========================
    // SweetAlert2 Helpers
    // =========================
    const showToast = (title, icon = 'success') => {
        Swal.fire({
            title,
            icon,
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 1600,
            timerProgressBar: true,
        });
    };

    const confirmAction = async (title, text = 'You won\'t be able to undo this!') => {
        const result = await Swal.fire({
            title,
            text,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes!',
            cancelButtonText: 'Cancel'
        });
        return result.isConfirmed;
    };

    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;

    // =========================
    // Update Totals Helper
    // =========================
    const updateTotals = (data) => {
        document.querySelectorAll('.cart-counter').forEach(el => el.textContent = data.cart_count);

        const subtotalEl = document.querySelector('.cart-subtotal');
        const totalEl = document.querySelector('.cart-grand-total');

        if (subtotalEl) subtotalEl.textContent = `₦${Number(data.subtotal).toLocaleString()}`;
        if (totalEl) totalEl.textContent = `₦${Number(data.total).toLocaleString()}`;
    };

    // =========================
    // Debounce Helper
    // =========================
    const debounceTimers = {}; // Use object to track timers per input
    const debounce = (func, delay = 400, key = 'default') => {
        clearTimeout(debounceTimers[key]);
        debounceTimers[key] = setTimeout(func, delay);
    };

    // =========================
    // ADD TO CART (Product Detail Page)
    // =========================
    const addBtn = document.getElementById('add-to-cart-btn');
    const addForm = document.getElementById('add-to-cart-form');

    if (addBtn && addForm) {
        addBtn.addEventListener('click', async function (e) {
            e.preventDefault();

            const productId = addForm.dataset.productId;
            const quantityInput = addForm.querySelector('input[name="quantity"]');
            const sizeInput = addForm.querySelector('input[name="size"]:checked');
            const quantity = quantityInput ? quantityInput.value : 1;
            const size = sizeInput ? sizeInput.value : null;

            if (!size) {
                Swal.fire('Please select a size.', '', 'warning');
                return;
            }

            addBtn.disabled = true;
            const originalText = addBtn.innerHTML;
            addBtn.innerHTML = '<i class="ri-loader-4-line"></i> Adding...';

            try {
                const response = await fetch(`/cart/add/${productId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({ quantity: parseInt(quantity), size })
                });

                const result = await response.json();
                if (response.ok && result.success) {
                    document.querySelectorAll('.cart-counter').forEach(el => el.textContent = result.cart_count);
                    showToast('✅ Added to cart!');
                    addBtn.innerHTML = '<i class="ri-check-line"></i> Added!';
                    addBtn.classList.add('btn-success');

                    setTimeout(() => {
                        addBtn.innerHTML = originalText;
                        addBtn.disabled = false;
                        addBtn.classList.remove('btn-success');
                    }, 1500);
                } else {
                    throw new Error(result.message || 'Failed to add to cart');
                }
            } catch (err) {
                Swal.fire('Error', err.message, 'error');
                addBtn.innerHTML = originalText;
                addBtn.disabled = false;
            }
        });
    }

    // =========================
    // CLEAR CART
    // =========================
    const clearCartBtn = document.querySelector('.clear-cart-btn');
    if (clearCartBtn) {
        clearCartBtn.addEventListener('click', async (e) => {
            e.preventDefault();
            const confirmed = await confirmAction('Clear your cart?', 'This will remove all items.');
            if (!confirmed) return;

            try {
                const res = await fetch('/cart/clear', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    }
                });
                const data = await res.json();
                if (data.success) {
                    showToast('🧹 Cart cleared!');
                    updateTotals(data);
                    document.querySelector('.cart-table-data').innerHTML = `
                        <div class="text-center py-5">
                            <p>Your cart is empty 🛒</p>
                        </div>`;
                }
            } catch (err) {
                Swal.fire('Error', err.message, 'error');
            }
        });
    }

    // =========================
    // REMOVE CART ITEM
    // =========================
    document.querySelectorAll('.cart-remove').forEach(btn => {
        btn.addEventListener('click', async function () {
            const confirmed = await confirmAction('Remove this item?');
            if (!confirmed) return;

            const cartItemId = this.dataset.cartItemId;

            try {
                const res = await fetch(`/cart/remove/${cartItemId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    }
                });
                const data = await res.json();

                if (data.success) {
                    showToast('🗑️ Item removed');
                    this.closest('.cart-table-info').remove();
                    updateTotals(data);

                    if (data.cart_count === 0) {
                        document.querySelector('.cart-table-data').innerHTML = `
                            <div class="text-center py-5">
                                <p>Your cart is empty 🛒</p>
                            </div>`;
                    }
                }
            } catch (err) {
                Swal.fire('Error', err.message, 'error');
            }
        });
    });

    // =========================
    // QUANTITY UPDATES (+, −, input)
    // =========================
    document.querySelectorAll('.cart-qty-input').forEach(input => {
        const itemId = input.dataset.cartItemId;
        const qtyWrap = input.closest('.js-qty-wrap');

        const plus = qtyWrap?.querySelector('.js-qty-adjust-plus');
        const minus = qtyWrap?.querySelector('.js-qty-adjust-minus');

        const updateItem = async (qty) => {
            try {
                const res = await fetch(`/cart/update/${itemId}`, {
                    method: 'PATCH',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({ quantity: qty })
                });

                const data = await res.json();
                if (data.success) {
                    showToast('🛍️ Cart updated');
                    updateTotals(data);

                    const row = input.closest('.cart-table-info');
                    const subtotalEl = row.querySelector('.cart-total-price');
                    if (subtotalEl) {
                        subtotalEl.textContent = `₦${Number(data.item_subtotal).toLocaleString()}`;
                    }
                }
            } catch (err) {
                Swal.fire('Error updating quantity', err.message, 'error');
            }
        };

        // Manual input with unique debounce key
        input.addEventListener('input', () => {
            const qty = parseInt(input.value) || 1;
            debounce(() => updateItem(qty), 400, `input-${itemId}`);
        });

        // Plus button
        if (plus) {
            plus.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                const currentVal = parseInt(input.value) || 0;
                input.value = currentVal + 1;
                debounce(() => updateItem(parseInt(input.value)), 400, `plus-${itemId}`);
            });
        }

        // Minus button
        if (minus) {
            minus.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                const currentVal = parseInt(input.value) || 1;
                input.value = Math.max(1, currentVal - 1);
                debounce(() => updateItem(parseInt(input.value)), 400, `minus-${itemId}`);
            });
        }
    });
});
