document.addEventListener('DOMContentLoaded', function() {
  const selections = document.querySelectorAll('.h5p-highlight-the-words-selection');

  /*
   * Retrieve styles from classNames, weird, but we may need some extra stylings
   * conditional stylings for this report anyway that we cannot get through
   * the HTML purifier.
   */
  selections.forEach(function(selection) {
    let regExp = /.h5p-highlight-the-words-selection-background-color-[0-9a-f]{6}/;
    let match = selection.classList.toString().match(regExp);
    if (match.length === 1) {
      selection.style.backgroundColor = '#' + match[0].substr(-6);
    }

    regExp = /.h5p-highlight-the-words-selection-color-[0-9a-f]{6}/;
    match = selection.classList.toString().match(regExp);
    if (match.length === 1) {
      selection.style.color = '#' + match[0].substr(-6);
    }
  });
});
