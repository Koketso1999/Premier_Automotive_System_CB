
//1. Mobile Menu

// menu open
document.getElementById("hamburguer-icon").onclick = function() {

document.getElementById("sliding-header-menu-outer").style.right = "0";
  
}

// menu close
document.getElementById("sliding-header-menu-close-button").onclick = function() {

  document.getElementById("sliding-header-menu-outer").style.right = "-320px";
    
  }



//2. About us Tab

var aboutUs = {
  "Mission": "Duis ac leo nisi. Mauris nec ex id lorem commodo rutrum rutrum a est. Cras facilisis sit amet lectus non posuere. Nullam non magna non enim blandit elementum.",
  "Vision": "Praesent ut lacinia neque, faucibus suscipit quam. Duis sed nunc rutrum, tempor mi at, euismod nibh.",
  "Values": "<ul><li>Nunc iaculis</li><li>Donec dictum fringilla</li><li>Duis convallis tortor ultrices</li><li>Curabitur in est lectus</li><li>Maecenas condimentum elit</li></ul>"
};

var unseletectedColor = "#646872";
var seletectedColor = "#2A2D34";

  // Clicking each tab under about us
var aboutUsTabs = document.getElementsByClassName("single-tab");

    // loop to go through each event
  for (var a = 0; a < aboutUsTabs.length; a++ ) {

    aboutUsTabs[a].onclick = function(){

      // getting each value on single element
      var clickedValue = this.innerHTML;
      console.log(aboutUs[clickedValue]);

      // change/render content of each element
      document.getElementById("box-text").innerHTML = aboutUs[clickedValue];

        // run through all elements again to change background color
      for (var b = 0; b < aboutUsTabs.length; b++ ) {

        // set color for unselected color
        aboutUsTabs[b].style["background-color"]= unseletectedColor;
        aboutUsTabs[b].style["font-weight"]= "normal";
        
      }

      //  get clicked/selected elements
      this.style["background-color"]= seletectedColor;
      this.style["font-weight"]="bold";

  }

}



//3. Service slider







var ourServices = [
  {
    'title': 'Automotive Engineering',
    'text': 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent finibus tincidunt sem non sodales. Nunc et quam in magna vehicula sollicitudin. Aliquam erat volutpat. Maecenas dolor mi, aliquet ac quam aliquet, condimentum dictum nisi.'//remember to make this is the same in box-text div under index.html 
  },

  {
    'title': 'Weldings',
    'text': 'Praesent finibus tincidunt sem non sodales. Nunc et quam in magna vehicula sollicitudin. Aliquam erat volutpat. Maecenas dolor mi, aliquet ac quam aliquet, condimentum dictum nisi.'
  },

  {
    'title': 'Mechanics',
    'text': 'Nunc et quam in magna vehicula sollicitudin. Aliquam erat volutpat. Maecenas dolor mi, aliquet ac quam aliquet, condimentum dictum nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent finibus.'
  },
  {
    'title': 'Car & Truck Springs',
    'text': 'Nunc et quam in magna vehicula sollicitudin. Aliquam erat volutpat. Maecenas dolor mi, aliquet ac quam aliquet, condimentum dictum nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent finibus.'
  },
  {
    'title': 'Vehicle Electronics',
    'text': '              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et eaque ratione rem porro, nihil.'
  },
  {
    'title': 'Oil Economy',
    'text': 'Nunc et quam in magna vehicula sollicitudin. Aliquam erat volutpat. Maecenas dolor mi, aliquet ac quam aliquet, condimentum dictum nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent finibus.'
  }
  
];

// get buttons
var previousArrow = document.getElementById("service-previous");
var nextArrow = document.getElementById("service-next");
// get title and text
var serviceTitleArea = document.getElementById("service-title");
var serviceTextArea = document.getElementById("service-text");

var currentService = 0;  //clicking next arrow increament this value & vice versa with previous arrow

// next arrow
nextArrow.onclick = function( ) {

  // NB the last index of an array is (length of the index - 1)
  // setting the array to restart after reaching last index element
    if(currentService == (ourServices.length - 1) ) {
      currentService = 0;
    } else {
      currentService +=1;
    
    }

  var title = ourServices[currentService].title;
  var text = ourServices[currentService].text;
  serviceTitleArea.innerHTML = title;
  serviceTextArea.innerHTML = text;
  }


  // setting the array to get the last element after reaching first index element
  if(currentService == 0 ) {
    currentService = (ourServices.length - 1);
  } else {
    currentService -= 1;
  
  }
  // back arrow
previousArrow.onclick = function(  ) {
 
  var title = ourServices[currentService].title;
  var text = ourServices[currentService].text;
  serviceTitleArea.innerHTML = title;
  serviceTextArea.innerHTML = text;
  };


// keep looping the services every 4 seconds
  setInterval(function () {
    if (currentService == ourServices.length -1) {
      currentService =0
    } else {
   
      currentService++;
    }
      var title = ourServices[currentService].title;
      var text = ourServices[currentService].text;
      document.getElementById("service-title").innerHTML = title;
      document.getElementById("service-text").innerHTML = text;
    
  }, 4000);







// 4. Read More

