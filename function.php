<?php

function currencyConverter($amount , $currency){
    
        switch ($currency) {
            case 'usd':
                return "$amount USD = " . 82 * $amount . " BDT";
                break;

            case 'rupee':
                return "$amount RUPEE = " . 1.14 * $amount . " BDT";
                break;
            case 'euro':
                return "$amount EURO = " . 94.94 * $amount . " BDT";
                break;
            case 'riyal':
                return "$amount Riyal = " . 22.74 * $amount . " BDT";
                break;
            case 'lira':
                return "$amount LIRA = " . 94.94 * $amount . " BDT";
                break;

            default:
                return "<h5 style=color:red>Please select currency</h5>";
                break;
        }
    }

?>