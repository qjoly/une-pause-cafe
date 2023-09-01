document.addEventListener("DOMContentLoaded", function () {
    const radioForm = document.getElementById("radioForm");
    const submitButton = document.getElementById("submitButton");

    submitButton.addEventListener("click", function () {
        const selectedCategory = document.querySelector('input[name="category"]:checked');
        if (selectedCategory) {
            const categoryValue = selectedCategory.value;
            alert("Selected category: " + categoryValue); // You can replace this with your desired action
        } else {
            alert("Please select a category before submitting.");
        }
    });
});

