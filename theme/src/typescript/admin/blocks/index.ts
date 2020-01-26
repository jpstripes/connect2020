import opengraph from './opengraph';
import speaker from './speaker';

(() => {
  // Enabling on load.
  opengraph.register();
  speaker.register();
})();
