function sudoku(array $puzzle): array {
    $size = 9;
    
    $sudoku = function(int $row, int $col, int $num) use (&$puzzle, $size, &$sudoku): bool {
        for ($i = 0; $i < $size; $i++) {
            if ($puzzle[$row][$i] == $num || $puzzle[$i][$col] == $num) {
                return false;
            }
        }
        
        $startRow = $row - ($row % 3);
        $startCol = $col - ($col % 3);
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                if ($puzzle[$startRow + $i][$startCol + $j] == $num) {
                    return false;
                }
            }
        }
        
        return true;
    };
    
    $solve = function() use (&$puzzle, $size, &$sudoku, &$solve): bool {
        for ($row = 0; $row < $size; $row++) {
            for ($col = 0; $col < $size; $col++) {
                if ($puzzle[$row][$col] == 0) {
                    for ($num = 1; $num <= $size; $num++) {
                        if ($sudoku($row, $col, $num)) {
                            $puzzle[$row][$col] = $num;
                            if ($solve()) {
                                return true;
                            }
                            $puzzle[$row][$col] = 0;
                        }
                    }
                    return false;
                }
            }
        }
        return true;
    };
    
    $solve();
    
    return $puzzle;
}