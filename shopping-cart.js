
  //Calls inner function every 5000ms
  //setInterval(function update(){
    //  console.log("logged every 5000ms");
    //}
  //}, 5000);

   //alert(cart);
var items=0;
var articles = document.getElementsByTagName("ARTICLE");
var inputs = document.getElementsByClassName("price");
var amount = document.getElementsByClassName("amount");
var saved= [];
//var input = input.getElementsByTagName("INPUT");
var numAmount = [];
const orangePrice = 1.49;
var cloneArticlePrices = Object.assign(amount);
var articlePrices = [];
for (var i = 0; i < cloneArticlePrices.length; i++) {
    articlePrices[i] = Number(cloneArticlePrices[i].innerText.match(/\d+\.+\d*/));
}

//var numAmount = document.getElementById("amount1").innerText.match(/\d+\.+\d*/);



// document.onkeypress = function(key_dtl) {
//   key_dtl = key_dtl || window.event;
//  var uni_code = key_dtl.keyCode || key_dtl.which;
//  console.log("logged", amount.length, numAmount.length, saved.length);
//
//
//  }



 function logger(){
   //console.log("clicked", document.getElementById("amount").innerText.match(/\d+\.+\d*/));
   //console.log("articles", articles,"inputs", inputs, "amounts", amount, "numAmount", numAmount, "Saved items", saved);
   console.log( Number(cloneArticlePrices[1].innerText.match(/\d+\.+\d*/)), articlePrices[0]);
   if(document.getElementById("amount") == null ){
     console.log("Null");
   }
   else {
     console.log("different from null");
     console.log(document.getElementById("amount").innerText);
   }
 }

function pricing(a){

}

function priceOrange(a) {
     if(a>=0){
     amount1= parseInt(a);
     price = 1.49*amount1;
     price = price.toFixed(2);
     document.getElementById("amount1").innerHTML = "$"+price;}
     else
       document.getElementById("amount1").innerHTML = "$"+0;
}



// function priceOrange(a) {
//       nextNode = a.parentNode.nextSibling.nextSibling;
//       priceAmount = nextNode.getElementsByClassName("amount");
//       quantity = parseInt(a.value);
//       const parsedAmount = Number(priceAmount[0].innerText.match(/\d+\.+\d*/));
//       console.log("parsed",parsedAmount);
//      if(quantity>=0 ){
//      price = (quantity*orangePrice).toFixed(2);
//      priceAmount[0].innerHTML = "$"+price;
//    }
//      else{
//        document.getElementById("amount").innerHTML = "$"+0;
//      }
//
//        console.log("a", a.parentNode, "next sibling",nextNode, "value", quantity, "price amount", parsedAmount);
//  }

function priceGrape(a) {
     if(a>=0){
     amount2= parseInt(a);
       price = 3.49*amount2;
       price = price.toFixed(2);
       document.getElementById("amount2").innerHTML = "$"+price;
     }
     else {
       document.getElementById("amount2").innerHTML = "$"+0;
     }

   }


function priceApple(a) {
     if(a>=0){
     amount3= parseInt(a);
     price = 2.99*amount3;
     price = price.toFixed(2);
     document.getElementById("amount3").innerHTML = "$"+price;}
     else {
       document.getElementById("amount3").innerHTML = "$"+0;
     }
   }

function priceBanana(a) {
     if(a>=0){
     amount4= parseInt(a);

     price = 1.99*amount4;
     price = price.toFixed(2);
     document.getElementById("amount4").innerHTML = "$"+price;}
     else
       document.getElementById("amount4").innerHTML = "$"+0;
   }


function priceLettuce(a) {
     if(a>=0){
     amount5= parseInt(a);
     price = 3.27*amount5;
     price = price.toFixed(2);
     document.getElementById("amount5").innerHTML = "$"+price;}
     else
       document.getElementById("amount5").innerHTML = "$"+0;
   }


function priceAxolotl(a) {
     if(a>=0){
     amount6= parseInt(a);
     price = 100*amount6;
     price = price.toFixed(2);
     document.getElementById("amount6").innerHTML = "$"+price;}
     else
     document.getElementById("amount6").innerHTML = "$"+0;
   }
