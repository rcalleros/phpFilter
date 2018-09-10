<?php
 //   $ThanksgivingTowerCoordinates = '32.781666,-96.798554';//thanksgiving tower

//https://places.demo.api.here.com/places/v1/discover/here?at=32.781666%2C-96.798554;r=4828.03&cat=eat-drink&app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg
//austinDogwoodbar: https://places.demo.api.here.com/places/v1/discover/here?at=30.269890%2C-97.750280cat=eat-drink&app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg
Class FilterApp {
  public  $ThanksgivingTowerDataString = '
  {
    "results": {
      "next": "https://places.demo.api.here.com/places/v1/discover/explore;context=Y2F0PXJlc3RhdXJhbnQmZmxvdy1pZD1kNDMyMDk5OS0wZTg0LTVhZmQtODgzZS04OTBkYTVmYzllZWRfMTUzNjYxNjc1NDc5Ml8wXzkxMDMmb2Zmc2V0PTIwJnNpemU9MjA?at=32.781666%2C-96.798554&app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
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
          "href": "https://places.demo.api.here.com/places/v1/places/8409vg4m-9ac96fe695a54c93b5b69844bb8588fd;context=Zmxvdy1pZD1kNDMyMDk5OS0wZTg0LTVhZmQtODgzZS04OTBkYTVmYzllZWRfMTUzNjYxNjc1NDc5Ml8wXzkxMDMmcmFuaz0w?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
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
          "href": "https://places.demo.api.here.com/places/v1/places/8409vg4m-01fe61cf86a44c21869d8f276e963043;context=Zmxvdy1pZD1kNDMyMDk5OS0wZTg0LTVhZmQtODgzZS04OTBkYTVmYzllZWRfMTUzNjYxNjc1NDc5Ml8wXzkxMDMmcmFuaz0x?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
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
            "isOpen": false,
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
          "href": "https://places.demo.api.here.com/places/v1/places/8409vg4m-38195fe4a9644a16a9c309edd5e5a1ea;context=Zmxvdy1pZD1kNDMyMDk5OS0wZTg0LTVhZmQtODgzZS04OTBkYTVmYzllZWRfMTUzNjYxNjc1NDc5Ml8wXzkxMDMmcmFuaz0y?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
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
          "href": "https://places.demo.api.here.com/places/v1/places/8409vg4m-1056dc140dd94587a24feef82a5d7b07;context=Zmxvdy1pZD1kNDMyMDk5OS0wZTg0LTVhZmQtODgzZS04OTBkYTVmYzllZWRfMTUzNjYxNjc1NDc5Ml8wXzkxMDMmcmFuaz0z?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
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
          "href": "https://places.demo.api.here.com/places/v1/places/8409vg4m-db912ac0ec0f4d78ab6e1a4b32e17fa0;context=Zmxvdy1pZD1kNDMyMDk5OS0wZTg0LTVhZmQtODgzZS04OTBkYTVmYzllZWRfMTUzNjYxNjc1NDc5Ml8wXzkxMDMmcmFuaz00?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
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
          "href": "https://places.demo.api.here.com/places/v1/places/840jx7ps-d0ec4ab6c4fe01614fb78a094fd72c56;context=Zmxvdy1pZD1kNDMyMDk5OS0wZTg0LTVhZmQtODgzZS04OTBkYTVmYzllZWRfMTUzNjYxNjc1NDc5Ml8wXzkxMDMmcmFuaz01?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
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
          "href": "https://places.demo.api.here.com/places/v1/places/8409vg4m-f235df086ea043028c8f0536db9a2106;context=Zmxvdy1pZD1kNDMyMDk5OS0wZTg0LTVhZmQtODgzZS04OTBkYTVmYzllZWRfMTUzNjYxNjc1NDc5Ml8wXzkxMDMmcmFuaz02?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
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
          "href": "https://places.demo.api.here.com/places/v1/places/8409vg4m-2799480eb8cd457eafb06e310822757f;context=Zmxvdy1pZD1kNDMyMDk5OS0wZTg0LTVhZmQtODgzZS04OTBkYTVmYzllZWRfMTUzNjYxNjc1NDc5Ml8wXzkxMDMmcmFuaz03?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
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
            "isOpen": false,
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
          "href": "https://places.demo.api.here.com/places/v1/places/8409vg4m-a0184746e1304544bce9adcefd936253;context=Zmxvdy1pZD1kNDMyMDk5OS0wZTg0LTVhZmQtODgzZS04OTBkYTVmYzllZWRfMTUzNjYxNjc1NDc5Ml8wXzkxMDMmcmFuaz04?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
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
          "href": "https://places.demo.api.here.com/places/v1/places/8409vg4m-1c5f02130cc04b53b68ac2d6dadc7d8a;context=Zmxvdy1pZD1kNDMyMDk5OS0wZTg0LTVhZmQtODgzZS04OTBkYTVmYzllZWRfMTUzNjYxNjc1NDc5Ml8wXzkxMDMmcmFuaz05?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
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
          "href": "https://places.demo.api.here.com/places/v1/places/8409vg4m-e9b3d42331234eecb0c1b8100823b389;context=Zmxvdy1pZD1kNDMyMDk5OS0wZTg0LTVhZmQtODgzZS04OTBkYTVmYzllZWRfMTUzNjYxNjc1NDc5Ml8wXzkxMDMmcmFuaz0xMA?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
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
          "href": "https://places.demo.api.here.com/places/v1/places/8409vg4m-837c3af637c14ac184f5b132392d5729;context=Zmxvdy1pZD1kNDMyMDk5OS0wZTg0LTVhZmQtODgzZS04OTBkYTVmYzllZWRfMTUzNjYxNjc1NDc5Ml8wXzkxMDMmcmFuaz0xMQ?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
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
            "isOpen": false,
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
          "href": "https://places.demo.api.here.com/places/v1/places/8409vg4m-a146bdedad6a4008b43d455ad4b69ab9;context=Zmxvdy1pZD1kNDMyMDk5OS0wZTg0LTVhZmQtODgzZS04OTBkYTVmYzllZWRfMTUzNjYxNjc1NDc5Ml8wXzkxMDMmcmFuaz0xMg?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
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
            "isOpen": true,
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
          "href": "https://places.demo.api.here.com/places/v1/places/8409rbr9-e21335ddb43841e2928bac87dd8b215d;context=Zmxvdy1pZD1kNDMyMDk5OS0wZTg0LTVhZmQtODgzZS04OTBkYTVmYzllZWRfMTUzNjYxNjc1NDc5Ml8wXzkxMDMmcmFuaz0xMw?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
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
          "href": "https://places.demo.api.here.com/places/v1/places/840jx7ps-8b3a941c7a4400a020957eb4d216eac2;context=Zmxvdy1pZD1kNDMyMDk5OS0wZTg0LTVhZmQtODgzZS04OTBkYTVmYzllZWRfMTUzNjYxNjc1NDc5Ml8wXzkxMDMmcmFuaz0xNA?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
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
          "href": "https://places.demo.api.here.com/places/v1/places/8409vg4m-50164dc39f074e20b609d6300eb8aaa7;context=Zmxvdy1pZD1kNDMyMDk5OS0wZTg0LTVhZmQtODgzZS04OTBkYTVmYzllZWRfMTUzNjYxNjc1NDc5Ml8wXzkxMDMmcmFuaz0xNQ?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
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
          "href": "https://places.demo.api.here.com/places/v1/places/840jx7ps-26204fa9ecf103c8782e9283a9c8aaf0;context=Zmxvdy1pZD1kNDMyMDk5OS0wZTg0LTVhZmQtODgzZS04OTBkYTVmYzllZWRfMTUzNjYxNjc1NDc5Ml8wXzkxMDMmcmFuaz0xNg?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
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
          "href": "https://places.demo.api.here.com/places/v1/places/840jx7ps-0c9aed8632c003b8b67c8ec189d4def8;context=Zmxvdy1pZD1kNDMyMDk5OS0wZTg0LTVhZmQtODgzZS04OTBkYTVmYzllZWRfMTUzNjYxNjc1NDc5Ml8wXzkxMDMmcmFuaz0xNw?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
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
          "href": "https://places.demo.api.here.com/places/v1/places/8409vg4m-dc7f40b5963d497d8619fef5d638d18b;context=Zmxvdy1pZD1kNDMyMDk5OS0wZTg0LTVhZmQtODgzZS04OTBkYTVmYzllZWRfMTUzNjYxNjc1NDc5Ml8wXzkxMDMmcmFuaz0xOA?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
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
          "href": "https://places.demo.api.here.com/places/v1/places/8409vg4t-70c27b9a41374290ac9069dbc36bdba4;context=Zmxvdy1pZD1kNDMyMDk5OS0wZTg0LTVhZmQtODgzZS04OTBkYTVmYzllZWRfMTUzNjYxNjc1NDc5Ml8wXzkxMDMmcmFuaz0xOQ?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
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
  public $DogWoodDataString = '
  {
    "results": {
      "next": "https://places.demo.api.here.com/places/v1/discover/explore;context=Y2F0PXJlc3RhdXJhbnQmZmxvdy1pZD05NTFhMjBkNi1jYmU4LTVjMGUtYTI5Yy01YTY0ZTJkOGZiNjNfMTUzNjYyMDA5MTIzM18wXzc5NzAmb2Zmc2V0PTIwJnNpemU9MjA?at=33.107504%2C-96.829027&app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
      "items": [
        {
          "position": [
            33.10746,
            -96.82882
          ],
          "distance": 20,
          "title": "Da Mario",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "6655 Winning Dr<br/>Frisco, TX 75034",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghk-530a4bd560c04838a33ec00509b73ddd;context=Zmxvdy1pZD05NTFhMjBkNi1jYmU4LTVjMGUtYTI5Yy01YTY0ZTJkOGZiNjNfMTUzNjYyMDA5MTIzM18wXzc5NzAmcmFuaz0w?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
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
          "id": "8409vghk-530a4bd560c04838a33ec00509b73ddd",
          "alternativeNames": [
            {
              "name": "Da Mario Restaurant",
              "language": "en"
            }
          ]
        },
        {
          "position": [
            33.10738,
            -96.828846
          ],
          "distance": 22,
          "title": "Zaytinya",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "6655 Winning Dr<br/>Frisco, TX",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghk-f2b46360238647478367a51cd5576490;context=Zmxvdy1pZD05NTFhMjBkNi1jYmU4LTVjMGUtYTI5Yy01YTY0ZTJkOGZiNjNfMTUzNjYyMDA5MTIzM18wXzc5NzAmcmFuaz0x?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "tags": [
            {
              "id": "international",
              "title": "International",
              "group": "cuisine"
            },
            {
              "id": "steak",
              "title": "Steak",
              "group": "cuisine"
            }
          ],
          "id": "8409vghk-f2b46360238647478367a51cd5576490",
          "openingHours": {
            "text": "Mon, Sun: 11:00 - 22:00<br/>Tue-Fri: 11:00 - 23:00<br/>Sat: 11:00 - 00:00",
            "label": "Opening hours",
            "isOpen": true,
            "structured": [
              {
                "start": "T110000",
                "duration": "PT11H00M",
                "recurrence": "FREQ:DAILY;BYDAY:MO,SU"
              },
              {
                "start": "T110000",
                "duration": "PT12H00M",
                "recurrence": "FREQ:DAILY;BYDAY:TU,WE,TH,FR"
              },
              {
                "start": "T110000",
                "duration": "PT13H00M",
                "recurrence": "FREQ:DAILY;BYDAY:SA"
              }
            ]
          }
        },
        {
          "position": [
            33.107612,
            -96.828659
          ],
          "distance": 36,
          "title": "Dee Lincoln Prime",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "6670 Winning Dr<br/>Frisco, TX",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghk-c843cc96e41c4d43bdc3068c9bcdb6e0;context=Zmxvdy1pZD05NTFhMjBkNi1jYmU4LTVjMGUtYTI5Yy01YTY0ZTJkOGZiNjNfMTUzNjYyMDA5MTIzM18wXzc5NzAmcmFuaz0y?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "tags": [
            {
              "id": "asian",
              "title": "Asian",
              "group": "cuisine"
            },
            {
              "id": "chinese",
              "title": "Chinese",
              "group": "cuisine"
            }
          ],
          "id": "8409vghk-c843cc96e41c4d43bdc3068c9bcdb6e0",
          "openingHours": {
            "text": "Mon-Thu: 16:00 - 22:00<br/>Fri, Sat: 16:00 - 23:00",
            "label": "Opening hours",
            "isOpen": true,
            "structured": [
              {
                "start": "T160000",
                "duration": "PT06H00M",
                "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH"
              },
              {
                "start": "T160000",
                "duration": "PT07H00M",
                "recurrence": "FREQ:DAILY;BYDAY:FR,SA"
              }
            ]
          }
        },
        {
          "position": [
            33.1074,
            -96.82773
          ],
          "distance": 121,
          "title": "Tupelo Honey Southern Kitchen & Bar",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "6725 Winning Dr<br/>Frisco, TX 75034",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghk-b145d362db6d44e2b8a2cd52b582e08c;context=Zmxvdy1pZD05NTFhMjBkNi1jYmU4LTVjMGUtYTI5Yy01YTY0ZTJkOGZiNjNfMTUzNjYyMDA5MTIzM18wXzc5NzAmcmFuaz0z?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "tags": [
            {
              "id": "american",
              "title": "American",
              "group": "cuisine"
            },
            {
              "id": "barbecue",
              "title": "Barbecue",
              "group": "cuisine"
            },
            {
              "id": "breakfast",
              "title": "Breakfast",
              "group": "cuisine"
            }
          ],
          "id": "8409vghk-b145d362db6d44e2b8a2cd52b582e08c",
          "openingHours": {
            "text": "Mon-Fri: 11:00 - 22:00<br/>Sat, Sun: 10:00 - 22:00",
            "label": "Opening hours",
            "isOpen": true,
            "structured": [
              {
                "start": "T110000",
                "duration": "PT11H00M",
                "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH,FR"
              },
              {
                "start": "T100000",
                "duration": "PT12H00M",
                "recurrence": "FREQ:DAILY;BYDAY:SA,SU"
              }
            ]
          },
          "alternativeNames": [
            {
              "name": "Tupelo Honey",
              "language": "en"
            }
          ]
        },
        {
          "position": [
            33.10877,
            -96.82815
          ],
          "distance": 163,
          "title": "City Works Eatery & Pour House",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "3680 The Star Blvd<br/>Frisco, TX 75034",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghk-fb7792c72bd44765bcd78b4cac99f578;context=Zmxvdy1pZD05NTFhMjBkNi1jYmU4LTVjMGUtYTI5Yy01YTY0ZTJkOGZiNjNfMTUzNjYyMDA5MTIzM18wXzc5NzAmcmFuaz00?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "tags": [
            {
              "id": "american",
              "title": "American",
              "group": "cuisine"
            },
            {
              "id": "brewpub",
              "title": "Brewpub",
              "group": "cuisine"
            }
          ],
          "id": "8409vghk-fb7792c72bd44765bcd78b4cac99f578",
          "alternativeNames": [
            {
              "name": "City Works - Frisco",
              "language": "en"
            }
          ]
        },
        {
          "position": [
            33.10614,
            -96.82526
          ],
          "distance": 382,
          "title": "Texadelphia",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "6851 Warren Pkwy<br/>Frisco, TX 75034",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/840jx7ps-c4fd36c95ee8079f4a24074d39355386;context=Zmxvdy1pZD05NTFhMjBkNi1jYmU4LTVjMGUtYTI5Yy01YTY0ZTJkOGZiNjNfMTUzNjYyMDA5MTIzM18wXzc5NzAmcmFuaz01?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "tags": [
            {
              "id": "american",
              "title": "American",
              "group": "cuisine"
            },
            {
              "id": "sandwich",
              "title": "Sandwiches",
              "group": "cuisine"
            }
          ],
          "id": "840jx7ps-c4fd36c95ee8079f4a24074d39355386",
          "openingHours": {
            "text": "Mon-Sun: 11:00 - 21:00",
            "label": "Opening hours",
            "isOpen": true,
            "structured": [
              {
                "start": "T110000",
                "duration": "PT10H00M",
                "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH,FR,SA,SU"
              }
            ]
          }
        },
        {
          "position": [
            33.106825,
            -96.818323
          ],
          "distance": 1000,
          "title": "Nest Cafe",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "7777 Warren Pkwy<br/>Frisco, TX 75034",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghk-602b78e667864a75a04e973321c6fff0;context=Zmxvdy1pZD05NTFhMjBkNi1jYmU4LTVjMGUtYTI5Yy01YTY0ZTJkOGZiNjNfMTUzNjYyMDA5MTIzM18wXzc5NzAmcmFuaz02?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "tags": [
            {
              "id": "breakfast",
              "title": "Breakfast",
              "group": "cuisine"
            },
            {
              "id": "brunch",
              "title": "Brunch",
              "group": "cuisine"
            },
            {
              "id": "sandwich",
              "title": "Sandwiches",
              "group": "cuisine"
            }
          ],
          "id": "8409vghk-602b78e667864a75a04e973321c6fff0",
          "openingHours": {
            "text": "Mon-Fri: 07:00 - 03:00<br/>Sat, Sun: 08:00 - 03:00",
            "label": "Opening hours",
            "isOpen": true,
            "structured": [
              {
                "start": "T070000",
                "duration": "PT20H00M",
                "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH,FR"
              },
              {
                "start": "T080000",
                "duration": "PT19H00M",
                "recurrence": "FREQ:DAILY;BYDAY:SA,SU"
              }
            ]
          }
        },
        {
          "position": [
            33.10678,
            -96.84245
          ],
          "distance": 1253,
          "title": "Black Walnut Cafe",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "5225 Warren Pkwy<br/>Frisco, TX 75034",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/840aabd1-77050f736ea80aa880e33a53e412e2cb;context=Zmxvdy1pZD05NTFhMjBkNi1jYmU4LTVjMGUtYTI5Yy01YTY0ZTJkOGZiNjNfMTUzNjYyMDA5MTIzM18wXzc5NzAmcmFuaz03?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "tags": [
            {
              "id": "american",
              "title": "American",
              "group": "cuisine"
            },
            {
              "id": "breakfast",
              "title": "Breakfast",
              "group": "cuisine"
            },
            {
              "id": "brunch",
              "title": "Brunch",
              "group": "cuisine"
            },
            {
              "id": "international",
              "title": "International",
              "group": "cuisine"
            }
          ],
          "id": "840aabd1-77050f736ea80aa880e33a53e412e2cb",
          "openingHours": {
            "text": "Mon-Thu: 06:30 - 21:30<br/>Fri: 06:30 - 22:30<br/>Sat: 07:00 - 22:30<br/>Sun: 07:00 - 21:30",
            "label": "Opening hours",
            "isOpen": true,
            "structured": [
              {
                "start": "T063000",
                "duration": "PT15H00M",
                "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH"
              },
              {
                "start": "T063000",
                "duration": "PT16H00M",
                "recurrence": "FREQ:DAILY;BYDAY:FR"
              },
              {
                "start": "T070000",
                "duration": "PT15H30M",
                "recurrence": "FREQ:DAILY;BYDAY:SA"
              },
              {
                "start": "T070000",
                "duration": "PT14H30M",
                "recurrence": "FREQ:DAILY;BYDAY:SU"
              }
            ]
          },
          "alternativeNames": [
            {
              "name": "Black Walnut Cafe - Frisco",
              "language": "en"
            }
          ]
        },
        {
          "position": [
            33.11571,
            -96.83934
          ],
          "distance": 1325,
          "title": "McDonald\'s",
          "averageRating": 0,
          "category": {
            "id": "snacks-fast-food",
            "title": "Snacks/Fast food",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/snacks-fast-food?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "4360 Legacy Dr<br/>Frisco, TX 75034",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghk-95936569f16c4ae7ae38757d66f3cec5;context=Zmxvdy1pZD05NTFhMjBkNi1jYmU4LTVjMGUtYTI5Yy01YTY0ZTJkOGZiNjNfMTUzNjYyMDA5MTIzM18wXzc5NzAmcmFuaz04?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "tags": [
            {
              "id": "american",
              "title": "American",
              "group": "cuisine"
            }
          ],
          "id": "8409vghk-95936569f16c4ae7ae38757d66f3cec5",
          "openingHours": {
            "text": "Mon-Thu: 05:00 - 23:00<br/>Fri, Sat: 05:00 - 01:00<br/>Sun: 06:00 - 23:00",
            "label": "Opening hours",
            "isOpen": true,
            "structured": [
              {
                "start": "T050000",
                "duration": "PT18H00M",
                "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH"
              },
              {
                "start": "T050000",
                "duration": "PT20H00M",
                "recurrence": "FREQ:DAILY;BYDAY:FR,SA"
              },
              {
                "start": "T060000",
                "duration": "PT17H00M",
                "recurrence": "FREQ:DAILY;BYDAY:SU"
              }
            ]
          },
          "chainIds": [
            "1566"
          ]
        },
        {
          "position": [
            33.11501,
            -96.84032
          ],
          "distance": 1343,
          "title": "Terry\'s Cafe",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "4275 Legacy Dr<br/>Frisco, TX 75034",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghk-c7163616dd3242a88d3fc0298cf0d815;context=Zmxvdy1pZD05NTFhMjBkNi1jYmU4LTVjMGUtYTI5Yy01YTY0ZTJkOGZiNjNfMTUzNjYyMDA5MTIzM18wXzc5NzAmcmFuaz05?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "id": "8409vghk-c7163616dd3242a88d3fc0298cf0d815"
        },
        {
          "position": [
            33.09975,
            -96.81791
          ],
          "distance": 1347,
          "title": "Caffeina\'s",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "7600 John Q Hammons Dr<br/>Frisco, TX 75034",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghk-4ec414727a2b45cda00020f7f3848aa7;context=Zmxvdy1pZD05NTFhMjBkNi1jYmU4LTVjMGUtYTI5Yy01YTY0ZTJkOGZiNjNfMTUzNjYyMDA5MTIzM18wXzc5NzAmcmFuaz0xMA?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "id": "8409vghk-4ec414727a2b45cda00020f7f3848aa7"
        },
        {
          "position": [
            33.09975,
            -96.81791
          ],
          "distance": 1347,
          "title": "Cyprus Grille",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "7600 John Q Hammons Dr<br/>Frisco, TX 75034",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghk-116d9bd0fe9f483ab804283623da4478;context=Zmxvdy1pZD05NTFhMjBkNi1jYmU4LTVjMGUtYTI5Yy01YTY0ZTJkOGZiNjNfMTUzNjYyMDA5MTIzM18wXzc5NzAmcmFuaz0xMQ?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "tags": [
            {
              "id": "american",
              "title": "American",
              "group": "cuisine"
            }
          ],
          "id": "8409vghk-116d9bd0fe9f483ab804283623da4478"
        },
        {
          "position": [
            33.11569,
            -96.84215
          ],
          "distance": 1524,
          "title": "Taco Bell",
          "averageRating": 0,
          "category": {
            "id": "snacks-fast-food",
            "title": "Snacks/Fast food",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/snacks-fast-food?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "5359 Lebanon Rd<br/>Frisco, TX 75034",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/840jx7ps-1e9241d14cb6059f08ff65c3438d2d81;context=Zmxvdy1pZD05NTFhMjBkNi1jYmU4LTVjMGUtYTI5Yy01YTY0ZTJkOGZiNjNfMTUzNjYyMDA5MTIzM18wXzc5NzAmcmFuaz0xMg?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "tags": [
            {
              "id": "american",
              "title": "American",
              "group": "cuisine"
            }
          ],
          "id": "840jx7ps-1e9241d14cb6059f08ff65c3438d2d81",
          "openingHours": {
            "text": "Mon-Thu, Sun: 07:00 - 00:00<br/>Fri, Sat: 07:00 - 01:00",
            "label": "Opening hours",
            "isOpen": true,
            "structured": [
              {
                "start": "T070000",
                "duration": "PT17H00M",
                "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH,SU"
              },
              {
                "start": "T070000",
                "duration": "PT18H00M",
                "recurrence": "FREQ:DAILY;BYDAY:FR,SA"
              }
            ]
          },
          "chainIds": [
            "1607"
          ]
        },
        {
          "position": [
            33.11543,
            -96.84272
          ],
          "distance": 1550,
          "title": "Sonic Drive-In",
          "averageRating": 0,
          "category": {
            "id": "snacks-fast-food",
            "title": "Snacks/Fast food",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/snacks-fast-food?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "5353 Lebanon Rd<br/>Frisco, TX 75034",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghk-0353b36187de4e0ebcb7e16a2ce4cdd1;context=Zmxvdy1pZD05NTFhMjBkNi1jYmU4LTVjMGUtYTI5Yy01YTY0ZTJkOGZiNjNfMTUzNjYyMDA5MTIzM18wXzc5NzAmcmFuaz0xMw?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "tags": [
            {
              "id": "american",
              "title": "American",
              "group": "cuisine"
            }
          ],
          "id": "8409vghk-0353b36187de4e0ebcb7e16a2ce4cdd1",
          "openingHours": {
            "text": "Mon-Sun: 06:00 - 00:00",
            "label": "Opening hours",
            "isOpen": true,
            "structured": [
              {
                "start": "T060000",
                "duration": "PT18H00M",
                "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH,FR,SA,SU"
              }
            ]
          },
          "chainIds": [
            "1046"
          ]
        },
        {
          "position": [
            33.10229,
            -96.81331
          ],
          "distance": 1575,
          "title": "Irish Rover",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "8250 Gaylord Pkwy<br/>Frisco, TX 75034",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghk-06546b2c4bd748ecbc28805d10c1b179;context=Zmxvdy1pZD05NTFhMjBkNi1jYmU4LTVjMGUtYTI5Yy01YTY0ZTJkOGZiNjNfMTUzNjYyMDA5MTIzM18wXzc5NzAmcmFuaz0xNA?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "tags": [
            {
              "id": "american",
              "title": "American",
              "group": "cuisine"
            },
            {
              "id": "british",
              "title": "British",
              "group": "cuisine"
            },
            {
              "id": "grill",
              "title": "Grill",
              "group": "cuisine"
            },
            {
              "id": "irish",
              "title": "Irish",
              "group": "cuisine"
            }
          ],
          "id": "8409vghk-06546b2c4bd748ecbc28805d10c1b179",
          "openingHours": {
            "text": "Mon-Thu: 11:00 - 00:00<br/>Fri: 11:00 - 02:00<br/>Sat: 10:00 - 02:00<br/>Sun: 10:00 - 00:00",
            "label": "Opening hours",
            "isOpen": true,
            "structured": [
              {
                "start": "T110000",
                "duration": "PT13H00M",
                "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH"
              },
              {
                "start": "T110000",
                "duration": "PT15H00M",
                "recurrence": "FREQ:DAILY;BYDAY:FR"
              },
              {
                "start": "T100000",
                "duration": "PT16H00M",
                "recurrence": "FREQ:DAILY;BYDAY:SA"
              },
              {
                "start": "T100000",
                "duration": "PT14H00M",
                "recurrence": "FREQ:DAILY;BYDAY:SU"
              }
            ]
          },
          "alternativeNames": [
            {
              "name": "Irish Rover - Pub & Restaurant",
              "language": "en"
            },
            {
              "name": "Irish Rover - Restaurant & Sports bar",
              "language": "en"
            },
            {
              "name": "Irish Rover Pub & Restaurant",
              "language": "en"
            }
          ]
        },
        {
          "position": [
            33.11707,
            -96.84199
          ],
          "distance": 1609,
          "title": "Frisco Bar",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "4851 Legacy Dr<br/>Frisco, TX 75034",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghk-f1a99fedd39d4457b6c6c7e7ff70ca3a;context=Zmxvdy1pZD05NTFhMjBkNi1jYmU4LTVjMGUtYTI5Yy01YTY0ZTJkOGZiNjNfMTUzNjYyMDA5MTIzM18wXzc5NzAmcmFuaz0xNQ?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
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
          "id": "8409vghk-f1a99fedd39d4457b6c6c7e7ff70ca3a",
          "openingHours": {
            "text": "Mon-Fri, Sun: 11:00 - 00:00<br/>Sat: 11:00 - 01:00",
            "label": "Opening hours",
            "isOpen": true,
            "structured": [
              {
                "start": "T110000",
                "duration": "PT13H00M",
                "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH,FR,SU"
              },
              {
                "start": "T110000",
                "duration": "PT14H00M",
                "recurrence": "FREQ:DAILY;BYDAY:SA"
              }
            ]
          }
        },
        {
          "position": [
            33.12191,
            -96.82452
          ],
          "distance": 1656,
          "title": "Trufire Kitchen & Bar",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "6959 Lebanon Rd<br/>Frisco, TX 75034",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghk-2811d598174346dbb628577e45a6211a;context=Zmxvdy1pZD05NTFhMjBkNi1jYmU4LTVjMGUtYTI5Yy01YTY0ZTJkOGZiNjNfMTUzNjYyMDA5MTIzM18wXzc5NzAmcmFuaz0xNg?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "tags": [
            {
              "id": "american",
              "title": "American",
              "group": "cuisine"
            },
            {
              "id": "greek",
              "title": "Greek",
              "group": "cuisine"
            },
            {
              "id": "italian",
              "title": "Italian",
              "group": "cuisine"
            },
            {
              "id": "mediterranean",
              "title": "Mediterranean",
              "group": "cuisine"
            }
          ],
          "id": "8409vghk-2811d598174346dbb628577e45a6211a",
          "openingHours": {
            "text": "Mon-Thu: 11:00 - 22:00<br/>Fri: 11:00 - 23:00<br/>Sat: 10:30 - 23:00<br/>Sun: 10:30 - 21:00",
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
                "start": "T103000",
                "duration": "PT12H30M",
                "recurrence": "FREQ:DAILY;BYDAY:SA"
              },
              {
                "start": "T103000",
                "duration": "PT10H30M",
                "recurrence": "FREQ:DAILY;BYDAY:SU"
              }
            ]
          },
          "alternativeNames": [
            {
              "name": "Trufire Kitchen and Bar",
              "language": "en"
            }
          ]
        },
        {
          "position": [
            33.12201,
            -96.82385
          ],
          "distance": 1684,
          "title": "Smashburger",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "6959 Lebanon Rd<br/>Frisco, TX 75034",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghk-42abce622ee54999b123e0aa9da2a91a;context=Zmxvdy1pZD05NTFhMjBkNi1jYmU4LTVjMGUtYTI5Yy01YTY0ZTJkOGZiNjNfMTUzNjYyMDA5MTIzM18wXzc5NzAmcmFuaz0xNw?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "tags": [
            {
              "id": "burger",
              "title": "Burgers",
              "group": "cuisine"
            }
          ],
          "id": "8409vghk-42abce622ee54999b123e0aa9da2a91a",
          "openingHours": {
            "text": "Mon-Thu, Sun: 10:30 - 21:30<br/>Fri, Sat: 10:30 - 22:00",
            "label": "Opening hours",
            "isOpen": true,
            "structured": [
              {
                "start": "T103000",
                "duration": "PT11H00M",
                "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH,SU"
              },
              {
                "start": "T103000",
                "duration": "PT11H30M",
                "recurrence": "FREQ:DAILY;BYDAY:FR,SA"
              }
            ]
          },
          "chainIds": [
            "263"
          ]
        },
        {
          "position": [
            33.100629,
            -96.812842
          ],
          "distance": 1690,
          "title": "In House",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "Frisco, TX 75034",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/840aabd1-269ebc908f080f311d53a139923aa627;context=Zmxvdy1pZD05NTFhMjBkNi1jYmU4LTVjMGUtYTI5Yy01YTY0ZTJkOGZiNjNfMTUzNjYyMDA5MTIzM18wXzc5NzAmcmFuaz0xOA?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "id": "840aabd1-269ebc908f080f311d53a139923aa627"
        },
        {
          "position": [
            33.12196,
            -96.82311
          ],
          "distance": 1699,
          "title": "Bottled in Bond",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "5285 Dallas Pkwy<br/>Frisco, TX 75034",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghk-e0136cb64eb14296a1420dc0fc4e6dff;context=Zmxvdy1pZD05NTFhMjBkNi1jYmU4LTVjMGUtYTI5Yy01YTY0ZTJkOGZiNjNfMTUzNjYyMDA5MTIzM18wXzc5NzAmcmFuaz0xOQ?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "tags": [
            {
              "id": "american",
              "title": "American",
              "group": "cuisine"
            }
          ],
          "id": "8409vghk-e0136cb64eb14296a1420dc0fc4e6dff",
          "openingHours": {
            "text": "Mon-Wed: 16:00 - 00:00<br/>Thu-Sat: 16:00 - 02:00<br/>Sun: 16:00 - 22:00",
            "label": "Opening hours",
            "isOpen": true,
            "structured": [
              {
                "start": "T160000",
                "duration": "PT08H00M",
                "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE"
              },
              {
                "start": "T160000",
                "duration": "PT10H00M",
                "recurrence": "FREQ:DAILY;BYDAY:TH,FR,SA"
              },
              {
                "start": "T160000",
                "duration": "PT06H00M",
                "recurrence": "FREQ:DAILY;BYDAY:SU"
              }
            ]
          },
          "alternativeNames": [
            {
              "name": "Bottled In Bond Cocktail Parlour & Kitchen",
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
            33.107504,
            -96.829027
          ],
          "address": {
            "text": "3451 Avenue of Champions<br/>Frisco, TX 75034<br/>USA",
            "house": "3451",
            "street": "Avenue of Champions",
            "postalCode": "75034",
            "city": "Frisco",
            "county": "Collin",
            "stateCode": "TX",
            "country": "United States",
            "countryCode": "USA"
          }
        },
        "type": "urn:nlp-types:place",
        "href": "https://places.demo.api.here.com/places/v1/places/loc-dmVyc2lvbj0xO3RpdGxlPTM0NTErQXZlbnVlK29mK0NoYW1waW9ucztsYXQ9MzMuMTA3NTA0O2xvbj0tOTYuODI5MDI3O3N0cmVldD1BdmVudWUrb2YrQ2hhbXBpb25zO2hvdXNlPTM0NTE7Y2l0eT1GcmlzY287cG9zdGFsQ29kZT03NTAzNDtjb3VudHJ5PVVTQTtzdGF0ZUNvZGU9VFg7Y291bnR5PUNvbGxpbjtjYXRlZ29yeUlkPWJ1aWxkaW5nO3NvdXJjZVN5c3RlbT1pbnRlcm5hbA;context=c2VhcmNoQ29udGV4dD0x?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg"
      }
    }
  }';
  public $LegacyWestDataString = '{
    "results": {
      "next": "https://places.demo.api.here.com/places/v1/discover/explore;context=Y2F0PXJlc3RhdXJhbnQmZmxvdy1pZD1lZGYzN2IzMi01YzBjLTUzYTMtYTQ2ZS05ZjMwYjAyMTU1ODFfMTUzNjYxNjQwNTY3Nl8wXzc1NTQmb2Zmc2V0PTIwJnNpemU9MjA?at=33.078317%2C-96.826789&app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
      "items": [
        {
          "position": [
            33.0783,
            -96.82622
          ],
          "distance": 53,
          "title": "Del Frisco\'s Double Eagle Steak House",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "5905 Legacy Dr<br/>Plano, TX 75024",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghh-0e7fb83ca6554c789b40a0ef39a8a4f6;context=Zmxvdy1pZD1lZGYzN2IzMi01YzBjLTUzYTMtYTQ2ZS05ZjMwYjAyMTU1ODFfMTUzNjYxNjQwNTY3Nl8wXzc1NTQmcmFuaz0w?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "tags": [
            {
              "id": "american",
              "title": "American",
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
          "id": "8409vghh-0e7fb83ca6554c789b40a0ef39a8a4f6",
          "openingHours": {
            "text": "Mon-Fri: 11:00 - 23:00<br/>Sat: 17:00 - 23:00<br/>Sun: 17:00 - 22:00",
            "label": "Opening hours",
            "isOpen": true,
            "structured": [
              {
                "start": "T110000",
                "duration": "PT12H00M",
                "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH,FR"
              },
              {
                "start": "T170000",
                "duration": "PT06H00M",
                "recurrence": "FREQ:DAILY;BYDAY:SA"
              },
              {
                "start": "T170000",
                "duration": "PT05H00M",
                "recurrence": "FREQ:DAILY;BYDAY:SU"
              }
            ]
          },
          "alternativeNames": [
            {
              "name": "Del Frisco\'s Double Eagle Steakhouse",
              "language": "en"
            },
            {
              "name": "Del Frisco\'s Double Eagle Steak Hou",
              "language": "en"
            }
          ]
        },
        {
          "position": [
            33.07847,
            -96.82749
          ],
          "distance": 67,
          "title": "Bulla Gastrobar",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "6007 Legacy Dr<br/>Plano, TX 75024",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghh-57c5f3694eac42bf8a5da8e2e0aa2d7b;context=Zmxvdy1pZD1lZGYzN2IzMi01YzBjLTUzYTMtYTQ2ZS05ZjMwYjAyMTU1ODFfMTUzNjYxNjQwNTY3Nl8wXzc1NTQmcmFuaz0x?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "id": "8409vghh-57c5f3694eac42bf8a5da8e2e0aa2d7b"
        },
        {
          "position": [
            33.07847,
            -96.82749
          ],
          "distance": 67,
          "title": "Oma",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "Legacy Dr<br/>Plano, TX 75024",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghh-b5bcc2d37ca8421990dae8f5e49de9d5;context=Zmxvdy1pZD1lZGYzN2IzMi01YzBjLTUzYTMtYTQ2ZS05ZjMwYjAyMTU1ODFfMTUzNjYxNjQwNTY3Nl8wXzc1NTQmcmFuaz0y?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "id": "8409vghh-b5bcc2d37ca8421990dae8f5e49de9d5",
          "openingHours": {
            "text": "Mon-Sat: 06:30 - 22:30<br/>Sun: 07:00 - 22:30",
            "label": "Opening hours",
            "isOpen": true,
            "structured": [
              {
                "start": "T063000",
                "duration": "PT16H00M",
                "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH,FR,SA"
              },
              {
                "start": "T070000",
                "duration": "PT15H30M",
                "recurrence": "FREQ:DAILY;BYDAY:SU"
              }
            ]
          }
        },
        {
          "position": [
            33.07977,
            -96.82618
          ],
          "distance": 171,
          "title": "Shake Shack",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "7401 Windrose Ave<br/>Plano, TX 75024",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghh-ff5d96e9e97d470ebfbcc8a445cf1b2d;context=Zmxvdy1pZD1lZGYzN2IzMi01YzBjLTUzYTMtYTQ2ZS05ZjMwYjAyMTU1ODFfMTUzNjYxNjQwNTY3Nl8wXzc1NTQmcmFuaz0z?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
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
              "id": "hotdogs",
              "title": "Hot Dogs",
              "group": "cuisine"
            }
          ],
          "id": "8409vghh-ff5d96e9e97d470ebfbcc8a445cf1b2d"
        },
        {
          "position": [
            33.0788,
            -96.82292
          ],
          "distance": 364,
          "title": "Blue Martini",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "7301 Lone Star Dr<br/>Plano, TX 75024",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/840jx7ps-74741544c94c0444145c372b99402723;context=Zmxvdy1pZD1lZGYzN2IzMi01YzBjLTUzYTMtYTQ2ZS05ZjMwYjAyMTU1ODFfMTUzNjYxNjQwNTY3Nl8wXzc1NTQmcmFuaz00?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "tags": [
            {
              "id": "american",
              "title": "American",
              "group": "cuisine"
            }
          ],
          "id": "840jx7ps-74741544c94c0444145c372b99402723",
          "openingHours": {
            "text": "Mon-Sun: 16:00 - 02:00",
            "label": "Opening hours",
            "isOpen": true,
            "structured": [
              {
                "start": "T160000",
                "duration": "PT10H00M",
                "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH,FR,SA,SU"
              }
            ]
          },
          "alternativeNames": [
            {
              "name": "Blue Martini Lounge",
              "language": "en"
            },
            {
              "name": "Blue Martini Plano",
              "language": "en"
            }
          ]
        },
        {
          "position": [
            33.07833,
            -96.82292
          ],
          "distance": 360,
          "title": "Seasons 52",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "7300 Lone Star Dr<br/>Plano, TX 75024",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghh-55611666e55a4373a6a6ba848494f463;context=Zmxvdy1pZD1lZGYzN2IzMi01YzBjLTUzYTMtYTQ2ZS05ZjMwYjAyMTU1ODFfMTUzNjYxNjQwNTY3Nl8wXzc1NTQmcmFuaz01?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "tags": [
            {
              "id": "american",
              "title": "American",
              "group": "cuisine"
            },
            {
              "id": "international",
              "title": "International",
              "group": "cuisine"
            },
            {
              "id": "natural-healthy",
              "title": "Natural/Healthy",
              "group": "cuisine"
            },
            {
              "id": "sea-food",
              "title": "Seafood",
              "group": "cuisine"
            }
          ],
          "id": "8409vghh-55611666e55a4373a6a6ba848494f463",
          "openingHours": {
            "text": "Mon-Thu: 11:00 - 23:00<br/>Fri, Sat: 11:00 - 00:00<br/>Sun: 10:00 - 22:00",
            "label": "Opening hours",
            "isOpen": true,
            "structured": [
              {
                "start": "T110000",
                "duration": "PT12H00M",
                "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH"
              },
              {
                "start": "T110000",
                "duration": "PT13H00M",
                "recurrence": "FREQ:DAILY;BYDAY:FR,SA"
              },
              {
                "start": "T100000",
                "duration": "PT12H00M",
                "recurrence": "FREQ:DAILY;BYDAY:SU"
              }
            ]
          },
          "chainIds": [
            "2706"
          ]
        },
        {
          "position": [
            33.07979,
            -96.82291
          ],
          "distance": 397,
          "title": "Cafe Istanbul",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "7300 Lone Star Dr<br/>Plano, TX 75024",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghh-7f1e3708cf4e4bb1a4221abd43299ebb;context=Zmxvdy1pZD1lZGYzN2IzMi01YzBjLTUzYTMtYTQ2ZS05ZjMwYjAyMTU1ODFfMTUzNjYxNjQwNTY3Nl8wXzc1NTQmcmFuaz02?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "tags": [
            {
              "id": "mediterranean",
              "title": "Mediterranean",
              "group": "cuisine"
            },
            {
              "id": "turkish",
              "title": "Turkish",
              "group": "cuisine"
            }
          ],
          "id": "8409vghh-7f1e3708cf4e4bb1a4221abd43299ebb",
          "openingHours": {
            "text": "Mon-Sun: 11:00 - 23:00",
            "label": "Opening hours",
            "isOpen": true,
            "structured": [
              {
                "start": "T110000",
                "duration": "PT12H00M",
                "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH,FR,SA,SU"
              }
            ]
          },
          "alternativeNames": [
            {
              "name": "Cafe Istanbul Plano Texas",
              "language": "en"
            }
          ]
        },
        {
          "position": [
            33.08033,
            -96.82297
          ],
          "distance": 420,
          "title": "Mexican Sugar Concina & Cantina",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "7501 Lone Star Dr<br/>Plano, TX 75024",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/840jx7ps-b751d933fa8c01e7b6ee96a5636a58ae;context=Zmxvdy1pZD1lZGYzN2IzMi01YzBjLTUzYTMtYTQ2ZS05ZjMwYjAyMTU1ODFfMTUzNjYxNjQwNTY3Nl8wXzc1NTQmcmFuaz03?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "tags": [
            {
              "id": "mexican",
              "title": "Mexican",
              "group": "cuisine"
            }
          ],
          "id": "840jx7ps-b751d933fa8c01e7b6ee96a5636a58ae",
          "openingHours": {
            "text": "Mon-Thu: 11:00 - 23:00<br/>Fri: 11:00 - 01:00<br/>Sat: 10:00 - 01:00<br/>Sun: 10:00 - 22:00",
            "label": "Opening hours",
            "isOpen": true,
            "structured": [
              {
                "start": "T110000",
                "duration": "PT12H00M",
                "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH"
              },
              {
                "start": "T110000",
                "duration": "PT14H00M",
                "recurrence": "FREQ:DAILY;BYDAY:FR"
              },
              {
                "start": "T100000",
                "duration": "PT15H00M",
                "recurrence": "FREQ:DAILY;BYDAY:SA"
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
              "name": "Mexican Sugar",
              "language": "en"
            }
          ]
        },
        {
          "position": [
            33.0772,
            -96.82209
          ],
          "distance": 455,
          "title": "Nicola\'s Ristorante",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "5800 Legacy Dr<br/>Plano, TX 75024",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghh-4cd77dcfb8fc4f148054fccebded6fa6;context=Zmxvdy1pZD1lZGYzN2IzMi01YzBjLTUzYTMtYTQ2ZS05ZjMwYjAyMTU1ODFfMTUzNjYxNjQwNTY3Nl8wXzc1NTQmcmFuaz04?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "tags": [
            {
              "id": "italian",
              "title": "Italian",
              "group": "cuisine"
            }
          ],
          "id": "8409vghh-4cd77dcfb8fc4f148054fccebded6fa6",
          "openingHours": {
            "text": "Mon-Thu: 11:00 - 22:00<br/>Fri, Sat: 11:00 - 23:00<br/>Sun: 16:00 - 21:00",
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
              },
              {
                "start": "T160000",
                "duration": "PT05H00M",
                "recurrence": "FREQ:DAILY;BYDAY:SU"
              }
            ]
          },
          "alternativeNames": [
            {
              "name": "Nicola\'s",
              "language": "en"
            },
            {
              "name": "Nicola\'s Ristorante Italiano",
              "language": "en"
            }
          ]
        },
        {
          "position": [
            33.0827,
            -96.82598
          ],
          "distance": 493,
          "title": "Haywire",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "5901 Winthrop St<br/>Plano, TX 75024",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghh-c01ee5642a74461e8f14b79020645ed9;context=Zmxvdy1pZD1lZGYzN2IzMi01YzBjLTUzYTMtYTQ2ZS05ZjMwYjAyMTU1ODFfMTUzNjYxNjQwNTY3Nl8wXzc1NTQmcmFuaz05?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "tags": [
            {
              "id": "american",
              "title": "American",
              "group": "cuisine"
            }
          ],
          "id": "8409vghh-c01ee5642a74461e8f14b79020645ed9",
          "openingHours": {
            "text": "Mon-Wed: 11:00 - 22:00<br/>Thu, Fri: 11:00 - 23:00<br/>Sat: 16:00 - 23:00<br/>Sun: 16:00 - 22:00",
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
                "recurrence": "FREQ:DAILY;BYDAY:TH,FR"
              },
              {
                "start": "T160000",
                "duration": "PT07H00M",
                "recurrence": "FREQ:DAILY;BYDAY:SA"
              },
              {
                "start": "T160000",
                "duration": "PT06H00M",
                "recurrence": "FREQ:DAILY;BYDAY:SU"
              }
            ]
          }
        },
        {
          "position": [
            33.07611,
            -96.821535
          ],
          "distance": 548,
          "title": "Cru Wine Bar",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "7201 Bishop Rd<br/>Plano, TX 75024",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghh-2d2ac75a7ed14ceda8bd92478b837f7e;context=Zmxvdy1pZD1lZGYzN2IzMi01YzBjLTUzYTMtYTQ2ZS05ZjMwYjAyMTU1ODFfMTUzNjYxNjQwNTY3Nl8wXzc1NTQmcmFuaz0xMA?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "tags": [
            {
              "id": "american",
              "title": "American",
              "group": "cuisine"
            },
            {
              "id": "greek",
              "title": "Greek",
              "group": "cuisine"
            },
            {
              "id": "italian",
              "title": "Italian",
              "group": "cuisine"
            }
          ],
          "id": "8409vghh-2d2ac75a7ed14ceda8bd92478b837f7e",
          "openingHours": {
            "text": "Mon-Wed: 14:00 - 23:00<br/>Thu, Fri: 14:00 - 00:00<br/>Sat: 14:00 - 01:00<br/>Sun: 11:00 - 23:00",
            "label": "Opening hours",
            "isOpen": true,
            "structured": [
              {
                "start": "T140000",
                "duration": "PT09H00M",
                "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE"
              },
              {
                "start": "T140000",
                "duration": "PT10H00M",
                "recurrence": "FREQ:DAILY;BYDAY:TH,FR"
              },
              {
                "start": "T140000",
                "duration": "PT11H00M",
                "recurrence": "FREQ:DAILY;BYDAY:SA"
              },
              {
                "start": "T110000",
                "duration": "PT12H00M",
                "recurrence": "FREQ:DAILY;BYDAY:SU"
              }
            ]
          },
          "alternativeNames": [
            {
              "name": "CRÚ Food & Wine Bar - Plano",
              "language": "en"
            },
            {
              "name": "Cru A Wine Bar",
              "language": "en"
            },
            {
              "name": "Crú - A Wine Bar",
              "language": "en"
            }
          ]
        },
        {
          "position": [
            33.07549,
            -96.82208
          ],
          "distance": 540,
          "title": "Naan Sushi Restaurant",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "7161 Bishop Rd<br/>Plano, TX 75024",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghh-414e6064a87940de9e6e3cbbad0550a4;context=Zmxvdy1pZD1lZGYzN2IzMi01YzBjLTUzYTMtYTQ2ZS05ZjMwYjAyMTU1ODFfMTUzNjYxNjQwNTY3Nl8wXzc1NTQmcmFuaz0xMQ?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "tags": [
            {
              "id": "asian",
              "title": "Asian",
              "group": "cuisine"
            },
            {
              "id": "brunch",
              "title": "Brunch",
              "group": "cuisine"
            },
            {
              "id": "japanese",
              "title": "Japanese",
              "group": "cuisine"
            },
            {
              "id": "korean",
              "title": "Korean",
              "group": "cuisine"
            },
            {
              "id": "sushi",
              "title": "Japanese - Sushi",
              "group": "cuisine"
            }
          ],
          "id": "8409vghh-414e6064a87940de9e6e3cbbad0550a4",
          "openingHours": {
            "text": "Mon-Thu: 11:00 - 23:00<br/>Fri, Sat: 11:00 - 01:00<br/>Sun: 11:00 - 10:30",
            "label": "Opening hours",
            "isOpen": true,
            "structured": [
              {
                "start": "T110000",
                "duration": "PT12H00M",
                "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH"
              },
              {
                "start": "T110000",
                "duration": "PT14H00M",
                "recurrence": "FREQ:DAILY;BYDAY:FR,SA"
              },
              {
                "start": "T110000",
                "duration": "PT23H30M",
                "recurrence": "FREQ:DAILY;BYDAY:SU"
              }
            ]
          },
          "alternativeNames": [
            {
              "name": "Naan",
              "language": "en"
            },
            {
              "name": "Naan Korean Restaurant & Sushi Bar",
              "language": "en"
            },
            {
              "name": "Naan Plano",
              "language": "en"
            },
            {
              "name": "Naan Sushi",
              "language": "en"
            }
          ]
        },
        {
          "position": [
            33.07549,
            -96.82208
          ],
          "distance": 540,
          "title": "Jasper\'s",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "7161 Bishop Rd<br/>Plano, TX 75024",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghh-3d518cedabca4ac587a23dc6e10f46f3;context=Zmxvdy1pZD1lZGYzN2IzMi01YzBjLTUzYTMtYTQ2ZS05ZjMwYjAyMTU1ODFfMTUzNjYxNjQwNTY3Nl8wXzc1NTQmcmFuaz0xMg?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
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
          "id": "8409vghh-3d518cedabca4ac587a23dc6e10f46f3",
          "openingHours": {
            "text": "Mon-Thu: 11:00 - 22:00<br/>Fri, Sat: 11:00 - 23:00<br/>Sun: 11:00 - 21:00",
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
              },
              {
                "start": "T110000",
                "duration": "PT10H00M",
                "recurrence": "FREQ:DAILY;BYDAY:SU"
              }
            ]
          },
          "alternativeNames": [
            {
              "name": "Jasper\'s Plano",
              "language": "en"
            },
            {
              "name": "Jasper\'s Restaurant",
              "language": "en"
            },
            {
              "name": "Jaspers Plano",
              "language": "en"
            }
          ]
        },
        {
          "position": [
            33.08318,
            -96.82585
          ],
          "distance": 548,
          "title": "Monkey King Noodle Company",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "7800 Windrose Ave<br/>Plano, TX 75024",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghh-c80af28b6b9147778a01c322a516d617;context=Zmxvdy1pZD1lZGYzN2IzMi01YzBjLTUzYTMtYTQ2ZS05ZjMwYjAyMTU1ODFfMTUzNjYxNjQwNTY3Nl8wXzc1NTQmcmFuaz0xMw?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "tags": [
            {
              "id": "asian",
              "title": "Asian",
              "group": "cuisine"
            },
            {
              "id": "chinese",
              "title": "Chinese",
              "group": "cuisine"
            }
          ],
          "id": "8409vghh-c80af28b6b9147778a01c322a516d617",
          "openingHours": {
            "text": "Mon, Tue, Sun: 09:00 - 23:00<br/>Wed, Thu: 09:00 - 00:00<br/>Fri, Sat: 09:00 - 02:00",
            "label": "Opening hours",
            "isOpen": true,
            "structured": [
              {
                "start": "T090000",
                "duration": "PT14H00M",
                "recurrence": "FREQ:DAILY;BYDAY:MO,TU,SU"
              },
              {
                "start": "T090000",
                "duration": "PT15H00M",
                "recurrence": "FREQ:DAILY;BYDAY:WE,TH"
              },
              {
                "start": "T090000",
                "duration": "PT17H00M",
                "recurrence": "FREQ:DAILY;BYDAY:FR,SA"
              }
            ]
          }
        },
        {
          "position": [
            33.08318,
            -96.82585
          ],
          "distance": 548,
          "title": "Carlton Provisions",
          "averageRating": 0,
          "category": {
            "id": "snacks-fast-food",
            "title": "Snacks/Fast food",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/snacks-fast-food?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "7800 Windrose Ave<br/>Plano, TX 75024",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vg4t-c00b7467244d4e30a74d4c831a6188ab;context=Zmxvdy1pZD1lZGYzN2IzMi01YzBjLTUzYTMtYTQ2ZS05ZjMwYjAyMTU1ODFfMTUzNjYxNjQwNTY3Nl8wXzc1NTQmcmFuaz0xNA?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "id": "8409vg4t-c00b7467244d4e30a74d4c831a6188ab"
        },
        {
          "position": [
            33.07761,
            -96.82074
          ],
          "distance": 569,
          "title": "Mi Cosina",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "5760 Legacy Dr<br/>Plano, TX 75024",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghh-2e81b79ad6b349f893ff1cb49f12849b;context=Zmxvdy1pZD1lZGYzN2IzMi01YzBjLTUzYTMtYTQ2ZS05ZjMwYjAyMTU1ODFfMTUzNjYxNjQwNTY3Nl8wXzc1NTQmcmFuaz0xNQ?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
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
            }
          ],
          "id": "8409vghh-2e81b79ad6b349f893ff1cb49f12849b",
          "openingHours": {
            "text": "Mon-Wed, Sun: 11:00 - 22:00<br/>Thu-Sat: 11:00 - 23:00",
            "label": "Opening hours",
            "isOpen": true,
            "structured": [
              {
                "start": "T110000",
                "duration": "PT11H00M",
                "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,SU"
              },
              {
                "start": "T110000",
                "duration": "PT12H00M",
                "recurrence": "FREQ:DAILY;BYDAY:TH,FR,SA"
              }
            ]
          },
          "alternativeNames": [
            {
              "name": "Mi Cocina",
              "language": "en"
            }
          ]
        },
        {
          "position": [
            33.07628,
            -96.82112
          ],
          "distance": 575,
          "title": "Del Frisco\'s Grille",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "7200 Bishop Rd<br/>Plano, TX 75024",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/840aabd1-eba47f01f20d0f1f3031962922dd7518;context=Zmxvdy1pZD1lZGYzN2IzMi01YzBjLTUzYTMtYTQ2ZS05ZjMwYjAyMTU1ODFfMTUzNjYxNjQwNTY3Nl8wXzc1NTQmcmFuaz0xNg?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "tags": [
            {
              "id": "steak",
              "title": "Steak",
              "group": "cuisine"
            }
          ],
          "id": "840aabd1-eba47f01f20d0f1f3031962922dd7518",
          "openingHours": {
            "text": "Mon-Sat: 11:00 - 23:00<br/>Sun: 11:00 - 22:00",
            "label": "Opening hours",
            "isOpen": true,
            "structured": [
              {
                "start": "T110000",
                "duration": "PT12H00M",
                "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH,FR,SA"
              },
              {
                "start": "T110000",
                "duration": "PT11H00M",
                "recurrence": "FREQ:DAILY;BYDAY:SU"
              }
            ]
          },
          "alternativeNames": [
            {
              "name": "Del Frisco\'s Grille Plano",
              "language": "en"
            }
          ]
        },
        {
          "position": [
            33.08363,
            -96.82578
          ],
          "distance": 598,
          "title": "Fogo de Chao",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "5908 Headquarters Dr<br/>Plano, TX 75024",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghh-610fd34039044fb495313b819061268c;context=Zmxvdy1pZD1lZGYzN2IzMi01YzBjLTUzYTMtYTQ2ZS05ZjMwYjAyMTU1ODFfMTUzNjYxNjQwNTY3Nl8wXzc1NTQmcmFuaz0xNw?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "tags": [
            {
              "id": "brazilian",
              "title": "Brazilian",
              "group": "cuisine"
            }
          ],
          "id": "8409vghh-610fd34039044fb495313b819061268c",
          "openingHours": {
            "text": "Mon-Fri: 11:00 - 15:00<br/>Sat: 11:00 - 23:00<br/>Sun: 11:00 - 22:00",
            "label": "Opening hours",
            "isOpen": false,
            "structured": [
              {
                "start": "T110000",
                "duration": "PT04H00M",
                "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH,FR"
              },
              {
                "start": "T110000",
                "duration": "PT12H00M",
                "recurrence": "FREQ:DAILY;BYDAY:SA"
              },
              {
                "start": "T110000",
                "duration": "PT11H00M",
                "recurrence": "FREQ:DAILY;BYDAY:SU"
              }
            ]
          },
          "chainIds": [
            "27497"
          ],
          "alternativeNames": [
            {
              "name": "Fogo de Chao Brazilian Steakhouse",
              "language": "en"
            },
            {
              "name": "Fogo de Chão",
              "language": "en"
            }
          ]
        },
        {
          "position": [
            33.07828,
            -96.82028
          ],
          "distance": 606,
          "title": "Chipotle",
          "averageRating": 0,
          "category": {
            "id": "snacks-fast-food",
            "title": "Snacks/Fast food",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/snacks-fast-food?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "5717 Legacy Dr<br/>Plano, TX 75024",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghh-4705087e2da14df5bab11a7c7e6f357a;context=Zmxvdy1pZD1lZGYzN2IzMi01YzBjLTUzYTMtYTQ2ZS05ZjMwYjAyMTU1ODFfMTUzNjYxNjQwNTY3Nl8wXzc1NTQmcmFuaz0xOA?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
          "tags": [
            {
              "id": "mexican",
              "title": "Mexican",
              "group": "cuisine"
            }
          ],
          "id": "8409vghh-4705087e2da14df5bab11a7c7e6f357a",
          "openingHours": {
            "text": "Mon-Sun: 11:00 - 22:00",
            "label": "Opening hours",
            "isOpen": true,
            "structured": [
              {
                "start": "T110000",
                "duration": "PT11H00M",
                "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH,FR,SA,SU"
              }
            ]
          },
          "chainIds": [
            "1514"
          ]
        },
        {
          "position": [
            33.08799,
            -96.82251
          ],
          "distance": 1147,
          "title": "Campisi\'s Restaurants",
          "averageRating": 0,
          "category": {
            "id": "restaurant",
            "title": "Restaurant",
            "href": "https://places.demo.api.here.com/places/v1/categories/places/restaurant?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
            "type": "urn:nlp-types:category",
            "system": "places"
          },
          "icon": "https://download.vcdn.cit.data.here.com/p/d/places2_stg/icons/categories/03.icon",
          "vicinity": "8100 Dallas Pkwy<br/>Plano, TX 75024",
          "having": [],
          "type": "urn:nlp-types:place",
          "href": "https://places.demo.api.here.com/places/v1/places/8409vghh-37dc8a2fdfcd4f799cecdef8eb71372e;context=Zmxvdy1pZD1lZGYzN2IzMi01YzBjLTUzYTMtYTQ2ZS05ZjMwYjAyMTU1ODFfMTUzNjYxNjQwNTY3Nl8wXzc1NTQmcmFuaz0xOQ?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg",
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
            }
          ],
          "id": "8409vghh-37dc8a2fdfcd4f799cecdef8eb71372e",
          "openingHours": {
            "text": "Mon-Sun: 11:00 - 22:00",
            "label": "Opening hours",
            "isOpen": true,
            "structured": [
              {
                "start": "T110000",
                "duration": "PT11H00M",
                "recurrence": "FREQ:DAILY;BYDAY:MO,TU,WE,TH,FR,SA,SU"
              }
            ]
          },
          "alternativeNames": [
            {
              "name": "Campisi\'s Restaurant",
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
            33.078317,
            -96.826789
          ],
          "address": {
            "text": "Windrose Ave<br/>Plano, TX 75024<br/>USA",
            "street": "Windrose Ave",
            "postalCode": "75024",
            "city": "Plano",
            "county": "Collin",
            "stateCode": "TX",
            "country": "United States",
            "countryCode": "USA"
          }
        },
        "type": "urn:nlp-types:place",
        "href": "https://places.demo.api.here.com/places/v1/places/loc-dmVyc2lvbj0xO3RpdGxlPVdpbmRyb3NlK0F2ZTtsYXQ9MzMuMDc4MzE3O2xvbj0tOTYuODI2Nzg5O3N0cmVldD1XaW5kcm9zZStBdmU7Y2l0eT1QbGFubztwb3N0YWxDb2RlPTc1MDI0O2NvdW50cnk9VVNBO3N0YXRlQ29kZT1UWDtjb3VudHk9Q29sbGluO2NhdGVnb3J5SWQ9c3RyZWV0LXNxdWFyZTtzb3VyY2VTeXN0ZW09aW50ZXJuYWw;context=c2VhcmNoQ29udGV4dD0x?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg"
      }
    }
  }';
 public function returnNearbyPlaces($CityName,$IsFiltered){

  switch($CityName){
    case 'Dallas':
    $restaurantsObj = json_decode($this->ThanksgivingTowerDataString);
    break;
    case 'The Star':
    $restaurantsObj = json_decode($this->DogWoodDataString);
    break;
    case 'Legacy West':
    $restaurantsObj = json_decode($this->LegacyWestDataString);
    break;
  }
  if($IsFiltered){
    return $this->filterRestaurantsOnly($restaurantsObj);
  }else{
    return $restaurantsObj->results->items;
  }
 }
 public function filterRestaurantsOnly($dataObj){
    $dataObj = array_filter($dataObj->results->items,function($obj){
     //var_dump($obj->category->id);
      foreach($obj as $restaurantItems){
        return $obj->category->id == 'restaurant';
      }
    });
  return $dataObj;

 }
}
//$app = new FilterApp;
//var_dump($app->returnNearbyPlaces('Dallas',true));
//echo gettype();

 ?>