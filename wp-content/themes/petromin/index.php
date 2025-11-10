<?php
/* Template Name: home page */
get_header();

$assets_url = trailingslashit(trailingslashit(get_template_directory_uri()) . 'assets');
$images_url = trailingslashit($assets_url . 'img');

$hero_defaults = [
    'video' => [
        'url' => 'http://46.101.222.112/petromin/wp-content/uploads/2025/09/20250821_1944_Evening-Garage-Activity_storyboard_01k360878xfkes6bv9dj8t9fsh-1-1.mp4',
        'mime_type' => 'video/mp4',
    ],
    'headline_prefix' => 'Redefining',
    'headline_highlight' => 'EXPRESS',
    'headline_suffix' => 'car care across India.',
    'headline_suffix_primary' => 'car care',
    'headline_suffix_secondary' => 'across India.',
    'features' => [
        [
            'title' => 'Honest',
            'subtitle' => 'Pricing',
            'icon' => [
                'url' => $images_url . 'Isolation_Mode-1.webp',
                'alt' => 'Honest Pricing icon',
            ],
        ],
        [
            'title' => 'Genuine',
            'subtitle' => 'Parts',
            'icon' => [
                'url' => $images_url . 'genuine-part.webp',
                'alt' => 'Genuine Parts icon',
            ],
        ],
        [
            'title' => 'Certified',
            'subtitle' => 'Technicians',
            'icon' => [
                'url' => $images_url . 'technician.webp',
                'alt' => 'Certified Technicians icon',
            ],
        ],
        [
            'title' => 'Warranty',
            'subtitle' => 'Coverage',
            'icon' => [
                'url' => $images_url . 'coverage.webp',
                'alt' => 'Warranty Coverage icon',
            ],
        ],
    ],
];

$offers_defaults = [
    'heading' => 'Latest Offers',
    'slides' => [
        [
            'desktop_image' => [
                'url' => $images_url . 'latest-offers-img-1-scaled-1.webp',
                'alt' => 'Latest offer',
            ],
            'mobile_image' => [
                'url' => $images_url . 'image-39.webp',
                'alt' => 'Latest offer',
            ],
        ],
        [
            'desktop_image' => [
                'url' => $images_url . 'latest-offers-img-1-scaled-1.webp',
                'alt' => 'Latest offer',
            ],
            'mobile_image' => [
                'url' => $images_url . 'image-39.webp',
                'alt' => 'Latest offer',
            ],
        ],
        [
            'desktop_image' => [
                'url' => $images_url . 'latest-offers-img-1-scaled-1.webp',
                'alt' => 'Latest offer',
            ],
            'mobile_image' => [
                'url' => $images_url . 'image-39.webp',
                'alt' => 'Latest offer',
            ],
        ],
        [
            'desktop_image' => [
                'url' => $images_url . 'latest-offers-img-1-scaled-1.webp',
                'alt' => 'Latest offer',
            ],
            'mobile_image' => [
                'url' => $images_url . 'image-39.webp',
                'alt' => 'Latest offer',
            ],
        ],
    ],
    'navigation_icon' => [
        'url' => $images_url . 'fi_19024510.webp',
        'alt' => 'Navigation arrow icon',
    ],
];


$services_defaults = [
    'heading' => 'Everything your vehicle needs and more.',
    'tabs' => [
        [
            'label' => 'Car Service',
            'icon' => [
                'url' => $images_url . 'car-service.webp',
                'alt' => 'Car Service icon',
            ],
            'heading' => 'Car Service',
            'description' => 'Ensure your car runs seamlessly with routine care built around consistency. We maintain every system with precision to preserve performance, reliability, and peace of mind on every drive.',
            'highlight' => 'Get dealership-level service, minus premium costs.',
            'primary_button' => [
                'label' => 'Book Now',
                'url' => '#',
                'target' => '_self',
            ],
            'secondary_button' => [
                'label' => 'Know More',
                'url' => '#',
                'target' => '_self',
            ],
            'image' => [
                'url' => $images_url . 'ChatGPT-Image-Aug-22-2025-09_09_08-PM-2.webp',
                'alt' => 'Petromin service illustration',
            ],
        ],
        [
            'label' => 'Battery Service',
            'icon' => [
                'url' => $images_url . 'car-service.webp',
                'alt' => 'Battery Service icon',
            ],
            'heading' => 'Battery Service',
            'description' => 'Revive your car’s power with a battery service that tests, cleans, and optimises performance. From voltage checks to terminal care, every start stays instant and reliable.',
            'highlight' => 'Power every start with confidence at the best price.',
            'primary_button' => [
                'label' => 'Book Now',
                'url' => '#',
                'target' => '_self',
            ],
            'secondary_button' => [
                'label' => 'Know More',
                'url' => '#',
                'target' => '_self',
            ],
            'image' => [
                'url' => $images_url . 'ChatGPT-Image-Aug-22-2025-09_09_08-PM-2.webp',
                'alt' => 'Battery service illustration',
            ],
        ],
        [
            'label' => 'Tyre Care',
            'icon' => [
                'url' => $images_url . 'car-service.webp',
                'alt' => 'Tyre Care icon',
            ],
            'heading' => 'Tyre Care',
            'description' => 'Your tyres carry more than just weight - they carry safety. We assess tread depth, alignment, and balance to enhance control, extend lifespan, and keep every journey steady.',
            'highlight' => 'Extend tyre life with care that proves its worth.',
            'primary_button' => [
                'label' => 'Book Now',
                'url' => '#',
                'target' => '_self',
            ],
            'secondary_button' => [
                'label' => 'Know More',
                'url' => '#',
                'target' => '_self',
            ],
            'image' => [
                'url' => $images_url . 'ChatGPT-Image-Aug-22-2025-09_09_08-PM-2.webp',
                'alt' => 'Tyre care illustration',
            ],
        ],
        [
            'label' => 'AC Service',
            'icon' => [
                'url' => $images_url . 'car-service.webp',
                'alt' => 'AC Service icon',
            ],
            'heading' => 'AC Service',
            'description' => 'Keep your drives cool with an AC service that’s precise, complete, and reliable. We inspect components, clean filters, and recharge refrigerant to maintain smooth, consistent cooling.',
            'highlight' => 'Stay cool and refreshed with unbeatable service value.',
            'primary_button' => [
                'label' => 'Book Now',
                'url' => '#',
                'target' => '_self',
            ],
            'secondary_button' => [
                'label' => 'Know More',
                'url' => '#',
                'target' => '_self',
            ],
            'image' => [
                'url' => $images_url . 'ChatGPT-Image-Aug-22-2025-09_09_08-PM-2.webp',
                'alt' => 'AC service illustration',
            ],
        ],
        [
            'label' => 'Eco Car Wash',
            'icon' => [
                'url' => $images_url . 'car-service.webp',
                'alt' => 'Eco Car Wash icon',
            ],
            'heading' => 'Eco Car Wash',
            'description' => 'Maintain your car’s shine responsibly. With eco-friendly products and precision washing, we clean thoroughly while protecting paint and conserving water.',
            'highlight' => 'Clean smarter with eco-care designed for great value.',
            'primary_button' => [
                'label' => 'Book Now',
                'url' => '#',
                'target' => '_self',
            ],
            'secondary_button' => [
                'label' => 'Know More',
                'url' => '#',
                'target' => '_self',
            ],
            'image' => [
                'url' => $images_url . 'ChatGPT-Image-Aug-22-2025-09_09_08-PM-2.webp',
                'alt' => 'Eco car wash illustration',
            ],
        ],
        [
            'label' => 'Headlight Polish',
            'icon' => [
                'url' => $images_url . 'car-service.webp',
                'alt' => 'Headlight Polish icon',
            ],
            'heading' => 'Headlight Polish',
            'description' => 'Dull headlights don’t just age your car - they limit what you see. We restore lens clarity and beam strength, bringing back safe, confident visibility on every drive.',
            'highlight' => 'Restore visibility with expert care and transparent pricing.',
            'primary_button' => [
                'label' => 'Book Now',
                'url' => '#',
                'target' => '_self',
            ],
            'secondary_button' => [
                'label' => 'Know More',
                'url' => '#',
                'target' => '_self',
            ],
            'image' => [
                'url' => $images_url . 'ChatGPT-Image-Aug-22-2025-09_09_08-PM-2.webp',
                'alt' => 'Headlight polish illustration',
            ],
        ],
        [
            'label' => 'Body Shop',
            'icon' => [
                'url' => $images_url . 'car-service.webp',
                'alt' => 'Body Shop icon',
            ],
            'heading' => 'Body Shop',
            'description' => 'Bring back your car’s original finish with expert repair and detailing. From dents and scratches to full paint restoration, every panel is refined for lasting beauty and reliability.',
            'highlight' => 'Restore your car’s form through quality that earns its price.',
            'primary_button' => [
                'label' => 'Book Now',
                'url' => '#',
                'target' => '_self',
            ],
            'secondary_button' => [
                'label' => 'Know More',
                'url' => '#',
                'target' => '_self',
            ],
            'image' => [
                'url' => $images_url . 'ChatGPT-Image-Aug-22-2025-09_09_08-PM-2.webp',
                'alt' => 'Body shop illustration',
            ],
        ],
        [
            'label' => 'Engine Care',
            'icon' => [
                'url' => $images_url . 'car-service.webp',
                'alt' => 'Engine Care icon',
            ],
            'heading' => 'Engine Care',
            'description' => 'Good performance starts deep within the engine. We service, clean, and protect vital components to keep it running smoothly, efficiently, and with lasting power.',
            'highlight' => 'Drive in for expert care that delivers real value.',
            'primary_button' => [
                'label' => 'Book Now',
                'url' => '#',
                'target' => '_self',
            ],
            'secondary_button' => [
                'label' => 'Know More',
                'url' => '#',
                'target' => '_self',
            ],
            'image' => [
                'url' => $images_url . 'ChatGPT-Image-Aug-22-2025-09_09_08-PM-2.webp',
                'alt' => 'Engine care illustration',
            ],
        ],
    ],
];

$timeline_defaults = [
    'heading' => 'A standard of quality throughout history.',
    'navigation_icon' => [
        'url' => $images_url . 'fi_19024510.webp',
        'alt' => 'Navigation arrow icon',
    ],
    'slides' => [
        [
            'year' => '1968',
            'image' => [
                'url' => $images_url . 'image-42.webp',
                'alt' => 'JV incorporated (G.M., Mobil/Mobil Petromin); Petrolube brand launched',
            ],
            'description' => 'JV incorporated (G.M., Mobil/Mobil Petromin); Petrolube brand launched',
        ],
        [
            'year' => '1969',
            'image' => [
                'url' => $images_url . 'image-2.webp',
                'alt' => 'Petrolube brand continued its expansion',
            ],
            'description' => 'Petrolube brand continued its expansion',
        ],
        [
            'year' => '1992',
            'image' => [
                'url' => $images_url . 'image-42.webp',
                'alt' => 'Entered the Egypt market',
            ],
            'description' => 'Entered the Egypt market',
        ],
        [
            'year' => '2007',
            'image' => [
                'url' => $images_url . 'image-2.webp',
                'alt' => 'ADG acquired Petrolube in JV with Gulf Oil Al-Dabbagh',
            ],
            'description' => 'ADG acquired Petrolube in JV with Gulf Oil Al-Dabbagh',
        ],
        [
            'year' => '2012',
            'image' => [
                'url' => $images_url . 'image-42.webp',
                'alt' => 'Opened first fuel station in KSA',
            ],
            'description' => 'Opened first fuel station in KSA',
        ],
        [
            'year' => '2013',
            'image' => [
                'url' => $images_url . 'image-2.webp',
                'alt' => 'Launched first workshop in KSA; ADG acquired full ownership from Gulf Oil Al-Dabbagh',
            ],
            'description' => 'Launched first workshop in KSA; ADG acquired full ownership from Gulf Oil Al-Dabbagh',
        ],
        [
            'year' => '2015',
            'image' => [
                'url' => $images_url . 'image-42.webp',
                'alt' => 'Opened first Petromin Express in Egypt',
            ],
            'description' => 'Opened first Petromin Express in Egypt',
        ],
        [
            'year' => '2016',
            'image' => [
                'url' => $images_url . 'image-2.webp',
                'alt' => 'Acquired Emirates Lubricants Company in UAE and a nationwide Nissan dealership in Saudi Arabia',
            ],
            'description' => 'Acquired Emirates Lubricants Company in UAE and a nationwide Nissan dealership in Saudi Arabia',
        ],
        [
            'year' => '2018',
            'image' => [
                'url' => $images_url . 'image-42.webp',
                'alt' => 'Expanded with first Petromin Express centres in UAE and Pakistan',
            ],
            'description' => 'Expanded with first Petromin Express centres in UAE and Pakistan',
        ],
        [
            'year' => '2020',
            'image' => [
                'url' => $images_url . 'image-2.webp',
                'alt' => 'Established Electromin; reached 100 fuel stations in Egypt',
            ],
            'description' => 'Established Electromin; reached 100 fuel stations in Egypt',
        ],
        [
            'year' => '2021',
            'image' => [
                'url' => $images_url . 'image-42.webp',
                'alt' => 'Formed National Transport Solutions Company (NTSC); gained Stellantis distribution in Saudi Arabia; added Volvo and Polestar dealerships under STELLANT EPOT',
            ],
            'description' => 'Formed National Transport Solutions Company (NTSC); gained Stellantis distribution in Saudi Arabia; added Volvo and Polestar dealerships under STELLANT EPOT',
        ],
        [
            'year' => '2022',
            'image' => [
                'url' => $images_url . 'image-2.webp',
                'alt' => 'Egypt fuel stations surpassed 200; launched first Petromin Express in India (JV with DRB-HICOM); expanded operations in OnFoton Malaysia',
            ],
            'description' => 'Egypt fuel stations surpassed 200; launched first Petromin Express in India (JV with DRB-HICOM); expanded operations in OnFoton Malaysia',
        ],
    ],
];

