<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Images; // Ensure this is here
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ImageController extends Controller
{
    public function generateImage(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|string|max:50',
            'greeting' => 'required|string|max:100',
        ]);

        $templatePath = public_path('templates/template.jpg');

        if (!file_exists($templatePath)) {
            return response()->json(['error' => 'Template not found'], 404);
        }

        // ✅ Initialize ImageManager with GD Driver (Correct way in v3)
        $manager = new ImageManager(new Driver());

        // ✅ Load template
        $img = $manager->read($templatePath);

        // ✅ Process Avatar (Resize & Crop Circular)
        $avatar = $manager->read($request->file('avatar'))
            ->cover(150, 150) // Use `cover()` instead of `fit()`
            ->toPng(); // Convert to PNG

        // ✅ Insert Avatar
        $img->place($avatar, 'top-left', 50, 50);

        // ✅ Add Text (Name)
        $img->text($request->name, 500, 300, function ($font) {
            $font->filename(public_path('fonts/Poppins-Bold.ttf')); // Ensure font file exists
            $font->size(40);
            $font->color('#FFFFFF');
            $font->align('center');
        });

        // ✅ Add Text (Greeting)
        $img->text($request->greeting, 500, 400, function ($font) {
            $font->filename(public_path('fonts/Poppins-Bold.ttf'));
            $font->size(30);
            $font->color('#FFFFFF');
            $font->align('center');
        });

        // ✅ Save Final Image
        $outputPath = 'generated/' . time() . '_custom.png';
        $img->save(public_path($outputPath));

        return response()->json([
            'success' => 'Image generated successfully!',
            'image_url' => asset($outputPath),
        ]);
    }
}
