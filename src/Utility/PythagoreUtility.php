<?php

// src/Utility/PythagoreUtility.php

namespace App\Utility;

class PythagoreUtility
{
    public function display(): string
    {
        $html = '<table>';
        
        for ($row = 0; $row<= 10; $row++) {
            $html .= '<tr>';
            for ($column = 0; $column <= 10; $column++) {
                $html .= '<td>';
                if($row === 0){
                    $html .= $column;
                }else if($column === 0){
                    $html .= $row;
                }else if($row === $column){
                    $html .= 'X';
                }else{
                    $html .= $row * $column;
                }
                $html .= '</td>';
            }
            $html .= '</tr>';
        }
        $html .= '</table>';
        
        return $html;
    }
}