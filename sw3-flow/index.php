<?php
// 4. Chess Board Program
function generateChessBoard() {
    $html = "<!DOCTYPE html>
<html>
<head>
    <title>Chess Board</title>
    <style>
        .chessboard {
            width: 400px;
            height: 400px;
            border: 1px solid black;
        }
        .row {
            display: flex;
        }
        .cell {
            width: 30px;
            height: 30px;
            border: 1px solid black;
        }
        .white {
            background-color: #f0d9b5;
        }
        .black {
            background-color: #b58863;
        }
    </style>
</head>
<body>
    <div class='chessboard'>";
    
    $rows = 8;
    $cols = 8;
    for ($i = 0; $i < $rows; $i++) {
        $html .= "<div class='row'>";
        for ($j = 0; $j < $cols; $j++) {
            $color = ($i + $j) % 2 == 0 ? 'white' : 'black';
            $html .= "<div class='cell $color'></div>";
        }
        $html .= "</div>";
    }

    $html .= "</div>
</body>
</html>";

    return $html;
}

echo "4. Chess Board Program\n";
echo generateChessBoard();
?>
