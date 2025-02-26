<?php
if (! function_exists('fabricatorRoute')) {
    /**
     * Generate the URL to a named route.
     *
     * @param  \BackedEnum|string  $name
     * @param  mixed  $parameters
     * @param  bool  $absolute
     * @return string
     */
    function fabricatorRoute($name, $parameters = [], $absolute = true)
    {
        
        return app('filament-fabricator')->route($name, $parameters, $absolute);
    }
}
