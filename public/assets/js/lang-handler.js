const langForm = document.querySelector("form.lang-form");

langForm.querySelector("select").onchange = (event) => {
    const selectedLang = event.target.value;
    const url = new URL(window.location.href);
    url.searchParams.set('locale', selectedLang); // add ?locale=fr or ?locale=en
    window.location.href = url.toString();        // redirect to same page with query param
};

// we need to set the cookie an refrech the page

