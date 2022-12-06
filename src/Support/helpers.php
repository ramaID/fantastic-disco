<?php

use Illuminate\Contracts\Container\BindingResolutionException;

if (! function_exists('getTitlePage')) {
    /**
     * @return string
     * @throws BindingResolutionException
     */
    function getTitlePage(): string
    {
        if (request()->is('query/belum-optimal-1')) {
            return 'Query: Belum Optimal 1';
        }

        return 'Home';
    }
}
