const init = () => {

  document.querySelector(`.mobile-nav`).addEventListener(`click`, onClick);

};

const onClick = e => {
  console.log(`click`, e);
  document.querySelector(`.menu`).style.height = `100vh`;
  document.querySelector(`.mobile-nav`).innerHTML = `&#735`;
};

init();
