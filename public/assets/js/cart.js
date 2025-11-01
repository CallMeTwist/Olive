// public/assets/js/cart.js

document.addEventListener('DOMContentLoaded', function () {
    console.log('Cart JS loaded'); // ✅ Debug log

    const addBtn = document.getElementById('buy-now-btn');
    const form = document.getElementById('add-to-cart-form');

    if (!addBtn || !form) {
        console.error('Add to cart button or form not found');
        return;
    }

    console.log('Form found, attaching event listener'); // ✅ Debug log

    addBtn.addEventListener('click', async function (e) {
        e.preventDefault();
        console.log('Add to cart clicked'); // ✅ Debug log

        const productId = form.dataset.productId;
        const quantityInput = form.querySelector('input[name="quantity"]');
        const sizeInput = form.querySelector('input[name="size"]:checked');

        const quantity = quantityInput ? quantityInput.value : 1;
        const size = sizeInput ? sizeInput.value : null;

        console.log('Data:', { productId, quantity, size }); // ✅ Debug log

        // Validation
        if (!size) {
            alert('Please select a size.');
            return;
        }

        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;

        if (!csrfToken) {
            console.error('CSRF token not found');
            alert('Security token missing. Please refresh the page.');
            return;
        }

        // Show loading state
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

            console.log('Response status:', response.status); // ✅ Debug log

            const result = await response.json();
            console.log('Result:', result); // ✅ Debug log

            if (response.ok && result.success) {
                // ✅ Update cart count in header
                document.querySelectorAll('.cart-counter').forEach(el => {
                    el.textContent = result.cart_count;
                });

                // ✅ Show success state
                addBtn.innerHTML = '<i class="ri-check-line"></i> Added!';
                addBtn.classList.add('btn-success');

                // Optional: Show success message
                alert('✅ Added to cart!');

                // Reset button after 2 seconds
                setTimeout(() => {
                    addBtn.innerHTML = originalText;
                    addBtn.disabled = false;
                    addBtn.classList.remove('btn-success');
                }, 2000);
            } else {
                throw new Error(result.message || 'Failed to add to cart');
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Error adding to cart: ' + error.message);

            // Reset button
            addBtn.innerHTML = originalText;
            addBtn.disabled = false;
        }
    });
});
