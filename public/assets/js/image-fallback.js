// Client-side safety net for the assets2/ image fallback system.
// assetImage() (see app/helpers.php) only checks file existence on the
// server's disk, so it can't detect a file that's present but still
// fails to be served (an InfinityFree quirk seen in production). This
// catches that case at runtime: any /assets/img/ image that fails to
// load gets swapped to its assets2/ mirror.
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('img[src*="/assets/img/"]').forEach(function (img) {
        img.addEventListener('error', function onError() {
            img.removeEventListener('error', onError);
            var parts = img.src.split('/assets/img/');
            if (parts.length === 2) {
                img.src = parts[0] + '/assets2/' + parts[1];
            }
        });
    });
});
