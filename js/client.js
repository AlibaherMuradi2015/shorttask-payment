var stripe = Stripe('pk_test_51IfJULDGml9qsI0j7S5LOrjLKQfwr8h2Qldyg9kLRuePJkWtgxYsWBCtnLAPfLviLJsS3woGbloU3Z7tfELW14Nv00XMVqmY9D');
// Set up Stripe.js and Elements to use in checkout form
var elements = stripe.elements();
var style = {
  base: {
    color: "#32325d",
  }
};


var card = elements.create("card", { style: style });
card.mount("#card-element");


card.on('change', function (event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

var form = document.getElementById('payment-form');
clientSecret = form.dataset.secret;
form.addEventListener('submit', function (ev) {
  ev.preventDefault();
  // If the client secret was rendered server-side as a data-secret attribute
  // on the <form> element, you can retrieve it here by calling `form.dataset.secret`
  stripe.confirmCardPayment(clientSecret, {
    payment_method: {
      card: card,
      billing_details: {
        name: 'Jenny Rosen'
      }
    }
  }).then(function (result) {
    if (result.error) {
      console.log(result.error.message);
    } else {
      if (result.paymentIntent.status === 'succeeded') {
        console.log("succeeded");
      }
    }
  });
});