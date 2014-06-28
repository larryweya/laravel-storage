<?php namespace Laravel\Storage;

interface StorageInterface {

    /**
     * Store the file at src to dst
     *
     * @param  string  $src
     * @param  array   $dst
     * @return string
     */
    public function put($src, $dst);

    /**
     * Get the url to the file at path
     *
     * @param  string  $path
     * @return string
     */
    public function url($path);

    /**
     * Delete the file at path
     *
     * @param  string  $path
     * @return bool
     */
    public function delete($path);

}
