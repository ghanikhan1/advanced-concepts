@if(isset($result))
    <div style="background-color: #d4edda; color: #155724; padding: 10px; margin-bottom: 15px;">
        <strong>Success!</strong> {{ $result }}
    </div>
@endif

<form action="{{ route('process.payment') }}" method="POST">
    @csrf <!-- Ensure you have CSRF protection for Laravel forms -->
    <input type="radio" id="credit" name="method" value="credit">
    <label for="credit">Credit Card</label><br>
    <input type="radio" id="paypal" name="method" value="paypal" checked>
    <label for="paypal">PayPal</label><br>
    <input type="radio" id="bank" name="method" value="bank">
    <label for="bank">Bank Transfer</label><br>
    <input type="text" name="amount" value="100" /> <!-- Set the amount here -->
    <button type="submit">Pay Now</button>
</form>
