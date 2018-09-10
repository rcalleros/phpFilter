<?php 

//https://places.demo.api.here.com/places/v1/discover/here?at=32.781666%2C-96.798554;r=4828.03&cat=eat-drink&app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg
$coordinats = '32.781666,-96.798554';//thanksgiving tower
$boundaryRadius = '4828.03';//in meters
   $somevar = '
   {
     "results": {
       "next": "https://places.demo.api.here.com/places/v1/discover/explore;context=Y2F0PXJlc3RhdXJhbnQmZmxvdy1pZD1hZGZjMDBhYi1mOTE2LTUwMTMtOWFiNy1lNjZhNzI5OTFhYTRfMTUzNjM2MTgxMzE4OV8wXzg3MSZvZmZzZXQ9MjAmc2l6ZT0yMA?at=32.781666%2C-96.798554&app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
       "items": [
         {
           "position": [
             32.78121,
             -96.79868
           ],
           "distance": 52,
           "title": "Campisi\'s Restaurant",
           "averageRating": 0,
           "category": {
             "id": "restaurant",
             "title": "Restaurant",
             "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
             "type": "urn:nlp-types:category",
             "system": "places"
           },
           "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
           "vicinity": "1520 Elm St<br/>Dallas, TX 75201",
           "having": [],
           "type": "urn:nlp-types:place",
           "href": "https://places.demo.api.here.com/places/v1/places/8409vg4m-9ac96fe695a54c93b5b69844bb8588fd;context=Zmxvdy1pZD1hZGZjMDBhYi1mOTE2LTUwMTMtOWFiNy1lNjZhNzI5OTFhYTRfMTUzNjM2MTgxMzE4OV8wXzg3MSZyYW5rPTA?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
           "tags": [
             {
               "id": "italian",
               "title": "Italian",
               "group": "cuisine"
             },
             {
               "id": "pizza",
               "title": "Pizza",
               "group": "cuisine"
             },
             {
               "id": "sea-food",
               "title": "Seafood",
               "group": "cuisine"
             }
           ],
           "id": "8409vg4m-9ac96fe695a54c93b5b69844bb8588fd",
           "openingHours": {
             "text": "Mon-Sat: 11:00 - 22:00<br/>Sun: 11:00 - 21:00",
             "label": "Opening hours",
             "isOpen": true,
             "structured": [
               {
                 "start": "T110000",
                 "duration": "PT11H00M",
                 "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH,FR,SA"
               },
               {
                 "start": "T110000",
                 "duration": "PT10H00M",
                 "recurrence": "FREQ:DAILY;BYDAY:SU"
               }
             ]
           }
         },
         {
           "position": [
             32.78206,
             -96.79818
           ],
           "distance": 56,
           "title": "Triniti - Tower Club",
           "averageRating": 0,
           "category": {
             "id": "restaurant",
             "title": "Restaurant",
             "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
             "type": "urn:nlp-types:category",
             "system": "places"
           },
           "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
           "vicinity": "1601 Elm St<br/>Dallas, TX 75201",
           "having": [],
           "type": "urn:nlp-types:place",
           "href": "https://places.demo.api.here.com/places/v1/places/8409vg4m-01fe61cf86a44c21869d8f276e963043;context=Zmxvdy1pZD1hZGZjMDBhYi1mOTE2LTUwMTMtOWFiNy1lNjZhNzI5OTFhYTRfMTUzNjM2MTgxMzE4OV8wXzg3MSZyYW5rPTE?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
           "tags": [
             {
               "id": "american",
               "title": "American",
               "group": "cuisine"
             }
           ],
           "id": "8409vg4m-01fe61cf86a44c21869d8f276e963043",
           "openingHours": {
             "text": "Tue-Thu: 17:00 - 21:00<br/>Fri, Sat: 17:00 - 22:00",
             "label": "Opening hours",
             "isOpen": true,
             "structured": [
               {
                 "start": "T170000",
                 "duration": "PT04H00M",
                 "recurrence": "FREQ:DAILY;BYDAY:TU,WE,TH"
               },
               {
                 "start": "T170000",
                 "duration": "PT05H00M",
                 "recurrence": "FREQ:DAILY;BYDAY:FR,SA"
               }
             ]
           },
           "alternativeNames": [
             {
               "name": "Triniti at Tower Club",
               "language": "en"
             }
           ]
         },
         {
           "position": [
             32.78113,
             -96.79937
           ],
           "distance": 97,
           "title": "Chop House Burger",
           "averageRating": 0,
           "category": {
             "id": "snacks-fast-food",
             "title": "Snacks/Fast food",
             "href": "https://places.demo.api.here.com/places/v1/categories/places/snacks-fast-food?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
             "type": "urn:nlp-types:category",
             "system": "places"
           },
           "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
           "vicinity": "1501 Main St<br/>Dallas, TX 75201",
           "having": [],
           "type": "urn:nlp-types:place",
           "href": "https://places.demo.api.here.com/places/v1/places/8409vg4m-38195fe4a9644a16a9c309edd5e5a1ea;context=Zmxvdy1pZD1hZGZjMDBhYi1mOTE2LTUwMTMtOWFiNy1lNjZhNzI5OTFhYTRfMTUzNjM2MTgxMzE4OV8wXzg3MSZyYW5rPTI?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
           "tags": [
             {
               "id": "american",
               "title": "American",
               "group": "cuisine"
             },
             {
               "id": "burger",
               "title": "Burgers",
               "group": "cuisine"
             }
           ],
           "id": "8409vg4m-38195fe4a9644a16a9c309edd5e5a1ea",
           "openingHours": {
             "text": "Mon-Thu, Sun: 11:00 - 21:00<br/>Fri, Sat: 11:00 - 22:00",
             "label": "Opening hours",
             "isOpen": true,
             "structured": [
               {
                 "start": "T110000",
                 "duration": "PT10H00M",
                 "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH,SU"
               },
               {
                 "start": "T110000",
                 "duration": "PT11H00M",
                 "recurrence": "FREQ:DAILY;BYDAY:FR,SA"
               }
             ]
           }
         },
         {
           "position": [
             32.78113,
             -96.79937
           ],
           "distance": 97,
           "title": "Dallas Fish Market",
           "averageRating": 0,
           "category": {
             "id": "restaurant",
             "title": "Restaurant",
             "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
             "type": "urn:nlp-types:category",
             "system": "places"
           },
           "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
           "vicinity": "1501 Main St<br/>Dallas, TX 75201",
           "having": [],
           "type": "urn:nlp-types:place",
           "href": "https://places.demo.api.here.com/places/v1/places/8409vg4m-1056dc140dd94587a24feef82a5d7b07;context=Zmxvdy1pZD1hZGZjMDBhYi1mOTE2LTUwMTMtOWFiNy1lNjZhNzI5OTFhYTRfMTUzNjM2MTgxMzE4OV8wXzg3MSZyYW5rPTM?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
           "tags": [
             {
               "id": "american",
               "title": "American",
               "group": "cuisine"
             },
             {
               "id": "asian",
               "title": "Asian",
               "group": "cuisine"
             },
             {
               "id": "japanese",
               "title": "Japanese",
               "group": "cuisine"
             },
             {
               "id": "sea-food",
               "title": "Seafood",
               "group": "cuisine"
             },
             {
               "id": "sushi",
               "title": "Japanese - Sushi",
               "group": "cuisine"
             }
           ],
           "id": "8409vg4m-1056dc140dd94587a24feef82a5d7b07",
           "openingHours": {
             "text": "Mon-Thu: 11:00 - 22:00<br/>Fri: 11:00 - 23:00<br/>Sat: 17:00 - 23:00",
             "label": "Opening hours",
             "isOpen": true,
             "structured": [
               {
                 "start": "T110000",
                 "duration": "PT11H00M",
                 "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH"
               },
               {
                 "start": "T110000",
                 "duration": "PT12H00M",
                 "recurrence": "FREQ:DAILY;BYDAY:FR"
               },
               {
                 "start": "T170000",
                 "duration": "PT06H00M",
                 "recurrence": "FREQ:DAILY;BYDAY:SA"
               }
             ]
           }
         },
         {
           "position": [
             32.78137,
             -96.79758
           ],
           "distance": 97,
           "title": "Press Box Grill & Beer Gallery",
           "averageRating": 0,
           "category": {
             "id": "restaurant",
             "title": "Restaurant",
             "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
             "type": "urn:nlp-types:category",
             "system": "places"
           },
           "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
           "vicinity": "1623 Main St<br/>Dallas, TX 75201",
           "having": [],
           "type": "urn:nlp-types:place",
           "href": "https://places.demo.api.here.com/places/v1/places/8409vg4m-db912ac0ec0f4d78ab6e1a4b32e17fa0;context=Zmxvdy1pZD1hZGZjMDBhYi1mOTE2LTUwMTMtOWFiNy1lNjZhNzI5OTFhYTRfMTUzNjM2MTgxMzE4OV8wXzg3MSZyYW5rPTQ?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
           "tags": [
             {
               "id": "american",
               "title": "American",
               "group": "cuisine"
             },
             {
               "id": "burger",
               "title": "Burgers",
               "group": "cuisine"
             },
             {
               "id": "chicken",
               "title": "Chicken",
               "group": "cuisine"
             },
             {
               "id": "grill",
               "title": "Grill",
               "group": "cuisine"
             }
           ],
           "id": "8409vg4m-db912ac0ec0f4d78ab6e1a4b32e17fa0",
           "openingHours": {
             "text": "Mon-Sun: 11:00 - 02:00",
             "label": "Opening hours",
             "isOpen": true,
             "structured": [
               {
                 "start": "T110000",
                 "duration": "PT15H00M",
                 "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH,FR,SA,SU"
               }
             ]
           },
           "alternativeNames": [
             {
               "name": "Press Box Grill",
               "language": "en"
             }
           ]
         },
         {
           "position": [
             32.78113,
             -96.79937
           ],
           "distance": 97,
           "title": "7-Eleven",
           "averageRating": 0,
           "category": {
             "id": "kiosk-convenience-store",
             "title": "24-7/Convenience Store",
             "href": "https://places.demo.api.here.com/places/v1/categories/places/kiosk-convenience-store?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
             "type": "urn:nlp-types:category",
             "system": "places"
           },
           "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/09.icon",
           "vicinity": "1502 Elm St<br/>Dallas, TX 75201",
           "having": [],
           "type": "urn:nlp-types:place",
           "href": "https://places.demo.api.here.com/places/v1/places/840jx7ps-d0ec4ab6c4fe01614fb78a094fd72c56;context=Zmxvdy1pZD1hZGZjMDBhYi1mOTE2LTUwMTMtOWFiNy1lNjZhNzI5OTFhYTRfMTUzNjM2MTgxMzE4OV8wXzg3MSZyYW5rPTU?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
           "id": "840jx7ps-d0ec4ab6c4fe01614fb78a094fd72c56",
           "openingHours": {
             "text": "Mon-Sun: 00:00 - 24:00",
             "label": "Opening hours",
             "isOpen": true,
             "structured": [
               {
                 "start": "T000000",
                 "duration": "PT24H00M",
                 "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH,FR,SA,SU"
               }
             ]
           },
           "chainIds": [
             "425"
           ]
         },
         {
           "position": [
             32.78052,
             -96.79863
           ],
           "distance": 128,
           "title": "Iron Cactus",
           "averageRating": 0,
           "category": {
             "id": "restaurant",
             "title": "Restaurant",
             "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
             "type": "urn:nlp-types:category",
             "system": "places"
           },
           "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
           "vicinity": "1520 Main St<br/>Dallas, TX 75201",
           "having": [],
           "type": "urn:nlp-types:place",
           "href": "https://places.demo.api.here.com/places/v1/places/8409vg4m-f235df086ea043028c8f0536db9a2106;context=Zmxvdy1pZD1hZGZjMDBhYi1mOTE2LTUwMTMtOWFiNy1lNjZhNzI5OTFhYTRfMTUzNjM2MTgxMzE4OV8wXzg3MSZyYW5rPTY?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
           "tags": [
             {
               "id": "american",
               "title": "American",
               "group": "cuisine"
             },
             {
               "id": "american-southwestern",
               "title": "American - Southwestern",
               "group": "cuisine"
             },
             {
               "id": "grill",
               "title": "Grill",
               "group": "cuisine"
             },
             {
               "id": "mexican",
               "title": "Mexican",
               "group": "cuisine"
             },
             {
               "id": "natural-healthy",
               "title": "Natural/Healthy",
               "group": "cuisine"
             }
           ],
           "id": "8409vg4m-f235df086ea043028c8f0536db9a2106",
           "openingHours": {
             "text": "Mon-Wed: 11:00 - 22:00<br/>Thu-Sat: 11:00 - 23:00<br/>Sun: 10:00 - 22:00",
             "label": "Opening hours",
             "isOpen": true,
             "structured": [
               {
                 "start": "T110000",
                 "duration": "PT11H00M",
                 "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE"
               },
               {
                 "start": "T110000",
                 "duration": "PT12H00M",
                 "recurrence": "FREQ:DAILY;BYDAY:TH,FR,SA"
               },
               {
                 "start": "T100000",
                 "duration": "PT12H00M",
                 "recurrence": "FREQ:DAILY;BYDAY:SU"
               }
             ]
           },
           "alternativeNames": [
             {
               "name": "Iron Cactus Mexican Grill and Margarita Bar",
               "language": "en"
             },
             {
               "name": "Iron Cactus Mexican Restaurant, Grill and Margarita Bar",
               "language": "en"
             }
           ]
         },
         {
           "position": [
             32.78162,
             -96.79653
           ],
           "distance": 189,
           "title": "Dallas Chop House",
           "averageRating": 0,
           "category": {
             "id": "restaurant",
             "title": "Restaurant",
             "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
             "type": "urn:nlp-types:category",
             "system": "places"
           },
           "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
           "vicinity": "1717 Main St<br/>Dallas, TX 75201",
           "having": [],
           "type": "urn:nlp-types:place",
           "href": "https://places.demo.api.here.com/places/v1/places/8409vg4m-2799480eb8cd457eafb06e310822757f;context=Zmxvdy1pZD1hZGZjMDBhYi1mOTE2LTUwMTMtOWFiNy1lNjZhNzI5OTFhYTRfMTUzNjM2MTgxMzE4OV8wXzg3MSZyYW5rPTc?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
           "tags": [
             {
               "id": "american",
               "title": "American",
               "group": "cuisine"
             },
             {
               "id": "steak",
               "title": "Steak",
               "group": "cuisine"
             }
           ],
           "id": "8409vg4m-2799480eb8cd457eafb06e310822757f",
           "openingHours": {
             "text": "Mon-Thu: 11:00 - 14:00<br/>Fri, Sat: 17:00 - 23:00",
             "label": "Opening hours",
             "isOpen": true,
             "structured": [
               {
                 "start": "T110000",
                 "duration": "PT03H00M",
                 "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH"
               },
               {
                 "start": "T170000",
                 "duration": "PT06H00M",
                 "recurrence": "FREQ:DAILY;BYDAY:FR,SA"
               }
             ]
           },
           "alternativeNames": [
             {
               "name": "Dallas Steak & Chop House",
               "language": "en"
             }
           ]
         },
         {
           "position": [
             32.78078,
             -96.79675
           ],
           "distance": 195,
           "title": "Wild Salsa",
           "averageRating": 0,
           "category": {
             "id": "restaurant",
             "title": "Restaurant",
             "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
             "type": "urn:nlp-types:category",
             "system": "places"
           },
           "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
           "vicinity": "1800 Main St<br/>Dallas, TX 75201",
           "having": [],
           "type": "urn:nlp-types:place",
           "href": "https://places.demo.api.here.com/places/v1/places/8409vg4m-a0184746e1304544bce9adcefd936253;context=Zmxvdy1pZD1hZGZjMDBhYi1mOTE2LTUwMTMtOWFiNy1lNjZhNzI5OTFhYTRfMTUzNjM2MTgxMzE4OV8wXzg3MSZyYW5rPTg?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
           "tags": [
             {
               "id": "international",
               "title": "International",
               "group": "cuisine"
             },
             {
               "id": "mexican",
               "title": "Mexican",
               "group": "cuisine"
             },
             {
               "id": "organic",
               "title": "Organic",
               "group": "cuisine"
             }
           ],
           "id": "8409vg4m-a0184746e1304544bce9adcefd936253",
           "openingHours": {
             "text": "Mon-Thu: 11:00 - 22:00<br/>Fri, Sat: 11:00 - 23:00",
             "label": "Opening hours",
             "isOpen": true,
             "structured": [
               {
                 "start": "T110000",
                 "duration": "PT11H00M",
                 "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH"
               },
               {
                 "start": "T110000",
                 "duration": "PT12H00M",
                 "recurrence": "FREQ:DAILY;BYDAY:FR,SA"
               }
             ]
           }
         },
         {
           "position": [
             32.78235,
             -96.79653
           ],
           "distance": 204,
           "title": "Sushiyaa",
           "averageRating": 0,
           "category": {
             "id": "snacks-fast-food",
             "title": "Snacks/Fast food",
             "href": "https://places.demo.api.here.com/places/v1/categories/places/snacks-fast-food?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
             "type": "urn:nlp-types:category",
             "system": "places"
           },
           "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
           "vicinity": "1700 Pacific Ave<br/>Dallas, TX 75201",
           "having": [],
           "type": "urn:nlp-types:place",
           "href": "https://places.demo.api.here.com/places/v1/places/8409vg4m-1c5f02130cc04b53b68ac2d6dadc7d8a;context=Zmxvdy1pZD1hZGZjMDBhYi1mOTE2LTUwMTMtOWFiNy1lNjZhNzI5OTFhYTRfMTUzNjM2MTgxMzE4OV8wXzg3MSZyYW5rPTk?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
           "tags": [
             {
               "id": "asian",
               "title": "Asian",
               "group": "cuisine"
             },
             {
               "id": "japanese",
               "title": "Japanese",
               "group": "cuisine"
             },
             {
               "id": "sushi",
               "title": "Japanese - Sushi",
               "group": "cuisine"
             }
           ],
           "id": "8409vg4m-1c5f02130cc04b53b68ac2d6dadc7d8a",
           "openingHours": {
             "text": "Mon-Fri: 11:00 - 15:00",
             "label": "Opening hours",
             "isOpen": false,
             "structured": [
               {
                 "start": "T110000",
                 "duration": "PT04H00M",
                 "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH,FR"
               }
             ]
           },
           "alternativeNames": [
             {
               "name": "SushiYAA (Dallas)",
               "language": "en"
             }
           ]
         },
         {
           "position": [
             32.78022,
             -96.80008
           ],
           "distance": 215,
           "title": "City Tavern",
           "averageRating": 0,
           "category": {
             "id": "theatre-music-culture",
             "title": "Theater, Music & Culture",
             "href": "https://places.demo.api.here.com/places/v1/categories/places/theatre-music-culture?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
             "type": "urn:nlp-types:category",
             "system": "places"
           },
           "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/05.icon",
           "vicinity": "1402 Main St<br/>Dallas, TX 75202",
           "having": [],
           "type": "urn:nlp-types:place",
           "href": "https://places.demo.api.here.com/places/v1/places/8409vg4m-e9b3d42331234eecb0c1b8100823b389;context=Zmxvdy1pZD1hZGZjMDBhYi1mOTE2LTUwMTMtOWFiNy1lNjZhNzI5OTFhYTRfMTUzNjM2MTgxMzE4OV8wXzg3MSZyYW5rPTEw?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
           "tags": [
             {
               "id": "american",
               "title": "American",
               "group": "cuisine"
             }
           ],
           "id": "8409vg4m-e9b3d42331234eecb0c1b8100823b389",
           "openingHours": {
             "text": "Mon-Fri: 10:00 - 22:00<br/>Sat, Sun: 09:00 - 23:00",
             "label": "Opening hours",
             "isOpen": true,
             "structured": [
               {
                 "start": "T100000",
                 "duration": "PT12H00M",
                 "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH,FR"
               },
               {
                 "start": "T090000",
                 "duration": "PT14H00M",
                 "recurrence": "FREQ:DAILY;BYDAY:SA,SU"
               }
             ]
           }
         },
         {
           "position": [
             32.77979,
             -96.79956
           ],
           "distance": 229,
           "title": "French Room",
           "averageRating": 0,
           "category": {
             "id": "restaurant",
             "title": "Restaurant",
             "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
             "type": "urn:nlp-types:category",
             "system": "places"
           },
           "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
           "vicinity": "1321 Commerce St<br/>Dallas, TX 75202",
           "having": [],
           "type": "urn:nlp-types:place",
           "href": "https://places.demo.api.here.com/places/v1/places/8409vg4m-837c3af637c14ac184f5b132392d5729;context=Zmxvdy1pZD1hZGZjMDBhYi1mOTE2LTUwMTMtOWFiNy1lNjZhNzI5OTFhYTRfMTUzNjM2MTgxMzE4OV8wXzg3MSZyYW5rPTEx?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
           "tags": [
             {
               "id": "american",
               "title": "American",
               "group": "cuisine"
             },
             {
               "id": "french",
               "title": "French",
               "group": "cuisine"
             }
           ],
           "id": "8409vg4m-837c3af637c14ac184f5b132392d5729",
           "openingHours": {
             "text": "Tue-Sat: 17:00 - 22:00",
             "label": "Opening hours",
             "isOpen": true,
             "structured": [
               {
                 "start": "T170000",
                 "duration": "PT05H00M",
                 "recurrence": "FREQ:DAILY;BYDAY:TU,WE,TH,FR,SA"
               }
             ]
           }
         },
         {
           "position": [
             32.780911,
             -96.801015
           ],
           "distance": 245,
           "title": "Enchilada\'s",
           "averageRating": 0,
           "category": {
             "id": "restaurant",
             "title": "Restaurant",
             "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
             "type": "urn:nlp-types:category",
             "system": "places"
           },
           "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
           "vicinity": "1304 Elm St<br/>Dallas, TX 75202",
           "having": [],
           "type": "urn:nlp-types:place",
           "href": "https://places.demo.api.here.com/places/v1/places/8409vg4m-a146bdedad6a4008b43d455ad4b69ab9;context=Zmxvdy1pZD1hZGZjMDBhYi1mOTE2LTUwMTMtOWFiNy1lNjZhNzI5OTFhYTRfMTUzNjM2MTgxMzE4OV8wXzg3MSZyYW5rPTEy?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
           "tags": [
             {
               "id": "american",
               "title": "American",
               "group": "cuisine"
             },
             {
               "id": "american-southwestern",
               "title": "American - Southwestern",
               "group": "cuisine"
             },
             {
               "id": "mexican",
               "title": "Mexican",
               "group": "cuisine"
             },
             {
               "id": "natural-healthy",
               "title": "Natural/Healthy",
               "group": "cuisine"
             }
           ],
           "id": "8409vg4m-a146bdedad6a4008b43d455ad4b69ab9",
           "openingHours": {
             "text": "Mon-Thu: 11:00 - 21:00",
             "label": "Opening hours",
             "isOpen": false,
             "structured": [
               {
                 "start": "T110000",
                 "duration": "PT10H00M",
                 "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH"
               }
             ]
           },
           "alternativeNames": [
             {
               "name": "Enchilada\'s Restaurant",
               "language": "en"
             },
             {
               "name": "Enchiladas Northwest",
               "language": "en"
             },
             {
               "name": "Enchiladas Restaurants",
               "language": "en"
             }
           ]
         },
         {
           "position": [
             32.7803,
             -96.80087
           ],
           "distance": 264,
           "title": "Ravenna Urban Italian Restaurant",
           "averageRating": 0,
           "category": {
             "id": "snacks-fast-food",
             "title": "Snacks/Fast food",
             "href": "https://places.demo.api.here.com/places/v1/categories/places/snacks-fast-food?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
             "type": "urn:nlp-types:category",
             "system": "places"
           },
           "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
           "vicinity": "1301 Main St<br/>Dallas, TX 75202",
           "having": [],
           "type": "urn:nlp-types:place",
           "href": "https://places.demo.api.here.com/places/v1/places/8409rbr9-e21335ddb43841e2928bac87dd8b215d;context=Zmxvdy1pZD1hZGZjMDBhYi1mOTE2LTUwMTMtOWFiNy1lNjZhNzI5OTFhYTRfMTUzNjM2MTgxMzE4OV8wXzg3MSZyYW5rPTEz?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
           "tags": [
             {
               "id": "american",
               "title": "American",
               "group": "cuisine"
             },
             {
               "id": "californian",
               "title": "American - Californian",
               "group": "cuisine"
             },
             {
               "id": "italian",
               "title": "Italian",
               "group": "cuisine"
             },
             {
               "id": "sea-food",
               "title": "Seafood",
               "group": "cuisine"
             },
             {
               "id": "steak",
               "title": "Steak",
               "group": "cuisine"
             }
           ],
           "id": "8409rbr9-e21335ddb43841e2928bac87dd8b215d",
           "openingHours": {
             "text": "Mon-Fri: 11:00 - 02:00<br/>Sat, Sun: 12:00 - 02:00",
             "label": "Opening hours",
             "isOpen": true,
             "structured": [
               {
                 "start": "T110000",
                 "duration": "PT15H00M",
                 "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH,FR"
               },
               {
                 "start": "T120000",
                 "duration": "PT14H00M",
                 "recurrence": "FREQ:DAILY;BYDAY:SA,SU"
               }
             ]
           },
           "alternativeNames": [
             {
               "name": "Ravenna Italian Grille & Bar",
               "language": "en"
             }
           ]
         },
         {
           "position": [
             32.784148,
             -96.797508
           ],
           "distance": 293,
           "title": "7-Eleven",
           "averageRating": 0,
           "category": {
             "id": "kiosk-convenience-store",
             "title": "24-7/Convenience Store",
             "href": "https://places.demo.api.here.com/places/v1/categories/places/kiosk-convenience-store?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
             "type": "urn:nlp-types:category",
             "system": "places"
           },
           "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/09.icon",
           "vicinity": "1919 Bryan St<br/>Dallas, TX 75201",
           "having": [],
           "type": "urn:nlp-types:place",
           "href": "https://places.demo.api.here.com/places/v1/places/840jx7ps-8b3a941c7a4400a020957eb4d216eac2;context=Zmxvdy1pZD1hZGZjMDBhYi1mOTE2LTUwMTMtOWFiNy1lNjZhNzI5OTFhYTRfMTUzNjM2MTgxMzE4OV8wXzg3MSZyYW5rPTE0?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
           "id": "840jx7ps-8b3a941c7a4400a020957eb4d216eac2",
           "openingHours": {
             "text": "Mon-Sun: 00:00 - 24:00",
             "label": "Opening hours",
             "isOpen": true,
             "structured": [
               {
                 "start": "T000000",
                 "duration": "PT24H00M",
                 "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH,FR,SA,SU"
               }
             ]
           },
           "chainIds": [
             "425"
           ]
         },
         {
           "position": [
             32.77966,
             -96.800773
           ],
           "distance": 305,
           "title": "7-Eleven",
           "averageRating": 0,
           "category": {
             "id": "kiosk-convenience-store",
             "title": "24-7/Convenience Store",
             "href": "https://places.demo.api.here.com/places/v1/categories/places/kiosk-convenience-store?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
             "type": "urn:nlp-types:category",
             "system": "places"
           },
           "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/09.icon",
           "vicinity": "1295 Commerce St<br/>Dallas, TX 75202",
           "having": [],
           "type": "urn:nlp-types:place",
           "href": "https://places.demo.api.here.com/places/v1/places/8409vg4m-50164dc39f074e20b609d6300eb8aaa7;context=Zmxvdy1pZD1hZGZjMDBhYi1mOTE2LTUwMTMtOWFiNy1lNjZhNzI5OTFhYTRfMTUzNjM2MTgxMzE4OV8wXzg3MSZyYW5rPTE1?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
           "id": "8409vg4m-50164dc39f074e20b609d6300eb8aaa7",
           "openingHours": {
             "text": "Mon-Sun: 00:00 - 24:00",
             "label": "Opening hours",
             "isOpen": true,
             "structured": [
               {
                 "start": "T000000",
                 "duration": "PT24H00M",
                 "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH,FR,SA,SU"
               }
             ]
           },
           "chainIds": [
             "425"
           ]
         },
         {
           "position": [
             32.78383,
             -96.80066
           ],
           "distance": 311,
           "title": "7-Eleven",
           "averageRating": 0,
           "category": {
             "id": "kiosk-convenience-store",
             "title": "24-7/Convenience Store",
             "href": "https://places.demo.api.here.com/places/v1/categories/places/kiosk-convenience-store?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
             "type": "urn:nlp-types:category",
             "system": "places"
           },
           "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/09.icon",
           "vicinity": "511 N Akard St<br/>Dallas, TX 75201",
           "having": [],
           "type": "urn:nlp-types:place",
           "href": "https://places.demo.api.here.com/places/v1/places/840jx7ps-26204fa9ecf103c8782e9283a9c8aaf0;context=Zmxvdy1pZD1hZGZjMDBhYi1mOTE2LTUwMTMtOWFiNy1lNjZhNzI5OTFhYTRfMTUzNjM2MTgxMzE4OV8wXzg3MSZyYW5rPTE2?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
           "id": "840jx7ps-26204fa9ecf103c8782e9283a9c8aaf0",
           "openingHours": {
             "text": "Mon-Sun: 00:00 - 24:00",
             "label": "Opening hours",
             "isOpen": true,
             "structured": [
               {
                 "start": "T000000",
                 "duration": "PT24H00M",
                 "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH,FR,SA,SU"
               }
             ]
           },
           "chainIds": [
             "425"
           ]
         },
         {
           "position": [
             32.78045,
             -96.80207
           ],
           "distance": 355,
           "title": "Grill & Vine",
           "averageRating": 0,
           "category": {
             "id": "restaurant",
             "title": "Restaurant",
             "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
             "type": "urn:nlp-types:category",
             "system": "places"
           },
           "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
           "vicinity": "1201 Main St<br/>Dallas, TX 75202",
           "having": [],
           "type": "urn:nlp-types:place",
           "href": "https://places.demo.api.here.com/places/v1/places/840jx7ps-0c9aed8632c003b8b67c8ec189d4def8;context=Zmxvdy1pZD1hZGZjMDBhYi1mOTE2LTUwMTMtOWFiNy1lNjZhNzI5OTFhYTRfMTUzNjM2MTgxMzE4OV8wXzg3MSZyYW5rPTE3?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
           "tags": [
             {
               "id": "american",
               "title": "American",
               "group": "cuisine"
             },
             {
               "id": "grill",
               "title": "Grill",
               "group": "cuisine"
             }
           ],
           "id": "840jx7ps-0c9aed8632c003b8b67c8ec189d4def8",
           "openingHours": {
             "text": "Mon-Sun: 06:00 - 01:00",
             "label": "Opening hours",
             "isOpen": true,
             "structured": [
               {
                 "start": "T060000",
                 "duration": "PT19H00M",
                 "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH,FR,SA,SU"
               }
             ]
           }
         },
         {
           "position": [
             32.78197,
             -96.79443
           ],
           "distance": 387,
           "title": "Titches Bar & Bistro",
           "averageRating": 0,
           "category": {
             "id": "restaurant",
             "title": "Restaurant",
             "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
             "type": "urn:nlp-types:category",
             "system": "places"
           },
           "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
           "vicinity": "1933 Main St<br/>Dallas, TX 75201",
           "having": [],
           "type": "urn:nlp-types:place",
           "href": "https://places.demo.api.here.com/places/v1/places/8409vg4m-dc7f40b5963d497d8619fef5d638d18b;context=Zmxvdy1pZD1hZGZjMDBhYi1mOTE2LTUwMTMtOWFiNy1lNjZhNzI5OTFhYTRfMTUzNjM2MTgxMzE4OV8wXzg3MSZyYW5rPTE4?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
           "id": "8409vg4m-dc7f40b5963d497d8619fef5d638d18b",
           "openingHours": {
             "text": "Mon-Fri: 06:30 - 11:00<br/>Sat, Sun: 06:30 - 00:00",
             "label": "Opening hours",
             "isOpen": false,
             "structured": [
               {
                 "start": "T063000",
                 "duration": "PT04H30M",
                 "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH,FR"
               },
               {
                 "start": "T063000",
                 "duration": "PT17H30M",
                 "recurrence": "FREQ:DAILY;BYDAY:SA,SU"
               }
             ]
           }
         },
         {
           "position": [
             32.784954,
             -96.800669
           ],
           "distance": 416,
           "title": "Dakota\'s Steakhouse",
           "averageRating": 0,
           "category": {
             "id": "restaurant",
             "title": "Restaurant",
             "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
             "type": "urn:nlp-types:category",
             "system": "places"
           },
           "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
           "vicinity": "600 N Akard St<br/>Dallas, TX 75201",
           "having": [],
           "type": "urn:nlp-types:place",
           "href": "https://places.demo.api.here.com/places/v1/places/8409vg4t-70c27b9a41374290ac9069dbc36bdba4;context=Zmxvdy1pZD1hZGZjMDBhYi1mOTE2LTUwMTMtOWFiNy1lNjZhNzI5OTFhYTRfMTUzNjM2MTgxMzE4OV8wXzg3MSZyYW5rPTE5?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
           "tags": [
             {
               "id": "american",
               "title": "American",
               "group": "cuisine"
             },
             {
               "id": "steak",
               "title": "Steak",
               "group": "cuisine"
             }
           ],
           "id": "8409vg4t-70c27b9a41374290ac9069dbc36bdba4",
           "openingHours": {
             "text": "Mon-Fri: 11:00 - 14:30<br/>Sat: 17:00 - 22:30",
             "label": "Opening hours",
             "isOpen": false,
             "structured": [
               {
                 "start": "T110000",
                 "duration": "PT03H30M",
                 "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH,FR"
               },
               {
                 "start": "T170000",
                 "duration": "PT05H30M",
                 "recurrence": "FREQ:DAILY;BYDAY:SA"
               }
             ]
           },
           "alternativeNames": [
             {
               "name": "Dakota\'s Restaurant",
               "language": "en"
             },
             {
               "name": "Dakotas Restaurant",
               "language": "en"
             }
           ]
         }
       ]
     },
     "search": {
       "context": {
         "location": {
           "position": [
             32.781666,
             -96.798554
           ],
           "address": {
             "text": "Dallas, TX 75201<br/>USA",
             "postalCode": "75201",
             "district": "Historic District",
             "city": "Dallas",
             "county": "Dallas",
             "stateCode": "TX",
             "country": "United States",
             "countryCode": "USA"
           }
         },
         "type": "urn:nlp-types:place",
         "href": "https://places.demo.api.here.com/places/v1/places/loc-dmVyc2lvbj0xO3RpdGxlPUhpc3RvcmljK0Rpc3RyaWN0O2xhdD0zMi43ODE2NjY7bG9uPS05Ni43OTg1NTQ7Y2l0eT1EYWxsYXM7cG9zdGFsQ29kZT03NTIwMTtjb3VudHJ5PVVTQTtkaXN0cmljdD1IaXN0b3JpYytEaXN0cmljdDtzdGF0ZUNvZGU9VFg7Y291bnR5PURhbGxhcztjYXRlZ29yeUlkPWNpdHktdG93bi12aWxsYWdlO3NvdXJjZVN5c3RlbT1pbnRlcm5hbA;context=c2VhcmNoQ29udGV4dD0x?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg"
       }
     }
   }';
  echo "<div style='display:flex;flex-wrap:wrap;'>";
    $restaurantsObj = json_decode($somevar);
    foreach($restaurantsObj->results->items as $key => $restaurantItems){
    
      if($restaurantItems->category->id == 'restaurant'){
        echo "<div style='padding:15px;width:25%;border:1px solid red;'>";
          echo "<h3>{$restaurantItems->title}</h3>";
          echo "<p style='font-family:Arial,verdana,sans-serif'>{$restaurantItems->category->id}</p>";
        echo "</div>";
      }
    }
  echo "</div>";

  echo "<div style='display:flex;flex-wrap:wrap;background:#0B476D;margin-top:50px;color:#CEF19E;'>";
  $restaurantsObj = json_decode($somevar);
  $fastFood = 'background:#A7DDA7;color:#fff;';
  foreach($restaurantsObj->results->items as $key => $restaurantItems){
    $style = ($restaurantItems->category->id != 'restaurant' ? $fastFood : '');
    echo "<div style='padding:15px;width:25%;border:1px solid #78BE97;".$style."'>";
      echo "<h3>{$restaurantItems->title}</h3>";
      echo "<p style='font-family:Arial,verdana,sans-serif'>{$restaurantItems->category->id}</p>";
    echo "</div>";
  }
echo "</div>";

?>