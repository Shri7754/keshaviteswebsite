<?php

if (! function_exists('assetImage')) {
    /**
     * Resolve the URL for an image in public/assets/img, falling back to the
     * assets2/ mirror (served directly from htdocs/ on InfinityFree) when the
     * primary file is missing on disk. Existing asset('assets/img/...') calls
     * are unaffected and keep working exactly as before.
     *
     * @param  string  $filename  Path relative to assets/img, e.g. "ashish.jpeg" or "doctors/doctor1.jpg"
     */
    function assetImage(string $filename): string
    {
        $filename = ltrim($filename, '/');

        if (is_file(public_path('assets/img/'.$filename))) {
            return asset('assets/img/'.$filename);
        }

        if (is_file(base_path('assets2/'.$filename))) {
            return url('assets2/'.$filename);
        }

        // Neither location has the file: return the primary URL so behavior
        // matches today's baseline (a broken image) instead of guessing.
        return asset('assets/img/'.$filename);
    }
}
