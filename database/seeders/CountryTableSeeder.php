<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            ['code' => 'AF','name_en' => 'Afghanistan','name_ar' => 'أفغانستان','national_en' => 'Afghan','national_ar' => 'أفغانستاني'],
            ['code' => 'AL','name_en' => 'Albania','name_ar' => 'ألبانيا','national_en' => 'Albanian','national_ar' => 'ألباني'],
            ['code' => 'AX','name_en' => 'Aland Islands','name_ar' => 'جزر آلاند','national_en' => 'Aland Islander','national_ar' => 'آلاندي'],
            ['code' => 'DZ','name_en' => 'Algeria','name_ar' => 'الجزائر','national_en' => 'Algerian','national_ar' => 'جزائري'],
            ['code' => 'AS','name_en' => 'American Samoa','name_ar' => 'ساموا-الأمريكي','national_en' => 'American Samoan','national_ar' => 'أمريكي سامواني'],
            ['code' => 'AD','name_en' => 'Andorra','name_ar' => 'أندورا','national_en' => 'Andorran','national_ar' => 'أندوري'],
            ['code' => 'AO','name_en' => 'Angola','name_ar' => 'أنغولا','national_en' => 'Angolan','national_ar' => 'أنقولي'],
            ['code' => 'AI','name_en' => 'Anguilla','name_ar' => 'أنغويلا','national_en' => 'Anguillan','national_ar' => 'أنغويلي'],
            ['code' => 'AQ','name_en' => 'Antarctica','name_ar' => 'أنتاركتيكا','national_en' => 'Antarctican','national_ar' => 'أنتاركتيكي'],
            ['code' => 'AG','name_en' => 'Antigua and Barbuda','name_ar' => 'أنتيغوا وبربودا','national_en' => 'Antiguan','national_ar' => 'بربودي'],
            ['code' => 'AR','name_en' => 'Argentina','name_ar' => 'الأرجنتين','national_en' => 'Argentinian','national_ar' => 'أرجنتيني'],
            ['code' => 'AM','name_en' => 'Armenia','name_ar' => 'أرمينيا','national_en' => 'Armenian','national_ar' => 'أرميني'],
            ['code' => 'AW','name_en' => 'Aruba','name_ar' => 'أروبه','national_en' => 'Aruban','national_ar' => 'أوروبهيني'],
            ['code' => 'AU','name_en' => 'Australia','name_ar' => 'أستراليا','national_en' => 'Australian','national_ar' => 'أسترالي'],
            ['code' => 'AT','name_en' => 'Austria','name_ar' => 'النمسا','national_en' => 'Austrian','national_ar' => 'نمساوي'],
            ['code' => 'AZ','name_en' => 'Azerbaijan','name_ar' => 'أذربيجان','national_en' => 'Azerbaijani','national_ar' => 'أذربيجاني'],
            ['code' => 'BS','name_en' => 'Bahamas','name_ar' => 'الباهاماس','national_en' => 'Bahamian','national_ar' => 'باهاميسي'],
            ['code' => 'BH','name_en' => 'Bahrain','name_ar' => 'البحرين','national_en' => 'Bahraini','national_ar' => 'بحريني'],
            ['code' => 'BD','name_en' => 'Bangladesh','name_ar' => 'بنغلاديش','national_en' => 'Bangladeshi','national_ar' => 'بنغلاديشي'],
            ['code' => 'BB','name_en' => 'Barbados','name_ar' => 'بربادوس','national_en' => 'Barbadian','national_ar' => 'بربادوسي'],
            ['code' => 'BY','name_en' => 'Belarus','name_ar' => 'روسيا البيضاء','national_en' => 'Belarusian','national_ar' => 'روسي'],
            ['code' => 'BE','name_en' => 'Belgium','name_ar' => 'بلجيكا','national_en' => 'Belgian','national_ar' => 'بلجيكي'],
            ['code' => 'BZ','name_en' => 'Belize','name_ar' => 'بيليز','national_en' => 'Belizean','national_ar' => 'بيليزي'],
            ['code' => 'BJ','name_en' => 'Benin','name_ar' => 'بنين','national_en' => 'Beninese','national_ar' => 'بنيني'],
            ['code' => 'BL','name_en' => 'Saint Barthelemy','name_ar' => 'سان بارتيلمي','national_en' => 'Saint Barthelmian','national_ar' => 'سان بارتيلمي'],
            ['code' => 'BM','name_en' => 'Bermuda','name_ar' => 'جزر برمودا','national_en' => 'Bermudan','national_ar' => 'برمودي'],
            ['code' => 'BT','name_en' => 'Bhutan','name_ar' => 'بوتان','national_en' => 'Bhutanese','national_ar' => 'بوتاني'],
            ['code' => 'BO','name_en' => 'Bolivia','name_ar' => 'بوليفيا','national_en' => 'Bolivian','national_ar' => 'بوليفي'],
            ['code' => 'BA','name_en' => 'Bosnia and Herzegovina','name_ar' => 'البوسنة و الهرسك','national_en' => 'Bosnian / Herzegovinian','national_ar' => 'بوسني/هرسكي'],
            ['code' => 'BW','name_en' => 'Botswana','name_ar' => 'بوتسوانا','national_en' => 'Botswanan','national_ar' => 'بوتسواني'],
            ['code' => 'BV','name_en' => 'Bouvet Island','name_ar' => 'جزيرة بوفيه','national_en' => 'Bouvetian','national_ar' => 'بوفيهي'],
            ['code' => 'BR','name_en' => 'Brazil','name_ar' => 'البرازيل','national_en' => 'Brazilian','national_ar' => 'برازيلي'],
            ['code' => 'IO','name_en' => 'British Indian Ocean Territory','name_ar' => 'إقليم المحيط الهندي البريطاني','national_en' => 'British Indian Ocean Territory','national_ar' => 'إقليم المحيط الهندي البريطاني'],
            ['code' => 'BN','name_en' => 'Brunei Darussalam','name_ar' => 'بروني','national_en' => 'Bruneian','national_ar' => 'بروني'],
            ['code' => 'BG','name_en' => 'Bulgaria','name_ar' => 'بلغاريا','national_en' => 'Bulgarian','national_ar' => 'بلغاري'],
            ['code' => 'BF','name_en' => 'Burkina Faso','name_ar' => 'بوركينا فاسو','national_en' => 'Burkinabe','national_ar' => 'بوركيني'],
            ['code' => 'BI','name_en' => 'Burundi','name_ar' => 'بوروندي','national_en' => 'Burundian','national_ar' => 'بورونيدي'],
            ['code' => 'KH','name_en' => 'Cambodia','name_ar' => 'كمبوديا','national_en' => 'Cambodian','national_ar' => 'كمبودي'],
            ['code' => 'CM','name_en' => 'Cameroon','name_ar' => 'كاميرون','national_en' => 'Cameroonian','national_ar' => 'كاميروني'],
            ['code' => 'CA','name_en' => 'Canada','name_ar' => 'كندا','national_en' => 'Canadian','national_ar' => 'كندي'],
            ['code' => 'CV','name_en' => 'Cape Verde','name_ar' => 'الرأس الأخضر','national_en' => 'Cape Verdean','national_ar' => 'الرأس الأخضر'],
            ['code' => 'KY','name_en' => 'Cayman Islands','name_ar' => 'جزر كايمان','national_en' => 'Caymanian','national_ar' => 'كايماني'],
            ['code' => 'CF','name_en' => 'Central African Republic','name_ar' => 'جمهورية أفريقيا الوسطى','national_en' => 'Central African','national_ar' => 'أفريقي'],
            ['code' => 'TD','name_en' => 'Chad','name_ar' => 'تشاد','national_en' => 'Chadian','national_ar' => 'تشادي'],
            ['code' => 'CL','name_en' => 'Chile','name_ar' => 'شيلي','national_en' => 'Chilean','national_ar' => 'شيلي'],
            ['code' => 'CN','name_en' => 'China','name_ar' => 'الصين','national_en' => 'Chinese','national_ar' => 'صيني'],
            ['code' => 'CX','name_en' => 'Christmas Island','name_ar' => 'جزيرة عيد الميلاد','national_en' => 'Christmas Islander','national_ar' => 'جزيرة عيد الميلاد'],
            ['code' => 'CC','name_en' => 'Cocos (Keeling) Islands','name_ar' => 'جزر كوكوس','national_en' => 'Cocos Islander','national_ar' => 'جزر كوكوس'],
            ['code' => 'CO','name_en' => 'Colombia','name_ar' => 'كولومبيا','national_en' => 'Colombian','national_ar' => 'كولومبي'],
            ['code' => 'KM','name_en' => 'Comoros','name_ar' => 'جزر القمر','national_en' => 'Comorian','national_ar' => 'جزر القمر'],
            ['code' => 'CG','name_en' => 'Congo','name_ar' => 'الكونغو','national_en' => 'Congolese','national_ar' => 'كونغي'],
            ['code' => 'CK','name_en' => 'Cook Islands','name_ar' => 'جزر كوك','national_en' => 'Cook Islander','national_ar' => 'جزر كوك'],
            ['code' => 'CR','name_en' => 'Costa Rica','name_ar' => 'كوستاريكا','national_en' => 'Costa Rican','national_ar' => 'كوستاريكي'],
            ['code' => 'HR','name_en' => 'Croatia','name_ar' => 'كرواتيا','national_en' => 'Croatian','national_ar' => 'كوراتي'],
            ['code' => 'CU','name_en' => 'Cuba','name_ar' => 'كوبا','national_en' => 'Cuban','national_ar' => 'كوبي'],
            ['code' => 'CY','name_en' => 'Cyprus','name_ar' => 'قبرص','national_en' => 'Cypriot','national_ar' => 'قبرصي'],
            ['code' => 'CW','name_en' => 'Curaçao','name_ar' => 'كوراساو','national_en' => 'Curacian','national_ar' => 'كوراساوي'],
            ['code' => 'CZ','name_en' => 'Czech Republic','name_ar' => 'الجمهورية التشيكية','national_en' => 'Czech','national_ar' => 'تشيكي'],
            ['code' => 'DK','name_en' => 'Denmark','name_ar' => 'الدانمارك','national_en' => 'Danish','national_ar' => 'دنماركي'],
            ['code' => 'DJ','name_en' => 'Djibouti','name_ar' => 'جيبوتي','national_en' => 'Djiboutian','national_ar' => 'جيبوتي'],
            ['code' => 'DM','name_en' => 'Dominica','name_ar' => 'دومينيكا','national_en' => 'Dominican','national_ar' => 'دومينيكي'],
            ['code' => 'DO','name_en' => 'Dominican Republic','name_ar' => 'الجمهورية الدومينيكية','national_en' => 'Dominican','national_ar' => 'دومينيكي'],
            ['code' => 'EC','name_en' => 'Ecuador','name_ar' => 'إكوادور','national_en' => 'Ecuadorian','national_ar' => 'إكوادوري'],
            ['code' => 'EG','name_en' => 'Egypt','name_ar' => 'مصر','national_en' => 'Egyptian','national_ar' => 'مصري'],
            ['code' => 'SV','name_en' => 'El Salvador','name_ar' => 'إلسلفادور','national_en' => 'Salvadoran','national_ar' => 'سلفادوري'],
            ['code' => 'GQ','name_en' => 'Equatorial Guinea','name_ar' => 'غينيا الاستوائي','national_en' => 'Equatorial Guinean','national_ar' => 'غيني'],
            ['code' => 'ER','name_en' => 'Eritrea','name_ar' => 'إريتريا','national_en' => 'Eritrean','national_ar' => 'إريتيري'],
            ['code' => 'EE','name_en' => 'Estonia','name_ar' => 'استونيا','national_en' => 'Estonian','national_ar' => 'استوني'],
            ['code' => 'ET','name_en' => 'Ethiopia','name_ar' => 'أثيوبيا','national_en' => 'Ethiopian','national_ar' => 'أثيوبي'],
            ['code' => 'FK','name_en' => 'Falkland Islands (Malvinas)','name_ar' => 'جزر فوكلاند','national_en' => 'Falkland Islander','national_ar' => 'فوكلاندي'],
            ['code' => 'FO','name_en' => 'Faroe Islands','name_ar' => 'جزر فارو','national_en' => 'Faroese','national_ar' => 'جزر فارو'],
            ['code' => 'FJ','name_en' => 'Fiji','name_ar' => 'فيجي','national_en' => 'Fijian','national_ar' => 'فيجي'],
            ['code' => 'FI','name_en' => 'Finland','name_ar' => 'فنلندا','national_en' => 'Finnish','national_ar' => 'فنلندي'],
            ['code' => 'FR','name_en' => 'France','name_ar' => 'فرنسا','national_en' => 'French','national_ar' => 'فرنسي'],
            ['code' => 'GF','name_en' => 'French Guiana','name_ar' => 'غويانا الفرنسية','national_en' => 'French Guianese','national_ar' => 'غويانا الفرنسية'],
            ['code' => 'PF','name_en' => 'French Polynesia','name_ar' => 'بولينيزيا الفرنسية','national_en' => 'French Polynesian','national_ar' => 'بولينيزيي'],
            ['code' => 'TF','name_en' => 'French Southern and Antarctic Lands','name_ar' => 'أراض فرنسية جنوبية وأنتارتيكية','national_en' => 'French','national_ar' => 'أراض فرنسية جنوبية وأنتارتيكية'],
            ['code' => 'GA','name_en' => 'Gabon','name_ar' => 'الغابون','national_en' => 'Gabonese','national_ar' => 'غابوني'],
            ['code' => 'GM','name_en' => 'Gambia','name_ar' => 'غامبيا','national_en' => 'Gambian','national_ar' => 'غامبي'],
            ['code' => 'GE','name_en' => 'Georgia','name_ar' => 'جيورجيا','national_en' => 'Georgian','national_ar' => 'جيورجي'],
            ['code' => 'DE','name_en' => 'Germany','name_ar' => 'ألمانيا','national_en' => 'German','national_ar' => 'ألماني'],
            ['code' => 'GH','name_en' => 'Ghana','name_ar' => 'غانا','national_en' => 'Ghanaian','national_ar' => 'غاني'],
            ['code' => 'GI','name_en' => 'Gibraltar','name_ar' => 'جبل طارق','national_en' => 'Gibraltar','national_ar' => 'جبل طارق'],
            ['code' => 'GG','name_en' => 'Guernsey','name_ar' => 'غيرنزي','national_en' => 'Guernsian','national_ar' => 'غيرنزي'],
            ['code' => 'GR','name_en' => 'Greece','name_ar' => 'اليونان','national_en' => 'Greek','national_ar' => 'يوناني'],
            ['code' => 'GL','name_en' => 'Greenland','name_ar' => 'جرينلاند','national_en' => 'Greenlandic','national_ar' => 'جرينلاندي'],
            ['code' => 'GD','name_en' => 'Grenada','name_ar' => 'غرينادا','national_en' => 'Grenadian','national_ar' => 'غرينادي'],
            ['code' => 'GP','name_en' => 'Guadeloupe','name_ar' => 'جزر جوادلوب','national_en' => 'Guadeloupe','national_ar' => 'جزر جوادلوب'],
            ['code' => 'GU','name_en' => 'Guam','name_ar' => 'جوام','national_en' => 'Guamanian','national_ar' => 'جوامي'],
            ['code' => 'GT','name_en' => 'Guatemala','name_ar' => 'غواتيمال','national_en' => 'Guatemalan','national_ar' => 'غواتيمالي'],
            ['code' => 'GN','name_en' => 'Guinea','name_ar' => 'غينيا','national_en' => 'Guinean','national_ar' => 'غيني'],
            ['code' => 'GW','name_en' => 'Guinea-Bissau','name_ar' => 'غينيا-بيساو','national_en' => 'Guinea-Bissauan','national_ar' => 'غيني'],
            ['code' => 'GY','name_en' => 'Guyana','name_ar' => 'غيانا','national_en' => 'Guyanese','national_ar' => 'غياني'],
            ['code' => 'HT','name_en' => 'Haiti','name_ar' => 'هايتي','national_en' => 'Haitian','national_ar' => 'هايتي'],
            ['code' => 'HM','name_en' => 'Heard and Mc Donald Islands','name_ar' => 'جزيرة هيرد وجزر ماكدونالد','national_en' => 'Heard and Mc Donald Islanders','national_ar' => 'جزيرة هيرد وجزر ماكدونالد'],
            ['code' => 'HN','name_en' => 'Honduras','name_ar' => 'هندوراس','national_en' => 'Honduran','national_ar' => 'هندوراسي'],
            ['code' => 'HK','name_en' => 'Hong Kong','name_ar' => 'هونغ كونغ','national_en' => 'Hongkongese','national_ar' => 'هونغ كونغي'],
            ['code' => 'HU','name_en' => 'Hungary','name_ar' => 'المجر','national_en' => 'Hungarian','national_ar' => 'مجري'],
            ['code' => 'IS','name_en' => 'Iceland','name_ar' => 'آيسلندا','national_en' => 'Icelandic','national_ar' => 'آيسلندي'],
            ['code' => 'IN','name_en' => 'India','name_ar' => 'الهند','national_en' => 'Indian','national_ar' => 'هندي'],
            ['code' => 'IM','name_en' => 'Isle of Man','name_ar' => 'جزيرة مان','national_en' => 'Manx','national_ar' => 'ماني'],
            ['code' => 'ID','name_en' => 'Indonesia','name_ar' => 'أندونيسيا','national_en' => 'Indonesian','national_ar' => 'أندونيسيي'],
            ['code' => 'IR','name_en' => 'Iran','name_ar' => 'إيران','national_en' => 'Iranian','national_ar' => 'إيراني'],
            ['code' => 'IQ','name_en' => 'Iraq','name_ar' => 'العراق','national_en' => 'Iraqi','national_ar' => 'عراقي'],
            ['code' => 'IE','name_en' => 'Ireland','name_ar' => 'إيرلندا','national_en' => 'Irish','national_ar' => 'إيرلندي'],
            ['code' => 'IL','name_en' => 'Israel','name_ar' => 'إسرائيل','national_en' => 'Israeli','national_ar' => 'إسرائيلي'],
            ['code' => 'IT','name_en' => 'Italy','name_ar' => 'إيطاليا','national_en' => 'Italian','national_ar' => 'إيطالي'],
            ['code' => 'CI','name_en' => 'Ivory Coast','name_ar' => 'ساحل العاج','national_en' => 'Ivory Coastian','national_ar' => 'ساحل العاج'],
            ['code' => 'JE','name_en' => 'Jersey','name_ar' => 'جيرزي','national_en' => 'Jersian','national_ar' => 'جيرزي'],
            ['code' => 'JM','name_en' => 'Jamaica','name_ar' => 'جمايكا','national_en' => 'Jamaican','national_ar' => 'جمايكي'],
            ['code' => 'JP','name_en' => 'Japan','name_ar' => 'اليابان','national_en' => 'Japanese','national_ar' => 'ياباني'],
            ['code' => 'JO','name_en' => 'Jordan','name_ar' => 'الأردن','national_en' => 'Jordanian','national_ar' => 'أردني'],
            ['code' => 'KZ','name_en' => 'Kazakhstan','name_ar' => 'كازاخستان','national_en' => 'Kazakh','national_ar' => 'كازاخستاني'],
            ['code' => 'KE','name_en' => 'Kenya','name_ar' => 'كينيا','national_en' => 'Kenyan','national_ar' => 'كيني'],
            ['code' => 'KI','name_en' => 'Kiribati','name_ar' => 'كيريباتي','national_en' => 'I-Kiribati','national_ar' => 'كيريباتي'],
            ['code' => 'KP','name_en' => 'Korea(North Korea)','name_ar' => 'كوريا الشمالية','national_en' => 'North Korean','national_ar' => 'كوري'],
            ['code' => 'KR','name_en' => 'Korea(South Korea)','name_ar' => 'كوريا الجنوبية','national_en' => 'South Korean','national_ar' => 'كوري'],
            ['code' => 'XK','name_en' => 'Kosovo','name_ar' => 'كوسوفو','national_en' => 'Kosovar','national_ar' => 'كوسيفي'],
            ['code' => 'KW','name_en' => 'Kuwait','name_ar' => 'الكويت','national_en' => 'Kuwaiti','national_ar' => 'كويتي'],
            ['code' => 'KG','name_en' => 'Kyrgyzstan','name_ar' => 'قيرغيزستان','national_en' => 'Kyrgyzstani','national_ar' => 'قيرغيزستاني'],
            ['code' => 'LA','name_en' => 'Lao PDR','name_ar' => 'لاوس','national_en' => 'Laotian','national_ar' => 'لاوسي'],
            ['code' => 'LV','name_en' => 'Latvia','name_ar' => 'لاتفيا','national_en' => 'Latvian','national_ar' => 'لاتيفي'],
            ['code' => 'LB','name_en' => 'Lebanon','name_ar' => 'لبنان','national_en' => 'Lebanese','national_ar' => 'لبناني'],
            ['code' => 'LS','name_en' => 'Lesotho','name_ar' => 'ليسوتو','national_en' => 'Basotho','national_ar' => 'ليوسيتي'],
            ['code' => 'LR','name_en' => 'Liberia','name_ar' => 'ليبيريا','national_en' => 'Liberian','national_ar' => 'ليبيري'],
            ['code' => 'LY','name_en' => 'Libya','name_ar' => 'ليبيا','national_en' => 'Libyan','national_ar' => 'ليبي'],
            ['code' => 'LI','name_en' => 'Liechtenstein','name_ar' => 'ليختنشتين','national_en' => 'Liechtenstein','national_ar' => 'ليختنشتيني'],
            ['code' => 'LT','name_en' => 'Lithuania','name_ar' => 'لتوانيا','national_en' => 'Lithuanian','national_ar' => 'لتوانيي'],
            ['code' => 'LU','name_en' => 'Luxembourg','name_ar' => 'لوكسمبورغ','national_en' => 'Luxembourger','national_ar' => 'لوكسمبورغي'],
            ['code' => 'LK','name_en' => 'Sri Lanka','name_ar' => 'سريلانكا','national_en' => 'Sri Lankian','national_ar' => 'سريلانكي'],
            ['code' => 'MO','name_en' => 'Macau','name_ar' => 'ماكاو','national_en' => 'Macanese','national_ar' => 'ماكاوي'],
            ['code' => 'MK','name_en' => 'Macedonia','name_ar' => 'مقدونيا','national_en' => 'Macedonian','national_ar' => 'مقدوني'],
            ['code' => 'MG','name_en' => 'Madagascar','name_ar' => 'مدغشقر','national_en' => 'Malagasy','national_ar' => 'مدغشقري'],
            ['code' => 'MW','name_en' => 'Malawi','name_ar' => 'مالاوي','national_en' => 'Malawian','national_ar' => 'مالاوي'],
            ['code' => 'MY','name_en' => 'Malaysia','name_ar' => 'ماليزيا','national_en' => 'Malaysian','national_ar' => 'ماليزي'],
            ['code' => 'MV','name_en' => 'Maldives','name_ar' => 'المالديف','national_en' => 'Maldivian','national_ar' => 'مالديفي'],
            ['code' => 'ML','name_en' => 'Mali','name_ar' => 'مالي','national_en' => 'Malian','national_ar' => 'مالي'],
            ['code' => 'MT','name_en' => 'Malta','name_ar' => 'مالطا','national_en' => 'Maltese','national_ar' => 'مالطي'],
            ['code' => 'MH','name_en' => 'Marshall Islands','name_ar' => 'جزر مارشال','national_en' => 'Marshallese','national_ar' => 'مارشالي'],
            ['code' => 'MQ','name_en' => 'Martinique','name_ar' => 'مارتينيك','national_en' => 'Martiniquais','national_ar' => 'مارتينيكي'],
            ['code' => 'MR','name_en' => 'Mauritania','name_ar' => 'موريتانيا','national_en' => 'Mauritanian','national_ar' => 'موريتانيي'],
            ['code' => 'MU','name_en' => 'Mauritius','name_ar' => 'موريشيوس','national_en' => 'Mauritian','national_ar' => 'موريشيوسي'],
            ['code' => 'YT','name_en' => 'Mayotte','name_ar' => 'مايوت','national_en' => 'Mahoran','national_ar' => 'مايوتي'],
            ['code' => 'MX','name_en' => 'Mexico','name_ar' => 'المكسيك','national_en' => 'Mexican','national_ar' => 'مكسيكي'],
            ['code' => 'FM','name_en' => 'Micronesia','name_ar' => 'مايكرونيزيا','national_en' => 'Micronesian','national_ar' => 'مايكرونيزيي'],
            ['code' => 'MD','name_en' => 'Moldova','name_ar' => 'مولدافيا','national_en' => 'Moldovan','national_ar' => 'مولديفي'],
            ['code' => 'MC','name_en' => 'Monaco','name_ar' => 'موناكو','national_en' => 'Monacan','national_ar' => 'مونيكي'],
            ['code' => 'MN','name_en' => 'Mongolia','name_ar' => 'منغوليا','national_en' => 'Mongolian','national_ar' => 'منغولي'],
            ['code' => 'ME','name_en' => 'Montenegro','name_ar' => 'الجبل الأسود','national_en' => 'Montenegrin','national_ar' => 'الجبل الأسود'],
            ['code' => 'MS','name_en' => 'Montserrat','name_ar' => 'مونتسيرات','national_en' => 'Montserratian','national_ar' => 'مونتسيراتي'],
            ['code' => 'MA','name_en' => 'Morocco','name_ar' => 'المغرب','national_en' => 'Moroccan','national_ar' => 'مغربي'],
            ['code' => 'MZ','name_en' => 'Mozambique','name_ar' => 'موزمبيق','national_en' => 'Mozambican','national_ar' => 'موزمبيقي'],
            ['code' => 'MM','name_en' => 'Myanmar','name_ar' => 'ميانمار','national_en' => 'Myanmarian','national_ar' => 'ميانماري'],
            ['code' => 'NA','name_en' => 'Namibia','name_ar' => 'ناميبيا','national_en' => 'Namibian','national_ar' => 'ناميبي'],
            ['code' => 'NR','name_en' => 'Nauru','name_ar' => 'نورو','national_en' => 'Nauruan','national_ar' => 'نوري'],
            ['code' => 'NP','name_en' => 'Nepal','name_ar' => 'نيبال','national_en' => 'Nepalese','national_ar' => 'نيبالي'],
            ['code' => 'NL','name_en' => 'Netherlands','name_ar' => 'هولندا','national_en' => 'Dutch','national_ar' => 'هولندي'],
            ['code' => 'AN','name_en' => 'Netherlands Antilles','name_ar' => 'جزر الأنتيل الهولندي','national_en' => 'Dutch Antilier','national_ar' => 'هولندي'],
            ['code' => 'NC','name_en' => 'New Caledonia','name_ar' => 'كاليدونيا الجديدة','national_en' => 'New Caledonian','national_ar' => 'كاليدوني'],
            ['code' => 'NZ','name_en' => 'New Zealand','name_ar' => 'نيوزيلندا','national_en' => 'New Zealander','national_ar' => 'نيوزيلندي'],
            ['code' => 'NI','name_en' => 'Nicaragua','name_ar' => 'نيكاراجوا','national_en' => 'Nicaraguan','national_ar' => 'نيكاراجوي'],
            ['code' => 'NE','name_en' => 'Niger','name_ar' => 'النيجر','national_en' => 'Nigerien','national_ar' => 'نيجيري'],
            ['code' => 'NG','name_en' => 'Nigeria','name_ar' => 'نيجيريا','national_en' => 'Nigerian','national_ar' => 'نيجيري'],
            ['code' => 'NU','name_en' => 'Niue','name_ar' => 'ني','national_en' => 'Niuean','national_ar' => 'ني'],
            ['code' => 'NF','name_en' => 'Norfolk Island','name_ar' => 'جزيرة نورفولك','national_en' => 'Norfolk Islander','national_ar' => 'نورفوليكي'],
            ['code' => 'MP','name_en' => 'Northern Mariana Islands','name_ar' => 'جزر ماريانا الشمالية','national_en' => 'Northern Marianan','national_ar' => 'ماريني'],
            ['code' => 'NO','name_en' => 'Norway','name_ar' => 'النرويج','national_en' => 'Norwegian','national_ar' => 'نرويجي'],
            ['code' => 'OM','name_en' => 'Oman','name_ar' => 'عمان','national_en' => 'Omani','national_ar' => 'عماني'],
            ['code' => 'PK','name_en' => 'Pakistan','name_ar' => 'باكستان','national_en' => 'Pakistani','national_ar' => 'باكستاني'],
            ['code' => 'PW','name_en' => 'Palau','name_ar' => 'بالاو','national_en' => 'Palauan','national_ar' => 'بالاوي'],
            ['code' => 'PS','name_en' => 'Palestine','name_ar' => 'فلسطين','national_en' => 'Palestinian','national_ar' => 'فلسطيني'],
            ['code' => 'PA','name_en' => 'Panama','name_ar' => 'بنما','national_en' => 'Panamanian','national_ar' => 'بنمي'],
            ['code' => 'PG','name_en' => 'Papua New Guinea','name_ar' => 'بابوا غينيا الجديدة','national_en' => 'Papua New Guinean','national_ar' => 'بابوي'],
            ['code' => 'PY','name_en' => 'Paraguay','name_ar' => 'باراغواي','national_en' => 'Paraguayan','national_ar' => 'بارغاوي'],
            ['code' => 'PE','name_en' => 'Peru','name_ar' => 'بيرو','national_en' => 'Peruvian','national_ar' => 'بيري'],
            ['code' => 'PH','name_en' => 'Philippines','name_ar' => 'الفليبين','national_en' => 'Filipino','national_ar' => 'فلبيني'],
            ['code' => 'PN','name_en' => 'Pitcairn','name_ar' => 'بيتكيرن','national_en' => 'Pitcairn Islander','national_ar' => 'بيتكيرني'],
            ['code' => 'PL','name_en' => 'Poland','name_ar' => 'بولندا','national_en' => 'Polish','national_ar' => 'بولندي'],
            ['code' => 'PT','name_en' => 'Portugal','name_ar' => 'البرتغال','national_en' => 'Portuguese','national_ar' => 'برتغالي'],
            ['code' => 'PR','name_en' => 'Puerto Rico','name_ar' => 'بورتو ريكو','national_en' => 'Puerto Rican','national_ar' => 'بورتي'],
            ['code' => 'QA','name_en' => 'Qatar','name_ar' => 'قطر','national_en' => 'Qatari','national_ar' => 'قطري'],
            ['code' => 'RE','name_en' => 'Reunion Island','name_ar' => 'ريونيون','national_en' => 'Reunionese','national_ar' => 'ريونيوني'],
            ['code' => 'RO','name_en' => 'Romania','name_ar' => 'رومانيا','national_en' => 'Romanian','national_ar' => 'روماني'],
            ['code' => 'RU','name_en' => 'Russian','name_ar' => 'روسيا','national_en' => 'Russian','national_ar' => 'روسي'],
            ['code' => 'RW','name_en' => 'Rwanda','name_ar' => 'رواندا','national_en' => 'Rwandan','national_ar' => 'رواندا'],
            ['code' => 'KN','name_en' => 'Saint Kitts and Nevis','name_ar' => 'سانت كيتس ونيفس,','national_en' => 'Kittitian/Nevisian','national_ar' => 'سانت كيتس ونيفس'],
            ['code' => 'MF','name_en' => 'Saint Martin (French part)','name_ar' => 'ساينت مارتن فرنسي','national_en' => 'St. Martian(French)','national_ar' => 'ساينت مارتني فرنسي'],
            ['code' => 'SX','name_en' => 'Sint Maarten (Dutch part)','name_ar' => 'ساينت مارتن هولندي','national_en' => 'St. Martian(Dutch)','national_ar' => 'ساينت مارتني هولندي'],
            ['code' => 'LC','name_en' => 'Saint Pierre and Miquelon','name_ar' => 'سان بيير وميكلون','national_en' => 'St. Pierre and Miquelon','national_ar' => 'سان بيير وميكلوني'],
            ['code' => 'VC','name_en' => 'Saint Vincent and the Grenadines','name_ar' => 'سانت فنسنت وجزر غرينادين','national_en' => 'Saint Vincent and the Grenadines','national_ar' => 'سانت فنسنت وجزر غرينادين'],
            ['code' => 'WS','name_en' => 'Samoa','name_ar' => 'ساموا','national_en' => 'Samoan','national_ar' => 'ساموي'],
            ['code' => 'SM','name_en' => 'San Marino','name_ar' => 'سان مارينو','national_en' => 'Sammarinese','national_ar' => 'ماريني'],
            ['code' => 'ST','name_en' => 'Sao Tome and Principe','name_ar' => 'ساو تومي وبرينسيبي','national_en' => 'Sao Tomean','national_ar' => 'ساو تومي وبرينسيبي'],
            ['code' => 'SA','name_en' => 'Saudi Arabia','name_ar' => 'المملكة العربية السعودية','national_en' => 'Saudi Arabian','national_ar' => 'سعودي'],
            ['code' => 'SN','name_en' => 'Senegal','name_ar' => 'السنغال','national_en' => 'Senegalese','national_ar' => 'سنغالي'],
            ['code' => 'RS','name_en' => 'Serbia','name_ar' => 'صربيا','national_en' => 'Serbian','national_ar' => 'صربي'],
            ['code' => 'SC','name_en' => 'Seychelles','name_ar' => 'سيشيل','national_en' => 'Seychellois','national_ar' => 'سيشيلي'],
            ['code' => 'SL','name_en' => 'Sierra Leone','name_ar' => 'سيراليون','national_en' => 'Sierra Leonean','national_ar' => 'سيراليوني'],
            ['code' => 'SG','name_en' => 'Singapore','name_ar' => 'سنغافورة','national_en' => 'Singaporean','national_ar' => 'سنغافوري'],
            ['code' => 'SK','name_en' => 'Slovakia','name_ar' => 'سلوفاكيا','national_en' => 'Slovak','national_ar' => 'سولفاكي'],
            ['code' => 'SI','name_en' => 'Slovenia','name_ar' => 'سلوفينيا','national_en' => 'Slovenian','national_ar' => 'سولفيني'],
            ['code' => 'SB','name_en' => 'Solomon Islands','name_ar' => 'جزر سليمان','national_en' => 'Solomon Island','national_ar' => 'جزر سليمان'],
            ['code' => 'SO','name_en' => 'Somalia','name_ar' => 'الصومال','national_en' => 'Somali','national_ar' => 'صومالي'],
            ['code' => 'ZA','name_en' => 'South Africa','name_ar' => 'جنوب أفريقيا','national_en' => 'South African','national_ar' => 'أفريقي'],
            ['code' => 'GS','name_en' => 'South Georgia and the South Sandwich','name_ar' => 'المنطقة القطبية الجنوبية','national_en' => 'South Georgia and the South Sandwich','national_ar' => 'لمنطقة القطبية الجنوبية'],
            ['code' => 'SS','name_en' => 'South Sudan','name_ar' => 'السودان الجنوبي','national_en' => 'South Sudanese','national_ar' => 'سوادني جنوبي'],
            ['code' => 'ES','name_en' => 'Spain','name_ar' => 'إسبانيا','national_en' => 'Spanish','national_ar' => 'إسباني'],
            ['code' => 'SH','name_en' => 'Saint Helena','name_ar' => 'سانت هيلانة','national_en' => 'St. Helenian','national_ar' => 'هيلاني'],
            ['code' => 'SD','name_en' => 'Sudan','name_ar' => 'السودان','national_en' => 'Sudanese','national_ar' => 'سوداني'],
            ['code' => 'SR','name_en' => 'Suriname','name_ar' => 'سورينام','national_en' => 'Surinamese','national_ar' => 'سورينامي'],
            ['code' => 'SJ','name_en' => 'Svalbard and Jan Mayen','name_ar' => 'سفالبارد ويان ماين','national_en' => 'Svalbardian/Jan Mayenian','national_ar' => 'سفالبارد ويان ماين'],
            ['code' => 'SZ','name_en' => 'Swaziland','name_ar' => 'سوازيلند','national_en' => 'Swazi','national_ar' => 'سوازيلندي'],
            ['code' => 'SE','name_en' => 'Sweden','name_ar' => 'السويد','national_en' => 'Swedish','national_ar' => 'سويدي'],
            ['code' => 'CH','name_en' => 'Switzerland','name_ar' => 'سويسرا','national_en' => 'Swiss','national_ar' => 'سويسري'],
            ['code' => 'SY','name_en' => 'Syria','name_ar' => 'سوريا','national_en' => 'Syrian','national_ar' => 'سوري'],
            ['code' => 'TW','name_en' => 'Taiwan','name_ar' => 'تايوان','national_en' => 'Taiwanese','national_ar' => 'تايواني'],
            ['code' => 'TJ','name_en' => 'Tajikistan','name_ar' => 'طاجيكستان','national_en' => 'Tajikistani','national_ar' => 'طاجيكستاني'],
            ['code' => 'TZ','name_en' => 'Tanzania','name_ar' => 'تنزانيا','national_en' => 'Tanzanian','national_ar' => 'تنزانيي'],
            ['code' => 'TH','name_en' => 'Thailand','name_ar' => 'تايلندا','national_en' => 'Thai','national_ar' => 'تايلندي'],
            ['code' => 'TL','name_en' => 'Timor-Leste','name_ar' => 'تيمور الشرقية','national_en' => 'Timor-Lestian','national_ar' => 'تيموري'],
            ['code' => 'TG','name_en' => 'Togo','name_ar' => 'توغو','national_en' => 'Togolese','national_ar' => 'توغي'],
            ['code' => 'TK','name_en' => 'Tokelau','name_ar' => 'توكيلاو','national_en' => 'Tokelaian','national_ar' => 'توكيلاوي'],
            ['code' => 'TO','name_en' => 'Tonga','name_ar' => 'تونغا','national_en' => 'Tongan','national_ar' => 'تونغي'],
            ['code' => 'TT','name_en' => 'Trinidad and Tobago','name_ar' => 'ترينيداد وتوباغو','national_en' => 'Trinidadian/Tobagonian','national_ar' => 'ترينيداد وتوباغو'],
            ['code' => 'TN','name_en' => 'Tunisia','name_ar' => 'تونس','national_en' => 'Tunisian','national_ar' => 'تونسي'],
            ['code' => 'TR','name_en' => 'Turkey','name_ar' => 'تركيا','national_en' => 'Turkish','national_ar' => 'تركي'],
            ['code' => 'TM','name_en' => 'Turkmenistan','name_ar' => 'تركمانستان','national_en' => 'Turkmen','national_ar' => 'تركمانستاني'],
            ['code' => 'TC','name_en' => 'Turks and Caicos Islands','name_ar' => 'جزر توركس وكايكوس','national_en' => 'Turks and Caicos Islands','national_ar' => 'جزر توركس وكايكوس'],
            ['code' => 'TV','name_en' => 'Tuvalu','name_ar' => 'توفالو','national_en' => 'Tuvaluan','national_ar' => 'توفالي'],
            ['code' => 'UG','name_en' => 'Uganda','name_ar' => 'أوغندا','national_en' => 'Ugandan','national_ar' => 'أوغندي'],
            ['code' => 'UA','name_en' => 'Ukraine','name_ar' => 'أوكرانيا','national_en' => 'Ukrainian','national_ar' => 'أوكراني'],
            ['code' => 'AE','name_en' => 'United Arab Emirates','name_ar' => 'الإمارات العربية المتحدة','national_en' => 'Emirati','national_ar' => 'إماراتي'],
            ['code' => 'GB','name_en' => 'United Kingdom','name_ar' => 'المملكة المتحدة','national_en' => 'British','national_ar' => 'بريطاني'],
            ['code' => 'US','name_en' => 'United States','name_ar' => 'الولايات المتحدة','national_en' => 'American','national_ar' => 'أمريكي'],
            ['code' => 'UM','name_en' => 'US Minor Outlying Islands','name_ar' => 'قائمة الولايات والمناطق الأمريكية','national_en' => 'US Minor Outlying Islander','national_ar' => 'أمريكي'],
            ['code' => 'UY','name_en' => 'Uruguay','name_ar' => 'أورغواي','national_en' => 'Uruguayan','national_ar' => 'أورغواي'],
            ['code' => 'UZ','name_en' => 'Uzbekistan','name_ar' => 'أوزباكستان','national_en' => 'Uzbek','national_ar' => 'أوزباكستاني'],
            ['code' => 'VU','name_en' => 'Vanuatu','name_ar' => 'فانواتو','national_en' => 'Vanuatuan','national_ar' => 'فانواتي'],
            ['code' => 'VE','name_en' => 'Venezuela','name_ar' => 'فنزويلا','national_en' => 'Venezuelan','national_ar' => 'فنزويلي'],
            ['code' => 'VN','name_en' => 'Vietnam','name_ar' => 'فيتنام','national_en' => 'Vietnamese','national_ar' => 'فيتنامي'],
            ['code' => 'VI','name_en' => 'Virgin Islands (U.S.)','name_ar' => 'الجزر العذراء الأمريكي','national_en' => 'American Virgin Islander','national_ar' => 'أمريكي'],
            ['code' => 'VA','name_en' => 'Vatican City','name_ar' => 'فنزويلا','national_en' => 'Vatican','national_ar' => 'فاتيكاني'],
            ['code' => 'WF','name_en' => 'Wallis and Futuna Islands','name_ar' => 'والس وفوتونا','national_en' => 'Wallisian/Futunan','national_ar' => 'فوتوني'],
            ['code' => 'EH','name_en' => 'Western Sahara','name_ar' => 'الصحراء الغربية','national_en' => 'Sahrawian','national_ar' => 'صحراوي'],
            ['code' => 'YE','name_en' => 'Yemen','name_ar' => 'اليمن','national_en' => 'Yemeni','national_ar' => 'يمني'],
            ['code' => 'ZM','name_en' => 'Zambia','name_ar' => 'زامبيا','national_en' => 'Zambian','national_ar' => 'زامبياني'],
            ['code' => 'ZW','name_en' => 'Zimbabwe','name_ar' => 'زمبابوي','national_en' => 'Zimbabwean','national_ar' => 'زمبابوي']
        ]);
    }
}
