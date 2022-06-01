<?php

namespace JeffreyHosler\BodisApiWrapper\Resources;

class Folder extends Resource
{
    /**
     * The id of the folder.
     * @var Int
     */
    public $id;

    /**
     * how many domains are in the folder.
     * @var Int
     */
    public $totalDomains;

    /**
     * The name of the folder.
     * @var String
     */
    public $name;

    /**
     * Delete the folder.
     *
     * @return void
     */
    public function delete()
    {
        $this->http->deletefolder($this->id);
    }
}
