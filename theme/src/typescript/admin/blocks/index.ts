import opengraph from './opengraph';
import speaker from './speaker';
import speakers from './speakers';

(() => {
  // Enabling on load.
  opengraph.register();
  speaker.register();
  speakers.register();
})();
