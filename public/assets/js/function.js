export function isElementInViewport(el) {
  const rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <=
      (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

export function manageCookies(name, value, daysToExpire = 365) {
  // Encode the value to ensure it's properly formatted in the cookie
  value = encodeURIComponent(value);

  // Calculate the expiration date
  const expirationDate = new Date();
  expirationDate.setDate(expirationDate.getDate() + daysToExpire);

  // Create the cookie string
  const cookieString = `${name}=${value}; expires=${expirationDate.toUTCString()}; path=/`;

  // Set the cookie
  document.cookie = cookieString;
}

export const btnSubmit = (bool, formElement) => {
  const submitBtn = formElement.querySelector("button[type=submit]");
  submitBtn.setAttribute("disabled", "");
  if (!document.getElementById("spinner")) {
    const spinner = document.createElement("span");
    spinner.setAttribute("class", "spinner-border spinner-border-sm me-1");
    spinner.setAttribute("id", "spinner");
    submitBtn.prepend(spinner);
  }
  if (bool) {
    submitBtn.removeAttribute("disabled");
    document.querySelector("#spinner").remove();
  }
};

export function getWebsiteLang() {
  return document.querySelector("html").getAttribute("lang");
}
export const feedbackErrors = (errors, lang) => {
  for (const [errorKey, errorValue] of Object.entries(errors)) {
    const el = document.querySelector(
      `.form-contact input[name=${errorKey}], .form-contact textarea[name=${errorKey}]`
    );
    const errorEl = document.querySelector(
      `.form-contact .error-feedback.${errorKey}`
    );

    if (el) {
      // el.style.border = "1px solid #dc3545";
      el.classList.add("b-danger");
    }

    if (errorEl) {
      const errorMessage = errorValue[lang]; // Display the French error message by default
      errorEl.innerText = errorMessage;
    }
  }
};

export const alertBox = (type, message, container) => {
  if (container.querySelector("#alert")) {
    container.querySelector("#alert").remove();
  }
  const alert = document.createElement("div");
  alert.setAttribute("class", `alert-box ${type}`);
  alert.setAttribute("id", "alert");
  alert.innerText = message;
  container.prepend(alert);
  showAlertBox(alert);
};

export const hideAlertBox = (myAlert) => {
  myAlert.style.opacity = "0";
  setTimeout(() => {
    myAlert.remove();
  }, 200);
};

const showAlertBox = (myAlert) => {
  setTimeout(() => {
    myAlert.style.opacity = "1";
    myAlert.style.transform = "translateY(0)";
  }, 30);
};
