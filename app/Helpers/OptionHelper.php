<?php
namespace App\Helpers;

/**
 * [These Class Provides properties that has main certain options]
 * AbstractHelper
 * @package App\Helpers
 * @author Abdullah Alnahhal <abdullahalnahhal@gmail.com>
 */

 use App\Helpers\AbstractHelper;

class OptionHelper
{
    public static $userShowTypes = [
        "overview",
        "personal",
        "contact",
        "skills",
        "education",
        "experience",
        "settings",
        "account-settings"
    ];

    public static $mainStages = [
        'kindergarten' => 'Kindergarten',
        'primary' => 'Primary',
        'intermediate' => 'Intermediate',
        'heigh' => 'Heigh' ,
        'university' => 'University'
    ];

    public static $mainLevels = [
        "other" => "other",
        "1st-primary-level" => "1st Primary Level",
        "2nd-primary-level" => "2nd Primary Level",
        "3rd-primary-level" => "3rd Primary Level",
        "4th-primary-level" => "4th Primary Level",
        "5th-primary-level" => "5th Primary Level",
        "6th-primary-level" => "6th Primary Level",
        "1st-prep-level" => "1st Prep Level",
        "2nd-prep-level" => "2nd Prep Level",
        "3rd-prep-level" => "3rd Prep Level",
        "1rd-heigh-level" => "1rd Heigh Level",
        "2nd-heigh-level" => "2nd Heigh Level",
        "3rd-heigh-level" => "3rd Heigh Level",
        "1st-KG-level" => "1st KG Level",
        "2nd-KG-level" => "2nd KG Level",
        "3rd-KG-level" => "3rd KG Level",
    ];

    public static $academicStatus = [
        "newComer" => [
            "en" => "New Comer",
            "ar" => "مستجد",
        ],
        "succeeded" => [
            "en" => "Succeeded",
            "ar" => "ناجح",
        ],
        "failed" => [
            "en" => "Failed",
            "ar" => "راسب",
        ],
    ];

    public static $maritalStatus = [
        "Single" => [
            "en" => "Single",
            "ar" => "أعزب",
        ],
        "Married" => [
            "en" => "Married",
            "ar" => "متزوج",
        ],
    ];

    public static $schoolsTypes = [
        "normal" => [
            "en" => 'Normal School',
            "ar" => 'مدرسة عادية',
        ],
        "experimental" => [
            "en" => "Experimental school",
            "ar" => "مدرسة تجريبية",
        ],
        "international" => [
            "en" => "International School",
            "ar" => "مدرسة دولية",
        ],
        "university" => [
            "en" => "University",
            "ar" => "جامعة",
        ],
        "training-center" => [
            "en" => "Training Center",
            "ar" => "مركز تدريبي",
        ],
        "partner" => [
            "en" => "Educational Partner School",
            "ar" => "مدرسة شريك تعليمي",
        ],
    ];

    public static $languages = [
        "ar" => [
            "ar" => "عربي",
            "en" => "Arabic",
        ],
        "en" => [
            "ar" => "إنجليزي",
            "en" => "English",
        ],
    ];

    public static $genders = [
        "male" => [
            "ar" => "ذكر",
            "en" => "Male",
        ],
        "female" => [
            "ar" => "أنثى",
            "en" => "Female",
        ],
        "both" => [
            "ar" => "كلا الجنسين",
            "en" => "Both",
        ],
    ];
    public static $level_skills = [
        "0" => [
            "val"=>'Beginner',
            "en" => 'Beginner',
            "ar" => 'مبتدئ',
        ],
        "1" => [
            "val"=>'Talented',
            "en" => 'Talented',
            "ar" => 'موهوب',
        ],
        "2" => [
            "val"=>'Skilled',
            "en" => 'Skilled',
            "ar" => 'ماهر',
        ],
        "3" => [
            "val"=>'Advanced',
            "en" => 'Advanced',
            "ar" => 'محترف',
        ],
        "4" => [
            "val"=>'Expert',
            "en" => 'Expert',
            "ar" => 'خبير',
        ]

    ];
    public static $level_language = [
        "0" => [
            "val"=>'Elementary',
            "en" => 'Elementary',
            "ar" => 'مبتدئ',
        ],
        "1" => [
            "val"=>'Limited',
            "en" => 'Limited',
            "ar" => 'محدود',
        ],
        "2" => [
            "val"=>'Professional',
            "en" => 'Professional',
            "ar" => 'مهني',
        ],
        "3" => [
            "val"=>'Full Professional',
            "en" => 'Full Professional',
            "ar" => 'احترافي مطلق',
        ],
        "4" => [
            "val"=>'Native',
            "en" => 'Native',
            "ar" => 'اللغة الأم',
        ]
    ];
    public static $job_types = [
        "0" => [
            "val"=>'Full Time',
            "en" => 'Full Time',
            "ar" => 'دوام كلي',
        ],
        "1" => [
            "val"=>'Part Time',
            "en" => 'Part Time',
            "ar" => 'دوام جزئي',
        ],
        "2" => [
            "val"=>'Trainer',
            "en" => 'Trainer',
            "ar" => 'متدرب',
        ],
        "3" => [
            "val"=>'Collaborator',
            "en" => 'Collaborator',
            "ar" => 'متعاون',
        ],
        "4" => [
            "val"=>'Summer Job',
            "en" => 'Summer Job',
            "ar" => 'عمل صيفي',
        ]

    ];

    public static $duration_in_minutes = [
        "0" => [
            "val"=>'30',
            "en" => '30 Minits',
            "ar" => '30 دقيقة',
        ],
        "1" => [
            "val"=>'35',
            "en" => '35 Minits',
            "ar" => '35 دقيقة',
        ],
        "2" => [
            "val"=>'40',
            "en" => '40 Minits',
            "ar" => '40 دقيقة',
        ],
        "3" => [
            "val"=>'45',
            "en" => '45 Minits',
            "ar" => '45 دقيقة',
        ],
        "4" => [
            "val"=>'60',
            "en" => '60 Minits',
            "ar" => '60 دقيقة',
        ],
        "5" => [
            "val"=>'80',
            "en" => '80 Minits',
            "ar" => '80 دقيقة',
        ],
        "6" => [
            "val"=>'120',
            "en" => '120 Minits',
            "ar" => '120 دقيقة',
        ]
    ];

}
?>
