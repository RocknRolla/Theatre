<?php

use App\Event;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     *
     *
     * This seeder will fill the DB with dummy data (8 events)
     *
     */
    public function run()
    {
        $data = [
            [
                "title" => "Tom and Jerry",
                "titlehr" => "Tom i Jerry",
                "picture" => "../../../img/events/tomandjerry.jpg",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut sem in ligula malesuada auctor. Donec sollicitudin quis sapien nec lobortis. Etiam sapien nibh, porttitor nec ultrices sit amet, blandit in massa. Sed tempus ullamcorper malesuada. Nulla id felis laoreet, tincidunt velit sed, ullamcorper leo. In sodales dolor dolor, nec commodo ex placerat rutrum. Integer facilisis dolor a enim feugiat tempus. Pellentesque et sapien at quam euismod pellentesque et ac magna. Morbi sed enim finibus urna laoreet ullamcorper. Vestibulum eleifend eros sapien, eget cursus lacus aliquam quis. Donec quis nibh tempor, feugiat ante eget, viverra elit. Aenean at elit augue.",
                "descriptionhr" => "Hrvatsko hrvatsko Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut sem in ligula malesuada auctor. Donec sollicitudin quis sapien nec lobortis. Etiam sapien nibh, porttitor nec ultrices sit amet, blandit in massa. Sed tempus ullamcorper malesuada. Nulla id felis laoreet, tincidunt velit sed, ullamcorper leo. In sodales dolor dolor, nec commodo ex placerat rutrum. Integer facilisis dolor a enim feugiat tempus. Pellentesque et sapien at quam euismod pellentesque et ac magna. Morbi sed enim finibus urna laoreet ullamcorper. Vestibulum eleifend eros sapien, eget cursus lacus aliquam quis. Donec quis nibh tempor, feugiat ante eget, viverra elit. Aenean at elit augue.",
                "actors" => '["Ivan Ivic", "Pero Peric", "Lucky Look", "Casper May", "April Fool"]',
                "date" => 3,
                "price" => 39
            ],
            [
                "title" => "Brum Brum",
                "titlehr" => "Brum Brum",
                "picture" => "../../../img/events/brumbrum.jpg",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut sem in ligula malesuada auctor. Donec sollicitudin quis sapien nec lobortis. Etiam sapien nibh, porttitor nec ultrices sit amet, blandit in massa. Sed tempus ullamcorper malesuada. Nulla id felis laoreet, tincidunt velit sed, ullamcorper leo. In sodales dolor dolor, nec commodo ex placerat rutrum. Integer facilisis dolor a enim feugiat tempus. Pellentesque et sapien at quam euismod pellentesque et ac magna. Morbi sed enim finibus urna laoreet ullamcorper. Vestibulum eleifend eros sapien, eget cursus lacus aliquam quis. Donec quis nibh tempor, feugiat ante eget, viverra elit. Aenean at elit augue.",
                "descriptionhr" => "Hrvatsko hrvatsko Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut sem in ligula malesuada auctor. Donec sollicitudin quis sapien nec lobortis. Etiam sapien nibh, porttitor nec ultrices sit amet, blandit in massa. Sed tempus ullamcorper malesuada. Nulla id felis laoreet, tincidunt velit sed, ullamcorper leo. In sodales dolor dolor, nec commodo ex placerat rutrum. Integer facilisis dolor a enim feugiat tempus. Pellentesque et sapien at quam euismod pellentesque et ac magna. Morbi sed enim finibus urna laoreet ullamcorper. Vestibulum eleifend eros sapien, eget cursus lacus aliquam quis. Donec quis nibh tempor, feugiat ante eget, viverra elit. Aenean at elit augue.",
                "actors" => '["Ivan Ivic", "Pero Peric", "Lucky Look", "Casper May", "April Fool"]',
                "date" => 34,
                "price" => 21
            ],
            [
                "title" => "Samson, The All Mighty",
                "titlehr" => "Svemoćni Samson",
                "picture" => "../../../img/events/samson.jpg",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut sem in ligula malesuada auctor. Donec sollicitudin quis sapien nec lobortis. Etiam sapien nibh, porttitor nec ultrices sit amet, blandit in massa. Sed tempus ullamcorper malesuada. Nulla id felis laoreet, tincidunt velit sed, ullamcorper leo. In sodales dolor dolor, nec commodo ex placerat rutrum. Integer facilisis dolor a enim feugiat tempus. Pellentesque et sapien at quam euismod pellentesque et ac magna. Morbi sed enim finibus urna laoreet ullamcorper. Vestibulum eleifend eros sapien, eget cursus lacus aliquam quis. Donec quis nibh tempor, feugiat ante eget, viverra elit. Aenean at elit augue.",
                "descriptionhr" => "Hrvatsko hrvatsko Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut sem in ligula malesuada auctor. Donec sollicitudin quis sapien nec lobortis. Etiam sapien nibh, porttitor nec ultrices sit amet, blandit in massa. Sed tempus ullamcorper malesuada. Nulla id felis laoreet, tincidunt velit sed, ullamcorper leo. In sodales dolor dolor, nec commodo ex placerat rutrum. Integer facilisis dolor a enim feugiat tempus. Pellentesque et sapien at quam euismod pellentesque et ac magna. Morbi sed enim finibus urna laoreet ullamcorper. Vestibulum eleifend eros sapien, eget cursus lacus aliquam quis. Donec quis nibh tempor, feugiat ante eget, viverra elit. Aenean at elit augue.",
                "actors" => '["Ivan Ivic", "Pero Peric", "Lucky Look", "Casper May", "April Fool"]',
                "date" => 7,
                "price" => 88
            ],
            [
                "title" => "Persian Princess",
                "titlehr" => "Perzijska princeza",
                "picture" => "../../../img/events/persianprincess.jpg",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut sem in ligula malesuada auctor. Donec sollicitudin quis sapien nec lobortis. Etiam sapien nibh, porttitor nec ultrices sit amet, blandit in massa. Sed tempus ullamcorper malesuada. Nulla id felis laoreet, tincidunt velit sed, ullamcorper leo. In sodales dolor dolor, nec commodo ex placerat rutrum. Integer facilisis dolor a enim feugiat tempus. Pellentesque et sapien at quam euismod pellentesque et ac magna. Morbi sed enim finibus urna laoreet ullamcorper. Vestibulum eleifend eros sapien, eget cursus lacus aliquam quis. Donec quis nibh tempor, feugiat ante eget, viverra elit. Aenean at elit augue.",
                "descriptionhr" => "Hrvatsko hrvatsko Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut sem in ligula malesuada auctor. Donec sollicitudin quis sapien nec lobortis. Etiam sapien nibh, porttitor nec ultrices sit amet, blandit in massa. Sed tempus ullamcorper malesuada. Nulla id felis laoreet, tincidunt velit sed, ullamcorper leo. In sodales dolor dolor, nec commodo ex placerat rutrum. Integer facilisis dolor a enim feugiat tempus. Pellentesque et sapien at quam euismod pellentesque et ac magna. Morbi sed enim finibus urna laoreet ullamcorper. Vestibulum eleifend eros sapien, eget cursus lacus aliquam quis. Donec quis nibh tempor, feugiat ante eget, viverra elit. Aenean at elit augue.",
                "actors" => '["Ivan Ivic", "Pero Peric", "Lucky Look", "Casper May", "April Fool"]',
                "date" => 6,
                "price" => 33
            ],
            [
                "title" => "Something about her",
                "titlehr" => "Nešto o njoj",
                "picture" => "../../../img/events/somethingabouther.jpg",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut sem in ligula malesuada auctor. Donec sollicitudin quis sapien nec lobortis. Etiam sapien nibh, porttitor nec ultrices sit amet, blandit in massa. Sed tempus ullamcorper malesuada. Nulla id felis laoreet, tincidunt velit sed, ullamcorper leo. In sodales dolor dolor, nec commodo ex placerat rutrum. Integer facilisis dolor a enim feugiat tempus. Pellentesque et sapien at quam euismod pellentesque et ac magna. Morbi sed enim finibus urna laoreet ullamcorper. Vestibulum eleifend eros sapien, eget cursus lacus aliquam quis. Donec quis nibh tempor, feugiat ante eget, viverra elit. Aenean at elit augue.",
                "descriptionhr" => "Hrvatsko hrvatsko Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut sem in ligula malesuada auctor. Donec sollicitudin quis sapien nec lobortis. Etiam sapien nibh, porttitor nec ultrices sit amet, blandit in massa. Sed tempus ullamcorper malesuada. Nulla id felis laoreet, tincidunt velit sed, ullamcorper leo. In sodales dolor dolor, nec commodo ex placerat rutrum. Integer facilisis dolor a enim feugiat tempus. Pellentesque et sapien at quam euismod pellentesque et ac magna. Morbi sed enim finibus urna laoreet ullamcorper. Vestibulum eleifend eros sapien, eget cursus lacus aliquam quis. Donec quis nibh tempor, feugiat ante eget, viverra elit. Aenean at elit augue.",
                "actors" => '["Ivan Ivic", "Pero Peric", "Lucky Look", "Casper May", "April Fool"]',
                "date" => 20,
                "price" => 45
            ],
            [
                "title" => "How yes no",
                "titlehr" => "Kako da ne",
                "picture" => "../../../img/events/howyesno.jpg",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut sem in ligula malesuada auctor. Donec sollicitudin quis sapien nec lobortis. Etiam sapien nibh, porttitor nec ultrices sit amet, blandit in massa. Sed tempus ullamcorper malesuada. Nulla id felis laoreet, tincidunt velit sed, ullamcorper leo. In sodales dolor dolor, nec commodo ex placerat rutrum. Integer facilisis dolor a enim feugiat tempus. Pellentesque et sapien at quam euismod pellentesque et ac magna. Morbi sed enim finibus urna laoreet ullamcorper. Vestibulum eleifend eros sapien, eget cursus lacus aliquam quis. Donec quis nibh tempor, feugiat ante eget, viverra elit. Aenean at elit augue.",
                "descriptionhr" => "Hrvatsko hrvatsko Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut sem in ligula malesuada auctor. Donec sollicitudin quis sapien nec lobortis. Etiam sapien nibh, porttitor nec ultrices sit amet, blandit in massa. Sed tempus ullamcorper malesuada. Nulla id felis laoreet, tincidunt velit sed, ullamcorper leo. In sodales dolor dolor, nec commodo ex placerat rutrum. Integer facilisis dolor a enim feugiat tempus. Pellentesque et sapien at quam euismod pellentesque et ac magna. Morbi sed enim finibus urna laoreet ullamcorper. Vestibulum eleifend eros sapien, eget cursus lacus aliquam quis. Donec quis nibh tempor, feugiat ante eget, viverra elit. Aenean at elit augue.",
                "actors" => '["Ivan Ivic", "Pero Peric", "Lucky Look", "Casper May", "April Fool"]',
                "date" => 25,
                "price" => 44
            ],
            [
                "title" => "Laravelistic",
                "titlehr" => "Brum Brum",
                "picture" => "../../../img/events/laravelistic.jpg",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut sem in ligula malesuada auctor. Donec sollicitudin quis sapien nec lobortis. Etiam sapien nibh, porttitor nec ultrices sit amet, blandit in massa. Sed tempus ullamcorper malesuada. Nulla id felis laoreet, tincidunt velit sed, ullamcorper leo. In sodales dolor dolor, nec commodo ex placerat rutrum. Integer facilisis dolor a enim feugiat tempus. Pellentesque et sapien at quam euismod pellentesque et ac magna. Morbi sed enim finibus urna laoreet ullamcorper. Vestibulum eleifend eros sapien, eget cursus lacus aliquam quis. Donec quis nibh tempor, feugiat ante eget, viverra elit. Aenean at elit augue.",
                "descriptionhr" => "Hrvatsko hrvatsko Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut sem in ligula malesuada auctor. Donec sollicitudin quis sapien nec lobortis. Etiam sapien nibh, porttitor nec ultrices sit amet, blandit in massa. Sed tempus ullamcorper malesuada. Nulla id felis laoreet, tincidunt velit sed, ullamcorper leo. In sodales dolor dolor, nec commodo ex placerat rutrum. Integer facilisis dolor a enim feugiat tempus. Pellentesque et sapien at quam euismod pellentesque et ac magna. Morbi sed enim finibus urna laoreet ullamcorper. Vestibulum eleifend eros sapien, eget cursus lacus aliquam quis. Donec quis nibh tempor, feugiat ante eget, viverra elit. Aenean at elit augue.",
                "actors" => '["Ivan Ivic", "Pero Peric", "Lucky Look", "Casper May", "April Fool"]',
                "date" => 8,
                "price" => 44
            ],
            [
                "title" => "Awesomeness",
                "titlehr" => "Super",
                "picture" => "../../../img/events/awesomeness.jpg",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut sem in ligula malesuada auctor. Donec sollicitudin quis sapien nec lobortis. Etiam sapien nibh, porttitor nec ultrices sit amet, blandit in massa. Sed tempus ullamcorper malesuada. Nulla id felis laoreet, tincidunt velit sed, ullamcorper leo. In sodales dolor dolor, nec commodo ex placerat rutrum. Integer facilisis dolor a enim feugiat tempus. Pellentesque et sapien at quam euismod pellentesque et ac magna. Morbi sed enim finibus urna laoreet ullamcorper. Vestibulum eleifend eros sapien, eget cursus lacus aliquam quis. Donec quis nibh tempor, feugiat ante eget, viverra elit. Aenean at elit augue.",
                "descriptionhr" => "Hrvatsko hrvatsko Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut sem in ligula malesuada auctor. Donec sollicitudin quis sapien nec lobortis. Etiam sapien nibh, porttitor nec ultrices sit amet, blandit in massa. Sed tempus ullamcorper malesuada. Nulla id felis laoreet, tincidunt velit sed, ullamcorper leo. In sodales dolor dolor, nec commodo ex placerat rutrum. Integer facilisis dolor a enim feugiat tempus. Pellentesque et sapien at quam euismod pellentesque et ac magna. Morbi sed enim finibus urna laoreet ullamcorper. Vestibulum eleifend eros sapien, eget cursus lacus aliquam quis. Donec quis nibh tempor, feugiat ante eget, viverra elit. Aenean at elit augue.",
                "actors" => '["Ivan Ivic", "Pero Peric", "Lucky Look", "Casper May", "April Fool"]',
                "date" => 14,
                "price" => 77
            ]
        ];


        foreach ($data as $datum){
            Event::create([
                'title' => $datum['title'],
                'titlehr' => $datum['titlehr'],
                'picture' => $datum['picture'],
                'description' => $datum['description'],
                'descriptionhr' => $datum['descriptionhr'],
                'actors' => json_decode($datum['actors']),
                'date' => Carbon::now()->addDays($datum['date']),
                'time' => "20:00",
                'price' => $datum['price'],
                'location' => "Zagreb, Svemirska 57"
            ]);
        }
    }
}
