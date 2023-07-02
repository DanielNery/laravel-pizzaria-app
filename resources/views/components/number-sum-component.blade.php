<div>
    <button onclick="subtractNumber('{{ $uniqueId }}', '{{ $price }}')" class="text-xl font-bold p-2 " style="color:#C53F3F"> - </button>
    <span id="number-{{ $uniqueId }}" class="text-xl mx-2 text-white">{{ $number }}</span>
    <button onclick="addNumber('{{ $uniqueId }}', '{{ $price }}')" class="text-xl font-bold p-2" style="color:#C53F3F"> + </button>
</div>


<script>
    function addNumber(uniqueId, price) {
        var numberElement = document.getElementById('number-' + uniqueId);
        var priceTotalElement = document.getElementById("priceTotal");
        if (numberElement && priceTotalElement) {
            var currentValue = parseInt(numberElement.innerHTML);
            var currentPrice = parseInt(priceTotalElement.innerHTML);
            numberElement.innerHTML = currentValue + 1;
            priceTotalElement.innerHTML = currentPrice + parseInt(price);
        }
    }

    function subtractNumber(uniqueId, price) {
        var numberElement = document.getElementById('number-' + uniqueId);
        var priceTotalElement = document.getElementById("priceTotal");
        if (numberElement) {
            var currentValue = parseInt(numberElement.innerHTML);
            var currentPrice = parseInt(priceTotalElement.innerHTML);
            numberElement.innerHTML = currentValue - 1;
            priceTotalElement.innerHTML = currentPrice - parseInt(price);
        }
    }
</script>

