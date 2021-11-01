function ChangeOrderProfile() {
  var A = document.getElementById("new-cart-quantity");
  var B = document.getElementById("new-product-type");
  document.getElementById("product-type").innerHTML = B.value;
  //console.log(A.value);
  if (isNaN(A)) {
    document.getElementById("cart-quantity").innerHTML = "0";
  } else {
    document.getElementById("cart-quantity").innerHTML = A.value;
  }
}
