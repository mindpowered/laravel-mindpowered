<?php
namespace mindpowered\laravel\MindPowered\Facades;

class MindPowered
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'mindpowered';
    }
}
