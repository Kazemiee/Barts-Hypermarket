//console.log(localStorage.getItem("UnitPrice"));
//console.log(localStorage.getItem("Quantity"));
//console.log(document.getElementById("price-displayed"));

ChangeQuantity(
  localStorage.getItem("UnitPrice" + page),
  localStorage.getItem("Quantity" + page)
);
document.getElementById("quantity").value = localStorage.getItem(
  "Quantity" + page
);
document.getElementById("select-type").value = localStorage.getItem(
  "Selected" + page
);

function ChangePriceMultiplier(newMultiplier) {
  console.log("Multiplier: " + newMultiplier);
  localStorage.setItem("PriceMultiplier" + page, newMultiplier);
}
function OnChangeSelected() {
  var selected = document.getElementById("select-type").value;
  console.log("Selected: " + selected);
  localStorage.setItem("Selected" + page, selected);
}

function ShowExtraDetails() {
  var x = document.getElementById("extra-details");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function TogglePsychosis() {
  var sch1 = document.getElementById("schizophrenia");
  var sch2 = document.getElementById("not-schizophrenia");
  var style = document.getElementById("style");
  if (sch1.style.display === "none") {
    sch1.style.display = "block";
    sch2.style.display = "none";
    style.href = "grimdark-style.css";
    console.log("Style: Grimdark");
  } else {
    sch2.style.display = "block";
    sch1.style.display = "none";
    style.href = "style.css";
    console.log("Style: Amiablebright");
  }
}

function AddToQuantity(unitPrice) {
  var qPlus = document.getElementById("quantity").value;
  qPlus++;
  document.getElementById("quantity").value = qPlus;
  console.log("Q Plus: " + qPlus);
  ChangeQuantity(unitPrice, qPlus);
  //console.log(qPlus);
}
function SubtractFromQuantity(unitPrice) {
  var qMinus = document.getElementById("quantity").value;
  if (qMinus > 1) {
    qMinus--;
    document.getElementById("quantity").value = qMinus;
    console.log("Q Minus: " + qMinus);
    ChangeQuantity(unitPrice, qMinus);
  }
  //console.log(qMinus);
}
function ChangeQuantityKeyUp(unitPrice) {
  var q = document.getElementById("quantity").value;
  if (q <= 1) {
    q = 1;
    document.getElementById("quantity").value = q;
  }
  ChangeQuantity(unitPrice, q);
  //console.log(q);
}

function ChangeQuantity(unitPrice, quantity) {
  var price = document.getElementById("price-displayed");
  console.log("UnitPrice: " + unitPrice);
  console.log("Quantity: " + quantity);
  console.log("Multiplier: " + localStorage.getItem("PriceMultiplier" + page));
  price.innerHTML =
    "Pay: " +
    "$" +
    unitPrice * quantity * localStorage.getItem("PriceMultiplier" + page);
  console.log("NewPrice: " + price.innerHTML);
  localStorage.setItem("Quantity" + page, quantity);
  localStorage.setItem("Price" + page, price);
  localStorage.setItem("UnitPrice" + page, unitPrice);
  price.innerHTML =
    "Pay: " +
    "$" +
    (
      unitPrice *
      quantity *
      localStorage.getItem("PriceMultiplier" + page)
    ).toLocaleString();
  //console.log(unitPrice);
  //console.log(quantity);
}

function DeleteProduct(int) {
  var x = document.getElementById("product-row" + int);
  if (x.style.display === "none") {
    x.style.display = "table-row";
  } else {
    x.style.display = "none";
  }
}

//onmouseout="ChangeQuantityKeyUp(100)"