var loading=0;
function see(){
  if(!loading){
    document.getElementById("more").style.display = "inline";

    // document.getElementById("dots").style.display = "none";
    
    document.getElementById("see-more").innerHTML=" See less";

    loading=1;
  }
  else{
    document.getElementById("more").style.display = "none";

    // document.getElementById("dots").style.display = "inline";
    
    document.getElementById("see-more").innerHTML="See More";
    loading=0;
  }

};


// $(".projetos-item-outer").slice(0, 3).show();
// $("readMoreButton").on("click",function(){
//     $(".projetos-item-outer:hidden").slice(0, 3).show();

//     if($(".projetos-item-outer:hidden").length == 0){
//       $("readMoreButton").fadeOut();
//     }


//   })
// projetos-item-outer
// projetos-item

// 5. Form Submit

  //prevents the submit button from being pressed more than once 

    var submitButton = document.getElementById("submit_form");
    var form = document.getElementById("email_form");
    form.addEventListener("submit", function (e) {
        setTimeout(function() {
            submitButton.value = "Sending...";
            submitButton.disabled = true;
        }, 1);
    });


//6. Footer

// automatic update of current year .
document.getElementById("current_year").innerHTML = new Date().getFullYear();

  
   







$("#toggle-tab").click(function() {

  $("#tab-content").fadeToggle();
  $("#toggle-tab").toggleClass("flip");

});


// $("#toggle_class").click(function(){
//   $("#example-paragraph").toggleClass("styling");

// })




var products = {
  'white': {
      
      'plain': {
          'unit_price': 1350.00,
          'photo': 'bmw-engine.png' 
      },
      'printed': {
          'unit_price': 3000.00,
          'photo': 'mags.png' 
      }
  },
  
  'colored': {
      'plain': {
          'unit_price': 6.04,
          'photo': 'engine.png' 
      },
      'printed': {
          'unit_price': 2400,
          'photo': 'tires.png' 
      }
  } 
}


// Search params

var search_params = {
  "quantity": "",
  "color": "",
  "quality": "",
  "style": "",
  
}


// Additional pricing rules:

// 1. The prices above are for Basic quality (q150). 
// The high quality shirt (190g/m2) has a 12% increase in the unit price.

// 2. Apply the following discounts for higher quantities: 
  // 1: above 1.000 units - 20% discount
  // 2: above 500 units - 12% discount
  // 3: above 100 units - 5% discount


// Solution:

$(function(){

//   GETTING THE SEARCH PARAMETERS
  function update_params(){
      search_params.quantity = parseInt($("#quantity").val());
      search_params.color = $("#color .option-button.selected").attr('id');
      search_params.quality = $("#quality .option-button.selected").attr('id');
      search_params.style = $("#style").val();
      console.log(search_params);
      update_order_details();

  }



  // UPDATE THE ORDER DETAILS
  function update_order_details(){

      // show loader
      $(".refresh-loader").show();

      // displaying quantity
      $("#result-quantity").html(search_params.quantity);        
    
      // displaying Color
      var colorId = "#" + search_params.color;
      $("#result-color").html($(colorId).text());       
      
      // displaying quality
      var qualityId = "#" + search_params.quality;
      $("#result-quality").html( $(qualityId).text() );

      // displaying Style
      var styleSelector = "#style option[value=" + search_params.style + "]";
      $("#result-style").html($(styleSelector).text());

    //put total calculation file into html element 
      $("#total-price").text(" "+ calculate_total() );


      // UPDATE PHOTO

      // get photo from folder
      var photoUrl = "img/" + products[search_params.color][search_params.style].photo;

      // assign photo to HTML element
      $("#photo-product").attr("src", photoUrl);


      // hide loader after 0.25 seconds
      window.setTimeout(function(){
          $(".refresh-loader").hide();
      },250);
   

      
  }

  // CALCULATE TOTAL


  function calculate_total(){

      // get unit price
      var unitPrice = products[search_params.color][search_params.style].unit_price;
      console.log("Unit Price is: " + unitPrice);

      // 12% increase
      if (search_params.quality == "q190"){
          unitPrice = unitPrice *= 1.12;
      }

      var total = unitPrice * search_params.quantity;

      // discount calculation (NB: use if else so that code stops exactly at met condition)

      // 20% discount
      if(search_params.quantity >= 1000){
          total *= 0.8;
      }
      // 12% discount
              else if(search_params.quantity >= 500){
          total *=0.88;
      }
      // 5% discount
      else if(search_params.quantity >= 100){
          total *=0.95;
      }

      // return  total with local currency
      return total.toLocaleString("en-US", {
          style: "currency",
          currency: "BWP"
      });

  }

      // this gets triggered when page firsts loads
      update_params();

      // get all fields working
      $("#quantity").change(function(){

          // 1. Quantity
          search_params.quantity = parseInt($("#quantity").val());
          update_order_details();
      });

            // 2. Style
       $("#style").change(function(){
          search_params.style = $("#style").val();
          update_order_details();
      });

          // 3. Color & Quality Buttons
       $(".option-button").click(function(){

          // getting clicked buttom by ID      
         var clickedParam =  $(this).parent().attr("id");
         var childSelector = "#" + clickedParam + " .option-button";
          
          // enable button clicking
         $(childSelector).removeClass("selected");
         $(this).addClass("selected");
         
          // make button selection dynamic
         var selectedChild =  "#" + clickedParam + " .option-button.selected";
         search_params[clickedParam] = $(selectedChild).attr('id');

         update_order_details();          
      });


});










