// Author : Kaden Griffith
window.onload = function() {
  setInterval(update, 60/1000);
}

function update() {
  var qty_o = document.getElementById('qty_o').value;
  var qty_b = document.getElementById('qty_b').value;
  var qty_g = document.getElementById('qty_g').value;
  var qty_p = document.getElementById('qty_p').value;
  var qty_s = document.getElementById('qty_s').value;
  var qty_c = document.getElementById('qty_c').value;

  var cart = document.getElementById('cart');
  var cartReview = document.getElementById('review');

  var runningTotal = (qty_o * 0.69) + (qty_b * 0.69) + (qty_g * 1.99) + (qty_p * 3.69) + (qty_s * 0.69) + (qty_c * 0.69);

  if(runningTotal == 0) {
    //wait
  }else {
    cart.innerHTML = "<b>Item List:</b><br>";
    if(qty_o > 0) { cart.innerHTML += "Orange Amt: " + qty_o + "<br>"; }
    if(qty_b > 0) { cart.innerHTML += "Banana Amt: " + qty_b + "<br>"; }
    if(qty_g > 0) { cart.innerHTML += "Guava Amt: " + qty_g + "<br>"; }
    if(qty_p > 0) { cart.innerHTML += "Peach Amt: " + qty_p + "<br>"; }
    if(qty_s > 0) { cart.innerHTML += "Strawberry Amt: " + qty_s + "<br>"; }
    if(qty_c > 0) { cart.innerHTML += "Cherry Amt: " + qty_c + "<br>"; }
  }

  if (runningTotal == 0) {
    //wait
  }else {
    cartReview.innerHTML = "";
    cartReview.innerHTML = "<b>Review Item List:</b><br>Oranges: " + qty_o + " - $" + (qty_o * 0.69).toFixed(2) + "<br>" +
                            "Bananas: " + qty_b + " - $" + (qty_b * 0.69).toFixed(2) + "<br>" +
                            "Guavas: " + qty_g + " - $" + (qty_g * 1.99).toFixed(2) + "<br>" +
                            "Peaches: " + qty_p + " - $" + (qty_p * 3.69).toFixed(2) + "<br>" +
                            "Strawberries: " + qty_s + " - $" + (qty_s * 0.69).toFixed(2) + "<br>" +
                            "Cherries: " + qty_c + " - $" + (qty_c * 0.69).toFixed(2) + "<br><br>";

    if(document.getElementById('shipping-3').checked) {
      cartReview.innerHTML += "Shipping: " + " - $" + 5 + "<br><br>";
      runningTotal = runningTotal + 5;
    }else if(document.getElementById('shipping-2').checked) {
      cartReview.innerHTML += "Shipping: " + " - $" + 50 + "<br><br>";
      runningTotal = runningTotal + 50;
    }else {
      cartReview.innerHTML += "Shipping: " + " - Free<br><br>";
    }

    cartReview.innerHTML += "Total: " + " - $" + runningTotal.toFixed(2) + "<br><br><br>";
  }
}

// @END
