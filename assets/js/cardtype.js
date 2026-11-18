// Listen for input on the card number field
document.getElementById("card_number").addEventListener("input", function () {
  var cardNumber = this.value.replace(/\D/g, ""); // Remove non-digits
  var cardType = detectCardType(cardNumber);
  var cardTypeIcon = document.getElementById("card_type_icon");

  // Update the card type in the select dropdown
  var cardTypeSelect = document.getElementsByName("card_type")[0];
  cardTypeSelect.value = cardType || ""; // Set to empty string if no card type

  // Show or hide the card type icon
  if (cardType) {
    cardTypeIcon.src = getCardIconUrl(cardType);
    cardTypeIcon.style.display = "inline";
  } else {
    cardTypeIcon.style.display = "none";
  }
});

// Function to detect card type based on the first 1-2 digits
function detectCardType(cardNumber) {
  // Check if card number is empty
  if (!cardNumber) return null;

  // First 1-2 digits for early detection
  if (cardNumber.startsWith("4")) {
    return "visa";
  } else if (cardNumber.startsWith("5") && /[1-5]/.test(cardNumber[1])) {
    return "mastercard";
  } else if (cardNumber.startsWith("34") || cardNumber.startsWith("37")) {
    return "amex";
  } else if (
    cardNumber.startsWith("6011") ||
    // cardNumber.startsWith("65") ||
    cardNumber.startsWith("644") ||
    cardNumber.startsWith("645") ||
    cardNumber.startsWith("646") ||
    cardNumber.startsWith("647") ||
    cardNumber.startsWith("648") ||
    cardNumber.startsWith("649")
  ) {
    return "discover";
  } else if (
    cardNumber.startsWith("30") ||
    cardNumber.startsWith("36") ||
    cardNumber.startsWith("38")
  ) {
    return "diners_club";
  } else if (cardNumber.startsWith("35") && /[2-9]/.test(cardNumber[2])) {
    return "jcb";
  } else if (cardNumber.startsWith("65")) {
    return "rupay"; // Note: RuPay often overlaps with Discover, prioritizing here
  } else if (cardNumber.startsWith("62")) {
    return "unionpay";
  } else if (
    cardNumber.startsWith("50") ||
    (cardNumber.startsWith("5") && /[6-9]/.test(cardNumber[1]))
  ) {
    return "maestro";
  } else {
    return null; // Unknown card type
  }
}

// Function to get the icon URL based on the card type
function getCardIconUrl(cardType) {
  switch (cardType) {
    case "visa":
      return "./images/card-icon/visa.jpg";
    case "mastercard":
      return "./images/card-icon/master-card.jpg";
    case "amex":
      return "./images/card-icon/american-express.jpg";
    case "discover":
      return "./images/card-icon/discover.jpg";
    case "diners_club":
      return "./images/card-icon/Diners-Club.png";
    case "jcb":
      return "./images/card-icon/images.png"; // Corrected generic 'images.png' to 'jcb.png'
    case "rupay":
      return "./images/card-icon/rupay-logo-icon.webp";
    case "unionpay":
      return "./images/card-icon/unionpay.png"; // Added folder path for consistency
    case "maestro":
      return "./images/card-icon/maestro.jpg";
    default:
      return "";
  }
}
