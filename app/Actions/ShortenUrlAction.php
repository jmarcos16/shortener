<?php

namespace App\Actions;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

final class ShortenUrlAction
{
    public function handle(Model $urlModel, string $url): string
    {
        return DB::transaction(function () use ($urlModel, $url) {
            $shortenedUrl = $this->generateShortenedUrl($url);
            $urlModel->create([
                'url' => $url,
                'shortened_url' => $shortenedUrl,
                'user_id' => Auth::id(),
                'clicks' => 0,
            ]);

            return $shortenedUrl;
        });
    }

    private function generateShortenedUrl(string $url): string
    {
        $baseUrl = config('app.url');
        $shortenedPath = substr(md5($url.time()), 0, 6);

        return $baseUrl.'/'.$shortenedPath;
    }
}
