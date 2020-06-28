// create grid
const elem = document.querySelector('.item-container');

if(elem) {
  const msnry = new Masonry(elem, {
    itemSelector: '.item',
  });
}