$partner_highlights_defaults = [
    'items' => [
        'Trusted HPCL Partner',
        'OEM-Grade Standards',
        'Express Turnaround Time',
        'OEM-Grade Standards',
        'Express Turnaround Time',
        'OEM-Grade Standards',
        'Trusted HPCL Partner',
        'OEM-Grade Standards',
        'Trusted HPCL Partner',
        'Express Turnaround Time',
        'Trusted HPCL Partner',
        'Express Turnaround Time',
    ],
    'icon' => [
        'url' => $images_url . 'arrowIcon.webp',
        'alt' => 'Highlight arrow icon',
    ],
];



$hero_field = function_exists('get_field') ? (get_field('hero_section') ?: []) : [];
$offers_field = function_exists('get_field') ? (get_field('latest_offers_section') ?: []) : [];

$services_field = function_exists('get_field') ? (get_field('services_tabs_section') ?: []) : [];
$timeline_field = function_exists('get_field') ? (get_field('timeline_section') ?: []) : [];
$partner_highlights_field = function_exists('get_field') ? (get_field('partner_highlights_section') ?: []) : [];

$hero_video_field = $hero_field['background_video'] ?? null;
$hero_video_url = '';
$hero_video_type = '';

if (is_array($hero_video_field)) {
    if (!empty($hero_video_field['url'])) {
        $hero_video_url = $hero_video_field['url'];
    }

    if (!empty($hero_video_field['mime_type'])) {
        $hero_video_type = $hero_video_field['mime_type'];
    }
} elseif (is_string($hero_video_field)) {
    $hero_video_url = trim($hero_video_field);
}

if ($hero_video_url === '') {
    $hero_video_url = $hero_defaults['video']['url'];
}

if ($hero_video_type === '') {
    $hero_video_type = $hero_defaults['video']['mime_type'];
}

$hero_headline_prefix = trim($hero_field['headline_prefix'] ?? '');
if ($hero_headline_prefix === '') {
    $hero_headline_prefix = $hero_defaults['headline_prefix'];
}

$hero_headline_highlight = trim($hero_field['headline_highlight'] ?? '');
if ($hero_headline_highlight === '') {
    $hero_headline_highlight = $hero_defaults['headline_highlight'];
}

$hero_headline_suffix = trim($hero_field['headline_suffix'] ?? '');
if ($hero_headline_suffix === '') {
    $hero_headline_suffix = $hero_defaults['headline_suffix'];
}

$hero_headline_suffix_primary = trim($hero_field['headline_suffix_primary'] ?? '');
$hero_headline_suffix_secondary = trim($hero_field['headline_suffix_secondary'] ?? '');

if ($hero_headline_suffix_primary === '' && $hero_headline_suffix_secondary === '') {
    if ($hero_headline_suffix !== '') {
        $hero_headline_suffix_primary = $hero_headline_suffix;
        $hero_headline_suffix_secondary = '';
    } else {
        $hero_headline_suffix_primary = $hero_defaults['headline_suffix_primary'];
        $hero_headline_suffix_secondary = $hero_defaults['headline_suffix_secondary'];
    }
}

$hero_features_field = $hero_field['features'] ?? [];
$hero_features = [];
$source_features = [];

if (is_array($hero_features_field) && !empty($hero_features_field)) {
    $source_features = $hero_features_field;
} else {
    $source_features = $hero_defaults['features'];
}

foreach ($source_features as $index => $feature_field) {
    $default_feature = $hero_defaults['features'][$index] ?? [
        'title' => '',
        'subtitle' => '',
        'icon' => [
            'url' => '',
            'alt' => '',
        ],
    ];

    $title = '';
    if (isset($feature_field['feature_title'])) {
        $title = trim($feature_field['feature_title']);
    } elseif (isset($feature_field['title'])) {
        $title = trim($feature_field['title']);
    }

    if ($title === '') {
        $title = $default_feature['title'] ?? '';
    }

    $subtitle = '';
    if (isset($feature_field['feature_subtitle'])) {
        $subtitle = trim($feature_field['feature_subtitle']);
    } elseif (isset($feature_field['subtitle'])) {
        $subtitle = trim($feature_field['subtitle']);
    }

    if ($subtitle === '') {
        $subtitle = $default_feature['subtitle'] ?? '';
    }

    $icon_field = $feature_field['feature_icon'] ?? ($feature_field['icon'] ?? null);
    $icon_default = $default_feature['icon'] ?? ['url' => '', 'alt' => ''];
    $icon_alt_fallback = $icon_default['alt'] ?? ($title !== '' ? $title : $hero_headline_prefix);
    $icon_data = petromin_get_acf_image_data($icon_field, 'full', $icon_default['url'] ?? '', $icon_alt_fallback);

    if (!$icon_data && !empty($icon_default['url'])) {
        $icon_data = $icon_default;
    }

    if ($title === '' && $subtitle !== '') {
        $title = $subtitle;
        $subtitle = '';
    }

    if ($title === '' && $subtitle === '' && !$icon_data) {
        continue;
    }

    $hero_features[] = [
        'title' => $title,
        'subtitle' => $subtitle,
        'icon' => $icon_data,
    ];
}

$offers_heading = trim($offers_field['heading'] ?? '');
if ($offers_heading === '') {
    $offers_heading = $offers_defaults['heading'];
}

$offers_slides_field = $offers_field['slides'] ?? [];
$offers_slides = [];

if (is_array($offers_slides_field) && !empty($offers_slides_field)) {
    $slides_source = $offers_slides_field;
    $using_defaults = false;
} else {
    $slides_source = $offers_defaults['slides'];
    $using_defaults = true;
}
foreach ($slides_source as $index => $slide_field) {
    $default_slide = $offers_defaults['slides'][$index] ?? [
        'desktop_image' => [
            'url' => '',
            'alt' => $offers_heading,
        ],
        'mobile_image' => [
            'url' => '',
            'alt' => $offers_heading,
        ],
    ];

    $desktop_default = $default_slide['desktop_image'] ?? [
        'url' => '',
        'alt' => $offers_heading,
    ];
    $mobile_default = $default_slide['mobile_image'] ?? [
        'url' => '',
        'alt' => $offers_heading,
    ];

    if (!$using_defaults) {
        if (!empty($slide_field['desktop_alt'])) {
            $desktop_default['alt'] = trim($slide_field['desktop_alt']);
        }

        if (!empty($slide_field['mobile_alt'])) {
            $mobile_default['alt'] = trim($slide_field['mobile_alt']);
        }
    }

    $desktop_image = petromin_get_acf_image_data($slide_field['desktop_image'] ?? null, 'full', $desktop_default['url'], $desktop_default['alt']);
    $mobile_image = petromin_get_acf_image_data($slide_field['mobile_image'] ?? null, 'full', $mobile_default['url'], $mobile_default['alt']);

    if (!$desktop_image && !$mobile_image) {
        continue;
    }

    $offers_slides[] = [
        'desktop' => $desktop_image,
        'mobile' => $mobile_image,
    ];
}

$offers_nav_icon_data = petromin_get_acf_image_data($offers_field['navigation_icon'] ?? null, 'full', $offers_defaults['navigation_icon']['url'], $offers_defaults['navigation_icon']['alt']);

if (!$offers_nav_icon_data) {
    $offers_nav_icon_data = $offers_defaults['navigation_icon'];
}

$services_heading = trim($services_field['heading'] ?? '');
if ($services_heading === '') {
    $services_heading = $services_defaults['heading'];
}

$build_services_tabs = static function (array $source, array $default_tabs) use ($services_defaults, $services_heading) {
    $tabs = [];

    foreach ($source as $index => $tab_field) {
        $default_tab = $default_tabs[$index] ?? ($services_defaults['tabs'][$index] ?? [
            'label' => '',
            'icon' => [
                'url' => '',
                'alt' => '',
            ],
            'heading' => '',
            'description' => '',
            'highlight' => '',
            'primary_button' => [
                'label' => '',
                'url' => '#',
                'target' => '_self',
            ],
            'secondary_button' => [
                'label' => '',
                'url' => '#',
                'target' => '_self',
            ],
            'image' => [
                'url' => '',
                'alt' => '',
            ],
        ]);

        $label = trim($tab_field['tab_label'] ?? ($tab_field['label'] ?? ''));
        if ($label === '') {
            $label = $default_tab['label'] ?? '';
        }

        $heading = trim($tab_field['tab_heading'] ?? ($tab_field['heading'] ?? ''));
        if ($heading === '') {
            $heading = $default_tab['heading'] ?? $label;
        }

        $description = trim($tab_field['tab_description'] ?? ($tab_field['description'] ?? ''));
        if ($description === '') {
            $description = $default_tab['description'] ?? '';
        }

        $highlight = trim($tab_field['tab_highlight'] ?? ($tab_field['highlight'] ?? ''));
        if ($highlight === '') {
            $highlight = $default_tab['highlight'] ?? '';
        }

        $icon_default = $default_tab['icon'] ?? ['url' => '', 'alt' => $heading ?: $label];
        $icon_alt_fallback = $icon_default['alt'] ?? ($heading ?: $label ?: $services_heading);
        $icon_data = petromin_get_acf_image_data($tab_field['tab_icon'] ?? ($tab_field['icon'] ?? null), 'full', $icon_default['url'], $icon_alt_fallback);
        if (!$icon_data && !empty($icon_default['url'])) {
            $icon_data = $icon_default;
        }

        $image_default = $default_tab['image'] ?? ['url' => '', 'alt' => $heading ?: $label];
        $image_alt_fallback = $image_default['alt'] ?? ($heading ?: $label ?: $services_heading);
        $image_data = petromin_get_acf_image_data($tab_field['tab_image'] ?? ($tab_field['image'] ?? null), 'full', $image_default['url'], $image_alt_fallback);
        if (!$image_data && !empty($image_default['url'])) {
            $image_data = $image_default;
        }

        $primary_default = $default_tab['primary_button'] ?? ['label' => '', 'url' => '#', 'target' => '_self'];
        $primary_group = $tab_field['primary_button'] ?? [];
        $primary_label = $primary_default['label'] ?? '';
        $primary_url = $primary_default['url'] ?? '#';
        $primary_target = $primary_default['target'] ?? '_self';

        if (is_array($primary_group)) {
            $primary_label_candidate = trim($primary_group['label'] ?? '');
            if ($primary_label_candidate !== '') {
                $primary_label = $primary_label_candidate;
            }

            $primary_link_field = $primary_group['link'] ?? ($primary_group['url'] ?? null);
            if ($primary_link_field !== null) {
                $normalized_primary = petromin_normalize_link($primary_link_field, $primary_url);
                if ($normalized_primary !== '') {
                    $primary_url = $normalized_primary;
                }

                if (is_array($primary_link_field) && !empty($primary_link_field['target'])) {
                    $primary_target = $primary_link_field['target'];
                } elseif (!empty($primary_group['target'])) {
                    $primary_target = $primary_group['target'];
                }

                if ($primary_label === '' && is_array($primary_link_field) && !empty($primary_link_field['title'])) {
                    $primary_label = trim($primary_link_field['title']);
                }
            }
        } elseif ($primary_group !== null && $primary_group !== '' && $primary_group !== []) {
            $normalized_primary = petromin_normalize_link($primary_group, $primary_url);
            if ($normalized_primary !== '') {
                $primary_url = $normalized_primary;
            }
        }

        $secondary_default = $default_tab['secondary_button'] ?? ['label' => '', 'url' => '#', 'target' => '_self'];
        $secondary_group = $tab_field['secondary_button'] ?? [];
        $secondary_label = $secondary_default['label'] ?? '';
        $secondary_url = $secondary_default['url'] ?? '#';
        $secondary_target = $secondary_default['target'] ?? '_self';

        if (is_array($secondary_group)) {
            $secondary_label_candidate = trim($secondary_group['label'] ?? '');
            if ($secondary_label_candidate !== '') {
                $secondary_label = $secondary_label_candidate;
            }

            $secondary_link_field = $secondary_group['link'] ?? ($secondary_group['url'] ?? null);
            if ($secondary_link_field !== null) {
                $normalized_secondary = petromin_normalize_link($secondary_link_field, $secondary_url);
                if ($normalized_secondary !== '') {
                    $secondary_url = $normalized_secondary;
                }

                if (is_array($secondary_link_field) && !empty($secondary_link_field['target'])) {
                    $secondary_target = $secondary_link_field['target'];
                } elseif (!empty($secondary_group['target'])) {
                    $secondary_target = $secondary_group['target'];
                }

                if ($secondary_label === '' && is_array($secondary_link_field) && !empty($secondary_link_field['title'])) {
                    $secondary_label = trim($secondary_link_field['title']);
                }
            }
        } elseif ($secondary_group !== null && $secondary_group !== '' && $secondary_group !== []) {
            $normalized_secondary = petromin_normalize_link($secondary_group, $secondary_url);
            if ($normalized_secondary !== '') {
                $secondary_url = $normalized_secondary;
            }
        }

        if (
            $label === '' &&
            $heading === '' &&
            $description === '' &&
            $highlight === '' &&
            !$icon_data &&
            !$image_data &&
            $primary_label === '' &&
            $secondary_label === ''
        ) {
            continue;
        }

        $tabs[] = [
            'label' => $label,
            'heading' => $heading,
            'description' => $description,
            'highlight' => $highlight,
            'icon' => $icon_data,
            'image' => $image_data,
            'primary_button' => [
                'label' => $primary_label,
                'url' => $primary_url,
                'target' => $primary_target ?: '_self',
            ],
            'secondary_button' => [
                'label' => $secondary_label,
                'url' => $secondary_url,
                'target' => $secondary_target ?: '_self',
            ],
        ];
    }

    return $tabs;
};

