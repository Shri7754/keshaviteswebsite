<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Throwable;

/**
 * Rebuilds the assets2/ fallback mirror used on InfinityFree production,
 * where files placed directly under htdocs/ (outside public/) have proven
 * to be served reliably even when public/assets/img/ is not.
 */
class SyncAssets extends Command
{
    protected $signature = 'assets:sync';

    protected $description = 'Sync image files from public/assets/img into the assets2/ production fallback directory';

    private const ALLOWED_EXTENSIONS = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg'];

    public function handle()
    {
        $source = public_path('assets/img');
        $target = base_path('assets2');

        if (! File::isDirectory($source)) {
            $this->error("Source directory not found: {$source}");

            return self::FAILURE;
        }

        $this->info('Cleaning assets2/ ...');

        if (File::isDirectory($target)) {
            File::deleteDirectory($target);
        }

        File::makeDirectory($target, 0755, true);

        // An empty dir isn't tracked by Git, so keep a placeholder even if
        // a future sync ever copies zero files.
        File::put($target.DIRECTORY_SEPARATOR.'.gitkeep', '');

        $this->info("Scanning {$source} ...");

        $copied = 0;
        $skipped = 0;

        foreach (File::allFiles($source) as $file) {
            $extension = strtolower($file->getExtension());

            if (! in_array($extension, self::ALLOWED_EXTENSIONS, true)) {
                $skipped++;
                continue;
            }

            $relativePath = $file->getRelativePathname();
            $destination = $target.DIRECTORY_SEPARATOR.$relativePath;

            try {
                File::ensureDirectoryExists(dirname($destination));
                File::copy($file->getPathname(), $destination);
                $copied++;
            } catch (Throwable $e) {
                $this->error("Failed to copy {$relativePath}: {$e->getMessage()}");
            }
        }

        $this->info("Done. Copied {$copied} image file(s) to assets2/ (skipped {$skipped} non-image file(s)).");

        return self::SUCCESS;
    }
}
