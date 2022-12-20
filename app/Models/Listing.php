<?php
namespace App\Models;

    class Listing {
        public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet, 
                    consectetur adipiscing elit. Morbi cursus risus at enim vulputate, 
                    quis volutpat ante suscipit. Cras consequat gravida dui vitae lacinia. 
                    Cras ac fermentum massa. Sed ornare pretium purus at egestas.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet, 
                    consectetur adipiscing elit. Morbi cursus risus at enim vulputate, 
                    quis volutpat ante suscipit. Cras consequat gravida dui vitae lacinia. 
                    Cras ac fermentum massa. Sed ornare pretium purus at egestas.'
            ]
        ];
        }

        public static function find($id) {
            $listings = self::all();
            
            foreach($listings as $listing){
                if($listing['id'] == $id) {
                    return $listing;
                }
            }
        }
    } 