<?php
/**
 * libphonenumber-for-php-lite data file
 * This file has been @generated from libphonenumber data
 * Do not modify!
 * @internal
 */

return [
  'generalDesc' =>
  [
    'NationalNumberPattern' => '[1-79]\\d{8}|8\\d{4,9}',
    'PossibleLength' =>
    [
      0 => 5,
      1 => 6,
      2 => 7,
      3 => 8,
      4 => 9,
      5 => 10,
    ],
  ],
  'fixedLine' =>
  [
    'NationalNumberPattern' => '(?:2(?:0330|4302)|52087)0\\d{3}|(?:1[0-8]|2[1-378]|3[1-69]|4\\d|5[1346-8])\\d{7}',
    'ExampleNumber' => '101234567',
    'PossibleLength' =>
    [
      0 => 9,
    ],
  ],
  'mobile' =>
  [
    'NationalNumberPattern' => '(?:1(?:3492[0-25]|4495[0235]|549(?:20|5[01]))|4[34]492[01])\\d{3}|8[1-4]\\d{3,7}|(?:2[27]|47|54)4950\\d{3}|(?:1(?:049[2-4]|9[12]\\d\\d)|(?:6\\d|7[0-46-9])\\d{3}|8(?:5\\d{3}|7(?:08[67]|158|28[5-9]|310)))\\d{4}|(?:1[6-8]|28|3[2-69]|4[025689]|5[36-8])4920\\d{3}|(?:12|[2-5]1)492\\d{4}',
    'ExampleNumber' => '711234567',
    'PossibleLength' =>
    [
      0 => 5,
      1 => 6,
      2 => 7,
      3 => 8,
      4 => 9,
    ],
  ],
  'tollFree' =>
  [
    'NationalNumberPattern' => '80\\d{7}',
    'ExampleNumber' => '801234567',
    'PossibleLength' =>
    [
      0 => 9,
    ],
  ],
  'premiumRate' =>
  [
    'NationalNumberPattern' => '(?:86[2-9]|9[0-2]\\d)\\d{6}',
    'ExampleNumber' => '862345678',
    'PossibleLength' =>
    [
      0 => 9,
    ],
  ],
  'sharedCost' =>
  [
    'NationalNumberPattern' => '860\\d{6}',
    'ExampleNumber' => '860123456',
    'PossibleLength' =>
    [
      0 => 9,
    ],
  ],
  'personalNumber' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
  ],
  'voip' =>
  [
    'NationalNumberPattern' => '87(?:08[0-589]|15[0-79]|28[0-4]|31[1-9])\\d{4}|87(?:[02][0-79]|1[0-46-9]|3[02-9]|[4-9]\\d)\\d{5}',
    'ExampleNumber' => '871234567',
    'PossibleLength' =>
    [
      0 => 9,
    ],
  ],
  'pager' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
  ],
  'uan' =>
  [
    'NationalNumberPattern' => '861\\d{6,7}',
    'ExampleNumber' => '861123456',
    'PossibleLength' =>
    [
      0 => 9,
      1 => 10,
    ],
  ],
  'voicemail' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
  ],
  'noInternationalDialling' =>
  [
    'PossibleLength' =>
    [
      0 => -1,
    ],
  ],
  'id' => 'ZA',
  'countryCode' => 27,
  'internationalPrefix' => '00',
  'nationalPrefix' => '0',
  'nationalPrefixForParsing' => '0',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  [
    0 =>
    [
      'pattern' => '(\\d{2})(\\d{3,4})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' =>
      [
        0 => '8[1-4]',
      ],
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    1 =>
    [
      'pattern' => '(\\d{2})(\\d{3})(\\d{2,3})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      [
        0 => '8[1-4]',
      ],
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    2 =>
    [
      'pattern' => '(\\d{3})(\\d{3})(\\d{3})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      [
        0 => '860',
      ],
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    3 =>
    [
      'pattern' => '(\\d{2})(\\d{3})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      [
        0 => '[1-9]',
      ],
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
    4 =>
    [
      'pattern' => '(\\d{3})(\\d{3})(\\d{4})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' =>
      [
        0 => '8',
      ],
      'nationalPrefixFormattingRule' => '0$1',
      'domesticCarrierCodeFormattingRule' => '',
      'nationalPrefixOptionalWhenFormatting' => false,
    ],
  ],
  'mainCountryForCode' => false,
  'mobileNumberPortableRegion' => true,
];
