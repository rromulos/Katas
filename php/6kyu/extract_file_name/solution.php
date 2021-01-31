<?php

function fileNameExtractor(string $dirtyFileName): string {
    $underscorePos = strpos($dirtyFileName, "_");
    $dotPos = strpos($dirtyFileName, '.', strpos($dirtyFileName, '.') + 1);
    return (String) substr($dirtyFileName, $underscorePos+1, $dotPos-$underscorePos-1);
  }