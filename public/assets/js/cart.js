// // public/assets/js/cart.js
//
// document.addEventListener('DOMContentLoaded', function () {
//     console.log('Cart JS loaded'); // ✅ Debug log
//
//     const addBtn = document.getElementById('add-to-cart-btn');
//     const form = document.getElementById('add-to-cart-form');
//
//     if (!addBtn || !form) {
//         console.error('Add to cart button or form not found');
//         return;
//     }
//
//     console.log('Form found, attaching event listener'); // ✅ Debug log
//
//     addBtn.addEventListener('click', async function (e) {
//         e.preventDefault();
//         console.log('Add to cart clicked'); // ✅ Debug log
//
//         const productId = form.dataset.productId;
//         const quantityInput = form.querySelector('input[name="quantity"]');
//         const sizeInput = form.querySelector('input[name="size"]:checked');
//
//         const quantity = quantityInput ? quantityInput.value : 1;
//         const size = sizeInput ? sizeInput.value : null;
//
//         console.log('Data:', { productId, quantity, size }); // ✅ Debug log
//
//         // Validation
//         if (!size) {
//             alert('Please select a size.');
//             return;
//         }
//
//         const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;
//
//         if (!csrfToken) {
//             console.error('CSRF token not found');
//             alert('Security token missing. Please refresh the page.');
//             return;
//         }
//
//         // Show loading state
//         const originalText = addBtn.innerHTML;
//         addBtn.disabled = true;
//         addBtn.innerHTML = '<i class="ri-loader-4-line"></i> Adding...';
//
//         try {
//             const response = await fetch(`/cart/add/${productId}`, {
//                 method: 'POST',
//                 headers: {
//                     'Content-Type': 'application/json',
//                     'X-CSRF-TOKEN': csrfToken,
//                     'X-Requested-With': 'XMLHttpRequest',
//                     'Accept': 'application/json',
//                 },
//                 body: JSON.stringify({
//                     quantity: parseInt(quantity),
//                     size: size
//                 }),
//                 credentials: 'same-origin'
//             });
//
//             console.log('Response status:', response.status); // ✅ Debug log
//
//             const result = await response.json();
//             console.log('Result:', result); // ✅ Debug log
//
//             if (response.ok && result.success) {
//                 // ✅ Update cart count in header
//                 document.querySelectorAll('.cart-counter').forEach(el => {
//                     el.textContent = result.cart_count;
//                 });
//
//                 // ✅ Show success state
//                 addBtn.innerHTML = '<i class="ri-check-line"></i> Added!';
//                 addBtn.classList.add('btn-success');
//
//                 // Optional: Show success message
//                 alert('✅ Added to cart!');
//
//                 // Reset button after 2 seconds
//                 setTimeout(() => {
//                     addBtn.innerHTML = originalText;
//                     addBtn.disabled = false;
//                     addBtn.classList.remove('btn-success');
//                 }, 2000);
//             } else {
//                 throw new Error(result.message || 'Failed to add to cart');
//             }
//         } catch (error) {
//             console.error('Error:', error);
//             alert('Error adding to cart: ' + error.message);
//
//             // Reset button
//             addBtn.innerHTML = originalText;
//             addBtn.disabled = false;
//         }
//     });
// });
// //clearing the cart
// document.querySelector('.clear-cart-btn').addEventListener('click', async function (e) {
//     e.preventDefault();
//
//     if (!confirm('Are you sure you want to clear your cart?')) return;
//
//     const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
//
//     const response = await fetch('/cart/clear', {
//         method: 'POST',
//         headers: {
//             'X-CSRF-TOKEN': csrfToken,
//             'Accept': 'application/json'
//         }
//     });
//
//     const result = await response.json();
//     if (result.success) {
//         alert('Cart cleared!');
//         window.location.reload();
//     }
// });
//

// public/assets/js/cart.js

