<?php 

namespace App\Http\Connectors;

use App\Http\Connectors\Connector as Connector;


class Tab extends Connector
{

    public function getMusicTest()
    {
        return $this->tab("http://www.songsterr.com/a/ra/songs/byartists.json?artists=Metallica");
    }

    public function getMusicByArtist($artiste)
    {
        return $this->tab("http://www.songsterr.com/a/ra/songs/byartists.json?artists=$artiste");
    }

    public function getMusicBySong($song)
    {
        return $this->tab("http://www.songsterr.com/a/ra/songs.json?pattern=$song");
    }

}
