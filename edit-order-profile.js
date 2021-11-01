function ChangeOrderProfile() {
  var A = document.getElementById("new-cart-quantity");
  var B = document.getElementById("new-product-type");
  document.getElementById("product-type").innerHTML = B.value;
  console.log(A.value);
  console.log(B.value);
  document.getElementById("cart-quantity").innerHTML = A.value;
}