$services_tabs_input = is_array($services_field['tabs'] ?? null) ? $services_field['tabs'] : [];
$services_tabs = $build_services_tabs($services_tabs_input, $services_defaults['tabs']);

if (empty($services_tabs)) {
    $services_tabs = $build_services_tabs($services_defaults['tabs'], $services_defaults['tabs']);
}

$timeline_heading = trim($timeline_field['heading'] ?? '');
if ($timeline_heading === '') {
    $timeline_heading = $timeline_defaults['heading'];
}

$timeline_nav_icon_data = petromin_get_acf_image_data($timeline_field['navigation_icon'] ?? null, 'full', $timeline_defaults['navigation_icon']['url'], $timeline_defaults['navigation_icon']['alt']);
if (!$timeline_nav_icon_data) {
    $timeline_nav_icon_data = $timeline_defaults['navigation_icon'];
}

$build_timeline_slides = static function (array $source, array $default_slides) use ($timeline_defaults, $timeline_heading) {
    $slides = [];

    foreach ($source as $index => $slide_field) {
        $default_slide = $default_slides[$index] ?? ($timeline_defaults['slides'][$index] ?? [
            'year' => '',
            'image' => [
                'url' => '',
                'alt' => '',
            ],
            'description' => '',
        ]);

        $year = trim($slide_field['year'] ?? ($slide_field['timeline_year'] ?? ''));
        if ($year === '') {
            $year = $default_slide['year'] ?? '';
        }

        $description = trim($slide_field['description'] ?? ($slide_field['slide_description'] ?? ''));
        if ($description === '') {
            $description = $default_slide['description'] ?? '';
        }

        $image_default = $default_slide['image'] ?? ['url' => '', 'alt' => $description ?: $year];
        $image_alt_fallback = $image_default['alt'] ?? ($description ?: $year ?: $timeline_heading);
        $image_data = petromin_get_acf_image_data($slide_field['image'] ?? null, 'full', $image_default['url'], $image_alt_fallback);
        if (!$image_data && !empty($image_default['url'])) {
            $image_data = $image_default;
        }

        if ($year === '' && !$image_data && $description === '') {
            continue;
        }

        $slides[] = [
            'year' => $year,
            'image' => $image_data,
            'description' => $description,
        ];
    }

    return $slides;
};

$timeline_slides_input = is_array($timeline_field['slides'] ?? null) ? $timeline_field['slides'] : [];
$timeline_slides = $build_timeline_slides($timeline_slides_input, $timeline_defaults['slides']);

if (empty($timeline_slides)) {
    $timeline_slides = $build_timeline_slides($timeline_defaults['slides'], $timeline_defaults['slides']);
}

$partner_highlights_icon = petromin_get_acf_image_data($partner_highlights_field['icon'] ?? null, 'full', $partner_highlights_defaults['icon']['url'], $partner_highlights_defaults['icon']['alt']);
if (!$partner_highlights_icon) {
    $partner_highlights_icon = $partner_highlights_defaults['icon'];
}

$partner_highlights_items = [];
$partner_items_input = is_array($partner_highlights_field['items'] ?? null) ? $partner_highlights_field['items'] : [];
if (!empty($partner_items_input)) {
    foreach ($partner_items_input as $item) {
        if (is_array($item)) {
            $text = trim($item['item_text'] ?? ($item['text'] ?? ''));
        } else {
            $text = trim((string) $item);
        }

        if ($text !== '') {
            $partner_highlights_items[] = $text;
        }
    }
}

if (empty($partner_highlights_items)) {
    $partner_highlights_items = $partner_highlights_defaults['items'];
}

?>
    <section class="heroSection w-full relative z-0 md:h-dvh h-full">
        <div class="relative w-full h-full overflow-hidden">
            <?php if ($hero_video_url !== ''): ?>
            <video autoplay muted loop playsinline
                class="absolute inset-0 w-full h-full object-cover md:object-left object-left">
                <source src="<?php echo esc_url($hero_video_url); ?>" type="<?php echo esc_attr($hero_video_type); ?>">
                <?php esc_html_e('Your browser does not support the video tag.', 'petromin'); ?>
            </video>
            <?php endif; ?>

            <div class="w-full relative z-10">
                <div class="view max-md:pl-0 flex flex-col max-md:gap-y-16">
                    <div class="px-6 mb-8 md:mb-8 pt-16 md:pt-24">
                        <h1
                            class="drop-shadow-[0_4px_8px_rgba(0,0,0,0.6)] lg:text-6xl md:text-5xl text-[2.625rem] mt-6 font-bold italic md:!leading-[4.688rem] w-fit text-white md:block hidden">
                            <?php if ($hero_headline_prefix !== ''): ?>
                                <?php echo esc_html($hero_headline_prefix); ?>
                            <?php endif; ?>
                            <?php if ($hero_headline_highlight !== ''): ?>
                                <span
                                    class="relative px-4 !pr-7  backdrop-blur-[0.125rem] -skew-x-[16deg]  before:absolute before:inset-0 before:bg-gradient-to-l before:from-[#CB122D] before:via-[#CB122D] before:to-[#650916] before:-skew-x-[16deg] before:-z-10 before:lg:h-[4.688rem] before:h-[3.688rem] before:flex before:justify-center before:items-center before:top-auto">
                                    <?php echo esc_html($hero_headline_highlight); ?>
                                </span>
                            <?php endif; ?>
                            <?php if ($hero_headline_suffix !== ''): ?>
                                <span class="block"><?php echo esc_html($hero_headline_suffix); ?></span>
                            <?php endif; ?>
                        </h1>
                        <h1
                            class="text-[2.625rem] mt-6 font-bold italic leading-[3.2rem] whitespace-nowrap text-white block md:hidden">
                            <?php if ($hero_headline_prefix !== ''): ?>
                                <?php echo esc_html($hero_headline_prefix); ?>
                            <?php endif; ?>
                            <?php if ($hero_headline_highlight !== ''): ?>
                                <span
                                    class="relative block px-4 !pr-7 mt-4 w-fit drop-shadow-[0_4px_8px_rgba(0,0,0,0.6)]  bg-gradient-to-l from-[#CB122D] via-[#CB122D] to-[#650916] -skew-x-[16deg] -z-10 h-[4.688rem] flex justify-center items-center ">
                                    <span class="skew-x-[16deg]"><?php echo esc_html($hero_headline_highlight); ?></span>
                                </span>
                            <?php endif; ?>
                            <?php if ($hero_headline_suffix_primary !== ''): ?>
                                <?php echo esc_html($hero_headline_suffix_primary); ?>
                            <?php endif; ?>
                            <?php if ($hero_headline_suffix_secondary !== ''): ?>
                                <span class="block"><?php echo esc_html($hero_headline_suffix_secondary); ?></span>
                            <?php endif; ?>
                        </h1>
                    </div>
                    <?php if (!empty($hero_features)): ?>
                    <div
                        class="absolute services_sec md:flex hidden w-fit lg:py-5 py-3  px-8  bg-[linear-gradient(268.6deg,_#CB122D_0.16%,_#650916_100%)] top-auto bottom-[-7rem] left-0 origin-top -skew-x-[18deg]">
                        <div class="view w-fit flex items-center justify-center skew-x-[18deg] pr-0">
                            <?php foreach ($hero_features as $feature): ?>
                            <div class="flex flex-col lg:flex-row items-center gap-2 mx-3">
                                <?php if (!empty($feature['icon']['url'])): ?>
                                <img src="<?php echo esc_url($feature['icon']['url']); ?>"
                                    alt="<?php echo esc_attr($feature['icon']['alt']); ?>"
                                    title="<?php echo esc_attr($feature['icon']['alt']); ?>" class="size-8" loading="lazy"
                                    fetchpriority="low">
                                <?php endif; ?>
                                <div class="text-base text-white font-bold font-inter leading-tight">
                                    <?php if ($feature['title'] !== ''): ?>
                                        <?php echo esc_html($feature['title']); ?>
                                    <?php endif; ?>
                                    <?php if ($feature['subtitle'] !== ''): ?>
                                        <span class="block"><?php echo esc_html($feature['subtitle']); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div
                        class="bg-[linear-gradient(268.6deg,_#CB122D_0.16%,_#650916_100%)] relative feature-box1 flex md:hidden py-6 px-6 max-w-fit shadow-xl mb-12 ">
                        <div class="flex flex-col items-start justify-start gap-y-4 ">
                            <?php $hero_features_count = count($hero_features); ?>
                            <?php foreach ($hero_features as $feature_index => $feature): ?>
                            <div class="flex items-start gap-2<?php echo $feature_index < $hero_features_count - 1 ? ' me-3' : ''; ?>">
                                <?php if (!empty($feature['icon']['url'])): ?>
                                <img src="<?php echo esc_url($feature['icon']['url']); ?>"
                                    alt="<?php echo esc_attr($feature['icon']['alt']); ?>"
                                    title="<?php echo esc_attr($feature['icon']['alt']); ?>" class="size-8" loading="lazy"
                                    fetchpriority="low">
                                <?php endif; ?>
                                <p class="text-base text-white font-bold font-inter">
                                    <?php if ($feature['title'] !== ''): ?>
                                        <?php echo esc_html($feature['title']); ?>
                                    <?php endif; ?>
                                    <?php if ($feature['subtitle'] !== ''): ?>
                                        <span class="block"><?php echo esc_html($feature['subtitle']); ?></span>
                                    <?php endif; ?>
                                </p>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>

                </div>

            </div>
        </div>

    </section>

    <section class="w-full relative offerSection lg:pt-16 pt-[3.75rem] pb-3.313rem] overflow-hidden">
        <div class="view md:pr-0">
            <div class="flex items-center justify-between md:pb-16 pb-12">
                <h2
                    class="text-[1.75rem] md:text-3xl lg:text-4xl 2xl:text-[3.125rem] 2xl:!leading-[3.313rem] !leading-12 font-inter font-bold text-black pr-2">
                    <?php echo esc_html($offers_heading); ?>
                </h2>
                <?php if (!empty($offers_slides) && !empty($offers_nav_icon_data['url'])): ?>
                <div
                    class=" md:flex items-center justify-start hidden origin-bottom z-20 bg-[#CB122D] px-4 shadow-[-6px_6px_0px_-1px_rgba(0,0,0,0.9)] w-56 h-16 transition transform -skew-x-12 duration-150 ease-in-out">
                    <div class="swiper-prev cursor-pointer">
                        <span>
                            <img src="<?php echo esc_url($offers_nav_icon_data['url']); ?>"
                                class="text-white size-8 rotate-180 skew-x-12 invert brightness-0"
                                alt="<?php echo esc_attr($offers_nav_icon_data['alt']); ?>"
                                title="<?php echo esc_attr($offers_nav_icon_data['alt']); ?>">
                        </span>
                    </div>
                    <div class="swiper-next cursor-pointer">
                        <span>
                            <img src="<?php echo esc_url($offers_nav_icon_data['url']); ?>"
                                class="text-white size-8 skew-x-12 invert brightness-0 mb-[0.188rem] ml-3"
                                alt="<?php echo esc_attr($offers_nav_icon_data['alt']); ?>"
                                title="<?php echo esc_attr($offers_nav_icon_data['alt']); ?>">
                        </span>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <?php if (!empty($offers_slides)): ?>
        <div class="swiper benefitSwiper relative flex justify-center z-0 ">

            <div class="swiper-wrapper">

                <?php foreach ($offers_slides as $slide): ?>
                <div class="swiper-slide">
                    <?php if (!empty($slide['desktop']['url'])): ?>
                    <img src="<?php echo esc_url($slide['desktop']['url']); ?>" alt="<?php echo esc_attr($slide['desktop']['alt']); ?>"
                        title="<?php echo esc_attr($slide['desktop']['alt']); ?>" width="369" height="369"
                        class="w-full h-full object-cover shadow-lg lg:flex hidden" loading="lazy"
                        fetchpriority="low">
                    <?php endif; ?>
                    <?php if (!empty($slide['mobile']['url'])): ?>
                    <img src="<?php echo esc_url($slide['mobile']['url']); ?>" width="369" height="369"
                        class="w-full h-full object-cover object-center flex lg:hidden"
                        alt="<?php echo esc_attr($slide['mobile']['alt']); ?>"
                        title="<?php echo esc_attr($slide['mobile']['alt']); ?>">
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>

        </div>
        <?php endif; ?>
    </section>
