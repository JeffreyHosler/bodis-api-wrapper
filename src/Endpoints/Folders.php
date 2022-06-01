<?php

namespace JeffreyHosler\BodisApiWrapper\Endpoints;

use JeffreyHosler\BodisApiWrapper\Resources\Folder;

trait Folders
{
    /**
     * Get the folders
     * https://docs.bodis.com/#fbad799f-5cc1-44dc-926f-570e1c11bcaf
     *
     * @param  Array  $data
     * @return Array
     */
    public function listFolders(array $data = [])
    {
        $response = $this->get("folders", $data);

        return array_merge($this->transformCollection(
            $response['data'] ?? [],
            Folder::class,
        ), array_filter($response, fn ($key) => $key != 'data', ARRAY_FILTER_USE_KEY));
    }

    /**
     * Add a folder
     * https://docs.bodis.com/#4476e729-08cf-4cf8-80d7-14bb6da7d398
     *
     * @param  Array  $data
     * @return Array
     */
    public function addFolder(array $data)
    {
        $response = $this->post("folders", $data);

        return $this->transformCollection(
            $response['data'] ?? [],
            Folder::class,
        );
    }

    /**
     * update a folder
     * https://docs.bodis.com/#c04fb6ea-5396-4b18-9969-7249d88c73ea
     *
     * @param  Int|String  $id
     * @param  Array  $data
     * @return null
     */
    public function updateFolder($id, array $data)
    {
        $this->put("folders/$id", $data);

        return;
    }

    /**
     * delete a folder
     * https://docs.bodis.com/#e67ff3fe-1224-4947-8053-af7074b2919c
     *
     * @param  Int|String  $id
     * @return null
     */
    public function deleteFolder($id)
    {
        $this->delete("folders/$id");

        return;
    }
}
