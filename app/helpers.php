<?php

if (! function_exists('format_currency')) {
    function format_currency(float $amount, ?string $currency = null): string
    {
        $currency = $currency ?? config('currency.default', 'USD');
        $fmt = config("currency.format.{$currency}", ['symbol' => '$', 'precision' => 2]);

        $symbol = $fmt['symbol'] ?? '$';
        $precision = $fmt['precision'] ?? 2;

        return $symbol . number_format($amount, $precision, '.', ',');
    }
}

if (! function_exists('apply_tax')) {
    function apply_tax(float $amount, ?float $rate = null): float
    {
        $rate = $rate ?? (float) config('tax.default_rate', 0.0);
        $total = $amount * (1 + $rate);

        $rounding = config('tax.rounding', 'nearest');
        return match ($rounding) {
            'up' => ceil($total * 100) / 100,
            'down' => floor($total * 100) / 100,
            default => round($total, 2),
        };
    }
}