<?php if (!empty($services_tabs)): ?>
    <section class="tabSection relative font-inter overflow-hidden lg:pt-[6.188rem] pt-[6.688rem] lg:block hidden">
        <div class="relative view mb-6">
            <div class="flex items-center justify-between md:pb-6 pb-4">
                <?php if ($services_heading !== ''): ?>
                <h2
                    class="text-[1.75rem] md:text-3xl lg:text-4xl/12 2xl:text-[3.125rem] 2xl:!leading-[3.313rem] !leading-12 font-inter font-bold text-black pr-2">
                    <?php echo esc_html($services_heading); ?>
                </h2>
                <?php endif; ?>
            </div>
        </div>
        <div
            class="w-fit relative py-2 z-30 before:absolute before:w-full flex justify-center items-center before:top-auto before:bg-gradient-to-r before:h-16 before:from-[#000000] before:to-[#000000] before:left-0 before:origin-top before:-skew-x-[18deg]">
            <nav id="tabs-nav" class="view flex items-center relative flex-nowrap gap-3 w-fit min-w-full z-10 !pr-5"
                style="scrollbar-width:none;">
                <?php foreach ($services_tabs as $tab_index => $tab): ?>
                <?php
                $tab_number = $tab_index + 1;
                $is_active = $tab_index === 0;
                $button_classes = 'tab-btn md:px-4 py-5 -my-5 lg:font-bold font-semibold text-lg text-white h-20';
                $inner_classes = 'block text-lg';

                if ($is_active) {
                    $button_classes .= ' active relative lg:px-4 px-3 bg-gradient-to-l from-[#CB122D] via-[#9b2133] to-[#CB122D] -skew-x-[18deg]';
                    $inner_classes = 'skew-x-[18deg] block text-lg';
                }
                ?>
                <button data-tab="<?php echo esc_attr($tab_number); ?>"
                    class="<?php echo esc_attr($button_classes); ?>">
                    <span class="<?php echo esc_attr($inner_classes); ?>">
                        <?php echo esc_html($tab['label']); ?>
                    </span>
                </button>
                <?php endforeach; ?>
            </nav>
        </div>

        <div class="relative tab-content view ">
            <?php foreach ($services_tabs as $tab_index => $tab): ?>
            <?php
            $tab_number = $tab_index + 1;
            $content_classes = 'content-item flex lg:flex-row flex-col items-center justify-between py-10';
            if ($tab_index !== 0) {
                $content_classes .= ' hidden';
            }

            $icon_url = $tab['icon']['url'] ?? '';
            $icon_alt = $tab['icon']['alt'] ?? '';
            $image_url = $tab['image']['url'] ?? '';
            $image_alt = $tab['image']['alt'] ?? '';
            $primary_button = $tab['primary_button'] ?? [];
            $secondary_button = $tab['secondary_button'] ?? [];
            $has_primary = !empty($primary_button['label']);
            $has_secondary = !empty($secondary_button['label']);
            ?>
            <div class="<?php echo esc_attr($content_classes); ?>" data-content="<?php echo esc_attr($tab_number); ?>">
                <div class="lg:w-2/5 w-full z-10 pe-0 lg:pe-12 pb-8 lg:pb-0">
                    <div class="flex flex-col items-start lg:mb-5 mb-2">
                        <?php if ($icon_url !== ''): ?>
                        <span
                            class="bg-gradient-to-l from-[#CB122D] to-[#650916] -skew-x-[18deg] mb-5 flex items-center justify-center w-[4.9rem] h-[3.75rem]">
                            <img src="<?php echo esc_url($icon_url); ?>"
                                alt="<?php echo esc_attr($icon_alt); ?>"
                                title="<?php echo esc_attr($icon_alt); ?>"
                                class="size-[2.688rem] skew-x-[18deg]" loading="lazy" fetchpriority="low">
                        </span>
                        <?php endif; ?>
                        <?php if (!empty($tab['heading'])): ?>
                        <h3 class="text-2xl md:text-3xl lg:text-[2.5rem] font-bold text-black -ms-3">
                            <?php echo esc_html($tab['heading']); ?>
                        </h3>
                        <?php endif; ?>
                    </div>
                    <?php if (!empty($tab['description'])): ?>
                    <p class="text-black text-base font-normal mb-4 -ms-3">
                        <?php echo nl2br(esc_html($tab['description'])); ?>
                    </p>
                    <?php endif; ?>
                    <?php if (!empty($tab['highlight'])): ?>
                    <p class="text-[1.375rem] font-bold text-black mb-5 -ms-3">
                        <?php echo esc_html($tab['highlight']); ?>
                    </p>
                    <?php endif; ?>
                    <?php if ($has_primary || $has_secondary): ?>
                    <div class="flex items-center lg:pb-10 space-x-4 -ms-3">
                        <?php if ($has_primary): ?>
                        <a href="<?php echo esc_url($primary_button['url'] ?? '#'); ?>"
                            target="<?php echo esc_attr($primary_button['target'] ?? '_self'); ?>"
                            class="bg-[#CB122D] flex items-center text-base hover:bg-red-800 text-white font-semibold py-[0.625rem] px-[0.625rem] transition duration-200">
                            <?php echo esc_html($primary_button['label']); ?>
                            <svg class="size-4 text-white ms-2" stroke="currentColor" fill="none" stroke-width="0"
                                viewBox="0 0 24 24" height="200" width="200" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.5858 6.34317L12 4.92896L19.0711 12L12 19.0711L10.5858 17.6569L16.2427 12L10.5858 6.34317Z"
                                    fill="currentColor"></path>
                            </svg>
                        </a>
                        <?php endif; ?>
                        <?php if ($has_secondary): ?>
                        <a href="<?php echo esc_url($secondary_button['url'] ?? '#'); ?>"
                            target="<?php echo esc_attr($secondary_button['target'] ?? '_self'); ?>"
                            class="bg-[#FF8300] hover:bg-orange-600 flex items-center text-base text-white font-semibold py-[0.625rem] px-[0.625rem] transition duration-200">
                            <?php echo esc_html($secondary_button['label']); ?>
                            <svg class="size-4 text-white ms-2" stroke="currentColor" fill="none" stroke-width="0"
                                viewBox="0 0 24 24" height="200" width="200" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.5858 6.34317L12 4.92896L19.0711 12L12 19.0711L10.5858 17.6569L16.2427 12L10.5858 6.34317Z"
                                    fill="currentColor"></path>
                            </svg>
                        </a>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="lg:w-3/5 w-full flex relative z-10">
                    <?php if ($image_url !== ''): ?>
                    <img src="<?php echo esc_url($image_url); ?>" width="730" height="475"
                        class="object-contain md:object-bottom object-center lg:aspect-[730/475] aspect-[700/475] py-5"
                        loading="lazy" fetchpriority="low" alt="<?php echo esc_attr($image_alt); ?>"
                        title="<?php echo esc_attr($image_alt); ?>">
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
            <div class="absolute right-0 bottom-0 top-0 w-full md:flex flex-col hidden">
                <img loading="eager" fetchpriority="high" decoding="async" src="img/Group-64-1-scaled.webp" width="730"
                    height="475" class="absolute w-full object-cover object-center lg:-top-6 bottom-0 lg:h-full h-72">
            </div>
            <div class="absolute flex flex-col left-0 md:bottom-0 max-sm:top-0 md:hidden">
                <img loading="eager" fetchpriority="high" decoding="async" src="img/Frame-24-1.webp" width="730"
                    height="475" alt="Background" class="w-full h-full object-cover object-right">
            </div>
        </div>


    </section>
    <?php endif; ?>

