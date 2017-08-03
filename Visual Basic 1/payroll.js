var myForm = document.getElementById("myForm"),
    submit = document.getElementById("submit"),
    results = document.getElementById("results"),
    printName = document.getElementById("print-name"),
    printGross = document.getElementById("print-gross"),
    printTax = document.getElementById("print-tax"),
    printNet = document.getElementById("print-net");

// Listen for the form to be submitted
submit.addEventListener("click", function(event) {
  var name = document.getElementById("name").value,
      hours = document.getElementById("hours").value,
      payRate = document.getElementById("pay-rate").value,
      taxRate = document.getElementById("tax-rate").value,
      totalTax = "",
      net = "",
      overtime = payRate * 1.5;

// Get and return gross pay
function getGross() {
  var extraHours = hours - 40;
  if (hours > 40) {
    gross = (40 * payRate) + (extraHours * overtime);
  } else {
    gross = hours * payRate;
    };
  event.preventDefault();
  return gross;
};

// Get and return tax amount and convert from percentage
function getTax() {
  taxRate = taxRate / 100;
  totalTax = gross * taxRate;
  return taxRate;
  return totalTax;
}

// Get and return net pay
function getNet() {
    net = gross - totalTax;
    return net;
}

// Run each function which returns the values needed
getGross();
getTax();
getNet();



// Validate form and print if requirements are met
if (name === "") {
    alert("Please enter a name.");
} else if (isNaN(hours) || hours === "" || hours < 5 || hours > 60) {
    alert("Please enter hours between 5 and 60 (numbers only)");
} else if (isNaN(payRate) || payRate === "" || payRate < 8 || payRate > 60) {
    alert("Please enter hourly rate between 8 and 60 (numbers only)");
} else {
    gross = gross.toFixed(2);
    totalTax = totalTax.toFixed(2);
    net = net.toFixed(2);

    // Print the values from the functions
printName.innerHTML = "<span class='result-title'>Employee:</span> " +  name;
printGross.innerHTML = "<span class='result-title'>Gross:</span> $" + gross;
printTax.innerHTML = "<span class='result-title'>Tax:</span> $" + totalTax;
printNet.innerHTML = "<span class='result-title'>Net:</span> $" + net;
};

});

reset.addEventListener("click", function(event) {
printName.innerHTML = "";
printGross.innerHTML = "";
printTax.innerHTML = "";
printNet.innerHTML = "";
}); 


