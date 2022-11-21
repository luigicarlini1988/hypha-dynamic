document.addEventListener("DOMContentLoaded", function(event) {

  const loadPrice = async () => {
    const apiUrl = "http://api-tokensale.hypha.earth";
    const rpcUrl = "https://telos.greymass.com";

    const hyphaTokensSaleUtil = new HyphaTokensSaleUtil(rpcUrl, apiUrl);
    const { usdPerHypha, hyphaRemainingThisRound, currentRound } = await hyphaTokensSaleUtil.init();

    const liveHyphaPrice = `${usdPerHypha}`;

    console.log(liveHyphaPrice);
    console.log(`Current Hypha Price ${usdPerHypha}`);
    console.log(`Current round ${currentRound}`);



    function singleDaoPrices() {

    const hyphaToggle = document.getElementById('toggle-hypha')
    const usdToggle = document.getElementById('toggle-usd')

    const hyphaPrice = liveHyphaPrice
    const starterPrice = 99
    const growthPrice = 399
    const thrivePrice = 799

    const starterPriceDisc = ((starterPrice / 100) * 80).toFixed(0)
    const growthPriceDisc = ((growthPrice / 100) * 80).toFixed(0)
    const thrivePriceDisc = ((thrivePrice / 100) * 80).toFixed(0)

    const starterYearTotPrice = ((starterPrice * 12) / 100 * 80).toFixed(0)
    const growthYearTotPrice = ((growthPrice * 12) / 100 * 80).toFixed(0)
    const thriveYearTotPrice = ((thrivePrice * 12) / 100 * 80).toFixed(0)

    const kickFreePrice = 99
    const kickStartPrice = 149
    const kickGrowPrice = 199
    const kickThrivePrice = 249

    const workFreePrice = 199
    const workStartPrice = 299
    const workGrowPrice = 399
    const workThrivePrice = 599



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

    const dolos = document.querySelectorAll('.dolo');

    const kickFree = document.getElementById('kick-free')
    const kickStart = document.getElementById('kick-start')
    const kickGrow = document.getElementById('kick-grow')
    const kickThrive = document.getElementById('kick-thrive')

    const workFree = document.getElementById('work-free')
    const workStart = document.getElementById('work-start')
    const workGrow = document.getElementById('work-grow')
    const workThrive = document.getElementById('work-thrive')

    singleStarterPrice.innerHTML = starterPrice
    singleGrowthPrice.innerHTML = growthPrice
    singleThrivePrice.innerHTML = thrivePrice

    starterYearTot.innerHTML = starterYearTotPrice
    growthYearTot.innerHTML = growthYearTotPrice
    thriveYearTot.innerHTML = thriveYearTotPrice


    kickFree.innerHTML = kickFreePrice
    kickStart.innerHTML = kickStartPrice
    kickGrow.innerHTML = kickGrowPrice
    kickThrive.innerHTML = kickThrivePrice

    workFree.innerHTML = workFreePrice
    workStart.innerHTML = workStartPrice
    workGrow.innerHTML = workGrowPrice
    workThrive.innerHTML = workThrivePrice


    hyphaToggle.onclick = function() {
      this.classList.add('active')
      usdToggle.classList.remove('active')

      for (const dolo of dolos) {
        dolo.classList.add('no');
      }

      starterYearTot.innerHTML = (starterYearTotPrice / hyphaPrice).toFixed(0)
      growthYearTot.innerHTML = (growthYearTotPrice / hyphaPrice).toFixed(0)
      thriveYearTot.innerHTML = (thriveYearTotPrice / hyphaPrice).toFixed(0)

      kickFree.innerHTML = (kickFreePrice / hyphaPrice).toFixed(0)
      kickStart.innerHTML = (kickStartPrice / hyphaPrice).toFixed(0)
      kickGrow.innerHTML = (kickGrowPrice / hyphaPrice).toFixed(0)
      kickThrive.innerHTML = (kickThrivePrice / hyphaPrice).toFixed(0)

      workFree.innerHTML = (workFreePrice / hyphaPrice).toFixed(0)
      workStart.innerHTML = (workStartPrice / hyphaPrice).toFixed(0)
      workGrow.innerHTML = (workGrowPrice / hyphaPrice).toFixed(0)
      workThrive.innerHTML = (workThrivePrice / hyphaPrice).toFixed(0)

      if (starterCard.classList.contains('to_year')) {
        singleStarterPrice.innerHTML = (starterPriceDisc / hyphaPrice).toFixed(0)
      } else {
        singleStarterPrice.innerHTML = (starterPrice / hyphaPrice).toFixed(0)
      }

      if (growthCard.classList.contains('to_year')) {
        singleGrowthPrice.innerHTML = (growthPriceDisc / hyphaPrice).toFixed(0)
      } else {
        singleGrowthPrice.innerHTML = (growthPrice / hyphaPrice).toFixed(0)
      }

      if (thriveCard.classList.contains('to_year')) {
        singleThrivePrice.innerHTML = (thrivePriceDisc / hyphaPrice).toFixed(0)
      } else {
        singleThrivePrice.innerHTML = (thrivePrice / hyphaPrice).toFixed(0)
      }
    }


    usdToggle.onclick = function() {
      this.classList.add('active')
      hyphaToggle.classList.remove('active')


      for (const dolo of dolos) {
        dolo.classList.remove('no');
      }

      starterYearTot.innerHTML = starterYearTotPrice
      growthYearTot.innerHTML = growthYearTotPrice
      thriveYearTot.innerHTML = thriveYearTotPrice

      kickFree.innerHTML = kickFreePrice
      kickStart.innerHTML = kickStartPrice
      kickGrow.innerHTML = kickGrowPrice
      kickThrive.innerHTML = kickThrivePrice

      workFree.innerHTML = workFreePrice
      workStart.innerHTML = workStartPrice
      workGrow.innerHTML = workGrowPrice
      workThrive.innerHTML = workThrivePrice

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
          singleStarterPrice.innerHTML = (starterPriceDisc / hyphaPrice).toFixed(0)
        } else {
          singleStarterPrice.innerHTML = (starterPrice / hyphaPrice).toFixed(0)
        }

        if (growthCard.classList.contains('to_year')) {
          singleGrowthPrice.innerHTML = (growthPriceDisc / hyphaPrice).toFixed(0)
        } else {
          singleGrowthPrice.innerHTML = (growthPrice / hyphaPrice).toFixed(0)
        }

        if (thriveCard.classList.contains('to_year')) {
          singleThrivePrice.innerHTML = (thrivePriceDisc / hyphaPrice).toFixed(0)
        } else {
          singleThrivePrice.innerHTML = (thrivePrice / hyphaPrice).toFixed(0)
        }

      }



    }





  }

  singleDaoPrices()

}

loadPrice()


});
