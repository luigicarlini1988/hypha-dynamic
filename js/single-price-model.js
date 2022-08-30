document.addEventListener("DOMContentLoaded", function(event) {

  function singleDaoPrices() {

    const priceToggle = document.getElementById('dao-toggle')
    const starterCard = document.getElementById('ml-starter')
    const growthCard = document.getElementById('ml-growth')
    const thriveCard = document.getElementById('ml-thrive')
    const freemiumCard = document.getElementById('ml-freemium')


    const singleStarterPrice = document.getElementById('single_starter_price')
    const singleGrowthPrice = document.getElementById('single_growth_price')
    const singleThrivePrice = document.getElementById('single_thrive_price')

    singleStarterPrice.innerHTML = 99
    singleGrowthPrice.innerHTML = 399
    singleThrivePrice.innerHTML = 799

    priceToggle.onclick = function() {
      this.classList.toggle('to_year');
      starterCard.classList.toggle('to_year');
      growthCard.classList.toggle('to_year');
      thriveCard.classList.toggle('to_year');
      freemiumCard.classList.toggle('to_year');

      if (starterCard.classList.contains('to_year')) {
        singleStarterPrice.innerHTML = 79
      } else {
        singleStarterPrice.innerHTML = 99
      }

      if (growthCard.classList.contains('to_year')) {
        singleGrowthPrice.innerHTML = 319
      } else {
        singleGrowthPrice.innerHTML = 399
      }

      if (thriveCard.classList.contains('to_year')) {
        singleThrivePrice.innerHTML = 639
      } else {
        singleThrivePrice.innerHTML = 799
      }

    }



  }

  singleDaoPrices()

});
