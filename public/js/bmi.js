document.addEventListener("DOMContentLoaded", function() {

    const btnE1 = document.getElementById("btn-calculate");
    const bmiInputE1 = document.getElementById("bmi-result");
    const weightConditionalE1 = document.getElementById("weight-condition");
    function calculateBMI() {
        const heightInput = document.getElementById("height");
        const weightInput = document.getElementById("weight");
        if (heightInput && weightInput) {
            const heightValue = parseFloat(heightInput.value);
            const weightValue = parseFloat(weightInput.value);
            if (!isNaN(heightValue) && !isNaN(weightValue) && heightValue > 0 && weightValue > 0) {
                const heightInMeters = heightValue / 100;
                const bmiValue = weightValue / (heightInMeters * heightInMeters);
                bmiInputE1.value = bmiValue.toFixed(2);
                if (bmiValue < 18.5) {
                    weightConditionalE1.innerText = "\n Under Weight";
                } else if (bmiValue >= 18.5 && bmiValue <= 24.9) {
                    weightConditionalE1.innerText = "\n Normal Weight";
                } else if (bmiValue >= 25 && bmiValue <= 29.9) {
                    weightConditionalE1.innerText = "\n Over Weight";
                } else if (bmiValue >= 30) {
                    weightConditionalE1.innerText = "\n Obesity";
                }
            } else {
                alert("Please enter valid height and weight.");
            }
        } else {
            console.error("Height or weight input element not found.");
        }
    }
    btnE1.addEventListener("click", calculateBMI);
});