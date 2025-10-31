document.addEventListener('DOMContentLoaded', () => {
    const addToCartBtn = document.querySelector('#add-to-cart-btn');

    if (addToCartBtn) {
        addToCartBtn.addEventListener('click', function (e) {
            e.preventDefault();

            const form = document.querySelector('#add-to-cart-form');
            const productId = form.dataset.productId;
            const quantity = parseInt(document.querySelector('#quantity-input').value) || 1;
            const size = form.querySelector('input[name="size"]:checked')?.value || null;

            // Loading animation
            const bagIcon = form.querySelector('.product-bag-icon');
            const loaderIcon = form.querySelector('.product-loader-icon');
            const checkIcon = form.querySelector('.product-check-icon');

            bagIcon.style.display = 'none';
            loaderIcon.style.display = 'block';

            fetch(`/cart/add/${productId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({ quantity, size })
            })
                .then(res => res.json())
                .then(data => {
                    loaderIcon.style.display = 'none';
                    checkIcon.style.display = 'block';

                    if (data.success) {
                        document.querySelectorAll('.cart-counter').forEach(el => {
                            el.textContent = data.cart_count;
                        });
                    } else {
                        alert('Something went wrong!');
                    }

                    setTimeout(() => {
                        checkIcon.style.display = 'none';
                        bagIcon.style.display = 'block';
                    }, 2000);
                })
                .catch(err => {
                    console.error(err);
                    loaderIcon.style.display = 'none';
                    bagIcon.style.display = 'block';
                });
        });
    }
});
