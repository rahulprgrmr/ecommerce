@extends('layout')

@section('content')
        <div class="card p-5">
            <div class="product-title-container text-center">
                <h1 class="product-name">{{ $product->name }}</h1>
                <p class="product-price">₹{{ $product->price }}</p>
            </div>
            <div class="product-description mt-3">
                <h4>Product Description</h4>
                <p>{{ $product->description }}</p>
            </div>
            <div class="product-description mt-3">
                <h4>Checkout</h4>
                <input id="card-holder-name" type="text" class="form-control mb-2" placeholder="Cardholder Name">

                <!-- Stripe Elements Placeholder -->
                <div id="card-element" class="form-control mb-2" style='height: 2.4em; padding-top: .7em;'></div>

                <button id="card-button" class="btn btn-primary">
                    Process Payment
                </button>
            </div>
        </div>
@endsection

@section('custom-css-js-footer')
    <script src="https://js.stripe.com/v3/"></script>

    <script>
        const stripe = Stripe("{{ env('STRIPE_KEY') }}");

        const elements = stripe.elements();
        const cardElement = elements.create('card');

        cardElement.mount('#card-element');

        const cardHolderName = document.getElementById('card-holder-name');
        const cardButton = document.getElementById('card-button');

        cardButton.addEventListener('click', async (e) => {
            const { paymentMethod, error } = await stripe.createPaymentMethod(
                'card', cardElement, {
                    billing_details: { name: cardHolderName.value }
                }
            );

            if (error) {
                // Display "error.message" to the user...
            } else {
                // The card has been verified successfully...
                window.location.replace("{{ url('/') }}"+"/products/"+"{{ $product->id }}"+"/purchase/"+paymentMethod.id);
            }
        });
    </script>
@endsection