//Updates summary
function update(){
    //if(document.getElementById("amount").innerText.match(/\d+\.+\d*/) != null);
      num1 = document.getElementById("amount1").innerText.match(/\d+\.+\d*/);
    //if(document.getElementById("amount2").innerText.match(/\d+\.+\d*/) != null);
   num2 = document.getElementById("amount2").innerText.match(/\d+\.+\d*/);
  // if(document.getElementById("amount3").innerText.match(/\d+\.+\d*/) != null);
   num3 = document.getElementById("amount3").innerText.match(/\d+\.+\d*/);
//   if(document.getElementById("amount4").innerText.match(/\d+\.+\d*/) != null);
   num4 = document.getElementById("amount4").innerText.match(/\d+\.+\d*/);
//   if(document.getElementById("amount5").innerText.match(/\d+\.+\d*/) != null);
   num5 = document.getElementById("amount5").innerText.match(/\d+\.+\d*/);
   //if(document.getElementById("amount6").innerText.match(/\d+\.+\d*/) != null);
   num6 = document.getElementById("amount6").innerText.match(/\d+\.+\d*/);

   //Number(x) turns object x into number
   item1 = Number(num1/1.49);
   item2 = Number(num2/3.49);
   item3 = Number(num3/2.99);
   item4 = Number(num4/1.99);
   item5 = Number(num5/3.27);
   item6 = Number(num6/100);

   items = item1 + item2 + item3 + item4 + item5 +item6;
   document.getElementById("items").innerHTML = items ;
   console.log("console logs nums and items",num1, num2, num3, num4, num5, num6, item1, item2, item3, item4, item5, item6, items);
   cart = Number(num1)+ Number(num2) + Number(num3) + Number(num4) + Number(num5) + Number(num6);
   cart= Math.round(cart * 100) / 100;
   var tax1 = Math.round(cart*qst * 100) / 100;
   var tax2 = Math.round(cart*gst * 100) / 100;

   document.getElementById("subTotal").innerHTML = cart;
   document.getElementById("qst").innerHTML = tax1;
   document.getElementById("gst").innerHTML = tax2 ;

   var total = Math.round((cart+tax1+tax2)*100)/100;
   document.getElementById("totalPrice").innerHTML = total;
   }

function removeAll(){
     counter= articles.length-1;
     console.log("LIST",articles, "COUNTER", counter);
     document.getElementById("items").innerHTML = 0 ;
     document.getElementById('checkout').innerHTML = "Your cart is empty!";
        while(articles.length > 0){
          console.log("Iteration: ", counter);
          articles[counter].remove();
          counter = counter-1;
          numAmount.splice(-1,1);
        }

   }

function removeItem(e){
    amountCounter();
    //var list = document.getElementsByTagName("ARTICLE");
    console.log(typeof e, typeof e.parentNode, articles);
    if (articles.length==1 ){
      document.getElementById("items").innerHTML = 0 ;
      document.getElementById('checkout').innerHTML = "Your cart is empty!";
    }
    if (articles.length >=0){
      counter = items -1;
      //e is the u tag, and parent nodes to get out to scope of article
      e.parentNode.parentNode.parentNode.parentNode.parentNode.removeChild(e.parentNode.parentNode.parentNode.parentNode);
      document.getElementById("items").innerHTML = counter ;
      amount = document.getElementsByClassName("amount");
      numAmount.splice(-1,1);
      amountCounter();
    }
    console.log("items", items, "amount",amount.length );
   }

// function  createArticle(){
//   document.getElementById("container").appendChild(clone);
// }

   function saveForLater(e){
       amountCounter();
      counter = items -1;
      node = e.parentNode.parentNode.parentNode.parentNode;
      clone = Object.assign(node);
      saved.push(clone);
      console.log(e.parentNode.parentNode.parentNode.parentNode, clone, articles, saved);
      e.parentNode.parentNode.parentNode.parentNode.parentNode.removeChild(e.parentNode.parentNode.parentNode.parentNode);


      }

   function amountCounter(){
     for (var i = 0; i < amount.length; i++) {
       //num1 = document.getElementById("amount1").innerText.match(/\d+\.+\d*/);
       console.log(amount.length);
       numAmount[i] = Number(document.getElementsByClassName("amount")[i].innerText.match(/\d+\.+\d*/));
     }
   }
