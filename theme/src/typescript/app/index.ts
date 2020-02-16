jQuery(() => {
  jQuery('[data-toggle="tooltip"]').tooltip();

  hideTimetableCells();
});

/**
 * Grayout timetable cells when the value is `n/a`.
 */
const hideTimetableCells = () => {
  const $table = jQuery('.timetable');

  if (!$table) {
    return;
  }

  const matcher = 'n/a';

  const $cells = jQuery($table)
    .find('td')
    .filter((_, el) => el.textContent === matcher);

  $cells.each((_, cell) => {
    jQuery(cell).addClass('unused');
  });
};
