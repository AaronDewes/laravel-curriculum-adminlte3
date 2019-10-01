<?php

use App\Medium;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Seeder;

class MediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $files = File::allFiles(storage_path("app/subjects"));
        foreach ($files as $file) 
        {
    
            $media = new Medium([
            'path'          => "/subject/".$file->getFilename(),
            'title'         => $file->getFilename(),
            'medium_name'   => $file->getFilename(),
            'description'   => '',
            'author'        => 'admin',
            'publisher'     => 'admin',
            'city'          => '',
            'date'          => '2019-09-19 17:52:32',
            'size'          => $file->getSize(),
            'mime_type'     => $file->getType(),
            'license_id'    => 3,
            'owner_id'      => 1,
            
        ]);
        $media->save();
            
        }
        
    }
}
