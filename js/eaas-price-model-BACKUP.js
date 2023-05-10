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

    function ecosystemPrices() {



      const hyphaPrice = liveHyphaPrice

      const anchorPrice = 7500
      const anchorStake = 5000
      const additionalPrice = 6000
      const additionalStake = 4000

      const slider = document.getElementById("range")
      const daonumber = document.getElementById("daosnumber-inside")
      const hyphaToggle = document.getElementById('toggle-hypha')
      const usdToggle = document.getElementById('toggle-usd')

      const anchorPriceField = document.getElementById("anchor-price")
      const anchorStakeField = document.getElementById("anchor_stake")
      const additionalPriceField = document.getElementById("additional-price")
      const additionalStakeField = document.getElementById("additional_stake")
      const totalAnchorField = document.getElementById("total-anchor-dao")
      const totalAdditionalNumber = document.getElementById("tot-additonal-field")
      const totalAdditionalField = document.getElementById("total-additional-dao")
      const greatTotalField = document.getElementById("great-final-total")
      const totalStaked = document.getElementById("final_total_stake")
      const totalBurned = document.getElementById("final_total_burn")



      anchorPriceField.innerHTML = "<span class='cur'>$</span>" + anchorPrice.toLocaleString()
      anchorStakeField.innerHTML = "<span class='cursmall'>$</span>" + anchorStake.toLocaleString()
      additionalPriceField.innerHTML = "<span class='cur'>$</span>" + additionalPrice.toLocaleString()
      additionalStakeField.innerHTML = "<span class='cursmall'>$</span>" + additionalStake.toLocaleString()
      totalAnchorField.innerHTML = "<span class='cur'>$</span>" + anchorPrice.toLocaleString()
      daonumber.innerHTML = slider.value
      totalAdditionalNumber.innerHTML = slider.value
      totalAdditionalField.innerHTML = "<span class='cur'>$</span>" + (slider.value * additionalPrice).toLocaleString()
      greatTotalField.innerHTML = " <span class='cur'>$</span>" + (anchorPrice + (slider.value * additionalPrice)).toLocaleString()
      totalStaked.innerHTML = " <span class='cur'>$</span>" + (((anchorPrice + (slider.value * additionalPrice)) / 3) * 2).toLocaleString()
      totalBurned.innerHTML = " <span class='cur'>$</span>" + (((anchorPrice + (slider.value * additionalPrice)) / 3) * 1).toLocaleString()



      hyphaToggle.onclick = function () {
        this.classList.add('active')
        usdToggle.classList.remove('active')
        anchorPriceField.innerHTML = "<span class='cur hyph'>$</span>" + Math.ceil((anchorPrice / hyphaPrice)).toLocaleString()
        anchorStakeField.innerHTML = "<span class='cursmall hyph'>$</span>" + Math.ceil((anchorStake / hyphaPrice)).toLocaleString()
        additionalPriceField.innerHTML = "<span class='cur hyph'>$</span>" + Math.ceil((additionalPrice / hyphaPrice)).toLocaleString()
        additionalStakeField.innerHTML = "<span class='cursmall hyph'>$</span>" + Math.ceil((additionalStake / hyphaPrice)).toLocaleString()
        totalAnchorField.innerHTML = "<span class='cur hyph'>$</span>" + Math.ceil((anchorPrice / hyphaPrice)).toLocaleString()
        totalAdditionalField.innerHTML = "<span class='cur hyph'>$</span>" + Math.ceil(((slider.value * additionalPrice) / hyphaPrice)).toLocaleString()

        totalStaked.innerHTML = " <span class='cur hyph'>$</span>" + Math.ceil(((((anchorPrice + (slider.value * additionalPrice)) / 3) * 2) / hyphaPrice)).toLocaleString()
        totalBurned.innerHTML = " <span class='cur hyph'>$</span>" + Math.ceil(((((anchorPrice + (slider.value * additionalPrice)) / 3) * 1) / hyphaPrice)).toLocaleString()
        greatTotalField.innerHTML = " <span class='cur hyph'>$</span>" + Math.ceil(((anchorPrice + (slider.value * additionalPrice)) / hyphaPrice)).toLocaleString()

      }


      usdToggle.onclick = function () {
        this.classList.add('active')
        hyphaToggle.classList.remove('active')
        anchorPriceField.innerHTML = "<span class='cur'>$</span>" + anchorPrice.toLocaleString()
        anchorStakeField.innerHTML = "<span class='cursmall'>$</span>" + anchorStake.toLocaleString()
        additionalPriceField.innerHTML = "<span class='cur'>$</span>" + additionalPrice.toLocaleString()
        additionalStakeField.innerHTML = "<span class='cursmall'>$</span>" + additionalStake.toLocaleString()
        totalAnchorField.innerHTML = "<span class='cur'>$</span>" + anchorPrice.toLocaleString()
        totalAdditionalField.innerHTML = "<span class='cur'>$</span>" + (slider.value * additionalPrice).toLocaleString()

        totalStaked.innerHTML = " <span class='cur'>$</span>" + (((anchorPrice + (slider.value * additionalPrice)) / 3) * 2).toLocaleString()
        totalBurned.innerHTML = " <span class='cur'>$</span>" + (((anchorPrice + (slider.value * additionalPrice)) / 3) * 1).toLocaleString()
        greatTotalField.innerHTML = " <span class='cur'>$</span>" + (anchorPrice + (slider.value * additionalPrice)).toLocaleString()


      }


      update = () => {

        daonumber.innerHTML = slider.value
        totalAdditionalNumber.innerHTML = slider.value


        if (usdToggle.classList.contains('active')) {

          totalAdditionalField.innerHTML = "<span class='cur'>$</span>" + (slider.value * additionalPrice).toLocaleString()
          greatTotalField.innerHTML = " <span class='cur'>$</span>" + (anchorPrice + (slider.value * additionalPrice)).toLocaleString()
          totalStaked.innerHTML = " <span class='cur'>$</span>" + (((anchorPrice + (slider.value * additionalPrice)) / 3) * 2).toLocaleString()
          totalBurned.innerHTML = " <span class='cur'>$</span>" + (((anchorPrice + (slider.value * additionalPrice)) / 3) * 1).toLocaleString()
          additionalPriceField.innerHTML = "<span class='cur'>$</span>" + additionalPrice.toLocaleString()
          additionalStakeField.innerHTML = "<span class='cursmall'>$</span>" + additionalStake.toLocaleString()


        } else if (hyphaToggle.classList.contains('active')) {

          totalAdditionalField.innerHTML = "<span class='cur hyph'>$</span>" + Math.ceil(((slider.value * additionalPrice) / hyphaPrice)).toLocaleString()
          totalStaked.innerHTML = " <span class='cur hyph'>$</span>" + Math.ceil(((((anchorPrice + (slider.value * additionalPrice)) / 3) * 2) / hyphaPrice)).toLocaleString()
          totalBurned.innerHTML = " <span class='cur hyph'>$</span>" + Math.ceil(((((anchorPrice + (slider.value * additionalPrice)) / 3) * 1) / hyphaPrice)).toLocaleString()
          greatTotalField.innerHTML = " <span class='cur hyph'>$</span>" + Math.ceil(((anchorPrice + (slider.value * additionalPrice)) / hyphaPrice)).toLocaleString()
          additionalPriceField.innerHTML = "<span class='cur hyph'>$</span>" + Math.ceil((additionalPrice / hyphaPrice)).toLocaleString()
          additionalStakeField.innerHTML = "<span class='cursmall hyph'>$</span>" + Math.ceil((additionalStake / hyphaPrice)).toLocaleString()

        }

      }

      slider.addEventListener('input', update)

    }

    ecosystemPrices()

  }

  loadPrice()

});
