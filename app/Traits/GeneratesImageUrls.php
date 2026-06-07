<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait GeneratesImageUrls
{
    protected function generateImageUrl(?string $imagePath): ?string
    {
        if (empty($imagePath)) {
            return null;
        }

        // If it's already a full URL, return as is
        if (filter_var($imagePath, FILTER_VALIDATE_URL)) {
            return $imagePath;
        }

        // Remove any duplicate storage paths
        $cleanPath = str_replace('storage/app/public/', '', $imagePath);
        $cleanPath = ltrim($cleanPath, '/');

        // Generate full URL for storage path
        return Storage::disk('public')->url($cleanPath);
    }

    protected function generateImageUrls(array $imagePaths): array
    {
        $urls = [];

        foreach ($imagePaths as $key => $path) {
            $urls[$key] = $this->generateImageUrl($path);
        }

        return $urls;
    }
}
