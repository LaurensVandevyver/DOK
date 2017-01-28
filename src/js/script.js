{
  const $form = document.querySelector(`.emailinput`);

  const init = () => {
    $form.noValidate = true;
    $form.addEventListener(`submit`, onFormSubmit);
    document.getElementsByName(`email`)[0].addEventListener(`input`, onEmailChange);
    document.getElementsByName(`email`)[0].addEventListener(`blur`, onEmailChange);
    console.log($form);

    document.querySelector(`.mobile-nav`).addEventListener(`click`, onClick);
    document.querySelector(`.dockclick`).addEventListener(`click`, mobileClick);

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

  const onClick = () => {
    document.querySelector(`.menu`).style.height = `100vh`;
    document.querySelector(`.mobile-nav`).innerHTML = `&#735`;
  };

  const mobileClick = () => {
    document.querySelector(`.dok-items`).toggle(`.hidden`);
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