<?php if (!empty($services_tabs)): ?>
    <section class="tabSection relative font-inter pt-[6.688rem] block lg:hidden">
        <div class="view">
            <div class="flex items-center justify-between pb-0.5">
                <?php if ($services_heading !== ''): ?>
                <h2
                    class="text-[1.75rem] md:text-3xl lg:text-4xl 2xl:text-[3.125rem] 2xl:!leading-[3.313rem] !leading-12 font-inter font-bold text-black pr-2">
                    <?php echo esc_html($services_heading); ?>
                </h2>
                <?php endif; ?>
            </div>
        </div>

        <div class="relative py-8 font-inter overflow-x-auto">
            <nav id="mobile-tab"
                class="w-fit flex items-center justify-between lg:gap-x-3 relative py-3 bg-black shadow-lg z-10 ps-6 ">
                <?php foreach ($services_tabs as $tab_index => $tab): ?>
                <?php
                $tab_number = $tab_index + 1;
                $is_active = $tab_index === 0;
                $button_classes = 'm-tab px-3 py-5 -my-5 lg:font-bold font-semibold text-base text-white whitespace-nowrap lg:whitespace-wrap';
                $inner_classes = 'block text-base whitespace-nowrap lg:whitespace-wrap';

                if ($is_active) {
                    $button_classes .= ' active relative bg-gradient-to-l from-[#CB122D] to-[#650916] -skew-x-[12deg]';
                    $inner_classes = 'skew-x-[12deg] block text-base whitespace-nowrap lg:whitespace-wrap';
                }
                ?>
                <button data-tab="<?php echo esc_attr($tab_number); ?>"
                    class="<?php echo esc_attr($button_classes); ?>">
                    <span class="<?php echo esc_attr($inner_classes); ?>"><?php echo esc_html($tab['label']); ?></span>
                </button>
                <?php endforeach; ?>
            </nav>
        </div>

        <div class="relative mtab-content view px-[1.875rem] pt-[0.9rem]">
            <?php foreach ($services_tabs as $tab_index => $tab): ?>
            <?php
            $tab_number = $tab_index + 1;
            $content_classes = 'cont-item flex lg:flex-row flex-col items-center';
            if ($tab_index !== 0) {
                $content_classes .= ' hidden';
            }

            $icon_url = $tab['icon']['url'] ?? '';
            $icon_alt = $tab['icon']['alt'] ?? '';
            $image_url = $tab['image']['url'] ?? '';
            $image_alt = $tab['image']['alt'] ?? '';
            $primary_button = $tab['primary_button'] ?? [];
            $secondary_button = $tab['secondary_button'] ?? [];
            $has_primary = !empty($primary_button['label']);
            $has_secondary = !empty($secondary_button['label']);
            ?>
            <div class="<?php echo esc_attr($content_classes); ?>" data-content="<?php echo esc_attr($tab_number); ?>">
                <div class="lg:w-2/5 w-full z-10 pe-0 lg:pe-12 pb-8 lg:pb-0">
                    <div class="flex flex-col items-start lg:mb-5 mb-2">
                        <?php if ($icon_url !== ''): ?>
                        <span
                            class="bg-gradient-to-l from-[#CB122D] to-[#650916] -skew-x-[18deg] mb-5 flex items-center justify-center h-[3.75rem] w-[4.9rem]">
                            <img src="<?php echo esc_url($icon_url); ?>"
                                alt="<?php echo esc_attr($icon_alt); ?>"
                                title="<?php echo esc_attr($icon_alt); ?>"
                                class="size-[2.688rem] skew-x-[18deg]" loading="lazy" fetchpriority="low">
                        </span>
                        <?php endif; ?>
                        <?php if (!empty($tab['heading'])): ?>
                        <h3 class="text-2xl md:text-3xl lg:text-[2.5rem] font-bold text-black -ms-3">
                            <?php echo esc_html($tab['heading']); ?>
                        </h3>
                        <?php endif; ?>
                    </div>
                    <?php if (!empty($tab['description'])): ?>
                    <p class="text-black text-base font-normal mb-[2.25rem] -ms-3">
                        <?php echo nl2br(esc_html($tab['description'])); ?>
                    </p>
                    <?php endif; ?>
                    <?php if (!empty($tab['highlight'])): ?>
                    <p class="text-[1.375rem] font-bold text-black mb-[2.25rem] -ms-3">
                        <?php echo esc_html($tab['highlight']); ?>
                    </p>
                    <?php endif; ?>
                    <?php if ($has_primary || $has_secondary): ?>
                    <div class="flex items-center lg:pb-10 space-x-4 -ms-3">
                        <?php if ($has_primary): ?>
                        <a href="<?php echo esc_url($primary_button['url'] ?? '#'); ?>"
                            target="<?php echo esc_attr($primary_button['target'] ?? '_self'); ?>"
                            class="bg-[#CB122D] flex items-center text-base hover:bg-red-800 text-white font-semibold py-[0.625rem] px-[0.625rem] transition duration-200">
                            <?php echo esc_html($primary_button['label']); ?>
                            <svg class="size-4 text-white ms-2" stroke="currentColor" fill="none" stroke-width="0"
                                viewBox="0 0 24 24" height="200" width="200" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.5858 6.34317L12 4.92896L19.0711 12L12 19.0711L10.5858 17.6569L16.2427 12L10.5858 6.34317Z"
                                    fill="currentColor"></path>
                            </svg>
                        </a>
                        <?php endif; ?>
                        <?php if ($has_secondary): ?>
                        <a href="<?php echo esc_url($secondary_button['url'] ?? '#'); ?>"
                            target="<?php echo esc_attr($secondary_button['target'] ?? '_self'); ?>"
                            class="bg-[#FF8300] hover:bg-orange-600 flex items-center text-base text-white font-semibold py-[0.625rem] px-[0.625rem] transition duration-200">
                            <?php echo esc_html($secondary_button['label']); ?>
                            <svg class="size-4 text-white ms-2" stroke="currentColor" fill="none" stroke-width="0"
                                viewBox="0 0 24 24" height="200" width="200" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.5858 6.34317L12 4.92896L19.0711 12L12 19.0711L10.5858 17.6569L16.2427 12L10.5858 6.34317Z"
                                    fill="currentColor"></path>
                            </svg>
                        </a>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="lg:w-3/5 w-full flex relative z-10">
                    <?php if ($image_url !== ''): ?>
                    <img src="<?php echo esc_url($image_url); ?>" width="730" height="475"
                        class="object-contain md:object-bottom object-center lg:aspect-[730/475] aspect-[700/475]"
                        loading="lazy" fetchpriority="low" alt="<?php echo esc_attr($image_alt); ?>"
                        title="<?php echo esc_attr($image_alt); ?>">
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
    <?php endif; ?>

<?php if (!empty($timeline_slides)): ?>
    <section class="w-full relative overflow-hidden md:pt-12 pt-[5.063rem]">
        <div class="view md:pr-0">
            <div class="flex items-center justify-between pb-10">
                <?php if ($timeline_heading !== ''): ?>
                <h2
                    class="text-[1.75rem] md:text-3xl lg:text-4xl 2xl:text-[3.125rem] 2xl:!leading-[3.313rem] !leading-12 font-inter font-bold text-black pr-2">
                    <?php echo esc_html($timeline_heading); ?>
                </h2>
                <?php endif; ?>
                <?php if (!empty($timeline_nav_icon_data['url'])): ?>
                <div
                    class=" md:flex items-center justify-start hidden origin-bottom z-20 bg-[#CB122D] px-4 shadow-[-6px_6px_0px_-1px_rgba(0,0,0,0.9)] w-56 h-16 transition transform -skew-x-12 duration-150 ease-in-out">
                    <div class="swiper-prev cursor-pointer">
                        <span>
                            <img src="<?php echo esc_url($timeline_nav_icon_data['url']); ?>"
                                class="text-white size-8 rotate-180 skew-x-12 invert brightness-0"
                                alt="<?php echo esc_attr($timeline_nav_icon_data['alt']); ?>"
                                title="<?php echo esc_attr($timeline_nav_icon_data['alt']); ?>">
                        </span>
                    </div>
                    <div class="swiper-next cursor-pointer">
                        <span>
                            <img src="<?php echo esc_url($timeline_nav_icon_data['url']); ?>"
                                class="text-white size-8 skew-x-12 invert brightness-0 mb-[0.188rem] ml-3"
                                alt="<?php echo esc_attr($timeline_nav_icon_data['alt']); ?>"
                                title="<?php echo esc_attr($timeline_nav_icon_data['alt']); ?>">
                        </span>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="w-full relative">
            <div class="swiper featureSwiper relative z-0 py-10 font-inter">
                <div class="swiper-wrapper px-8">
                    <?php foreach ($timeline_slides as $slide): ?>
                    <div class="swiper-slide !h-auto">
                        <div
                            class="relative flex flex-col w-full h-full bg-gradient-to-l from-[#E5E5E5] to-[#E5E5E5] -skew-x-[18deg] py-8">

                            <?php if (!empty($slide['year'])): ?>
                            <div
                                class="absolute -top-8 -left-4 lg:py-3 lg:px-10 py-3 px-7 font-bold bg-gradient-to-l from-[#CB122D] to-[#650916] text-white lg:-skew-x-[6deg] skew-x-[6deg]">
                                <span
                                    class="lg:skew-x-[20deg] skew-x-[10deg] block 2xl:text-[1.5rem] xl:text-2xl lg:text-2xl text-xl 2xl:!leading-[3.063rem]">
                                    <?php echo esc_html($slide['year']); ?>
                                </span>
                            </div>
                            <?php endif; ?>

                            <div class="flex flex-col items-start skew-x-[18deg] w-full pt-6">
                                <div class="md:pl-14 pl-10 max-w-[90%]">
                                    <?php if (!empty($slide['image']['url'])): ?>
                                    <img loading="eager" fetchpriority="high" decoding="async"
                                        src="<?php echo esc_url($slide['image']['url']); ?>"
                                        class="lg:h-[7.938rem] lg:w-[13.899rem] h-[5.938rem] w-[9.938rem] object-cover object-center aspect-[89/51]"
                                        width="178" height="102"
                                        alt="<?php echo esc_attr($slide['image']['alt']); ?>"
                                        title="<?php echo esc_attr($slide['image']['alt']); ?>">
                                    <?php endif; ?>
                                    <?php if (!empty($slide['description'])): ?>
                                    <div
                                        class="2xl:text-xl xl:text-xl lg:text-lg text-base text-balance font-medium text-black mx-auto pt-6">
                                        <?php echo nl2br(esc_html($slide['description'])); ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

