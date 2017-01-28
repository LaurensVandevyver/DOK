const init = () => {

  document.querySelector(`.mobile-nav`).addEventListener(`click`, onClick);
  document.querySelector(`.dockclick`).addEventListener(`click`, mobileClick);

};

const onClick = () => {
  //console.log(`click`, e);
  document.querySelector(`.menu`).style.height = `100vh`;
  document.querySelector(`.mobile-nav`).innerHTML = `&#735`;
};

const mobileClick = () => {
  document.querySelector(`.dok-items`).toggle(`.hidden`);
};

init();
