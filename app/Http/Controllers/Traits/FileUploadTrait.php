<?php namespace App\Http\Controllers\Traits;

use File;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

trait FileUploadTrait
{
    /**
     * File upload trait used in controllers to upload files
     */
    public function saveFiles(Request $request)
    {
        /**
         * Get Controller Name for uploade folder
         */
        $action      = app('request')->route()->getAction();
        $controller  = class_basename($action['controller']);
        $controller  = explode('@', $controller);
        $folder_name = strtolower(str_replace('Controller', '/', $controller[0]));

        if (!file_exists(base_path('uploads/') . $folder_name)) {
            mkdir(base_path('uploads/') . $folder_name, 0777);
            mkdir(base_path('uploads/thumb/') . $folder_name, 0777);
        }
        foreach ($request->all() as $key => $value) {
            if ($request->hasFile($key)) {
                if ($request->has($key . '_w') && $request->has($key . '_h')) {
                    // Check file width
                    $filename = $folder_name . time() . '-' . $request->file($key)->getClientOriginalName();
                    $file     = $request->file($key);
                    $image    = Image::make($file);
                    Image::make($file)->resize(50, 50)->save(base_path('uploads/thumb') . '/' . $filename);
                    $width  = $image->width();
                    $height = $image->height();
                    if ($width > $request->{$key . '_w'} && $height > $request->{$key . '_h'}) {
                        $image->resize($request->{$key . '_w'}, $request->{$key . '_h'});
                    } elseif ($width > $request->{$key . '_w'}) {
                        $image->resize($request->{$key . '_w'}, null, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                    } elseif ($height > $request->{$key . '_w'}) {
                        $image->resize(null, $request->{$key . '_h'}, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                    }
                    $image->save(base_path('uploads') . '/' . $filename);
                    $request->replace(array_merge($request->all(), [$key => $filename]));
                    $request->files->remove($key);
                } else {
                    $filename = $folder_name . time() . '-' . $request->file($key)->getClientOriginalName();
                    $request->file($key)->move(base_path('uploads'), $filename);
                    $request->replace(array_merge($request->all(), [$key => $filename]));
                    $request->files->remove($key);
                }
                // Check & Delete current file
                if ($request->has($key . '_c')) {
                    $this->deleteFiles($request->{$key . '_c'});
                }
            }
        }
    }

    /**
     * File delete trait used in controllers to upload files
     */
    public function deleteFiles($filename)
    {
        if (File::exists(base_path('uploads/thumb/') . $filename)) {File::delete(base_path('uploads/thumb/') . $filename);}
        if (File::exists(base_path('uploads/') . $filename)) {File::delete(base_path('uploads/') . $filename);}
    }
}