<?php if (!empty($partner_highlights_items)): ?>
    <section class="w-full relative overflow-hidden lg:py-[4.063rem] pt-[3.125rem] pb-[3.375rem]">
        <div class="w-full flex items-center justify-between relative bg-gradient-to-l from-white to-[rgba(255,255,255,0)]
        before:absolute before:inset-y-0 before:left-0 lg:before:w-[12.5rem] before:w-16
        before:bg-gradient-to-r
        before:from-[#FFFFFF] before:to-[#ffffff00]
        before:z-20 before:pointer-events-none after:absolute after:inset-y-0 after:right-0 lg:after:w-[12.5rem]
        after:bg-gradient-to-l after:w-16
        after:from-[#FFFFFF] after:to-[#ffffff00]
        after:z-20 after:pointer-events-none">
            <div class="swiper partnerSwiper relative">
                <div class="swiper-wrapper !ease-linear flex items-center">
                    <?php foreach ($partner_highlights_items as $item_text): ?>
                    <div class="swiper-slide flex items-center gap-4 justify-between min-w-max">
                        <div class="text-lg font-bold text-black font-inter whitespace-nowrap">
                            <?php echo esc_html($item_text); ?>
                        </div>
                        <?php if (!empty($partner_highlights_icon['url'])): ?>
                        <img src="<?php echo esc_url($partner_highlights_icon['url']); ?>"
                            class="w-[1.438rem] h-[1.063rem] flex-shrink-0"
                            alt="<?php echo esc_attr($partner_highlights_icon['alt']); ?>"
                            title="<?php echo esc_attr($partner_highlights_icon['alt']); ?>">
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <section class="w-full relative font-inter lg:py-0 py-8">
        <div class="view">
            <div class="relative flex justify-between md:flex-row flex-col lg:gap-y-6">
                <div class="xl:w-1/2 lg:w-1/2 w-full flex items-center relative z-10">
                    <div class="flex flex-col gap-y-[2.125rem] md:mt-10 mt-6">
                        <h2 class="text-[1.75rem] md:text-3xl lg:text-4xl 2xl:text-[3.125rem]
                        font-bold italic text-black text-start whitespace-nowrap
                        !leading-tight">
                            Get a
                            <span class="relative  italic inline-block px-3 py-1.5 text-white">
                                <span
                                    class="absolute inset-0 bg-gradient-to-l from-[#CB122D] to-[#650916] -z-10 -skew-x-[12deg]"></span>
                                FREE
                            </span>
                            full digital <br />car health check-up
                        </h2>
                        <div class="flex items-center md:gap-5 gap-3">
                            <a href="#"
                                class="bg-[#CB122D] flex items-center lg:text-base text-sm hover:bg-red-800 text-white font-semibold py-[0.625rem] px-3 transition duration-200">Get
                                It Now
                                <svg class="size-6 text-white ms-2" stroke="currentColor" fill="none" stroke-width="0"
                                    viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.5858 6.34317L12 4.92896L19.0711 12L12 19.0711L10.5858 17.6569L16.2427 12L10.5858 6.34317Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                            <span class="2xl:text-3xl lg:text-2xl text-lg font-bold italic">Originally ₹249*</span>
                        </div>
                    </div>
                </div>

                <div class="xl:w-1/2 lg:w-1/2 w-full flex items-center relative z-10 md:top-[8.5rem] max-sm:pt-6">
                    <!-- <?php $img = get_field('digital_car_img'); ?>
                <?php if ($img): ?>
                <img loading="eager" fetchpriority="high" decoding="async" src="<?php echo esc_url($img['url']); ?>"
                    width="730" height="475" class="object-contain md:object-bottom object-center aspect-[775/516]" />
                <?php endif; ?> -->
                    <img loading="eager" fetchpriority="high" decoding="async" src="img/get.webp"
                        class="object-contain md:object-bottom object-center aspect-[775/516]">
                </div>
            </div>
            <div class="absolute right-0 inset-y-0 w-full md:flex flex-col z-0 overflow-hidden hidden">
                <img loading="eager" fetchpriority="high" decoding="async" src="img/Group-65-1-scaled-1.webp"
                    width="108" height="108"
                    class="md:absolute w-full object-cover object-center top-[2rem] 2xl:h-[35.125rem] h-full right-[-8%]" />
            </div>
            <div class="w-full md:flex flex-col absolute left-0 inset-y-0 flex md:hidden">
                <img loading="eager" fetchpriority="high" decoding="async" src="img/Group-76.webp" width="108"
                    height="108" class="w-full h-full object-cover object-right" />
            </div>
        </div>
        <div class="view pl-0 relative md:-bottom-[1.2rem] z-30 -bottom-[3rem]">
            <div
                class="lg:pl-[5rem] md:pl-[4rem] pl-[3rem] pt-11 md:pr-[5.5rem] pr-[4rem] pb-[4.125rem] relative w-fit bg-gradient-to-r from-[#000000] to-[#414141]  z-[99] origin-top -skew-x-[14deg] ">
                <div class="relative flex items-start  gap-5 skew-x-[14deg] ">
                    <img loading="eager" fetchpriority="high" decoding="async" src="img/Isolation_Mode_2.webp"
                        width="108" height="108" class="w-auto object-cover lg:h-[10rem] h-[7rem] aspect-square" />
                    <ul class="flex flex-col gap-y-[0.375rem]">
                        <li class="flex items-center gap-x-3">
                            <img src="img/check_list.webp" alt="Yellow Check Icon"
                                class="w-5 h-5 md:w-6 md:h-6 flex-shrink-0" loading="lazy" fetchpriority="low">
                            <span class="text-white md:text-sm text-xs font-semibold">40+ checkpoints</span>
                        </li>
                        <li class="flex items-center gap-x-3">
                            <img src="img/check_list.webp" alt="Yellow Check Icon"
                                class="w-5 h-5 md:w-6 md:h-6 flex-shrink-0" loading="lazy" fetchpriority="low">
                            <span class="text-white md:text-sm text-xs font-semibold">Instant report to your
                                inbox</span>
                        </li>
                        <li class="flex items-center gap-x-3">
                            <img src="img/check_list.webp" alt="Yellow Check Icon"
                                class="w-5 h-5 md:w-6 md:h-6 flex-shrink-0" loading="lazy" fetchpriority="low">
                            <span class="text-white md:text-sm text-xs font-semibold">Save on future repairs</span>
                        </li>
                        <li class="flex items-center gap-x-3">
                            <img src="img/check_list.webp" alt="Yellow Check Icon"
                                class="w-5 h-5 md:w-6 md:h-6 flex-shrink-0" loading="lazy" fetchpriority="low">
                            <span class="text-white md:text-sm text-xs font-semibold">Improve your car’s resale
                                value</span>
                        </li>
                        <li class="flex items-center gap-x-3">
                            <img src="img/check_list.webp" alt="Yellow Check Icon"
                                class="w-5 h-5 md:w-6 md:h-6 flex-shrink-0" loading="lazy" fetchpriority="low">
                            <span class="text-white md:text-sm text-xs font-semibold">Early issue detection with tech
                                insights</span>
                        </li>
                    </ul>

                </div>
            </div>
        </div>

    </section>

    <section class="w-full relative overflow-hidden md:pt-[6.8rem] pt-[5rem]">
        <div class="view max-sm:mb-8">
            <div class="flex items-center justify-between">
                <h2
                    class="relative text-[1.75rem] md:text-3xl lg:text-4xl 2xl:text-[3.125rem] 2xl:!leading-[3.313rem] !leading-12 z-30 font-inter font-bold text-black pr-2 after:absolute after:bg-gradient-to-l from-[#CB122D] via-[#CB122D] to-[#650916] lg:after:w-[6.75rem] after:w-20 lg:after:h-3 after:h-[0.625rem] after:-skew-x-[18deg] lg:after:top-16 after:top-24 after:left-0">
                    Expert care for every make and model.
                </h2>
            </div>
        </div>
        <div class="bg-gradient-to-l from-white to-[rgba(255,255,255,0)] 
        before:absolute before:inset-y-0 before:left-0 lg:before:w-[13.375] before:w-16 
        before:bg-gradient-to-r 
        before:from-[#FFFFFF] before:to-[#ffffff00]
        before:z-20 before:pointer-events-none after:absolute after:inset-y-0 after:right-0 lg:after:w-w-[13.375] 
        after:bg-gradient-to-l after:w-16
        after:from-[#FFFFFF] after:to-[#ffffff00]
        after:z-20 after:pointer-events-none">
            <div class="swiper brandSwiperLeft relative z-0 lg:pt-[4.5rem]">
                <div class="w-full swiper-wrapper flex !ease-linear">
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-8.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-9.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-11.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-12.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-13-1.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-15.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-16.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-18.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-20.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-21.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-22.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                </div>
            </div>
            <div class="swiper brandSwiperRight relative z-0">
                <div class="w-full swiper-wrapper !ease-linear flex">
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-25.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-26.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-27.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-28.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-30.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>

                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-31.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-32.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-33.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-34.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-22.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-25.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-26.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-27.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                </div>
            </div>
            <div class="swiper brandSwiperLeft1 relative z-0 lg:hidden block">
                <div class="w-full swiper-wrapper !ease-linear flex  !ease-linear">

                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-15.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-28.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-11.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-18.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-20.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-33.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-26.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-13-1.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-8.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                    <div class="swiper-slide">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-27.webp" width="108"
                            height="108" class="w-32 aspect-[8/9]" width="80" height="90" />
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section
        class="w-full relative overflow-hidden z-30 font-inter md:mt-[6.5rem] md:pt-[3.938rem] pt-[2.5rem] mt-[3rem] pb-20">
        <div class="view">
            <div class="relative flex items-center justify-between md:flex-row flex-wrap flex-col gap-y-6 h-full">
                <div class="xl:w-1/2 lg:w-1/2 md:w-1/2 w-full flex items-center relative z-30">
                    <div class="flex flex-col gap-y-7 relative z-30">
                        <h2
                            class="text-[1.75rem] md:text-3xl lg:text-4xl 2xl:text-[3.125rem] 2xl:!leading-[3.313rem] !leading-12 font-bold whitespace-nowrap text-black">
                            All things car. <span class="block">
                                One tap away.
                            </span>
                        </h2>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-x-3">
                                <span class="inline-block flex items-center justify-center">
                                    <img loading="eager" fetchpriority="high" decoding="async" src="img/Group-1-2.webp"
                                        width="337" height="484" class="size-6 " />
                                </span>
                                <span class="text-black text-sm font-semibold">One-tap car service booking</span>
                            </li>
                            <li class="flex items-center gap-x-3">
                                <span class="inline-block flex items-center justify-center">
                                    <img loading="eager" fetchpriority="high" decoding="async" src="img/Group-1-2.webp"
                                        width="337" height="484" class="size-6 " />
                                </span>
                                <span class="text-black text-sm font-semibold">Up to 5X rewards on every visit</span>
                            </li>
                            <li class="flex items-center gap-x-3">
                                <span class="inline-block flex items-center justify-center">
                                    <img loading="eager" fetchpriority="high" decoding="async" src="img/Group-1-2.webp"
                                        width="337" height="484" class="size-6 " />
                                </span>
                                <span class="text-black text-sm font-semibold">Service history, simplified &
                                    stored</span>
                            </li>
                            <li class="flex items-center gap-x-3">
                                <span class="inline-block flex items-center justify-center">
                                    <img loading="eager" fetchpriority="high" decoding="async" src="img/Group-1-2.webp"
                                        width="337" height="484" class="size-6 " />
                                </span>
                                <span class="text-black text-sm font-semibold">Locate nearby centres instantly</span>
                            </li>
                            <li class="flex items-center gap-x-3">
                                <span class="inline-block flex items-center justify-center">
                                    <img loading="eager" fetchpriority="high" decoding="async" src="img/Group-1-2.webp"
                                        width="337" height="484" class="size-6 " />

                                </span>
                                <span class="text-black text-sm font-semibold">Chat with us on WhatsApp</span>
                            </li>
                            <li class="flex items-center gap-x-3">
                                <span class="inline-block flex items-center justify-center">
                                    <img loading="eager" fetchpriority="high" decoding="async" src="img/Group-1-2.webp"
                                        width="337" height="484" class="size-6 " />
                                </span>
                                <span class="text-black text-sm font-semibold">Refer, earn, redeem exclusive
                                    rewards</span>
                            </li>
                        </ul>
                        <div class="lg:flex items-center gap-3 hidden">
                            <span>
                                <img loading="eager" fetchpriority="high" decoding="async" src="img/assets1.webp"
                                    width="108" height="108" class="w-auto h-10 object-contain" />
                            </span>
                            <span>
                                <img src="img/app_store_btn.webp" class="w-auto h-10 object-contain" loading="lazy"
                                    fetchpriority="low">
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div
                    class="xl:w-1/2 lg:w-1/2 md:w-1/2 w-full flex items-center justify-center relative z-10 bg-transparent md:h-[27.625rem] h-[15.188rem] text-white">
                    <video width="100%" height="100%" controls autoplay muted loop playsinline>
                        <source src="videos/app_promo.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <div class="relative z-10 flex items-center gap-3 lg:hidden pt-6 pb-3">
                <span>
                    <img loading="eager" fetchpriority="high" decoding="async" src="img/assets1.webp" width="108"
                        height="108" class="w-auto md:h-10 h-8 object-contain" />
                </span>
                <span>
                    <span>
                        <img src="img/app_store_btn.webp" class="w-auto md:h-10 h-8 object-contain" loading="lazy"
                            fetchpriority="low">
                    </span>
                </span>
            </div>
        </div>
        <div class="absolute inset-0 w-full h-full -z-10 md:flex hidden">
            <img loading="eager" fetchpriority="high" decoding="async" src="img/Group-66-scaled.webp"
                class="w-full h-full object-cover object-right" />
        </div>
        <div class="absolute inset-0 w-full h-full -z-10 flex md:hidden">
            <img loading="eager" fetchpriority="high" decoding="async" src="img/Frame-18.webp"
                class="w-full h-full object-cover object-center" />
        </div>
    </section>

    <section class="w-full relative testimSection lg:pt-[6.75rem] pt-[6.5rem] pb-[2.625rem] overflow-hidden">
        <div class="view md:pr-0">
            <div class="flex items-center justify-between md:pb-12 pb-6">
                <h2
                    class="text-[1.75rem] md:text-3xl lg:text-4xl 2xl:text-[3.125rem] 2xl:!leading-[3.313rem] !leading-12 font-inter font-bold text-black pr-2">
                    Your trust drive us.
                </h2>
                <div
                    class=" md:flex items-center justify-start hidden origin-bottom z-20 bg-[#CB122D] px-4 shadow-[-6px_6px_0px_-1px_rgba(0,0,0,0.9)] w-56 h-16 transition transform -skew-x-12 duration-150 ease-in-out">
                    <div class="swiper-prev cursor-pointer">
                        <span>
                            <img src="img/fi_19024510.webp"
                                class="text-white size-8 rotate-180 skew-x-12 invert brightness-0">
                        </span>
                    </div>
                    <div class="swiper-next cursor-pointer">
                        <span>
                            <img src="img/fi_19024510.webp"
                                class="text-white size-8 skew-x-12 invert brightness-0 mb-[0.188rem] ml-3">
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="swiper testimonialSwiper relative font-inter z-0 pt-6 swiper-initialized swiper-horizontal swiper-backface-hidden">
            <div class="swiper-wrapper h-auto">
                <div
                    class="swiper-slide bg-[#E3E3E3] lg:py-[2.438rem] lg:px-[2.313rem] py-[2.125rem] px-[1.5rem] overflow-hidden group">
                    <div class="relative h-full">
                        <div class="flex flex-col">
                            <div class="flex lg:mb-6 mb-2">
                                <span>
                                    <svg class="text-[#FF8300] lg:size-7 size-4" stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px"
                                        width="200px" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path
                                            d="M12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                        </path>
                                    </svg>
                                </span>
                                <span><svg class="text-[#FF8300] lg:size-7 size-4" stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px"
                                        width="200px" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path
                                            d="M12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                        </path>
                                    </svg></span>
                                <span><svg class="text-[#FF8300] lg:size-7 size-4" stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px"
                                        width="200px" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path
                                            d="M12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                        </path>
                                    </svg></span>
                                <span><svg class="text-[#FF8300] lg:size-7 size-4" stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px"
                                        width="200px" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path
                                            d="M12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                        </path>
                                    </svg></span>
                                <span><svg class="text-[#FF8300] lg:size-7 size-4" stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px"
                                        width="200px" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path
                                            d="M12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                        </path>
                                    </svg></span>
                            </div>
                            <p class="2xl:text-2xl text-[0.938rem] text-[#000000] lg:mb-14 mb-6">
                                “Had a good support by this branch manager Mr. Yuvraj and even initial call from the
                                telecaller. This service chain seems to be genuine and trustable. All the best for
                                becoming
                                a most trustable automobile service brand in Chennai and more”
                            </p>
                            <h4 class="font-semibold text-[#CB122D] 2xl:text-xl lg:text-base ">Arun Madhusudanan</h4>
                        </div>
                    </div>
                </div>
                <div
                    class="swiper-slide bg-[#E3E3E3] lg:py-[2.438rem] lg:px-[2.313rem] py-[2.125rem] px-[1.5rem] overflow-hidden group">
                    <div class="relative h-full">
                        <div class="flex flex-col">
                            <div class="flex lg:mb-6 mb-2">
                                <span>
                                    <svg class="text-[#FF8300] lg:size-7 size-4" stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px"
                                        width="200px" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path
                                            d="M12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                        </path>
                                    </svg>
                                </span>
                                <span><svg class="text-[#FF8300] lg:size-7 size-4" stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px"
                                        width="200px" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path
                                            d="M12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                        </path>
                                    </svg></span>
                                <span><svg class="text-[#FF8300] lg:size-7 size-4" stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px"
                                        width="200px" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path
                                            d="M12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                        </path>
                                    </svg></span>
                                <span><svg class="text-[#FF8300] lg:size-7 size-4" stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px"
                                        width="200px" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path
                                            d="M12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                        </path>
                                    </svg></span>
                                <span><svg class="text-[#FF8300] lg:size-7 size-4" stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px"
                                        width="200px" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path
                                            d="M12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                        </path>
                                    </svg></span>
                            </div>
                            <p class="2xl:text-2xl text-[0.938rem] text-[#000000] lg:mb-14 mb-6">
                                “Had a good support by this branch manager Mr. Yuvraj and even initial call from the
                                telecaller. This service chain seems to be genuine and trustable. All the best for
                                becoming
                                a most trustable automobile service brand in Chennai and more”
                            </p>
                            <h4 class="font-semibold text-[#CB122D] 2xl:text-xl lg:text-base ">Arun Madhusudanan</h4>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide flex flex-col items-stretch bg-white overflow-hidden group relative h-full">
                    <div class="relative h-full">
                        <?php $img = get_field('testimonial_img'); ?>
                        <?php if ($img): ?>
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-36.webp" width="337"
                            height="410" alt="Testimonial Image" class="w-full h-full object-cover aspect-[337/410]" />
                        <?php endif; ?>
                        <div
                            class="absolute inset-0 flex justify-center items-center opacity-100 group-hover:opacity-100 transition">
                            <button
                                class="w-10 h-10 flex items-center justify-center rounded-full border-2 border-white text-white shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                                    class="w-6 h-6">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide flex flex-col items-stretch bg-white overflow-hidden group relative h-full">
                    <div class="relative h-full">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-36.webp" width="337"
                            height="410" alt="Testimonial Image" class="w-full h-full object-cover aspect-[337/410]" />
                        <div
                            class="absolute inset-0 flex justify-center items-center opacity-100 group-hover:opacity-100 transition">
                            <button
                                class="w-10 h-10 flex items-center justify-center rounded-full border-2 border-white text-white shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                                    class="w-6 h-6">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div
                    class="swiper-slide bg-[#E3E3E3] lg:py-[2.438rem] lg:px-[2.313rem] py-[2.125rem] px-[1.5rem] overflow-hidden group">
                    <div class="relative h-full">
                        <div class="flex flex-col">
                            <div class="flex lg:mb-6 mb-2">
                                <span>
                                    <svg class="text-[#FF8300] lg:size-7 size-4" stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px"
                                        width="200px" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path
                                            d="M12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                        </path>
                                    </svg>
                                </span>
                                <span><svg class="text-[#FF8300] lg:size-7 size-4" stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px"
                                        width="200px" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path
                                            d="M12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                        </path>
                                    </svg></span>
                                <span><svg class="text-[#FF8300] lg:size-7 size-4" stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px"
                                        width="200px" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path
                                            d="M12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                        </path>
                                    </svg></span>
                                <span><svg class="text-[#FF8300] lg:size-7 size-4" stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px"
                                        width="200px" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path
                                            d="M12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                        </path>
                                    </svg></span>
                                <span><svg class="text-[#FF8300] lg:size-7 size-4" stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px"
                                        width="200px" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path
                                            d="M12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                        </path>
                                    </svg></span>
                            </div>
                            <p class="2xl:text-2xl text-[0.938rem] text-[#000000] lg:mb-14 mb-6">
                                “Had a good support by this branch manager Mr. Yuvraj and even initial call from the
                                telecaller. This service chain seems to be genuine and trustable. All the best for
                                becoming
                                a most trustable automobile service brand in Chennai and more”
                            </p>
                            <h4 class="font-semibold text-[#CB122D] 2xl:text-xl lg:text-base ">Arun Madhusudanan</h4>
                        </div>
                    </div>
                </div>
                <div
                    class="swiper-slide bg-[#E3E3E3] lg:py-[2.438rem] lg:px-[2.313rem] py-[2.125rem] px-[1.75rem] overflow-hidden group">
                    <div class="relative h-full">
                        <div class="flex flex-col">
                            <div class="flex lg:mb-6 mb-2">
                                <span><svg class="text-[#FF8300] lg:size-7 size-4" stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px"
                                        width="200px" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path
                                            d="M12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                        </path>
                                    </svg></span>
                                <span><svg class="text-[#FF8300] lg:size-7 size-4" stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px"
                                        width="200px" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path
                                            d="M12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                        </path>
                                    </svg></span>
                                <span><svg class="text-[#FF8300] lg:size-7 size-4" stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px"
                                        width="200px" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path
                                            d="M12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                        </path>
                                    </svg></span>
                                <span><svg class="text-[#FF8300] lg:size-7 size-4" stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px"
                                        width="200px" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path
                                            d="M12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                        </path>
                                    </svg></span>
                                <span><svg class="text-[#FF8300] lg:size-7 size-4" stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px"
                                        width="200px" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path
                                            d="M12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                        </path>
                                    </svg></span>
                            </div>
                            <p class="2xl:text-2xl text-[0.938rem] text-[#000000] lg:mb-14 mb-6">
                                “Had a good support by this branch manager Mr. Yuvraj and even initial call from the
                                telecaller. This service chain seems to be genuine and trustable. All the best for
                                becoming
                                a most trustable automobile service brand in Chennai and more”
                            </p>
                            <h4 class="font-semibold text-[#CB122D] 2xl:text-xl lg:text-base ">Arun Madhusudanan</h4>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide flex flex-col items-stretch bg-white overflow-hidden group relative h-full">
                    <div class="relative h-full">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-36.webp" width="337"
                            height="410" alt="Testimonial Image" class="w-full h-full object-cover aspect-[337/410]" />
                        <div
                            class="absolute inset-0 flex justify-center items-center opacity-100 group-hover:opacity-100 transition">
                            <button
                                class="w-10 h-10 flex items-center justify-center rounded-full border-2 border-white text-white shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                                    class="w-6 h-6">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide flex flex-col items-stretch bg-white overflow-hidden group relative h-full">
                    <div class="relative h-full">
                        <img loading="eager" fetchpriority="high" decoding="async" src="img/image-36.webp" width="337"
                            height="410" alt="Testimonial Image" class="w-full h-full object-cover aspect-[337/410]" />
                        <div
                            class="absolute inset-0 flex justify-center items-center opacity-100 group-hover:opacity-100 transition">
                            <button
                                class="w-10 h-10 flex items-center justify-center rounded-full border-2 border-white text-white shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                                    class="w-6 h-6">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full relative md:pt-[4rem] pt-[3rem] md:pb-[6rem] pb-[2.625rem] font-inter">
        <div class="view" id="faqAccordion">
            <div class="flex items-center justify-between md:pb-6 pb-4">
                <h2
                    class="relative text-[1.75rem] md:text-3xl lg:text-4xl 2xl:text-[3.125rem] 2xl:!leading-[3.313rem] !leading-12 font-inter font-bold text-black pr-2 after:absolute after:bg-gradient-to-l from-[#CB122D] via-[#CB122D] to-[#650916] lg:after:w-[6.75rem] after:w-20 lg:after:h-3 after:h-[0.625rem] after:-skew-x-[18deg] lg:after:top-16 after:top-16 after:left-0">
                    FAQs
                </h2>
            </div>

            <div class="grid md:grid-cols-2 gap-6 pt-16">
                <div class="space-y-5">
                    <div class="accordion-item border border-black">
                        <button
                            class="accordion-header w-full px-6 py-4 flex justify-between items-center text-left font-semibold text-[#CB122D]">
                            <span>What types of vehicles do you service?</span>
                            <span
                                class="accordion-icon text-white bg-[#CB122D] size-6 flex items-center justify-center">−</span>
                        </button>
                        <div class="accordion-body px-6 pb-4 pt-2 text-sm text-[#010101] font-normal">
                            We provide complete maintenance and repair services for two-wheelers, cars, SUVs, and light
                            commercial vehicles across all major brands in India.
                        </div>
                    </div>

                    <div class="accordion-item border border-black">
                        <button
                            class="accordion-header w-full px-6 py-4 flex justify-between items-center text-left font-semibold text-gray-800">
                            <span>Do you use genuine spare parts?</span>
                            <span
                                class="accordion-icon text-white bg-[#CB122D] size-6 flex items-center justify-center">+</span>
                        </button>
                        <div class="accordion-body hidden px-6 pb-4 pt-2 text-sm text-[#010101] font-normal">
                            Yes, we only use genuine spare parts for all repairs and replacements.
                        </div>
                    </div>

                    <div class="accordion-item border border-black">
                        <button
                            class="accordion-header w-full px-6 py-4 flex justify-between items-center text-left font-semibold text-gray-800">
                            <span>How can I book a service appointment?</span>
                            <span
                                class="accordion-icon text-white bg-[#CB122D] size-6 flex items-center justify-center">+</span>
                        </button>
                        <div class="accordion-body hidden px-6 pb-4 pt-2 text-sm text-[#010101] font-normal">
                            You can book a service appointment through our website, mobile app, or by calling our
                            service
                            center.
                        </div>
                    </div>
                </div>

                <div class="space-y-5">
                    <div class="accordion-item border border-black">
                        <button
                            class="accordion-header w-full px-6 py-4 flex justify-between items-center text-left font-semibold text-gray-800">
                            <span>What payment methods do you accept?</span>
                            <span
                                class="accordion-icon text-white bg-[#CB122D] size-6 flex items-center justify-center">+</span>
                        </button>
                        <div class="accordion-body hidden px-6 pb-4 pt-2 text-sm text-[#010101] font-normal">
                            We accept all major credit/debit cards, UPI, net banking, and cash payments.
                        </div>
                    </div>

                    <div class="accordion-item border border-black">
                        <button
                            class="accordion-header w-full px-6 py-4 flex justify-between items-center text-left font-semibold text-gray-800">
                            <span>Do you offer any warranty on services?</span>
                            <span
                                class="accordion-icon text-white bg-[#CB122D] size-6 flex items-center justify-center">+</span>
                        </button>
                        <div class="accordion-body hidden px-6 pb-4 pt-2 text-sm text-[#010101] font-normal">
                            Yes, our services come with a warranty depending on the type of service performed.
                        </div>
                    </div>

                    <div class="accordion-item border border-black">
                        <button
                            class="accordion-header w-full px-6 py-4 flex justify-between items-center text-left font-semibold text-gray-800">
                            <span>How long does a typical service take?</span>
                            <span
                                class="accordion-icon text-white bg-[#CB122D] size-6 flex items-center justify-center">+</span>
                        </button>
                        <div class="accordion-body hidden px-6 pb-4 pt-2 text-sm text-[#010101] font-normal">
                            A typical service takes 2–4 hours depending on the type of work required.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div
        class="whatsapp-icon flex items-center text-white bg-[#29A71A] rounded-full w-fit p-2 fixed bottom-10 right-4 z-40">
        <a href="#" class="">
            <svg class="size-10" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512"
                height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z">
                </path>
            </svg>
        </a>
    </div>

    <!-- mobile button -->
    <div id="mobileToggle" class="fixed right-0 top-1/2 -translate-y-1/2 z-30 lg:hidden">
        <a href="#"
            class="bg-[#650916] text-white text-xs md:text-sm tracking-wider uppercase italic font-medium font-inter px-2 py-3 tracking-wide transform -rotate-180  transition-all duration-300 flex items-center justify-center"
            style="writing-mode: vertical-rl; text-orientation: mixed;">
            GET INSTANT CAR SERVICE QUOTE
            <svg class="size-4 ms-2 rotate-90" stroke="currentColor" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M13.0001 7.82843V20H11.0001V7.82843L5.63614 13.1924L4.22192 11.7782L12.0001 4L19.7783 11.7782L18.3641 13.1924L13.0001 7.82843Z">
                </path>
            </svg>
        </a>
    </div>

    <!-- Desktop Button -->
    <button id="desktopToggle"
        class="lg:flex items-center text-white hidden justify-between px-6 py-3 bg-gradient-to-l from-[#CB122D] to-[#650916] w-fit p-2 fixed bottom-0 right-32 z-40">
        <span class="text-base font-bold italic text-white uppercase">
            GET INSTANT CAR SERVICE QUOTE
        </span>
        <svg class="size-4 ms-2 rotate-180" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
            aria-hidden="true" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </button>

    <div id="carPopup" class="popup fixed 2xl:top-32 top-16 lg:top-auto lg:bottom-0 lg:left-auto lg:right-[7.3rem] md:right-[6.3rem] z-50  w-full mx-auto 
           overflow-y-scroll scrollNone font-inter
             w-full lg:w-[23.375rem] md:w-[25rem] bg-[#CB122D] shadow-[0px_0px_-20px_0px_rgba(0,0,0,0.3)]
            flex flex-col lg:flex-row transtransform -translate-x-1/2 -translate-y-1/2
            animate-slideUp
            opacity-100 pointer-events-auto h-full">
        <input type="checkbox" id="toggle" class="hidden peer">
        <div class=" transition-all duration-500 ease-in-out w-full">
            <!-- Header -->
            <div class="flex items-center justify-between px-5 py-3 bg-gradient-to-l from-[#CB122D] to-[#650916]">
                <span class="text-base font-bold italic text-white uppercase">
                    INSTANT CAR SERVICE QUOTE
                </span>
                <label for="toggle" class="cursor-pointer text-lg font-bold italic text-white">
                    <svg class="size-5 font-bold lg:rotate-0 -rotate-90" stroke="currentColor" fill="none"
                        stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="24" width="24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </label>
            </div>

            <div class="p-5">
                <h2 class="mb-5 font-inter md:text-2xl lg:text-3xl  !leading-12 font-bold text-white">
                    Expert car care at <span class="block">express speed.</span>
                </h2>

                <div class="flex flex-col gap-y-5">
                    <!-- City Dropdown -->
                    <div class="relative flex items-center">
                        <input type="text" placeholder="City" id="cityInput" readonly
                            class="w-full px-4 py-3 text-black bg-white border-none placeholder:text-black placeholder:text-base focus:outline-none cursor-pointer transition-colors duration-300" />

                        <span id="cityIcon" class="absolute right-3 top-1/2 transform -translate-y-1/2">
                            <img src="img/fi_19024510.webp" alt="arrow-icon" class="xl:size-[1.313rem] size-4">
                        </span>

                        <div id="cityDropdown"
                            class="absolute top-full left-0 w-full bg-white border border-gray-200 z-40 overflow-hidden hidden">
                            <div class="grid grid-cols-2 gap-2 p-3 max-h-56 overflow-y-auto">
                                <div class="cursor-pointer group" data-value="Chennai">
                                    <div class="relative rounded overflow-hidden">
                                        <img src="img/city-img1.png" alt="arrow-icon"
                                            class="w-full h-48 xl:h-52 object-cover">
                                        <p class="absolute top-2 left-2 text-white font-semibold">Chennai</p>
                                    </div>
                                </div>

                                <div class="cursor-pointer group" data-value="Bengaluru">
                                    <div class="relative rounded overflow-hidden">
                                        <img src="img/city-img2.png" alt="arrow-icon"
                                            class="w-full h-48 xl:h-52 object-cover">
                                        <p class="absolute top-2 left-2 text-white font-semibold">Bengaluru</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Car Brand Dropdown -->
                    <div class="relative">
                        <input type="text" placeholder="Car Brand" id="brandInput" readonly=""
                            class="w-full px-4 py-3 text-black bg-white border-none placeholder:text-black xl:placeholder:text-base xl:placeholder:text-sm focus:outline-none cursor-pointer">
                        <span id="brandIcon" class="absolute right-3 top-1/2 transform -translate-y-1/2">
                            <img src="img/fi_19024510.webp" alt="arrow-icon" class="xl:size-[1.313rem] size-4">
                        </span>

                        <div id="brandDropdown"
                            class="absolute top-full left-0 w-full bg-white border border-gray-200 z-50 overflow-hidden hidden">
                            <div class="p-3">
                                <div class="flex items-center bg-gray-100 px-3 py-2 mb-2 rounded">
                                    <svg class="w-5 h-5 text-gray-500 mr-2" fill="none" stroke="currentColor"
                                        stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                    <input type="text" id="brandSearch" placeholder="Search Car Brand"
                                        class="bg-transparent flex-1 focus:outline-none text-sm text-gray-700" />
                                </div>

                                <div class="grid grid-cols-3 gap-4 max-h-56 overflow-y-auto" id="brandList">
                                    <div class="cursor-pointer text-center" data-value="Hyundai">
                                        <img src="img/image-34.webp" alt="Hyundai" class="w-16 mx-auto mb-1"
                                            loading="lazy" fetchpriority="low">
                                        <p class="text-xs">Hyundai</p>
                                    </div>
                                    <div class="cursor-pointer text-center" data-value="Tata Motors">
                                        <img src="img/image-27.webp" alt="tata" class="w-16 mx-auto mb-1" loading="lazy"
                                            fetchpriority="low">
                                        <p class="text-xs">Tata</p>
                                    </div>
                                    <div class="cursor-pointer text-center" data-value="Skoda">
                                        <img src="img/image-26.webp" alt="skoda" class="w-16 mx-auto mb-1"
                                            loading="lazy" fetchpriority="low">
                                        <p class="text-xs">Skoda</p>
                                    </div>
                                    <div class="cursor-pointer text-center" data-value="Renault">
                                        <img src="img/image-25.webp" alt="Renault" class="w-16 mx-auto mb-1"
                                            loading="lazy" fetchpriority="low">
                                        <p class="text-xs">Renault</p>
                                    </div>
                                    <div class="cursor-pointer text-center" data-value="Suzuki">
                                        <img src="img/image-11.webp" alt="Suzuki" class="w-16 mx-auto mb-1"
                                            loading="lazy" fetchpriority="low">
                                        <p class="text-xs">Suzuki</p>
                                    </div>
                                    <div class="cursor-pointer text-center" data-value="Audi">
                                        <img src="img/image-20.webp" alt="Audi" class="w-16 mx-auto mb-1" loading="lazy"
                                            fetchpriority="low">
                                        <p class="text-xs">Audi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Car Model Dropdown -->
                    <div class="relative">
                        <input type="text" placeholder="Car Model (Select Car Brand first)" id="modelInput" readonly=""
                            class="w-full px-4 py-3 text-gray-800 bg-white border-none placeholder:text-black/50 xl:placeholder:text-base xl:placeholder:text-sm focus:outline-none cursor-pointer">
                        <span id="modelIcon" class="absolute right-3 top-1/2 transform -translate-y-1/2">
                            <img src="img/fi_19024510-1.webp" alt="arrow-icon" class="xl:size-[1.313rem] size-4">
                        </span>

                        <div id="modelDropdown"
                            class="absolute top-full left-0 w-full bg-white border border-gray-200 z-50 overflow-hidden hidden">
                            <div class="p-3">
                                <div class="flex items-center bg-gray-100 px-3 py-2 mb-2 rounded">
                                    <svg class="w-5 h-5 text-gray-500 mr-2" fill="none" stroke="currentColor"
                                        stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                    <input type="text" id="modelSearch" placeholder="Search Car Model"
                                        class="bg-transparent flex-1 focus:outline-none text-sm text-gray-700" />
                                </div>

                                <div class="grid grid-cols-2 gap-4 max-h-56 overflow-y-auto" id="modelList">
                                    <div class="cursor-pointer text-center" data-value="Creta">
                                        <img src="img/car-brand.webp" alt="Hyundai"
                                            class="w-full h-24 object-cover mb-1 rounded" loading="lazy"
                                            fetchpriority="low" />
                                        <p class="text-xs">Creta</p>
                                    </div>
                                    <div class="cursor-pointer text-center" data-value="Venue">
                                        <img src="img/car-brand.webp" alt="Hyundai"
                                            class="w-full h-24 object-cover mb-1 rounded" loading="lazy"
                                            fetchpriority="low" />
                                        <p class="text-xs">Venue</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact -->
                    <div class="relative">
                        <input type="tel" placeholder="Contact Number"
                            class="w-full px-4 py-3 text-black bg-white border-none placeholder:text-black xl:placeholder:text-base xl:placeholder:text-sm focus:outline-none">
                    </div>
                </div>

                <!-- Button -->
                <button
                    class="w-fit font-inter py-3 px-3 mt-6 text-base font-bold text-white bg-[#FF8300] hover:bg-[#EE8311] focus:outline-none focus:ring-4 focus:ring-[#EE8311] flex items-center justify-center">
                    Check Prices
                    <span class="ml-2 font-bold text-xl">
                        <img src="img/fi_19024510.webp" alt="arrow-icon"
                            class="xl:size-[1.313rem] size-4 invert brightness-0">
                    </span>
                </button>
                <div class="grid grid-cols-3 gap-4 text-center text-white font-inter py-4">
                    <div>
                        <div class="text-[1.375rem] font-bold !leading-8">18,000+</div>
                        <div class="text-[0.75rem] font-bold opacity-90">Car Serviced</div>
                    </div>
                    <div>
                        <div class="text-[1.375rem] font-bold !leading-8">4.9</div>
                        <div class="text-[0.75rem] font-bold opacity-90">Star Rating</div>
                    </div>
                    <div>
                        <div class="text-[1.375rem] font-bold !leading-8">20+</div>
                        <div class="text-[0.75rem] font-bold opacity-90">Checkpoints</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>


    <script>
        const headers = document.querySelectorAll('#faqAccordion .accordion-header');

        headers.forEach(header => {
            header.addEventListener('click', () => {
                const item = header.parentElement;
                const body = item.querySelector('.accordion-body');
                const icon = header.querySelector('.accordion-icon');

                const isActive = !body.classList.contains('hidden');

                // Close all
                document.querySelectorAll('#faqAccordion .accordion-body').forEach(el => el.classList.add(
                    'hidden'));
                document.querySelectorAll('#faqAccordion .accordion-icon').forEach(el => el.textContent =
                    '+');
                document.querySelectorAll('#faqAccordion .accordion-header').forEach(el => {
                    el.classList.remove('text-[#CB122D]');
                    el.classList.add('text-gray-800');
                });

                // Reopen only if it was not active
                if (!isActive) {
                    body.classList.remove('hidden');
                    icon.textContent = '−';
                    header.classList.add('text-[#CB122D]');
                    header.classList.remove('text-gray-800');
                }
            });
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tabsContainer = document.getElementById('tabs-nav');
            const tabLinks = document.querySelectorAll(".tab-btn");
            const tabContents = document.querySelectorAll(".content-item");

            function resetTabs(clicked) {
                tabLinks.forEach(tab => {
                    if (tab !== clicked) { // don’t reset the one that was clicked
                        tab.className = "tab-btn px-3 py-5 -my-5 font-bold text-white";
                        tab.innerHTML = tab.innerText;
                    }
                });
            }

            tabsContainer.addEventListener("click", function (e) {
                const clicked = e.target.closest(".tab-btn");
                if (!clicked) return;

                const target = clicked.dataset.tab;

                // Reset other tabs
                resetTabs(clicked);

                // Reset content
                tabContents.forEach(c => c.classList.add("hidden"));

                // Apply active styles to clicked
                clicked.className =
                    "tab-btn active relative z-10 px-3 py-5 -my-5 font-bold bg-gradient-to-l from-[#CB122D] via-[#650916] to-[#CB122D] text-white -skew-x-[18deg]";
                clicked.innerHTML =
                    `<span class="skew-x-[18deg] block whitespace-nowrap">${clicked.innerText}</span>`;

                // Show correct content
                document.querySelector(`.content-item[data-content="${target}"]`).classList.remove(
                    "hidden");
            });
        });
    </script>