// document.addEventListener('DOMContentLoaded', function () {
//     console.log('Cart JS loaded');
//
//     // ============================================
//     // ADD TO CART (Product Detail Page)
//     // ============================================
//     const addBtn = document.getElementById('add-to-cart-btn');
//     const addForm = document.getElementById('add-to-cart-form');
//
//     if (addBtn && addForm) {
//         console.log('Add to cart form found');
//
//         addBtn.addEventListener('click', async function (e) {
//             e.preventDefault();
//             console.log('Add to cart clicked');
//
//             const productId = addForm.dataset.productId;
//             const quantityInput = addForm.querySelector('input[name="quantity"]');
//             const sizeInput = addForm.querySelector('input[name="size"]:checked');
//
//             const quantity = quantityInput ? quantityInput.value : 1;
//             const size = sizeInput ? sizeInput.value : null;
//
//             console.log('Data:', { productId, quantity, size });
//
//             // Validation
//             if (!size) {
//                 alert('Please select a size.');
//                 return;
//             }
//
//             const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;
//
//             if (!csrfToken) {
//                 console.error('CSRF token not found');
//                 alert('Security token missing. Please refresh the page.');
//                 return;
//             }
//
//             // Show loading state
//             const originalText = addBtn.innerHTML;
//             addBtn.disabled = true;
//             addBtn.innerHTML = '<i class="ri-loader-4-line"></i> Adding...';
//
//             try {
//                 const response = await fetch(`/cart/add/${productId}`, {
//                     method: 'POST',
//                     headers: {
//                         'Content-Type': 'application/json',
//                         'X-CSRF-TOKEN': csrfToken,
//                         'X-Requested-With': 'XMLHttpRequest',
//                         'Accept': 'application/json',
//                     },
//                     body: JSON.stringify({
//                         quantity: parseInt(quantity),
//                         size: size
//                     }),
//                 });
//
//                 console.log('Response status:', response.status);
//
//                 const result = await response.json();
//                 console.log('Result:', result);
//
//                 if (response.ok && result.success) {
//                     // Update cart count in header
//                     document.querySelectorAll('.cart-counter').forEach(el => {
//                         el.textContent = result.cart_count;
//                     });
//
//                     // Show success state
//                     addBtn.innerHTML = '<i class="ri-check-line"></i> Added!';
//                     addBtn.classList.add('btn-success');
//
//                     // Success message
//                     alert('✅ Added to cart!');
//
//                     // Reset button after 2 seconds
//                     setTimeout(() => {
//                         addBtn.innerHTML = originalText;
//                         addBtn.disabled = false;
//                         addBtn.classList.remove('btn-success');
//                     }, 2000);
//                 } else {
//                     throw new Error(result.message || 'Failed to add to cart');
//                 }
//             } catch (error) {
//                 console.error('Error:', error);
//                 alert('Error adding to cart: ' + error.message);
//
//                 // Reset button
//                 addBtn.innerHTML = originalText;
//                 addBtn.disabled = false;
//             }
//         });
//     }
//
//     // ============================================
//     // CLEAR CART (Cart Page)
//     // ============================================
//     const clearCartBtn = document.querySelector('.clear-cart-btn');
//
//     if (clearCartBtn) {
//         console.log('Clear cart button found');
//
//         clearCartBtn.addEventListener('click', async function (e) {
//             e.preventDefault();
//             console.log('Clear cart clicked');
//
//             if (!confirm('Are you sure you want to clear your cart?')) {
//                 console.log('Clear cart cancelled');
//                 return;
//             }
//
//             const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;
//
//             if (!csrfToken) {
//                 console.error('CSRF token not found');
//                 alert('Security token missing. Please refresh the page.');
//                 return;
//             }
//
//             try {
//                 console.log('Sending clear cart request...');
//
//                 const response = await fetch('/cart/clear', {
//                     method: 'POST',
//                     headers: {
//                         'X-CSRF-TOKEN': csrfToken,
//                         'X-Requested-With': 'XMLHttpRequest',
//                         'Accept': 'application/json',
//                         'Content-Type': 'application/json'
//                     }
//                 });
//
//                 console.log('Clear cart response status:', response.status);
//
//                 const result = await response.json();
//                 console.log('Clear cart result:', result);
//
//                 if (response.ok && result.success) {
//                     console.log('Cart cleared successfully, reloading page...');
//
//                     // Update cart counter immediately
//                     document.querySelectorAll('.cart-counter').forEach(el => {
//                         el.textContent = '0';
//                     });
//
//                     // Force page reload
//                     window.location.href = window.location.href;
//                 } else {
//                     throw new Error(result.message || 'Failed to clear cart');
//                 }
//             } catch (error) {
//                 console.error('Clear cart error:', error);
//                 alert('Error clearing cart: ' + error.message);
//                 // Reload anyway in case cart was cleared
//                 window.location.reload();
//             }
//         });
//     }
//
//     // ============================================
//     // UPDATE CART QUANTITY (Cart Page)
//     // ============================================
//     document.querySelectorAll('.cart-qty-input').forEach(input => {
//         input.addEventListener('change', async function() {
//             const cartItemId = this.dataset.cartItemId;
//             const quantity = parseInt(this.value);
//             const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;
//
//             console.log('Updating cart item:', cartItemId, 'to quantity:', quantity);
//
//             try {
//                 const response = await fetch(`/cart/update/${cartItemId}`, {
//                     method: 'PATCH',
//                     headers: {
//                         'Content-Type': 'application/json',
//                         'X-CSRF-TOKEN': csrfToken,
//                         'X-Requested-With': 'XMLHttpRequest',
//                         'Accept': 'application/json'
//                     },
//                     body: JSON.stringify({ quantity })
//                 });
//
//                 const result = await response.json();
//
//                 if (result.success) {
//                     // Update cart count
//                     document.querySelectorAll('.cart-counter').forEach(el => {
//                         el.textContent = result.cart_count;
//                     });
//
//                     // Reload to update totals
//                     window.location.reload();
//                 }
//             } catch (error) {
//                 console.error('Error updating cart:', error);
//                 alert('Error updating quantity');
//             }
//         });
//     });
//
//     // ============================================
//     // REMOVE CART ITEM (Cart Page)
//     // ============================================
//     document.querySelectorAll('.cart-remove').forEach(button => {
//         button.addEventListener('click', async function() {
//             if (!confirm('Remove this item from cart?')) return;
//
//             const cartItemId = this.dataset.cartItemId;
//             const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;
//
//             console.log('Removing cart item:', cartItemId);
//
//             try {
//                 const response = await fetch(`/cart/remove/${cartItemId}`, {
//                     method: 'DELETE',
//                     headers: {
//                         'X-CSRF-TOKEN': csrfToken,
//                         'X-Requested-With': 'XMLHttpRequest',
//                         'Accept': 'application/json'
//                     }
//                 });
//
//                 const result = await response.json();
//
//                 if (result.success) {
//                     // Update cart count
//                     document.querySelectorAll('.cart-counter').forEach(el => {
//                         el.textContent = result.cart_count;
//                     });
//
//                     // Reload page
//                     window.location.reload();
//                 }
//             } catch (error) {
//                 console.error('Error removing item:', error);
//                 alert('Error removing item');
//             }
//         });
//     });
// });


