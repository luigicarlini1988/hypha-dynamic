document.addEventListener("DOMContentLoaded", function (event) {

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


      hyphaToggle.onclick = function () {
        this.classList.add('active')
        usdToggle.classList.remove('active')

        for (const dolo of dolos) {
          dolo.classList.add('no');
        }

        starterYearTot.innerHTML = Math.ceil((starterYearTotPrice / hyphaPrice))
        growthYearTot.innerHTML = Math.ceil((growthYearTotPrice / hyphaPrice))
        thriveYearTot.innerHTML = Math.ceil((thriveYearTotPrice / hyphaPrice))

        kickFree.innerHTML = Math.ceil((kickFreePrice / hyphaPrice))
        kickStart.innerHTML = Math.ceil((kickStartPrice / hyphaPrice))
        kickGrow.innerHTML = Math.ceil((kickGrowPrice / hyphaPrice))
        kickThrive.innerHTML = Math.ceil((kickThrivePrice / hyphaPrice))

        workFree.innerHTML = Math.ceil((workFreePrice / hyphaPrice))
        workStart.innerHTML = Math.ceil((workStartPrice / hyphaPrice))
        workGrow.innerHTML = Math.ceil((workGrowPrice / hyphaPrice))
        workThrive.innerHTML = Math.ceil((workThrivePrice / hyphaPrice))

        if (starterCard.classList.contains('to_year')) {
          singleStarterPrice.innerHTML = Math.ceil((starterPriceDisc / hyphaPrice))
        } else {
          singleStarterPrice.innerHTML = Math.ceil((starterPrice / hyphaPrice))
        }

        if (growthCard.classList.contains('to_year')) {
          singleGrowthPrice.innerHTML = Math.ceil((growthPriceDisc / hyphaPrice))
        } else {
          singleGrowthPrice.innerHTML = Math.ceil((growthPrice / hyphaPrice))
        }

        if (thriveCard.classList.contains('to_year')) {
          singleThrivePrice.innerHTML = Math.ceil((thrivePriceDisc / hyphaPrice))
        } else {
          singleThrivePrice.innerHTML = Math.ceil((thrivePrice / hyphaPrice))
        }
      }


      usdToggle.onclick = function () {
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



      priceToggle.onclick = function () {
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
            singleStarterPrice.innerHTML = Math.ceil((starterPriceDisc / hyphaPrice))
          } else {
            singleStarterPrice.innerHTML = Math.ceil((starterPrice / hyphaPrice))
          }

          if (growthCard.classList.contains('to_year')) {
            singleGrowthPrice.innerHTML = Math.ceil((growthPriceDisc / hyphaPrice))
          } else {
            singleGrowthPrice.innerHTML = Math.ceil((growthPrice / hyphaPrice))
          }

          if (thriveCard.classList.contains('to_year')) {
            singleThrivePrice.innerHTML = Math.ceil((thrivePriceDisc / hyphaPrice))
          } else {
            singleThrivePrice.innerHTML = Math.ceil((thrivePrice / hyphaPrice))
          }

        }



      }





    }

    singleDaoPrices()

  }

  loadPrice()


});
