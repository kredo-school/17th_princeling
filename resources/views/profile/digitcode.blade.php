@extends('layouts.app')

@section('content')
<div class="container mx-auto" style="margin-top: 15%">
    <h1 class="text-center">Enter your 6 - Digit Code</h1>

    <form action="#" method="POST" id="code-form">
    <fieldset name='number-code' class="dg-code-place" data-number-code-form>
        {{-- <legend>Number Code</legend> --}}
        <input type="number" class="dg-code" maxlength="1" min='0' max='9' name='number-code-0' data-number-code-input='0' required />
        <input type="number" class="dg-code" maxlength="1" min='0' max='9' name='number-code-1' data-number-code-input='1' required />
        <input type="number" class="dg-code" maxlength="1" min='0' max='9' name='number-code-2' data-number-code-input='2' required />
        <input type="number" class="dg-code" maxlength="1" min='0' max='9' name='number-code-3' data-number-code-input='3' required />
        <input type="number" class="dg-code" maxlength="1" min='0' max='9' name='number-code-4' data-number-code-input='4' required />
        <input type="number" class="dg-code" maxlength="1" min='0' max='9' name='number-code-5' data-number-code-input='5' required />

    </fieldset>
        <button type="submit" class="btn button-color1 text-white w-25 verify-button">Verify</button>
    </form>

    <script>
        const inputs = document.querySelectorAll('#code-form input');
        
        inputs.forEach((input, index) => {
            input.addEventListener('input', (event) => {
                const currentValue = event.target.value;
                if (currentValue.length === 1) {
                    if (index < inputs.length - 1) {
                        inputs[index + 1].focus();
                    } else {
                        inputs[0].focus();
                    }
                }
            });
    
            input.addEventListener('keydown', (event) => {
                if (!/^\d$/.test(event.key) && event.key !== 'Backspace' && event.key !== 'Delete') {
                    event.preventDefault();
                }
            });
        });
    </script>
</div>
@endsection