<?php
/**
 * Free MPK tracker for Cracow
 * Get a text message when MPK in Cracow is free for drivers
 *
 * PHP Version 5
 *
 * @category Utils
 * @author Krzysztof Janda <terenaa@the-world.pl>
 * @license https://opensource.org/licenses/MIT MIT
 * @version 1.0
 * @link https://github.com/terenaa/free-mpk-cracow-tracker
 */

namespace terenaa\FreeMPK;

use terenaa\TrackerScaffold\Tracker;


class FreeMPK extends Tracker
{
    protected function getLastEntry()
    {
        $feed = $this->getAtomFeed();
        $item = $feed->channel->item[0];
        $title = strtolower($item->title);

        if (strpos($title, 'darmo') !== false) {
            return array(
                'guid' => $item->guid,
                'title' => $item->title,
                'desc' => $item->description,
            );
        }

        return null;
    }
}
