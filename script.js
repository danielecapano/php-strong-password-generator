const rangeValue = document.getElementById("range-value");
const range = document.getElementById("range");
console.log(range);
rangeValue.innerHTML = range.value;

range.addEventListener("input", () => {
  //   rangeValue = range.value;
  rangeValue.innerHTML = range.value;
});
