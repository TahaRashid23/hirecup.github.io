// Initialize Wow
new WOW().init();

class Slider {
  constructor(rangeElement, valueElement, options) {
    this.rangeElement = rangeElement;
    this.valueElement = valueElement;
    this.options = options;

    // Attach a listener to "change" event
    this.rangeElement.addEventListener("input", this.updateSlider.bind(this));
  }

  // Initialize the slider
  init() {
    this.rangeElement.setAttribute("min", options.min);
    this.rangeElement.setAttribute("max", options.max);
    this.rangeElement.value = options.cur;

    this.updateSlider();
  }

  // Format the money
  asMoney(value) {
    return (
      "$" +
      parseFloat(value).toLocaleString("en-US", {
        maximumFractionDigits: 2,
      })
    );
  }

  generateBackground(rangeElement) {
    if (this.rangeElement.value === this.options.min) {
      return;
    }

    let percentage =
      ((this.rangeElement.value - this.options.min) /
        (this.options.max - this.options.min)) *
      100;
    return (
      "background: linear-gradient(to right, #127681, #127681 " +
      percentage +
      "%, #d3edff " +
      percentage +
      "%, #dee1e2 100%)"
    );
  }

  updateSlider(newValue) {
    this.valueElement.innerHTML = this.asMoney(this.rangeElement.value);
    this.rangeElement.style = this.generateBackground(this.rangeElement.value);
  }
}

let rangeElement = document.querySelector('.range [type="range"]');
let valueElement = document.querySelector(".range .range__value span");

let options = {
  min: 2000,
  max: 75000,
  cur: 37500,
};

if (rangeElement) {
  let slider = new Slider(rangeElement, valueElement, options);

  slider.init();
}

// Initialize Wow
new WOW().init();
const dropDowns = document.querySelectorAll(".dropdown");
//loop through all dropdown element
dropDowns.forEach((dropDown) => {
  //get inner elements from each dropdown
  const select = dropDown.querySelector(".select");
  const arrow = dropDown.querySelector(".arrow");
  const menu = dropDown.querySelector(".menu");
  const menuItems = dropDown.querySelectorAll(".menu li");
  const selectTitle = dropDown.querySelector(".select-title");

  //add a click event to the select element
  select.addEventListener("click", () => {
    //add the clicked select style to the select element
    select.classList.toggle("select-clicked");
    //rotate arrow up
    arrow.classList.toggle("arrow-rotate");
    //add the open stye to the menu element
    menu.classList.toggle("menu-open");
  });

  // loop throught all item element
  menuItems.forEach((item) => {
    // add click event to item element
    item.addEventListener("click", () => {
      // change selected inner text to clicked item inner text
      selectTitle.innerText = item.innerText;
      //add the clicked select style to the select element
      select.classList.remove("select-clicked");
      // rotate arrow down
      arrow.classList.remove("arrow-rotate");
      //close the menu element
      menu.classList.remove("menu-open");
      //remove active class from all menuitems elements
      menuItems.forEach((item) => {
        item.classList.remove("active");
      });
      //add active class to clicked item element
      item.classList.add("active");
    });
  });
});

$("#slider").on("input", function () {
  $("#name1, #name2, #name3 ,#name4 ,#name5 ,#name6").css(
    "font-size",
    $(this).val() + "px"
  );
});

$("#fontFamily").change(function () {
  $("#tahaBox").attr("class", $(this).val());
});

$(function () {
  $("#font")
    .fontselect()
    .change(function () {
      // replace + signs with spaces for css
      var font = $(this).val().replace(/\+/g, " ");

      // split font into family and weight
      font = font.split(":");

      // set family on paragraphs
      $(
        ".firstName, .lastName, .marketer, .marTeting, .hubSpot, .custom-field, .officeNumber, .mobileNumber, .emailAddress, .websiteUrl, .address1, .address2, .address3, .address4, .ownSignature"
      ).css("font-family", font[0]);
    });
});

// input - fieldsWrapper;

$('input[type="text"]').on("keydown, keyup", function () {
  //get a reference to the text input value
  var texInputValue = $(".testInput").val();

  //show the text input value in the UI
  $(".firstName").html(texInputValue);
});

$('input[type="text"]').on("keydown, keyup", function () {
  //get a reference to the text input value
  var texInput1Value = $(".testInput1").val();

  //show the text input value in the UI
  $(".lastName").html(texInput1Value);
});

$('input[type="text"]').on("keydown, keyup", function () {
  //get a reference to the text input value
  var texInputValue = $(".testInput2").val();

  //show the text input value in the UI
  $(".marketer").html(texInputValue);
});

$('input[type="text"]').on("keydown, keyup", function () {
  //get a reference to the text input value
  var texInputValue = $(".testInput3").val();

  //show the text input value in the UI
  $(".marTeting").html(texInputValue);
});

$('input[type="text"]').on("keydown, keyup", function () {
  //get a reference to the text input value
  var texInputValue = $(".testInput4").val();

  //show the text input value in the UI
  $(".hubSpot").html(texInputValue);
});

$('input[type="text"]').on("keydown, keyup", function () {
  //get a reference to the text input value
  var texInputValue = $(".testInput17").val();

  //show the text input value in the UI
  $(".custom-field").html(texInputValue);
});

$('input[type="text"]').on("keydown, keyup", function () {
  //get a reference to the text input value
  var texInputValue = $(".testInput5").val();

  //show the text input value in the UI
  $(".officeNumber").html(texInputValue);
});

$('input[type="text"]').on("keydown, keyup", function () {
  //get a reference to the text input value
  var texInputValue = $(".testInput6").val();

  //show the text input value in the UI
  $(".mobileNumber").html(texInputValue);
});

$('input[type="text"]').on("keydown, keyup", function () {
  //get a reference to the text input value
  var texInputValue = $(".testInput7").val();

  //show the text input value in the UI
  $(".websiteUrl").html(texInputValue);
});

$('input[type="text"]').on("keydown, keyup", function () {
  //get a reference to the text input value
  var texInputValue = $(".testInput8").val();

  //show the text input value in the UI
  $(".emailAddress").html(texInputValue);
});

$('input[type="text"]').on("keydown, keyup", function () {
  //get a reference to the text input value
  var texInputValue = $(".testInput9").val();

  //show the text input value in the UI
  $(".address1").html(texInputValue);
});

$('input[type="text"]').on("keydown, keyup", function () {
  //get a reference to the text input value
  var texInputValue = $(".testInput10").val();

  //show the text input value in the UI
  $(".address2").html(texInputValue);
});

$('input[type="text"]').on("keydown, keyup", function () {
  //get a reference to the text input value
  var texInputValue = $(".testInput11").val();

  //show the text input value in the UI
  $(".address3").html(texInputValue);
});

$('input[type="text"]').on("keydown, keyup", function () {
  //get a reference to the text input value
  var texInputValue = $(".testInput12").val();

  //show the text input value in the UI
  $(".address4").html(texInputValue);
});

$('input[type="text"]').on("keydown, keyup", function () {
  //get a reference to the text input value
  var texInputValue = $(".testInput13").val();

  //show the text input value in the UI
  $(".socical-icons").html(texInputValue);
});
