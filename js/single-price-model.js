document.addEventListener("DOMContentLoaded", function(event) {

  function singleDaoPrices() {

    const hyphaToggle = document.getElementById('toggle-hypha')
    const usdToggle = document.getElementById('toggle-usd')

    const hyphaPrice = 1.03
    const starterPrice = 99
    const growthPrice = 399
    const thrivePrice = 799

    const starterPriceDisc = 79
    const growthPriceDisc = 319
    const thrivePriceDisc = 719

    const starterYearTotPrice = 950
    const growthYearTotPrice = 3850
    const thriveYearTotPrice = 7670

    const priceToggle = document.getElementById('dao-toggle')
    const starterCard = document.getElementById('ml-starter')
    const growthCard = document.getElementById('ml-growth')
    const thriveCard = document.getElementById('ml-thrive')
    const freemiumCard = document.getElementById('ml-freemium')


    const singleStarterPrice = document.getElementById('single_starter_price')
    const singleGrowthPrice = document.getElementById('single_growth_price')
    const singleThrivePrice = document.getElementById('single_thrive_price')

    const starterYearTot = document.getElementById('starter_year_tot')
    const growthYearTot = document.getElementById('growth_year_tot')
    const thriveYearTot = document.getElementById('thrive_year_tot')

    const dolOne = document.getElementById('dol_1')
    const dolTwo = document.getElementById('dol_2')
    const dolThree = document.getElementById('dol_3')
    const dolFour = document.getElementById('dol_4')
    const dolFive = document.getElementById('dol_5')
    const dolSix = document.getElementById('dol_6')
    const dolZero = document.getElementById('dol_0')

    singleStarterPrice.innerHTML = starterPrice
    singleGrowthPrice.innerHTML = growthPrice
    singleThrivePrice.innerHTML = thrivePrice

    starterYearTot.innerHTML = starterYearTotPrice
    growthYearTot.innerHTML = growthYearTotPrice
    thriveYearTot.innerHTML = thriveYearTotPrice


    hyphaToggle.onclick = function() {
      this.classList.add('active')
      usdToggle.classList.remove('active')

      dolOne.classList.add('no')
      dolTwo.classList.add('no')
      dolThree.classList.add('no')
      dolFour.classList.add('no')
      dolFive.classList.add('no')
      dolSix.classList.add('no')
      dolZero.classList.add('no')

      starterYearTot.innerHTML = (starterYearTotPrice * hyphaPrice).toFixed(0)
      growthYearTot.innerHTML = (growthYearTotPrice * hyphaPrice).toFixed(0)
      thriveYearTot.innerHTML = (thriveYearTotPrice * hyphaPrice).toFixed(0)

      if (starterCard.classList.contains('to_year')) {
        singleStarterPrice.innerHTML = (starterPriceDisc * hyphaPrice).toFixed(0)
      } else {
        singleStarterPrice.innerHTML = (starterPrice * hyphaPrice).toFixed(0)
      }

      if (growthCard.classList.contains('to_year')) {
        singleGrowthPrice.innerHTML = (growthPriceDisc * hyphaPrice).toFixed(0)
      } else {
        singleGrowthPrice.innerHTML = (growthPrice * hyphaPrice).toFixed(0)
      }

      if (thriveCard.classList.contains('to_year')) {
        singleThrivePrice.innerHTML = (thrivePriceDisc * hyphaPrice).toFixed(0)
      } else {
        singleThrivePrice.innerHTML = (thrivePrice * hyphaPrice).toFixed(0)
      }
    }


    usdToggle.onclick = function() {
      this.classList.add('active')
      hyphaToggle.classList.remove('active')

      dolOne.classList.remove('no')
      dolTwo.classList.remove('no')
      dolThree.classList.remove('no')
      dolFour.classList.remove('no')
      dolFive.classList.remove('no')
      dolSix.classList.remove('no')
      dolZero.classList.remove('no')

      starterYearTot.innerHTML = starterYearTotPrice
      growthYearTot.innerHTML = growthYearTotPrice
      thriveYearTot.innerHTML = thriveYearTotPrice

      if (starterCard.classList.contains('to_year')) {
        singleStarterPrice.innerHTML = starterPriceDisc
      } else {
        singleStarterPrice.innerHTML = starterPrice
      }

      if (growthCard.classList.contains('to_year')) {
        singleGrowthPrice.innerHTML = growthPriceDisc
      } else {
        singleGrowthPrice.innerHTML = growthPrice
      }

      if (thriveCard.classList.contains('to_year')) {
        singleThrivePrice.innerHTML = thrivePriceDisc
      } else {
        singleThrivePrice.innerHTML = thrivePrice
      }
    }



    priceToggle.onclick = function() {
      this.classList.toggle('to_year');
      starterCard.classList.toggle('to_year');
      growthCard.classList.toggle('to_year');
      thriveCard.classList.toggle('to_year');
      freemiumCard.classList.toggle('to_year');

      if (usdToggle.classList.contains('active')) {

        if (starterCard.classList.contains('to_year')) {
          singleStarterPrice.innerHTML = starterPriceDisc
        } else {
          singleStarterPrice.innerHTML = starterPrice
        }

        if (growthCard.classList.contains('to_year')) {
          singleGrowthPrice.innerHTML = growthPriceDisc
        } else {
          singleGrowthPrice.innerHTML = growthPrice
        }

        if (thriveCard.classList.contains('to_year')) {
          singleThrivePrice.innerHTML = thrivePriceDisc
        } else {
          singleThrivePrice.innerHTML = thrivePrice
        }

      }

      if (hyphaToggle.classList.contains('active')) {

        if (starterCard.classList.contains('to_year')) {
          singleStarterPrice.innerHTML = (starterPriceDisc * hyphaPrice).toFixed(0)
        } else {
          singleStarterPrice.innerHTML = (starterPrice * hyphaPrice).toFixed(0)
        }

        if (growthCard.classList.contains('to_year')) {
          singleGrowthPrice.innerHTML = (growthPriceDisc * hyphaPrice).toFixed(0)
        } else {
          singleGrowthPrice.innerHTML = (growthPrice * hyphaPrice).toFixed(0)
        }

        if (thriveCard.classList.contains('to_year')) {
          singleThrivePrice.innerHTML = (thrivePriceDisc * hyphaPrice).toFixed(0)
        } else {
          singleThrivePrice.innerHTML = (thrivePrice * hyphaPrice).toFixed(0)
        }

      }



    }





  }

  singleDaoPrices()

});
