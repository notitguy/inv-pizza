import PhotoSwipeLightbox from 'https://cdn.jsdelivr.net/npm/photoswipe@5.2.7/dist/photoswipe-lightbox.esm.min.js';

const foodImages = [
  { src: 'assets/img/food/140422/21-03Invitaly_10.jpg', width: 1333, height: 2000, alt: 'Pizzeria Invitaly' },
  { src: 'assets/img/food/140422/21-03Invitaly_13.jpg', width: 1333, height: 2000, alt: 'Pizzeria Invitaly' },
  { src: 'assets/img/food/140422/21-03Invitaly_18.jpg', width: 1333, height: 2000, alt: 'Pizzeria Invitaly' },
  { src: 'assets/img/food/140422/21-03Invitaly_44.jpg', width: 2000, height: 1333, alt: 'Pizzeria Invitaly' },
  { src: 'assets/img/food/140422/InV3-DSCF8085.jpg', width: 1533, height: 2300, alt: 'Pizzeria Invitaly' },
  { src: 'assets/img/food/140422/InV3-DSCF7689.jpg', width: 1533, height: 2300, alt: 'Pizzeria Invitaly' },
  { src: 'assets/img/food/140422/InV3-DSCF7680.jpg', width: 1533, height: 2300, alt: 'Pizzeria Invitaly' },
  { src: 'assets/img/food/140422/InV3-DSCF7557.jpg', width: 1533, height: 2300, alt: 'Pizzeria Invitaly' },
  { src: 'assets/img/food/140422/InV3-DSCF7595.jpg', width: 1333, height: 2000, alt: 'Pizzeria Invitaly' },
  { src: 'assets/img/food/140422/InV3-DSCF7533.jpg', width: 1533, height: 2300, alt: 'Pizzeria Invitaly' },
  { src: 'assets/img/food/140422/InV3-DSCF7951.jpg', width: 1333, height: 2000, alt: 'Pizzeria Invitaly' },
  { src: 'assets/img/food/140422/InV3-DSCF7831.jpg', width: 1533, height: 2300, alt: 'Pizzeria Invitaly' },
  { src: 'assets/img/food/140422/InV3-DSCF8184.jpg', width: 1533, height: 2300, alt: 'Pizzeria Invitaly' },
  { src: 'assets/img/food/140422/InV3-DSCF8146.jpg', width: 1533, height: 2300, alt: 'Pizzeria Invitaly' },
  { src: 'assets/img/food/140422/InV3-DSCF8067.jpg', width: 1533, height: 2300, alt: 'Pizzeria Invitaly' },
  { src: 'assets/img/food/140422/InV3-DSCF8073.jpg', width: 1533, height: 2300, alt: 'Pizzeria Invitaly' },
  { src: 'assets/img/food/140422/InV3-DSCF8241.jpg', width: 1533, height: 2300, alt: 'Pizzeria Invitaly' },
  { src: 'assets/img/food/140422/InV3-DSCF8250.jpg', width: 1533, height: 2300, alt: 'Pizzeria Invitaly' },
];
const interiorImages = [
  { src: 'assets/img/interior/invitaly-praha-9.jpg', width: 2000, height: 1336, alt: 'Pizzeria Invitaly' },
  { src: 'assets/img/interior/invitaly-praha-10.jpg', width: 2000, height: 1336, alt: 'Pizzeria Invitaly' },
  { src: 'assets/img/interior/invitaly-praha-11.jpg', width: 2000, height: 1336, alt: 'Pizzeria Invitaly' },
  { src: 'assets/img/interior/invitaly-praha-12.jpg', width: 2000, height: 1336, alt: 'Pizzeria Invitaly' },
  { src: 'assets/img/interior/invitaly-praha-13.jpg', width: 2000, height: 1336, alt: 'Pizzeria Invitaly' },
  { src: 'assets/img/interior/invitaly-praha-14.jpg', width: 2000, height: 1336, alt: 'Pizzeria Invitaly' },
];

const options = {
  dataSource: foodImages,
  showHideAnimationType: 'fade',
  pswpModule: () => import('https://cdn.jsdelivr.net/npm/photoswipe@5.2.7/dist/photoswipe.esm.min.js'),
};

document.querySelector('.food').onclick = () => {
  const foodGallery = new PhotoSwipeLightbox(options);
  foodGallery.init();
  foodGallery.loadAndOpen(0); // defines start slide index
};
document.querySelector('.interior').onclick = () => {
  const interiorGallery = new PhotoSwipeLightbox(options);
  interiorGallery.options.dataSource = interiorImages;
  interiorGallery.init();
  interiorGallery.loadAndOpen(0); // defines start slide index
};