document.addEventListener("DOMContentLoaded", function(event) {

  function ecosystemPrices() {

    const slider = document.getElementById("range")
    const daonumber = document.getElementById("daosnumber-inside")

    const starterAnchorPrice = 7500
    const starterAdditionalPrice = 5750

    const growthAnchorPrice = 15000
    const growthAdditionalPrice = 4250

    const thriveAnchorPrice = 70000
    const thriveAdditionalPrice = 3150

    const plural = document.getElementById("plural")

    const pluralBottom = document.querySelectorAll('.plural-bottom')
    const daosNumBottom = document.querySelectorAll(".daos-n-bottom")

    const starterCard = document.getElementById("ml-starter")
    const starterAnchor = document.getElementById("starter-achor")
    const starterAdditional = document.getElementById("starter-additional")
    const starterTotal = document.getElementById("starter-result")

    const growthCard = document.getElementById("ml-growth")
    const growthAnchor = document.getElementById("growth-achor")
    const growthAdditional = document.getElementById("growth-additional")
    const growthTotal = document.getElementById("growth-result")

    const thriveCard = document.getElementById("ml-thrive")
    const thriveAnchor = document.getElementById("thrive-achor")
    const thriveAdditional = document.getElementById("thrive-additional")
    const thriveTotal = document.getElementById("thrive-result")

    if ( slider.value >= 2 ) {
        plural.innerHTML = "s"
      } else {
        plural.innerHTML = ""
      }

    if ( slider.value >= 3 ) {
      pluralBottom.forEach(function(pb) {
        el.innerHTML = "s"
      })

      } else {
        pluralBottom.forEach(function(pb) {
        pb.innerHTML = ""
          })
      }

    daonumber.innerHTML = slider.value

    daosNumBottom.forEach(function(dnb) {
      dnb.innerHTML = slider.value - 1
    })

    starterAnchor.innerHTML = "<span class='cur'>$</span>" + starterAnchorPrice.toLocaleString()
    starterAdditional.innerHTML = "<span class='cursmall'>$</span>" + starterAdditionalPrice.toLocaleString()
    starterTotal.innerHTML = "<span class='cursmall'>$</span>" + (( slider.value - 1 ) * starterAdditionalPrice + starterAnchorPrice ).toLocaleString()
    starterCard.classList.add("recommended");

    growthAnchor.innerHTML = "<span class='cur'>$</span>" + growthAnchorPrice.toLocaleString()
    growthAdditional.innerHTML = "<span class='cursmall'>$</span>" + growthAdditionalPrice.toLocaleString()
    growthTotal.innerHTML = "<span class='cursmall'>$</span>" + (( slider.value - 1 ) * growthAdditionalPrice + growthAnchorPrice).toLocaleString()

    thriveAnchor.innerHTML = "<span class='cur'>$</span>" + thriveAnchorPrice.toLocaleString()
    thriveAdditional.innerHTML = "<span class='cursmall'>$</span>" + thriveAdditionalPrice.toLocaleString()
    thriveTotal.innerHTML = "<span class='cursmall'>$</span>" + (( slider.value - 1 ) * thriveAdditionalPrice + thriveAnchorPrice).toLocaleString()

    update=()=>{

      daonumber.innerHTML = slider.value

      daosNumBottom.forEach(function(dnb) {
        dnb.innerHTML = slider.value - 1
      })

      starterTotal.innerHTML = "<span class='cursmall'>$</span>" + (( slider.value - 1 ) * starterAdditionalPrice + starterAnchorPrice).toLocaleString()
      growthTotal.innerHTML = "<span class='cursmall'>$</span>" + (( slider.value - 1 ) * growthAdditionalPrice + growthAnchorPrice).toLocaleString()
      thriveTotal.innerHTML = "<span class='cursmall'>$</span>" + (( slider.value - 1 ) * thriveAdditionalPrice + thriveAnchorPrice).toLocaleString()

      if ( slider.value >= 2 ) {
          plural.innerHTML = "s"
        } else {
          plural.innerHTML = ""
        }

      if ( slider.value >= 3 ) {
        pluralBottom.forEach(function(pb) {
          pb.innerHTML = "s"
        })

        } else {
          pluralBottom.forEach(function(pb) {
          pb.innerHTML = ""
            })
        }

      if ( slider.value >= 0 && slider.value <= 6) {
          starterCard.classList.add("recommended")
        } else {
          starterCard.classList.remove("recommended")
        }


      if ( slider.value >= 7 && slider.value <= 51) {
          growthCard.classList.add("recommended")
        } else {
          growthCard.classList.remove("recommended")
        }

      if ( slider.value >= 52) {
          thriveCard.classList.add("recommended")
        } else {
          thriveCard.classList.remove("recommended")
        }

    }


    slider.addEventListener('input', update)

}

ecosystemPrices()

});
