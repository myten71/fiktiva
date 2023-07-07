var customerReviews = [
    {
      name: "Fairy AS",
      stars: 5,
      review: "Vi hadde gleden av å samarbeide med Wilhelmsen Web for utviklingen av vår nye nettside, og vi er svært fornøyde med resultatet. Vi anbefaler gjerne Wilhelmsen Web til alle som trenger en pålitelig nettsideutvikler."
    },
    {
      name: "Online AS",
      stars: 5,
      review: "Wilhelmsen Web har vært en uvurderlig partner i utviklingen av vår nettbutikk. Fra start til slutt var de engasjerte, profesjonelle og ekstremt kunnskapsrike. De skapte en brukervennlig og visuelt tiltalende nettbutikk."
    },
    {
      name: "Explore AS",
      stars: 5,
      review: "Vi ønsket å oppgradere vår eksisterende nettside og valgte Wilhelmsen Web som vår samarbeidspartner. Vi ble imponert over deres profesjonalitet og ekspertise. De forstod våre behov svært godt!"
    }
  ];
  
  $(document).ready(function() {
    function updateCustomerReview() {
      var activeIndex = $(".carousel-item.active").index();
      var customerReview = customerReviews[activeIndex];
  
      $(".card-title").text(customerReview.name);
      $(".stars").html('<i class="fa-sharp fa-solid fa-star"></i>'.repeat(customerReview.stars));
      $(".card-body p.card-text").text(customerReview.review);
    }
  
    $("#carouselExampleFade").on("slid.bs.carousel", updateCustomerReview);
  
    updateCustomerReview();
  });