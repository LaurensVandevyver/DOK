{
  const $form = document.querySelector(`.emailinput`);
  const $hamburger = document.querySelector(`.hamburger`);
  const $menu = document.querySelector(`.menu`);
  const $closebutton = document.querySelector(`.closebutton`);
  const $dok = document.querySelector(`.dok`);

  const init = () => {
    if ($form) {
      $form.noValidate = true;
      $form.addEventListener(`submit`, onFormSubmit);
      document.getElementsByName(`email`)[0].addEventListener(`input`, onEmailChange);
      document.getElementsByName(`email`)[0].addEventListener(`blur`, onEmailChange);
    }

    $dok.addEventListener(`click`, slideOpen);
    $hamburger.addEventListener(`click`, onClick);
    $closebutton.addEventListener(`click`, onClose);
  };

  const slideOpen = () => {
    document.querySelector(`.dok-items`).classList.remove(`hidden`);
  };

  const onClick = () => {
    console.log(`onclick`);
    $menu.style.height = `100vh`;
  };

  const onClose = () => {
    console.log(`close menu`);
    $menu.style.height = `0vh`;
    $hamburger.innerHTML = `&#9776;`;
  };

  const onFormSubmit = event => {
    console.log(`onFormSubmit`);
    event.preventDefault();
    if (!$form.checkValidity()) {
      checkEmail(document.getElementById(`email`));
    } else {
      const email = document.getElementById(`email`).value;
      console.log(email);
    }
  };

  const checkEmail = $veld => {
    if (valueMissing($veld)) {
      $veld.parentNode.querySelector(`.error`).innerHTML = valueMissing($veld);
    } else if (typeMismatch($veld)) {
      $veld.parentNode.querySelector(`.error`).innerHTML = typeMismatch($veld);
    }
  };

  const onEmailChange = e => {
    const $veld = e.currentTarget;
    if (e.type === `blur`) {
      checkEmail($veld);
    } else if (e.type === `input`) {
      if ($veld.validity.valid) {
        $veld.parentNode.querySelector(`.error`).innerHTML = ``;
      }
    }
  };

  const valueMissing = $veld => {
    if ($veld.validity.valueMissing) {
      return `Je bent waarschijnlijk je email adres vergeten.`;
    }
    return ``;
  };

  const typeMismatch = $veld => {
    if ($veld.validity.typeMismatch) {
      return `Sorry, dat ziet er niet echt uit.`;
    }
    return ``;
  };

  init();

}
