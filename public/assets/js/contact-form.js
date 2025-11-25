import {
  btnSubmit,
  alertBox,
  getWebsiteLang,
  feedbackErrors,
  hideAlertBox,
} from "./function.js";
const form = document.querySelector("form.form-contact");

const local = getWebsiteLang();

form.onsubmit = async (event) => {
  const myForm = event.target;
  event.preventDefault();
  btnSubmit(false, event.target);
  const formData = new FormData(myForm);
  let inputs = {};
  formData.forEach((value, key) => {
    inputs[key] = value;
  });
  inputs = {
    ...inputs,
    ["timezone"]: Intl.DateTimeFormat().resolvedOptions().timeZone,
    ["local"]: local,
  };

  if (inputs.fname && inputs.lname && inputs.email && inputs.comment) {
    // do process with the server
    try {
      const url = "/api/messages.php";
      const req = await axios.post(url, inputs, {
        header: { "Content-Type": " application/json" },
      });

      if (req.status === 200) {
        const res = await req.data; 
        if (res.code == 0) {
          // process on fail
          // console.log(res.message);
          window.location.reload();
        } else if (res.code == 1) {
          // process on success
          alertBox("success", res.data[local], myForm);
          myForm.reset();
        } else if (res.code == 2) {
          // process on missing ressource
          console.log(res.message);window.location.reload();
        } else if (res.code == 3) {
          // process on inputs error
          feedbackErrors(res.data, local);
        }
      }
    } catch (e) {
      console.error(e);
    }
  } else {
    const requiredMsgFr = "Tous les champs de saisie sont obligatoires!";
    const requiredMsgEn = "All inputs fields are required!";
    alertBox("danger", local === "en" ? requiredMsgEn : requiredMsgFr, myForm);
  }
  btnSubmit(true, event.target);
};

form.querySelectorAll("input, textarea").forEach((input) => {
  input.oninput = function (event) {
    const el = event.target;
    const elName = el.getAttribute("name");
    if (el.classList.contains("b-danger")) {
      el.classList.remove("b-danger");
    }
    document.querySelector(
      `form.form-contact .error-feedback.${elName}`
    ).innerText = "";
    if (document.querySelector("form.form-contact #alert")) {
      const alertBox = document.querySelector("form.form-contact #alert");
      hideAlertBox(alertBox);
    }
  };
});
