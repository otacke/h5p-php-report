<?php

/**
 * Class HighlightTheWordsProcessor
 * Processes and generates HTML report for Highlight the Words
 */
class HighlightTheWordsProcessor extends TypeProcessor {

  /**
   * Processes xAPI data and returns a human readable HTML report
   *
   * @param string $description Description
   * @param array $crp Correct responses pattern
   * @param string $response User given answer
   * @param object $extras Additional data
   * @param object $scoreSettings Score settings
   *
   * @return string HTML for the report
   */
  function generateHTML($description, $crp, $response, $extras, $scoreSettings) {
    // We need some style for our report
    $this->setStyle('styles/highlight-the-words.css');
    $this->setScript('scripts/highlight-the-words.js');

    $report .= "<div class='h5p-highlight-the-words-header'>{$description}</div>";
    $report .= "<div class='h5p-highlight-the-words-ruler'></div>";

    $result = "<div class='h5p-highlight-the-words-result'>{$extras->contextExtensions->result->template}</div>";
    $solution = "<div class='h5p-highlight-the-words-solution'>{$extras->contextExtensions->solution->template}</div>";
    $container = "<div class='h5p-highlight-the-words-report-container' style='color: #ff0000;'>{$result}{$solution}</div>";
    $report .= $container;

    $report .= "<div class='h5p-highlight-the-words-ruler'></div>";

    $report = "<div class='h5p-reporting-container'>{$report}</div>";

    $report .= $this->generateFooter();

    return $report;
  }

  /**
   * Generate footer
   * @return string
   */
  function generateFooter() {
    return
      '<div class="h5p-highlight-the-words-footer">' .
        '<span class="h5p-highlight-the-words-user-response-correct">Your correct answer</span>' .
        '<span class="h5p-highlight-the-words-user-response-wrong">Your incorrect answer</span>' .
      '</div>';
  }
}
