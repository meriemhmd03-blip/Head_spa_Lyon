const imagemin = require('imagemin');
const webp = require('imagemin-webp');

(async () => {
  await imagemin(['images/*.{jpg,png}'], {
    destination: 'images',
    plugins: [
      webp({ quality: 70 })
    ]
  });

  console.log('✔ Images converties en WebP');
})();