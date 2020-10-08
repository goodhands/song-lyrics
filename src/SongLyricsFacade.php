<?php

namespace Goodhands\SongLyrics;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Goodhands\SongLyrics\Skeleton\SkeletonClass
 */
class SongLyricsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'song-lyrics';
    }
}