// public/assets/js/cart.js
document.addEventListener('DOMContentLoaded', function () {
    console.log('✅ Cart JS loaded with SweetAlert2');

    // Helper: SweetAlert Toast
    const showToast = (title, icon = 'success') => {
        Swal.fire({
            title,
            icon,
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 1800,
            timerProgressBar: true,
        });
    };

    // Helper: SweetAlert confirm dialog
    const confirmAction = async (title, text = 'You won’t be able to undo this!') => {
        const result = await Swal.fire({
            title,
            text,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, proceed!',
            cancelButtonText: 'Cancel'
        });
        return result.isConfirmed;
    };

    // ============================================
    // ADD TO CART (Product Detail Page)
    // ============================================
    const addBtn = document.getElementById('add-to-cart-btn');
    const addForm = document.getElementById('add-to-cart-form');

    if (addBtn && addForm) {
        console.log('🛒 Add to cart form found');

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

            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;
            if (!csrfToken) {
                Swal.fire('Security token missing', 'Please refresh the page.', 'error');
                return;
            }

            const originalText = addBtn.innerHTML;
            addBtn.disabled = true;
            addBtn.innerHTML = '<i class="ri-loader-4-line"></i> Adding...';

            try {
                const response = await fetch(`/cart/add/${productId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json',
                    },
                    body: JSON.stringify({
                        quantity: parseInt(quantity),
                        size: size
                    }),
                });

                const result = await response.json();

                if (response.ok && result.success) {
                    document.querySelectorAll('.cart-counter').forEach(el => {
                        el.textContent = result.cart_count;
                    });

                    addBtn.innerHTML = '<i class="ri-check-line"></i> Added!';
                    addBtn.classList.add('btn-success');
                    showToast('✅ Added to cart!');

                    setTimeout(() => {
                        addBtn.innerHTML = originalText;
                        addBtn.disabled = false;
                        addBtn.classList.remove('btn-success');
                    }, 1500);
                } else {
                    throw new Error(result.message || 'Failed to add to cart');
                }
            } catch (error) {
                Swal.fire('Error', error.message, 'error');
                addBtn.innerHTML = originalText;
                addBtn.disabled = false;
            }
        });
    }

    // ============================================
    // CLEAR CART (Cart Page)
    // ============================================
    const clearCartBtn = document.querySelector('.clear-cart-btn');

    if (clearCartBtn) {
        clearCartBtn.addEventListener('click', async function (e) {
            e.preventDefault();

            const confirmed = await confirmAction('Clear your cart?', 'This will remove all items.');
            if (!confirmed) return;

            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;

            try {
                const response = await fetch('/cart/clear', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    }
                });

                const result = await response.json();

                if (response.ok && result.success) {
                    showToast('🧹 Cart cleared!');
                    document.querySelectorAll('.cart-counter').forEach(el => el.textContent = '0');
                    setTimeout(() => window.location.reload(), 1200);
                } else {
                    throw new Error(result.message || 'Failed to clear cart');
                }
            } catch (error) {
                Swal.fire('Error', error.message, 'error');
            }
        });
    }

    // ============================================
    // UPDATE CART QUANTITY (Cart Page)
    // ============================================
    document.querySelectorAll('.cart-qty-input').forEach(input => {
        input.addEventListener('change', async function() {
            const cartItemId = this.dataset.cartItemId;
            const quantity = parseInt(this.value);
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;

            try {
                const response = await fetch(`/cart/update/${cartItemId}`, {
                    method: 'PATCH',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({ quantity })
                });

                const result = await response.json();

                if (result.success) {
                    showToast('🛍️ Cart updated');
                    document.querySelectorAll('.cart-counter').forEach(el => el.textContent = result.cart_count);
                    setTimeout(() => window.location.reload(), 1000);
                }
            } catch (error) {
                Swal.fire('Error updating quantity', error.message, 'error');
            }
        });
    });

    // ============================================
    // REMOVE CART ITEM (Cart Page)
    // ============================================
    document.querySelectorAll('.cart-remove').forEach(button => {
        button.addEventListener('click', async function() {
            const confirmed = await confirmAction('Remove this item?', 'It will be deleted from your cart.');
            if (!confirmed) return;

            const cartItemId = this.dataset.cartItemId;
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;

            try {
                const response = await fetch(`/cart/remove/${cartItemId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    }
                });

                const result = await response.json();

                if (result.success) {
                    showToast('🗑️ Item removed');
                    document.querySelectorAll('.cart-counter').forEach(el => el.textContent = result.cart_count);
                    setTimeout(() => window.location.reload(), 1000);
                }
            } catch (error) {
                Swal.fire('Error removing item', error.message, 'error');
            }
        });
    });
});
